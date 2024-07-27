<?php

if (!function_exists('show_path')) {
function show_path(){
global $this_site;
$dom = "http://".$_SERVER['HTTP_HOST'];
$web = $dom.$_SERVER['PHP_SELF'];
$all = explode("/", $dom.$web);
$pag = array_pop($all);
$fol = basename(array_pop($all));
$dir = (end($all));
$loc = $dom."/".$dir."/".$fol;
$abs = getcwd();

echo "<br />";
echo '$this_site : '.$this_site."<br />";
echo "<br />";
echo '$web : '.$web."<br />";
echo '$loc : '.$loc."<br />";
echo '$dom : '.$dom."<br />";
echo '$dir : '.$dir."<br />";
echo '$fol : '.$fol."<br />";
echo '$pag : '.$pag."<br />";
echo '$abs : '.$abs."<br />";
}}

// So the script doesn't time out on large operations
set_time_limit(300); // 300seconds = 5 minutes

function minify(){
global $template;
global $title;
global $descr;
$minify = array("\r","\n","\t","  ",);
$temp_mini = str_replace($minify,'', file_get_contents($template));
$temp_mini = str_replace("&#9733;",'&amp;#9733;', $temp_mini);
$temp_mini = str_replace("&nbsp;",'&amp;nbsp;', $temp_mini);
$title  = htmlentities($title);
$descr = str_replace($minify,'', $descr);
$temp_mini = str_replace("profile.php","profile_mini.php", $temp_mini);
return $temp_mini;
}


function fix_name($name) {
$badd = array(" ","_","-","..");
$good = ".";
$name = str_replace($badd,$good,$name);
return $name;
}

class SimpleImage {
   
   var $image;
   var $image_type;
 
   function load($filename) {
      $image_info = getimagesize($filename);
      $this->image_type = $image_info['2'];
      if( $this->image_type == IMAGETYPE_JPEG ) {
         $this->image = imagecreatefromjpeg($filename);
      } elseif( $this->image_type == IMAGETYPE_GIF ) {
         $this->image = imagecreatefromgif($filename);
      } elseif( $this->image_type == IMAGETYPE_PNG ) {
         $this->image = imagecreatefrompng($filename);
      }
   }
   function save($filename, $image_type=IMAGETYPE_JPEG, $compression=75, $permissions=null) {
      if( $image_type == IMAGETYPE_JPEG ) {
         imagejpeg($this->image,$filename,$compression);
      } elseif( $image_type == IMAGETYPE_GIF ) {
         imagegif($this->image,$filename);         
      } elseif( $image_type == IMAGETYPE_PNG ) {
         imagepng($this->image,$filename);
      }   
      if( $permissions != null) {
         chmod($filename,$permissions);
      }
   }
   function output($image_type=IMAGETYPE_JPEG) {
      if( $image_type == IMAGETYPE_JPEG ) {
         imagejpeg($this->image);
      } elseif( $image_type == IMAGETYPE_GIF ) {
         imagegif($this->image);         
      } elseif( $image_type == IMAGETYPE_PNG ) {
         imagepng($this->image);
      }   
   }
   function getWidth() {
      return imagesx($this->image);
   }
   function getHeight() {
      return imagesy($this->image);
   }
   function resizeToHeight($height) {
      $ratio = $height / $this->getHeight();
      $width = $this->getWidth() * $ratio;
      $this->resize($width,$height);
   }
   function resizeToWidth($width) {
      $ratio = $width / $this->getWidth();
      $height = $this->getheight() * $ratio;
      $this->resize($width,$height);
   }
   function scale($scale) {
      $width = $this->getWidth() * $scale/100;
      $height = $this->getheight() * $scale/100; 
      $this->resize($width,$height);
   }
   function resize($width,$height) {
      $new_image = imagecreatetruecolor($width, $height);
      imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
      $this->image = $new_image;   
   }      
}


if (!function_exists('swap_date')) {
function swap_date($time_stamp){
global $server_offset;
$time_stamp = $time_stamp + ($server_offset * 60 * 60);
$easy_date = date('F d Y h:i:s A', $time_stamp);
return $easy_date;
}
//echo swap_date(1288733270);
}//function not exist

if (!function_exists('swap_date_short')) {
function swap_date_short($time_stamp){
global $server_offset;
$time_stamp = $time_stamp + ($server_offset * 60 * 60);
$easy_date = date('n/d/y h:i A', $time_stamp);
return $easy_date;
}
//echo swap_date(1288733270);
}//function not exist

if (!function_exists('swap_date_timeless')) {
function swap_date_timeless($time_stamp){
global $server_offset;
$time_stamp = $time_stamp + ($server_offset * 60 * 60);
$easy_date = date('F d Y h:i A', $time_stamp);
return $easy_date;
}
//echo swap_date(1288733270);
}//function not exist

if (!function_exists('rev_swap_date')) {
function rev_swap_date($time_stamp){
global $server_offset;
$unix_date = strtotime($time_stamp);;
$unix_date = $unix_date - ($server_offset * 60 * 60);
return $unix_date;
}
//echo rev_swap_date('November 02 2010 05:27:50 PM');
}//function not exist


if (!function_exists('file_extension')) {
function file_extension($filename) {
$path_info = pathinfo($filename);
return $path_info['extension'];
}}

function is_firefox() {
	$agent = '';
	if (!empty($HTTP_USER_AGENT)) $agent = $HTTP_USER_AGENT;
	if (empty($agent) && !empty($_SERVER['HTTP_USER_AGENT'])) $agent = $_SERVER['HTTP_USER_AGENT'];
	if (!empty($agent) && preg_match("/firefox/si", $agent)) return true;
	return false;
}

function is_opera() {
	$agent = '';
	if (!empty($HTTP_USER_AGENT)) $agent = $HTTP_USER_AGENT;
	if (empty($agent) && !empty($_SERVER['HTTP_USER_AGENT'])) $agent = $_SERVER['HTTP_USER_AGENT'];
	if (!empty($agent) && preg_match("/opera/si", $agent)) return true;
	return false;
}

function is_safari() {
	$agent = '';
	if (!empty($HTTP_USER_AGENT)) $agent = $HTTP_USER_AGENT;
	if (empty($agent) && !empty($_SERVER['HTTP_USER_AGENT'])) $agent = $_SERVER['HTTP_USER_AGENT'];
	if (!empty($agent) && preg_match("/safari/si", $agent) && !preg_match("/Chrome/si", $agent)) return true;
	return false;
}

function is_ie7() {
	$agent = '';
	if (!empty($HTTP_USER_AGENT)) $agent = $HTTP_USER_AGENT;
	if (empty($agent) && !empty($_SERVER['HTTP_USER_AGENT'])) $agent = $_SERVER['HTTP_USER_AGENT'];
	if (!empty($agent) && preg_match("/MSIE 7.0/si", $agent)) return true;
	return false;
}

function is_ie8() {
	$agent = '';
	if (!empty($HTTP_USER_AGENT)) $agent = $HTTP_USER_AGENT;
	if (empty($agent) && !empty($_SERVER['HTTP_USER_AGENT'])) $agent = $_SERVER['HTTP_USER_AGENT'];
	if (!empty($agent) && preg_match("/MSIE 8.0/si", $agent)) return true;
	return false;
}

function is_chrome() {
	$agent = '';
	if (!empty($HTTP_USER_AGENT)) $agent = $HTTP_USER_AGENT;
	if (empty($agent) && !empty($_SERVER['HTTP_USER_AGENT'])) $agent = $_SERVER['HTTP_USER_AGENT'];
	if (!empty($agent) && preg_match("/Chrome/si", $agent)) return true;
	return false;
}

function upload_thumb($temp,$image,$target_path){
       $org_ext = array(".jpg", ".jpeg", ".png", ".gif", ".bmp");
       $tmb_ext   = array("_tmb.jpg", "_tmb.jpeg", "_tmb.png", "_tmb.gif", "_tmb.bmp");
    $image_name = strtolower($image);
	$image_path = $target_path.$image; 
	list($width, $height) = getimagesize($temp);
	if ($width>=600) {
	   $image = new SimpleImage();
	   $image->load($temp);
	   $image->resizeToWidth(600);
	   $image->save(strtolower($image_path));
	}else{
	   $image = new SimpleImage();
	   $image->load($temp);
	   $image->save(strtolower($image_path));
	}
       $image_tmb = str_replace($org_ext, $tmb_ext, $image_path);
	   $image = new SimpleImage();
	   $image->load($temp);
	   $image->resizeToWidth(115);
	   $image->save(strtolower($image_tmb));
$image_name = str_replace($org_ext, $tmb_ext, $image_name);
return $image_name;
}

function upload_primary($temp,$image,$target_path){
       $org_ext = array(".jpg", ".jpeg", ".png", ".gif", ".bmp");
       $pri_ext   = array("_pri.jpg", "_pri.jpeg", "_pri.png", "_pri.gif", "_pri.bmp");
    $image_name = strtolower($image);
	$image_path = $target_path.$image; 
	list($width, $height) = getimagesize($temp);
	if ($width>=600) {
	   $image = new SimpleImage();
	   $image->load($temp);
	   $image->resizeToWidth(600);
	   $image->save(strtolower($image_path));
	}else{
	   $image = new SimpleImage();
	   $image->load($temp);
	   $image->save(strtolower($image_path));
	}
       $image_pri = str_replace($org_ext, $pri_ext, $image_path);
	   $image = new SimpleImage();
	   $image->load($temp);
	   $image->resizeToWidth(465);
	   $image->save(strtolower($image_pri));
$image_name = str_replace($org_ext, $pri_ext, $image_name);
return $image_name;
}


function upload_p_photo($temp,$image,$target_path){
    $image_name = strtolower($image);
	$image_path = $target_path.$image; 
	list($width, $height) = getimagesize($temp);
	if ($width>=200) {
	   $image = new SimpleImage();
	   $image->load($temp);
	   $image->resizeToWidth(200);
	   $image->save(strtolower($image_path));
	}else{
	   $image = new SimpleImage();
	   $image->load($temp);
	   $image->save(strtolower($image_path));
	}
return $image_name;
}


function upload_p_logo($temp,$image,$target_path){
    $image_name = strtolower($image);
	$image_path = $target_path.$image; 
	list($width, $height) = getimagesize($temp);
	if ($width>=115) {
	   $image = new SimpleImage();
	   $image->load($temp);
	   $image->resizeToWidth(115);
	   $image->save(strtolower($image_path));
	}else{
	   $image = new SimpleImage();
	   $image->load($temp);
	   $image->save(strtolower($image_path));
	}
return $image_name;
}


if (!function_exists('file_get_contents')) {
    function file_get_contents($filename) {
        return implode('', file($filename));
    } // end function
} // end !function_exists

if (!function_exists('file_put_contents')) {
    function file_put_contents($location, $data) {
        $handle = fopen($location, 'a');
        fwrite($handle, $data);
        fclose($handle);
    } // end function
} // end !function_exists



function sanitize_input($input)
{
  if(get_magic_quotes_gpc())
  {
    $input = stripslashes($input);
  }
  return(mysql_real_escape_string($input));
} 

function swap_color($input){
$input = str_replace('#','',$input);
$color_name = array('/aliceblue/','/antiquewhite/','/aqua/','/aquamarine/','/azure/','/beige/','/bisque/','/black/','/blanchedalmond/','/blue/','/blueviolet/','/brown/','/burlywood/','/cadetblue/','/chartreuse/','/chocolate/','/coral/','/cornflowerblue/','/cornsilk/','/crimson/','/cyan/','/darkblue/','/darkcyan/','/darkgoldenrod/','/darkgray/','/darkgrey/','/darkgreen/','/darkkhaki/','/darkmagenta/','/darkolivegreen/','/darkorange/','/darkorchid/','/darkred/','/darksalmon/','/darkseagreen/','/darkslateblue/','/darkslategray/','/darkslategrey/','/darkturquoise/','/darkviolet/','/deeppink/','/deepskyblue/','/dimgray/','/dimgrey/','/dodgerblue/','/firebrick/','/floralwhite/','/forestgreen/','/fuchsia/','/gainsboro/','/ghostwhite/','/gold/','/goldenrod/','/gray/','/grey/','/green/','/greenyellow/','/honeydew/','/hotpink/','/indianred /','/indigo /','/ivory/','/khaki/','/lavender/','/lavenderblush/','/lawngreen/','/lemonchiffon/','/lightblue/','/lightcoral/','/lightcyan/','/lightgoldenrodyellow/','/lightgray/','/lightgrey/','/lightgreen/','/lightpink/','/lightsalmon/','/lightseagreen/','/lightskyblue/','/lightslategray/','/lightslategrey/','/lightsteelblue/','/lightyellow/','/lime/','/limegreen/','/linen/','/magenta/','/maroon/','/mediumaquamarine/','/mediumblue/','/mediumorchid/','/mediumpurple/','/mediumseagreen/','/mediumslateblue/','/mediumspringgreen/','/mediumturquoise/','/mediumvioletred/','/midnightblue/','/mintcream/','/mistyrose/','/moccasin/','/navajowhite/','/navy/','/oldlace/','/olive/','/olivedrab/','/orange/','/orangered/','/orchid/','/palegoldenrod/','/palegreen/','/paleturquoise/','/palevioletred/','/papayawhip/','/peachpuff/','/peru/','/pink/','/plum/','/powderblue/','/purple/','/red/','/rosybrown/','/royalblue/','/saddlebrown/','/salmon/','/sandybrown/','/seagreen/','/seashell/','/sienna/','/silver/','/skyblue/','/slateblue/','/slategray/','/slategrey/','/snow/','/springgreen/','/steelblue/','/tan/','/teal/','/thistle/','/tomato/','/turquoise/','/violet/','/wheat/','/white/','/whitesmoke/','/yellow/','/yellowgreen/');
$color_hex = array("f0f8ff","faebd7","00ffff","7fffd4","f0ffff","f5f5dc","ffe4c4","000000","ffebcd","0000ff","8a2be2","a52a2a","deb887","5f9ea0","7fff00","d2691e","ff7f50","6495ed","fff8dc","dc143c","00ffff","00008b","008b8b","b8860b","a9a9a9","a9a9a9","006400","bdb76b","8b008b","556b2f","ff8c00","9932cc","8b0000","e9967a","8fbc8f","483d8b","2f4f4f","2f4f4f","00ced1","9400d3","ff1493","00bfff","696969","696969","1e90ff","b22222","fffaf0","228b22","ff00ff","dcdcdc","f8f8ff","ffd700","daa520","808080","808080","008000","adff2f","f0fff0","ff69b4","cd5c5c","4b0082","fffff0","f0e68c","e6e6fa","fff0f5","7cfc00","fffacd","add8e6","f08080","e0ffff","fafad2","d3d3d3","d3d3d3","90ee90","ffb6c1","ffa07a","20b2aa","87cefa","778899","778899","b0c4de","ffffe0","00ff00","32cd32","faf0e6","ff00ff","800000","66cdaa","0000cd","ba55d3","9370d8","3cb371","7b68ee","00fa9a","48d1cc","c71585","191970","f5fffa","ffe4e1","ffe4b5","ffdead","000080","fdf5e6","808000","6b8e23","ffa500","ff4500","da70d6","eee8aa","98fb98","afeeee","d87093","ffefd5","ffdab9","cd853f","ffc0cb","dda0dd","b0e0e6","800080","ff0000","bc8f8f","4169e1","8b4513","fa8072","f4a460","2e8b57","fff5ee","a0522d","c0c0c0","87ceeb","6a5acd","708090","708090","fffafa","00ff7f","4682b4","d2b48c","008080","d8bfd8","ff6347","40e0d0","ee82ee","f5deb3","ffffff","f5f5f5","ffff00","9acd32");
$input = preg_replace($color_name,$color_hex,$input);
return $input;
}

function hover_color($input){
$input = swap_color($input);
$rgb = str_split($input, 2);
$r = ((hexdec($rgb['0']) + 50) >= 255) ? $r="255" : hexdec($rgb['0']) + 50;
$g = ((hexdec($rgb['1']) + 30) >= 255) ? $g="255" : hexdec($rgb['1']) + 30;
$b = ((hexdec($rgb['2']) + 35) >= 255) ? $b="255" : hexdec($rgb['2']) + 32;
return dechex($r).dechex($g).dechex($b);
}


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