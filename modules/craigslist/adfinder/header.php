<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<title>Ad Finder Pro Admin</title>
<link rel="stylesheet" href="http://www.adfinderpro.com/html/style.css" type="text/css" media="all" /> 
<link rel="stylesheet" href="http://www.adfinderpro.com/html/style1.css" type="text/css" media="all" /> 
<script type="text/javascript" src="http://www.adfinderpro.com/html/functions.js"></script>
</head>
<body id="top">
<?php
if($_SESSION['admin'])
{
?>
<div id="header-wrapper">
	<div id="header-wrapper-2">
		<div class="center-wrapper">
			<div id="header">
				<div id="logo">
					<h1 id="site-title">Ad Finder Pro</h1>
					<h2 id="site-slogan">Automatic Ad Finder</h2>
			  </div>
		  <div id="help-wrapper">
					<div id="help">
					  <center>
					    <a href="http://www.adfinderpro.com/contact" target="_blank">Contact us</a> <span class="text-separator">|</span> <a href="http://www.adfinderpro.com/faqs" target="_blank">FAQ</a> <span class="text-separator">|</span><a href="http://www.adfinderpro.com/contact" target="_blank">Support</a>
				      </center>
				    </div>
			  </div>
			</div>
		</div>
	</div>
</div>
<div id="navigation-wrapper">
	<div id="navigation-wrapper-2">
		<div class="center-wrapper">
			<div id="navigation">
				<ul class="tabbed">
				<li><a href="index.php">Instructions</a></li>
				<li><a href="campaigns.php">View Campaigns</a></li>
				<li><a href="campaign_add.php">Add New Campaign</a></li>
				<li><a href="general_settings.php">Settings</a></li>
				<li><a href="account_settings.php">Change Password</a></li>
				<li><a href="logout.php">Logout</a></li>                    
			  </ul>
				<div class="clearer">&nbsp;</div>
			</div>
		</div>
	</div>
</div>
<div id="content-wrapper">
	<div class="center-wrapper">
		<div class="content">
			<div id="main">

<?php
}
?>