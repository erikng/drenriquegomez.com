<?php
$image_file = "uploads/".$_GET['src'];
$corner_radius = isset($_GET['radius']) ? $_GET['radius'] : 5;
$topleft = (isset($_GET['tl']) and $_GET['tl'] == "no") ? false : true;
$bottomleft = (isset($_GET['bl']) and $_GET['bl'] == "no") ? false : true;
$bottomright = (isset($_GET['br']) and $_GET['br'] == "no") ? false : true;
$topright = (isset($_GET['tr']) and $_GET['tr'] == "no") ? false : true;
$imagetype=strtolower($_GET['imagetype']);
$backcolor = $_GET['bg'];
$backcolor = str_replace('#','',$backcolor);

$endsize=$corner_radius;
$startsize=$endsize*3-1;
$arcsize=$startsize*2+1;

$imagetype = getimagesize(strtolower($image_file));
$imagetype = $imagetype['mime'];
$imagetype = str_replace("image/", "", $imagetype);

if (($imagetype=='jpeg') or ($imagetype=='jpg')) {
$image = imagecreatefromjpeg($image_file);
} else {
if (($imagetype=='GIF') or ($imagetype=='gif')) {
$image = imagecreatefromgif($image_file);
} else {
$image = imagecreatefrompng($image_file);
}
}


$size = getimagesize($image_file);
// Top-left corner
$background = imagecreatetruecolor($size[0],$size[1]);
imagecopymerge($background, $image, 0, 0, 0, 0, $size[0], $size[1], 100);
$startx=$size[0]*2-1;
$starty=$size[1]*2-1;
$im_temp = imagecreatetruecolor($startx,$starty);
imagecopyresampled($im_temp, $background, 0, 0, 0, 0, $startx, $starty, $size[0], $size[1]);
$bg = imagecolorallocate($im_temp, hexdec(substr($backcolor,0,2)),hexdec(substr($backcolor,2,2)),hexdec(substr($backcolor,4,2)));
$fg = imagecolorallocate($im_temp, hexdec(substr($forecolor,0,2)),hexdec(substr($forecolor,2,2)),hexdec(substr($forecolor,4,2)));

if ($topleft == true) {
imagearc($im_temp, $startsize, $startsize, $arcsize, $arcsize, 180,270,$bg);
imagefilltoborder($im_temp,0,0,$bg,$bg);
}

// Bottom-left corner
if ($bottomleft == true) {
imagearc($im_temp, $startsize, $starty-$startsize,$arcsize, $arcsize, 90,180,$bg);
imagefilltoborder($im_temp,0,$starty,$bg,$bg);
}

// Bottom-right corner
if ($bottomright == true) {
imagearc($im_temp, $startx-$startsize, $starty-$startsize,$arcsize, $arcsize, 0,90,$bg);
imagefilltoborder($im_temp,$startx,$starty,$bg,$bg);
}

// Top-right corner
if ($topright == true) {
imagearc($im_temp, $startx-$startsize, $startsize,$arcsize, $arcsize, 270,360,$bg);
imagefilltoborder($im_temp,$startx,0,$bg,$bg);
}


$newimage = imagecreatetruecolor($size[0],$size[1]);
imagecopyresampled($image, $im_temp, 0, 0, 0, 0, $size[0],$size[1],$startx, $starty);

// Output final image
header("Content-type: image/png");
imagepng($image);
imagedestroy($image);
imagedestroy($background);
imagedestroy($im_temp);
?> 