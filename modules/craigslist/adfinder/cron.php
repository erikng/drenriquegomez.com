<?php
set_time_limit(0);
include_once('functions.php');
include_once('config.php');
include_once('phpmailer/class.phpmailer.php');


mysql_connect(DB_HOST, DB_USER, DB_PASS) or die(mysql_error());
mysql_select_db(DB_NAME) or die(mysql_error());

$settings = array();
$sql = "select * from ".PREFIX."settings";
$res = mysql_query($sql);
while($row = mysql_fetch_assoc($res))
{
	$settings[$row['title']] = $row['value'];
}

$sql = "select c.*, t.code type_code, t.title category from ".PREFIX."campaigns c, ".PREFIX."types t where status = 1 and c.type_id = t.type_id";
$res = mysql_query($sql);
$rows = array();

while($row = mysql_fetch_assoc($res))
{
	$rows[] = $row;
}
$emails = array();
$rows_fixed = array();

foreach($rows as $raw)
{
	$states = unserialize($raw['states']);
	foreach($states as $state)
	{
		$sql = "select s.*, h.lastcl_id from ".PREFIX."states s left join ".PREFIX."history h on h.state_id = s.state_id and h.campaign_id = ".$raw['campaign_id']." where s.state_id = " . $state . " order by h.cdate desc limit 1";
		$res = mysql_query($sql);

		while($s = mysql_fetch_assoc($res))
		{
			$rows_fixed[] = array_merge($raw, array('state_id' => $s['state_id'], 'state_code' => $s['code'], 'location' => $s['title'], 'lastcl_id' => $s['lastcl_id']));
		}
	}
}

foreach($rows_fixed as $raw)
{
	$url = get_cl_url($raw);

	$content = grab_remote_file($url);
	
	$ads = new ads;

	if(!preg_match('/Nothing found for that search/', $content) && !preg_match('/Zero LOCAL results found/', $content))
	{
		$all = intval(getContentStartEnd($content, 'Found:', '', 'Displaying'));
		$all_pages = ceil($all/100);

		for($i = 0; $i <= ($all_pages - 1) * 100; $i += 100)
		{
			if($i == 0)
			{
				$ads->get_ads($content, $raw['start'], $raw['lastcl_id']);

			}else{
				if(!$ads->stop)
				{
					$url_here = $url . '&s=' . $i;
					$content = grab_remote_file($url_here);

					$ads->get_ads($content, $raw['start'], $raw['lastcl_id']);
				}
			}
		}

		$htmls = $ads->return_html();

		if($htmls)
		{
			$sql = "insert into ".PREFIX."history set lastcl_id = " .$ads->lastcl_id . ", campaign_id = " . $raw['campaign_id'] . ", cdate=".time().", state_id = " . $raw['state_id'];
			mysql_query($sql);
			
			$emails[] = array('ads' => $htmls, 'header' => 'Results for ' . $raw['search'] . ' in ' . $raw['location'] . ' - [' . $raw['category'] . ']');
		}
	}
}
$body = '';
//print_r($emails);
foreach ($emails as $email)
{
	$body .= '<b>' . $email['header'] . '</b><br>';
	$body .= implode('<br>', $email['ads']);
	$body .= '<br><br><br>';
}

if($body)
{
	$mail = new PHPMailer();
	$mail->From = $settings['admin_email'];
	$mail->FromName = $settings['site_name'];
	
	$mail->Subject .= $settings['site_name'] . ' Results';
	
	$mail->IsHTML(true);
	
	$mail->Body = $body;
	
	$mail->AddAddress($settings['admin_email']);
	
	$mail->Send();

	if($_GET['test'] || $output)
		echo 'Email has been sent.';
}else{
	if($_GET['test'] || $output)
	echo 'No Email has been sent.';
}
class ads
{
	public $stop = false;
	public $htmls = array();
	public $lastcl_id = 0;

	function get_ads($content, $start, $last_id)
	{
		$raw = getContentStartEnd($content, '<b>Found:', '', '<h4 style="text-align: center;"');
		$array = explode('</p>', $raw);

		foreach($array as $row)
		{
			preg_match('/>([^>]*)- <a href=/', $row, $matchs);
			$date = $matchs[1]; 

			preg_match('/\/([0-9]+)\.html/', $row, $matchs);

			$id = $matchs[1]; 

			if($last_id)
			{
				if($id <= $last_id)
				{
					$this->stop = true;
				}
			}else{
				if($start > 0 && $this->compare_date_older($start, $date))
				{
					$this->stop = true;
				}
			}

			if(!$this->stop && preg_match('/<small class="gc">/', $row))
			{
				if(!preg_match('/<p>/', $row))
					$html = getContentStartEnd($row, '</span>', '', '<small class="gc">');
				else
					$html = getContentStartEnd($row, '<p>', '', '<small class="gc">');
				
				if($html)
					$this->htmls[] = str_replace('<span class="p"> img</span>', '', $html);

				if($this->lastcl_id == 0)
				{
					$this->lastcl_id = $id;
				}
			}
		}
	}
	function compare_date_older($start, $date)
	{
		$start_tmp = strtotime('-' . $start . ' days');
		$start_stamp = mktime(0, 0, 0, date('m', $start_tmp), date('d', $start_tmp), date('Y', $start_tmp));


		$this_stamp = strtotime($date . ', ' . date('Y'));

		if($this_stamp > time())
		{
			$this_stamp = strtotime($date . ', ' . intval(date('Y') - 1));
		}

		if($this_stamp < $start_stamp)
		{
			return true;
		}else{
			return false;
		}
	}

	function return_html()
	{
		return $this->htmls;
	}
}

function grab_remote_file($site)
{
	$ch = curl_init();

	// Setup headers - I used the same headers from Firefox version 2.0.0.6
	// below was split up because php.net said the line was too long. :/
	$header[0] = "Accept: text/xml,application/xml,application/xhtml+xml,";
	$header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
	$header[] = "Cache-Control: max-age=0";
	$header[] = "Connection: keep-alive";
	$header[] = "Keep-Alive: 300";
	$header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$header[] = "Accept-Language: en-us,en;q=0.5";
	$header[] = "Pragma: "; // browsers keep this blank.

	curl_setopt($ch, CURLOPT_USERAGENT, 'Googlebot/2.1 (+http://www.google.com/bot.html)');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_REFERER, 'http://www.google.com');
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_URL, $site);

	$return = curl_exec ($ch); // execute the curl command
	curl_close ($ch);
	return $return;
}
function getContentStartEnd($content, $start, $start_then, $end)
{
	$ds = strpos($content, $start);
	if($ds !== false)
	{
		if($start_then)
		{
			$tmp = substr($content, $ds + strlen($start));
			$td_start = strpos($tmp, $start_then);
			$tmp = substr($tmp, $td_start + strlen($start_then));

			$td_end = strpos($tmp, $end);

			$description = trim(substr($tmp, 0, $td_end));
		}else{
			$tmp = substr($content, $ds + strlen($start));

			$td_start = 0;
			$td_end = strpos($tmp, $end);

			$description = trim(substr($tmp, $td_start, $td_end));
		}
		$content = substr($content,$td_end);
		return $description;
	}
}
?>