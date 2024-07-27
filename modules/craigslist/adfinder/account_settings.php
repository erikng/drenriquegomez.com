<?php
include('check_login.php');
include('functions.php');
include('config.php');

$listing_id = intval($_GET['id']);
mysql_connect(DB_HOST, DB_USER, DB_PASS) or die(mysql_error());
mysql_select_db(DB_NAME) or die(mysql_error());

if($_POST['submit'])
{
	$sql = "select * from ".PREFIX."admins where admin_id = " . $_SESSION['admin']['admin_id'];
	$res = mysql_query($sql);
	$row = mysql_fetch_assoc($res);
	
	if(md5($_POST['password']) == $row['password'])
	{
		$msg = 'You have successfully updated the account settings.';
		if($_POST['new_password'])
		{
			$sql = "update ".PREFIX."admins set password= '".md5($_POST['new_password'])."'";
			$msg .= '<br/>Please logout then login again for security reasons';
		}
		mysql_query($sql);
		
	}else{
		$error = 'Please type in the correct password.';
	}
}

$sql = "select * from ".PREFIX."admins where admin_id = " . $_SESSION['admin']['admin_id'];
$res = mysql_query($sql);
$admin = mysql_fetch_assoc($res);

mysql_close();
?>

<?php include('header.php')?>

<h1>Change Your Password</h1>
<?php if($error){?>
<div class="error_msg"><?php echo $error;?></div>
<?php } ?>
<?php if($msg){?>
<div class="msg"><?php echo $msg;?></div>
<?php } ?>
<form action="" method="post" enctype="multipart/form-data" onsubmit="return check_password()">

<table class="detail">

<tr>
<th><label for="username">Username</label></th>
<td><?php echo $admin['username'];?></td>
</tr>

<tr>
<th><label for="password">Current Password</label></th>
<td><input type="password" class="pwd" name="password" id="password" value=""/></td>
</tr>

<tr>
<th><label for="new_password">New Password</label></th>
<td><input type="password" class="pwd" name="new_password" id="new_password" value=""/></td>
</tr>

<tr>
<th><label for="new_password2">Confirm New Password</label></th>
<td><input type="password" class="pwd" name="new_password2" id="new_password2" value=""/></td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="Submit" class="btn"/>
</td>
</tr>

</table>
</form>
<?php include('footer.php')?>