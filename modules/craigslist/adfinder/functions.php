<?php
function get_status($status)
{
	$out = $status ? '<span class="active">Active</span>' : '<span class="paused">Paused</span>';
	return $out;
}
function category_options($type_id = 0)
{
	$type_id = $type_id ? $type_id : intval($_GET['t']);
	$sql = "select * from ".PREFIX."types";
	$res_category = mysql_query($sql);
	$options = '';
	while($row = mysql_fetch_assoc($res_category))
	{
		$selected = $row['type_id'] == $type_id ? ' selected' : '';
		$options .= "<option value='".$row['type_id']."'$selected>".$row['title']."</option>";
	}
	
	return $options;
}
function location_options($states = array())
{
	$state_id = $state_id ? $state_id : intval($_GET['s']);
	$sql = "select * from ".PREFIX."states";
	$res_category = mysql_query($sql);
	$options = '';
	while($row = mysql_fetch_assoc($res_category))
	{
		$selected = is_array($states) && in_array($row['state_id'], $states) ? ' selected' : '';
		$options .= "<option value='".$row['state_id']."'$selected>".$row['title']."</option>";
	}
	
	return $options;
}
function get_input($input)
{
	if(get_magic_quotes_gpc())
	{
		return stripslashes($input);
	}else{
		return $input;
	}
}

function get_cl_url($raw)
{
	$url = sprintf('http://%s.craigslist.org/search/?query=%s&catAbb=%s', $raw['state_code'], urlencode($raw['search']), $raw['type_code']);

	return $url;
}
function gen_error_box($errors)
{
	$output = '<div class="error_msg"><b>ERRORS OCCURED</b><br/>'.implode('<br />', $errors).'</div>';
	return $output;
}
?>