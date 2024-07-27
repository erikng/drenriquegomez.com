<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Fill in the form below to send me an email.';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = '';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="robots" content="all" />
		
		<title>ENRIQUE GOMEZ ATTORNEY AT LAW - CONTACT US BY EMAIL OR CALL TODAY</title>
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/x_pos00e9_1.1_dreg/styles.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/x_pos00e9_1.1_dreg/colour_tags-dreg_1.css" />
		<link rel="stylesheet" type="text/css" media="print" href="../rw_common/themes/x_pos00e9_1.1_dreg/print.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/x_pos00e9_1.1_dreg/css/toggle/noise.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/x_pos00e9_1.1_dreg/css/toggle/slogan_box.css" />
		<script type="text/javascript" src="../rw_common/themes/x_pos00e9_1.1_dreg/css/toggle/ec.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/x_pos00e9_1.1_dreg/css/width/920.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/x_pos00e9_1.1_dreg/css/light/50.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/x_pos00e9_1.1_dreg/css/border/solid.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/x_pos00e9_1.1_dreg/css/font_primary/georgia.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/x_pos00e9_1.1_dreg/css/font_secondary/lucida.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/x_pos00e9_1.1_dreg/css/text_shadow/light50.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/x_pos00e9_1.1_dreg/css/title/36.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/x_pos00e9_1.1_dreg/css/nav/18.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/x_pos00e9_1.1_dreg/css/aside/28.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/x_pos00e9_1.1_dreg/css/frames/dark20.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/x_pos00e9_1.1_dreg/css/feature_image/header20.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/x_pos00e9_1.1_dreg/css/feature_image/opacity80.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/x_pos00e9_1.1_dreg/css/aside/left.css" />
		
		
		<script type="text/javascript" src="../rw_common/themes/x_pos00e9_1.1_dreg/javascript.js"></script>
		
	    
	    	<meta name="Description" content="Contact the Law Office of Enrique Gomez to help you with an arrest, ticket, or other criminal charges.  Enrique Gomez proudly served the Harris County and Houston Metro area as well as the surrounding areas.  Proudly serving his clients since 1980 ." />
	<meta name="Keywords" content="law office enrique gomez harris county houston criminal traffic ticket arrest spanish espanol bilingual" />
		<!--[if IE]><script type="text/javascript" src="../rw_common/themes/x_pos00e9_1.1_dreg/html5.js"></script><![endif]-->
	</head>
	<body>
		<div class="wrapperOuter">
			<div class="wrapperInner">
				<header>
					<div id="logoTitle">
						<div id="logo"><img src="../rw_common/images/dreg_logo_header.png" width="920" height="213" alt="Site logo"/></div>
						<h1></h1>
					</div><!-- Logo Title -->
					<div id="sloganBox"><span></span><h2></h2></div>
					<div class="border"></div>
					<nav><ul><li><a href="../" rel="self">WELCOME<span></span></a></li><li><a href="contact.php" rel="self" class="current">CONTACT US<span></span></a></li></ul></nav>
				</header><!-- Header -->
				<div id="featureBorderOuter">
					<span></span>
					<div id="featureBorderInner">
						<div id="featureImage">
							<div id="featureInset"></div>
							<div id="extraContainer3"></div>
						</div><!-- Feature Image -->
					</div><!-- Feature Border Inner -->
				</div><!-- Feature Border Outer -->
				<div id="extraContainer1"></div>
				<div id="container">
					<aside>
						<div class="border"></div>
						<nav><ul><li><a href="../" rel="self">WELCOME<span></span></a></li><li><a href="contact.php" rel="self" class="current">CONTACT US<span></span></a></li></ul></nav>
						<h2 id="aside">CONTACT US</h2>
						<span style="font:17px Georgia, serif; color:#DDD7D3;">Feel free to drop us a line using this form.  We can reply either by email or phone if you prefer.  <br /><br />By providing us with your contact information, you give the Law Office of Enrique Gomez permission to contact you to discuss you case.</span>
						
					</aside>
					<section>
						
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Phone Number:</label> <br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>The Nature of Your Case:</label> *<br />
		<select name="form[element3]">			<option <?php echo check('element3', 'select','Traffic Violation'); ?> value="Traffic Violation">Traffic Violation</option>
			<option <?php echo check('element3', 'select','DWI / DUI'); ?> value="DWI / DUI">DWI / DUI</option>
			<option <?php echo check('element3', 'select','Parole Violation'); ?> value="Parole Violation">Parole Violation</option>
			<option <?php echo check('element3', 'select','Other Criminal Offense'); ?> value="Other Criminal Offense">Other Criminal Offense</option>
			<option <?php echo check('element3', 'select','Arrested / Bond Assistance'); ?> value="Arrested / Bond Assistance">Arrested / Bond Assistance</option>
		</select><br /><br />

		<label>Subject:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element4'); ?>" name="form[element4]" size="40"/><br /><br />

		<label>Message:</label> *<br />
		<textarea class="form-input-field" name="form[element5]" rows="8" cols="38"><?php echo check('element5'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Reset" />
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>
					</section>
					<div class="clear"></div>
					<div id="extraContainer2"></div>
				</div><!-- Container -->
			</div><!-- Wrapper Inner -->
			<div id="push"></div>
		</div><!-- Wrapper Outer -->
		<footer>
			<section><ul><li><a href="../">WELCOME</a>&nbsp;/&nbsp;</li><li><a href="contact.php">CONTACT US</a>&nbsp;/&nbsp;</li></ul><div id="copyrightContact">&copy; 2011 Enrique Gomez -- Site design by <a href="http://digitaldevilry.com">Digital Devilry</a> <a href="#" id="rw_email_contact">Email Me</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":en";var _rwObsfuscatedHref3 = "riq";var _rwObsfuscatedHref4 = "ue@";var _rwObsfuscatedHref5 = "dre";var _rwObsfuscatedHref6 = "nri";var _rwObsfuscatedHref7 = "que";var _rwObsfuscatedHref8 = "gom";var _rwObsfuscatedHref9 = "ez.";var _rwObsfuscatedHref10 = "com";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9+_rwObsfuscatedHref10; document.getElementById('rw_email_contact').href = _rwObsfuscatedHref;</script></div></section>
			<div id="weight"></div>
		</footer><!-- Footer -->
		
		<!--[if lt IE 7]>
		<script type="text/javascript"> 
		var $buoop = {vs:{i:6}} 
		$buoop.ol = window.onload; 
		window.onload=function(){ 
		 if ($buoop.ol) $buoop.ol(); 
		 var e = document.createElement("script"); 
		 e.setAttribute("type", "text/javascript"); 
		 e.setAttribute("src", "http://browser-update.org/update.js"); 
		 document.body.appendChild(e);}
		</script>
		<![endif]-->
	</body>
</html>