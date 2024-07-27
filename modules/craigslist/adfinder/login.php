<?php
session_start();
include('config.php');

if($_POST['submit'])
{
	mysql_connect(DB_HOST, DB_USER, DB_PASS) or die(mysql_error());
	mysql_select_db(DB_NAME) or die(mysql_error());
	$sql = "select * from ".PREFIX."admins where username = '" . mysql_real_escape_string($_POST['username']) . "'";
	$res = mysql_query($sql);
	$admin = mysql_fetch_assoc($res);

	if(md5($_POST['password']) == $admin['password'])
	{
		$_SESSION['admin'] = $admin;
		header('location:index.php');
	}else{
		$error = 'Login failed, please check your username & password';
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ad Finder Pro Login</title>
<link rel="stylesheet" href="http://www.adfinderpro.com/html/style1.css" type="text/css" media="all" /> 
<script type="text/javascript" src="http://www.adfinderpro.com/html/functions.js"></script>
</head>
<body>
<div class="wrap">
<div id="login">
<?php
if($message)
{
	echo '<div class="message">'.$message.'</div>';
}
?>
<form action="login.php" method="post" onsubmit="return check_login()">
<fieldset>
<legend>Admin Login</legend>
<?php if($error){?>
<div class="error_msg"><?php echo $error;?></div>
<?php } ?>
<label for="username">Username:</label>
<input type="text" name="username" id="username" value="<?php echo $_POST['username']?>" class="txt" />
<label for="password">Password:</label>
<input type="password" name="password" id="password" value="" class="pwd" />
<br/><br/>
<input type="submit" name="submit" value="Login" class="btn" />
</fieldset>
</form>

<center>
  <br />
  <br />
  Powered by <a href="http://www.adfinderpro.com">Ad Finder Pro</a><br />
  <br />
  <br />
</center>
</div>
<div class="footer">
</div>
</div>
</body>
</html>