<?php
include('_functions.php');
  if(extension_loaded('zlib')){
    ob_start('ob_gzhandler');
  }
  header ('content-type: text/css; charset: UTF-8');
  header ('cache-control: must-revalidate');
  $exp_offset = 60 * 60 * 60 * 60;
  $exp_expire = 'expires: Wed, 21 Dec 2012 23:59:59 UTC';
  header ($exp_expire);
  ob_start('compress');
  function compress($buffer) {
      // remove comments 
      $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    /* remove tabs, spaces, newlines, etc. */
    $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
      return $buffer;
    }
 
   // list CSS files to be included
  include('css/style.css');

if (is_firefox()) include('css/firefox.css');
if (is_opera())   include('css/opera.css');
if (is_safari())  include('css/safari.css');
if (is_ie7())     include('css/ie7.css');
if (is_ie8())     include('css/ie8.css');
if (is_chrome())  include('css/chrome.css');



//  include('css/colorbox.css');
 
  if(extension_loaded('zlib')){ob_end_flush();}
?>





<?php
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