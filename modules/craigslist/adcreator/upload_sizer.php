<?php
include('_config.php');
include('_functions.php');
set_time_limit(0);
$target_path = $upload_path;
































if (isset($_GET['resizer'])) { 
if( isset($_POST['submit']) ) {
list($width, $height, $type) = getimagesize($_FILES['uploaded_image']['tmp_name']);
if ($type == "1") $type = "image/gif";
if ($type == "2") $type = "image/jpeg";
if ($type == "3") $type = "image/png";
if ($type == "6") $type = "image/bmp";

   header("Cache-control: private");
   header('Pragma: private');
   header('Expires: Fri, 17 Sep 1982 03:00:00 GMT');
   header('Content-Type: $type');
   header('Content-Disposition: attachment; filename="'.$_FILES['uploaded_image']['name'].'"');
   header('Content-Transfer-Encoding: binary');
    if (isset($_POST['up_size']))
        $up_size = $_POST['up_size'];
        if ((empty($up_size)) || ($width <= $up_size))
            $up_size = $width;
        if ((isset($up_size)) && ($up_size >= "901"))
            $up_size = "900";
        $up_size = $up_size . "px";
   $image = new SimpleImage();
   $image->load($_FILES['uploaded_image']['tmp_name']);
   $image->resizeToWidth($up_size);
   $image->output();
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr" >
<head profile="http://gmpg.org/xfn/11">
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
        <link rel="icon" href="<?php echo $this_site;?>favicon.png" type="image/png" />
        <link rel="icon" href="<?php echo $this_site;?>favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="<?php echo $this_site;?>favicon.ico" />
        <link rel="apple-touch-icon" href="<?php echo $this_site;?>apple_touch_icon.png" />
        <link rel='stylesheet' id='styles.php' href='<?php echo $this_site;?>styles.php' type='text/css' media='all' />        
     <!--script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script-->
        <script type="text/javascript" src="<?php echo $this_site;?>js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="<?php echo $this_site;?>js/jquery.colorbox-min.js"></script>
        <link rel='stylesheet' id='colorbox' href='<?php echo $this_site;?>css/colorbox.css' type='text/css' media='all' />        
        <script type="text/javascript" src="<?php echo $this_site;?>js/jquery.footer.js"></script>
</head>
<body>
<div id="resizer">
<div class="white_box">
<span class="arrow"><a class='uploader' href="<?php echo $this_site;?>upload_sizer.php?uploader"><span style="font-size:40px;">&#8689;</span> Uploader</a></span>
<h1>.&bull;&acute;&macr;`&bull;._.&bull;Resizer&bull;._.&bull;&acute;&macr;`&bull;.</h1>
    <div class="form_box">
      <form action="" method="post" enctype="multipart/form-data">
         <label for="uploader">File : </label>
        <input type="file" name="uploaded_image" />
         <label for="up_size">Resize Width To : </label>
         <input type="text" name="up_size" />px (900px max)<br />
         <input type="submit" name="submit" value="Resize" class="upload_button"/>
      </form>
    </div><!-- end form_box -->

    <div class="uploader_note">
      <p>This will NOT save images to the server! It uploads it, resizes it, and prompts you to download it.</p>
<br />
<div class="success"><span class="success_title">For Best Results</span> You should resize your images using Photoshop or another photo editing program and choose "Save For Web & Devices" as this will resize your image and "smush-it" if you will.<br /><a href="http://screenr.com/8tY" target="_blank">Qucik How To Video</a></div>
      <p>The CraigsList Listing Tool automatically resizes images to best conserve bandwidth. However, if you are trying to upload 13 images that are 3MB each, it will take a while to upload almost 40MB worth of images. If you experience problems, use this to resize your images one at a time.</p>
<br />
      <p>Simply browse for your image, give it a new width and hit resize. When the image is resized it will prompt you to download it. Save it to a place you will remember. Exit this uploader and upload your new image in the normal way.</p>
<br />
<p><strong>Max Widths</strong><br />
Primary Image : 600px<br />
Secondary Iimage : 115px<br />
Image in description : 900px<br />
Imager (slideshow) : 900px</p>
<br />
      <p>If you are unsure what the width should be, leave the "Resize Width To" empty, or put 900 in there.</p>
    </div><!-- end uploader_note -->
<p style="text-align:center;">&copy; 2010 <a href="http://www.fremonttech.com"><font color="#ff8c00">Fremont</font><font color="#000000">Tech</font></a> | <a href="<?php echo '?logout'; ?>" style="color:#F50F0F;">Logout</a></p>

  </div><!-- end white_box -->
</div><!-- end uploader -->


</body>
</html>
<?php } ?>






























<?php if (isset($_GET['uploader'])) { 
if (isset($_POST['submit'])) {
    if (isset($_POST['up_size']))
        $up_size = $_POST['up_size'];
    function upload_uploader($temp, $image, $target_path) {
        global $up_size;
        $image_name = strtolower($image);
        $image_path = $target_path . $image;
        list($width, $height) = getimagesize($temp);
        if ((empty($up_size)) || ($width <= $up_size))
            $up_size = $width;
        if ((isset($up_size)) && ($up_size >= "901"))
            $up_size = "900";
        $up_size = $up_size . "px";
        $image   = new SimpleImage();
        $image->load($temp);
        $image->resizeToWidth($up_size);
        $image->save(strtolower($image_path));
        return $image_name;
    }
    if (!empty($_FILES['uploader']['tmp_name'])) {
        $uploader = upload_uploader($_FILES['uploader']['tmp_name'], $_FILES['uploader']['name'], $target_path);
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr" >
<head profile="http://gmpg.org/xfn/11">
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
        <link rel="icon" href="<?php echo $this_site;?>favicon.png" type="image/png" />
        <link rel="icon" href="<?php echo $this_site;?>favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="<?php echo $this_site;?>favicon.ico" />
        <link rel="apple-touch-icon" href="<?php echo $this_site;?>apple_touch_icon.png" />
        <link rel='stylesheet' id='styles.php' href='<?php echo $this_site;?>styles.php' type='text/css' media='all' />        
     <!--script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script-->
        <script type="text/javascript" src="<?php echo $this_site;?>js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="<?php echo $this_site;?>js/jquery.colorbox-min.js"></script>
        <link rel='stylesheet' id='colorbox' href='<?php echo $this_site;?>css/colorbox.css' type='text/css' media='all' />        
        <script type="text/javascript" src="<?php echo $this_site;?>js/jquery.footer.js"></script>
</head>
<body>
<div id="uploader">
<div class="white_box">
<span class="arrow"><a class='uploader' href="<?php echo $this_site;?>upload_sizer.php?resizer"><span style="font-size:40px;">&#8689;</span> Resizer</a></span>

<h1>&bull;._.&bull;&acute;&macr;`&bull;.Uploader.&bull;&acute;&macr;`&bull;._.&bull;</h1>
    <div class="form_box">
      <form action="" method="post" enctype="multipart/form-data" style="">
         <label for="uploader">File : </label>
         <input type="file" name="uploader" />
         <br />
         <label for="up_size">Resize Width To : </label>
         <input type="text" name="up_size" />px (900px max)<br />
         <input type="submit" name="submit" value="Upload" class="upload_button"/>
       </form>
    </div><!-- end form_box -->

<?php
if (!empty($uploader)) {
    $uploader = $target_path . $uploader;
    echo '<div style="margin:25px;">';
    echo 'Link To Image : <a href="' . $this_site . $uploader . '">' . $this_site . $uploader . '</a><br />';
    echo 'Paste this : <div style="border: 1px solid silver; margin:25px;padding:15px;background-color:white;"><code>&lt;a href="' . $this_site . $uploader . '"&gt;<br />' . $this_site . $uploader . '<br />&lt;/a&gt;</code></div><br />';
    echo '<hr />';
    echo 'To Show The Image - Paste this : <div style="border: 1px solid silver; margin:25px;padding:15px;background-color:white;"><code>&lt;img src="' . $this_site . $uploader . '" width="' . $up_size . '" alt="" /&gt;</code></div><img src="' . $uploader . '" style="display: block;margin: 0 auto;"/><br />';
    echo '</div>';
}
?>

    <div class="uploader_note">
      <p>This is not to upload images into a listing! This uploader will upload an image to your server so you can use it in your listing description.</p>
    </div><!-- end uploader_note -->
<p style="text-align:center;">&copy; 2010 <a href="http://www.fremonttech.com"><font color="#ff8c00">Fremont</font><font color="#000000">Tech</font></a> | <a href="<?php echo '?logout'; ?>" style="color:#F50F0F;">Logout</a></p>
  </div><!-- end white_box -->
</div><!-- end uploader -->
</body>
</html>
<?php } 
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