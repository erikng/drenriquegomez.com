<?php
include('check_login.php');
include('config.php');
include('functions.php');

mysql_connect(DB_HOST, DB_USER, DB_PASS) or die(mysql_error());
mysql_select_db(DB_NAME) or die(mysql_error());

if($_POST['submit'])
{
	$sett_arrays = array(
		array('site_name', 'string'),
		array('admin_email', 'string'),
	);
	
	foreach ($sett_arrays as $sett)
	{
		if($sett[1] == 'int')
		{
			if($_POST[$sett[0]] < 1)
			{
				$_POST[$sett[0]] = 99999;
			}
		}
		$sql = "update ".PREFIX."settings set value = '".addslashes(get_input($_POST[$sett[0]]))."' where title='{$sett[0]}'";
		mysql_query($sql);
	}
	$msg = 'You have successfully update the general settings.';
}

$settings = array();
$sql = "select * from ".PREFIX."settings";
$res = mysql_query($sql);
while($row = mysql_fetch_assoc($res))
{
	$settings[$row['title']] = $row['value'];
}
?>

<?php include('header.php')?>

<h1>General Settings</h1>
<?php if($error){?>
<div class="error_msg"><?php echo $error;?></div>
<?php } ?>
<?php if($msg){?>
<div class="msg"><?php echo $msg;?></div>
<?php } ?>
<form action="" method="post" enctype="multipart/form-data" onsubmit="">
<input type="hidden" class="txt" name="site_name" id="site_name" value="Ad Finder Pro">
<table class="detail">
<tr>
<th width="23%"><label for="admin_email"> Email Address to send ads to:</label></th>
<td width="77%"><input type="text" class="txt" name="admin_email" id="admin_email" value="<?php echo $settings['admin_email'];?>" size="60"/></td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="Submit" class="btn" />
</td>
</tr>

</table>
</form>
<?php include('footer.php')?>