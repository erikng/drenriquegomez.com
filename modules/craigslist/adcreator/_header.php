<?php session_name("craigslist_tool"); session_start(); if (isset($_REQUEST['_SESSION'])) die("Fail!");
//session_destroy();
clearstatcache();
$dom                     = "http://" . $_SERVER['HTTP_HOST'];
$web                     = $dom . $_SERVER['PHP_SELF'];
$all                     = explode("/", $dom . $web);
$pag                     = array_pop($all);
$fol                     = rtrim(str_replace($dom . "/", "", str_replace($pag, "", $web)), '/');
$dir                     = (end($all));
$loc                     = $dom . "/" . $fol;
$abs                     = getcwd();
$root                    = dirname(realpath(__FILE__)) . '/';
$this_site               = $dom . "/" . $fol . "/";
if (empty($this_domain)) $this_domain = $dom;
if (empty($this_folder)) $this_folder = $fol;
if (empty($wysiwyg))     $wysiwyg = "0";
if (empty($menu))        $menu = "none";
if (empty($show_menu))   $show_menu = "none";
if (empty($show_exp))    $show_exp = "2";
if (empty($show_wrn))    $show_wrn = "2";
if (empty($show_config)) $show_config = "1";

include('_htmLawed.php');
include('_config.php');
include('_functions.php');

$demo  = ""; $debug = ""; if ($demo == "1") { $disabled = "disabled"; } else { $disabled = ""; }

if (isset($_GET['logout'])) { session_destroy(); header('Location:' . $this_site . 'listings.php?loggedout'); exit; }
if ((isset($_GET['admin'])) || (isset($_GET['login']))) { header('Location:' . $this_site . 'login.php'); }
if ((!isset($db_enabled)) && ($pag != "install.php")) { header('Location:' . $this_site . 'install.php'); }
if ((isset($popup_active)) && ($popup_active == "active") && (empty($email)) && (empty($popup_link)) && (!empty($pre_website3))) { $popup_link = $pre_website3; }
if (($pag != "imager.php") && ($pag != "listings.php") && ($pag != "contact.php") && ($pag != "login.php") && (!isset($_SESSION['username'])) && (isset($setup_configs))) { header('Location:' . $this_site . 'listings.php'); }
if ((!isset($db_enabled)) && ($pag == "index.php") && ($show_config == "1") && ($show_real == "1") && ($show_auto == "0") && ($show_gen == "0")) { header('Location: ' . $this_site . 'themes/realestate.php'); }
if ((!isset($db_enabled)) && ($pag == "index.php") && ($show_config == "1") && ($show_real == "0") && ($show_auto == "1") && ($show_gen == "0")) { header('Location: ' . $this_site . 'themes/automotive.php'); }
if ((!isset($db_enabled)) && ($pag == "index.php") && ($show_config == "1") && ($show_real == "0") && ($show_auto == "0") && ($show_gen == "1")) { header('Location: ' . $this_site . 'themes/general.php'); }
if (($pag == "result.php") || ($pag == "imager.php") || ($pag == "contact.php") || ($pag == "login.php") || ($pag == "profile_preview.php")) $show_menu = "none";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr" >
<head profile="http://gmpg.org/xfn/11">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<?php
if ($pag == "index.php") echo '<title>FremontTech CraigsList Tool</title>';
elseif ($pag == "config.php") echo '<title>Configurator - FremontTech CraigsList Tool</title>';
elseif ($pag == "realestate.php") echo '<title>Real Estate Designer - FremontTech CraigsList Tool</title>';
elseif ($pag == "automotive.php") echo '<title>Automotive Designer - FremontTech CraigsList Tool</title>';
elseif ($pag == "general.php") echo '<title>General Designer - FremontTech CraigsList Tool</title>';
elseif ($pag == "result.php") echo '<title>Listing Preview - FremontTech CraigsList Tool</title>';
elseif ($pag == "profile.php") echo '<title>Profile Editor - FremontTech CraigsList Tool</title>';
elseif ($pag == "profile_preview.php") echo '<title>Profile Preview - FremontTech CraigsList Tool</title>';
elseif ($pag == "imager.php") echo '<title>Imager - FremontTech CraigsList Tool</title>';
elseif ($pag == "contact.php") echo '<title>Contact Us - FremontTech CraigsList Tool</title>';
else echo '<title>FremontTech CraigsList Tool</title>';
?>
<meta name="robots" content="index, follow" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta name="description" content="FremontTech Craigslist Listing Tool" />
<meta name="code-generator" content="FremontTech Craigslist Listing Tool" />
<meta name="generator" content="FremontTech Craigslist Listing Tool" />
<meta name="author" content="FremontTech" />
<meta name="copyright" content="&copy; 2011 FremontTech." />
<meta name="keywords" content="fremonttech, craigslist, listing tool" />
<meta name="date" content="2011-01-01T00:00:01+00:00" />
<link rel="icon" href="<?php echo $this_site; ?>favicon.png" type="image/png" />
<link rel="icon" href="<?php echo $this_site; ?>favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo $this_site; ?>favicon.ico" />
<link rel="apple-touch-icon" href="<?php echo $this_site; ?>apple_touch_icon.png" />
<link rel='stylesheet' id='styles.php' href='<?php echo $this_site; ?>styles.php' type='text/css' media='all' />
<!--script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script-->
<script type="text/javascript" src="<?php echo $this_site; ?>js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo $this_site; ?>js/jquery.colorbox-min.js"></script>
<link rel='stylesheet' id='colorbox' href='<?php echo $this_site; ?>css/colorbox.css' type='text/css' media='all' />
<script type="text/javascript"> 
/* <![CDATA[ */

$(document).ready(function(){
$("a[rel='images']") .colorbox({maxWidth:"75%",maxHeight:"75%"});
$("a[rel='images2']").colorbox({maxWidth:"75%",maxHeight:"75%"});
$(".other_symbols").colorbox({width:"860px", inline:true, href:"#other_symbols"});
$(".uploader").colorbox({width:"80%", height:"80%", iframe:true});
});
function reset_html(id) { $('#'+id).html($('#'+id).html()); }
$(document).ready(function() {
var file_input_index = 0;
$('input[type=file]').each(function() {
file_input_index++;
$(this).wrap('<div id="file_input_container_'+file_input_index+'" class="file_input"></div>');
$(this).after('<input type="button" value="Clear" onclick="reset_html(\'file_input_container_'+file_input_index+'\')" style="margin:0;padding:0;"/>');
});
});
/* ]]> */
</script>
<?php
if (($pag == "result.php") || ($pag == "profile_preview.php")) echo '<style type="text/css">body{background-color:white;}</style>';
if ($pag == "contact.php")  { 
  echo '<link rel="stylesheet" type="text/css" href="css/contact.css" />';
  if (isset($css)) echo $css; ?>
  <!--[if IE]> <style type="text/css"> .jqTransformInputInner div input { padding: 8px 0px 0px 0px; } </style> <![endif]-->
  <script type="text/javascript" src="<?php echo $this_site; ?>js/contact.js"></script>
<?php }

if (($pag == "automotive.php") || ($pag == "general.php") || ($pag == "realestate.php") || ($pag == "config.php") || ($pag == "listings.php")) {
    echo '<script src="' . $this_site . 'js/jquery.hover.js" type="text/javascript"></script>';
    if (is_firefox()) echo '<script src="' . $this_site . 'js/ff_preview.js" type="text/javascript"></script>';
    $image_types = array( '.png','.jpg','.jpeg','.gif','.bmp');
}
if (($pag == "imager.php") && ($popup_active == "active")) { echo '<script type="text/javascript"> $(document).ready(function(){ $("a[rel=\'images\']").colorbox({open:true,slideshow:true,slideshowSpeed:2000,slideshowStart:"Start SlideShow",slideshowStop:"Stop SlideShow",onClosed:function(){$().colorbox({width:"50%", inline:true, href:"#second_box"});} }); $(".second_box").colorbox({width:"50%", inline:true, href:"#second_box"}); });</script>';}
if (($pag == "imager.php") && ($popup_active == "inactive")) {echo '<script type="text/javascript"> $(document).ready(function(){ $("a[rel=\'images\']").colorbox({open:true,slideshow:true,slideshowSpeed:2000,slideshowStart:"Start SlideShow",slideshowStop:"Stop SlideShow"});$(".second_box").colorbox({width:"50%", inline:true, href:"#second_box"});});</script>';}
?>
</head>
<body onload="initialize()">
<?php
//    error_reporting(E_ALL);ini_set('display_errors', '1');
//    error_reporting(0);ini_set('display_errors', '0');
/*----------------------------------------------------------*\
|                                                            |
|      ________)                         ______)             |
|     (, /                              (, /         /)      |
|       /___, __   _ ___   _____  _/_     /    _  _ (/       |
|    ) /     / (__(/_// (_(_) / (_(__  ) /   _(/_(__/ )_     |
|   (_/  ©2011 Bradley Klco             (_)                  |
|                                                            |
\*----------------------------------------------------------*/
?>