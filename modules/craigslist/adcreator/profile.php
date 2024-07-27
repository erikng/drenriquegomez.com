<?php include('_header.php');
//show_path();
?>
<script>
<!--
window.name = 'profile'
// -->
</script>
<script src="js/jquery.hover.js" type="text/javascript"></script>

<?php
//js is for the neat little preveiw image before upload - only for firefox
//css is because the input-type=file SUCKS when it come to cross browser!
if (is_firefox()) echo '<script src="js/ff_preview.js" type="text/javascript"></script>';
if (is_firefox()) echo '<style type="text/css" media="all">.file_input{width:280px;display: inline-block;} .upload_container{float:left;width:290px;height:80px;margin-left:60px} .preview_area{border: 1px solid rgb(204, 204, 204); -moz-border-radius: 5px 5px 5px 5px; float: left; height: 78px; width: 68px; text-align: center;margin-right: 25px;margin-top:05px;}                  .upload_container label{display:block;width:80px;text-align:right;}               .preview_area span{font-size: 10px;font-variant: small-caps;line-height: 07px;} .max_w_h{max-width:68px; max-height:64px;} .small_cbox{width:07px;height:07px;margin: 0px 2px;}</style>';
if (is_opera())   echo '<style type="text/css" media="all">.file_input{width:310px;display: inline-block;} .upload_container{float:left;width:325px;height:80px;margin-left:30px} .preview_area{border: 1px solid rgb(204, 204, 204); -moz-border-radius: 5px 5px 5px 5px; float: left; height: 78px; width: 68px; text-align: center;margin-right: 30px;margin-top:05px;}                  .upload_container label{display:block;width:80px;text-align:right;}               .preview_area span{font-size: 10px;font-variant: small-caps;line-height: 07px;} .max_w_h{max-width:68px; max-height:64px;} .small_cbox{width:10px;height:10px;margin: 0px 0px;}</style>';
if (is_safari())  echo '<style type="text/css" media="all">.file_input{width:340px;display: inline-block;} .upload_container{float:left;width:345px;height:80px;margin-left:20px} .preview_area{border: 1px solid rgb(204, 204, 204); -moz-border-radius: 5px 5px 5px 5px; float: left; height: 78px; width: 68px; text-align: center;margin-right: 20px;margin-top:05px;line-height:10px;} .upload_container label{display:block;width:55px;text-align:right;font-size:12px} .preview_area span{font-size: 10px;font-variant: small-caps;line-height: 15px;} .max_w_h{max-width:68px; max-height:64px;} .small_cbox{width:07px;height:07px;margin: 0px 2px;}</style>';
if (is_ie7())     echo '<style type="text/css" media="all">.file_input{width:310px;display: inline-block;} .upload_container{float:left;width:320px;height:80px;margin-left:45px} .preview_area{border: 1px solid rgb(204, 204, 204); -moz-border-radius: 5px 5px 5px 5px; float: left; height: 78px; width: 68px; text-align: center;margin-right: 25px;margin-top:08px;line-height:10px;} .upload_container label{display:block;width:80px;text-align:right;}               .preview_area span{font-size: 10px;font-variant: small-caps;line-height: 07px;} .max_w_h{width:68px; max-height:78px;}     .small_cbox{width:07px;height:07px;margin: 0px 2px;}</style>';
if (is_ie8())     echo '<style type="text/css" media="all">.file_input{width:310px;display: inline-block;} .upload_container{float:left;width:300px;height:80px;margin-left:55px} .preview_area{border: 1px solid rgb(204, 204, 204); -moz-border-radius: 5px 5px 5px 5px; float: left; height: 78px; width: 68px; text-align: center;margin-right: 25px;margin-top:05px;}                  .upload_container label{display:block;width:80px;text-align:right;}               .preview_area span{font-size: 10px;font-variant: small-caps;line-height: 07px;} .max_w_h{width:68px; max-height:78px;}     .small_cbox{width:07px;height:07px;margin: 0px 2px;}.sect_title {background: #fafafa;}</style>';
if (is_chrome())  echo '<style type="text/css" media="all">.file_input{width:310px;display: inline-block;} .upload_container{float:left;width:320px;height:80px;margin-left:45px} .preview_area{border: 1px solid rgb(204, 204, 204); -moz-border-radius: 5px 5px 5px 5px; float: left; height: 78px; width: 68px; text-align: center;margin-right: 25px;margin-top:08px;line-height:03px;} .upload_container label{display:block;width:80px;text-align:right;}               .preview_area span{font-size: 10px;font-variant: small-caps;line-height: 07px;} .max_w_h{width:68px; max-height:78px;}     .small_cbox{width:07px;height:07px;margin: 0px 2px;}</style>';
?>

<div id="outter_wrapper">
  <div id="inner_wrapper">
    <div id="profile">
      <div id="header"><a href="profile.php"><img src="images/title_profile.png" alt="" /></a></div>

<?php
$query="SELECT * FROM profiles";
$result=mysql_query($query);
$num=mysql_numrows($result);
//mysql_close();

$i=0;
echo '<center><form action="" method="post"><select name="id" id="id">';
echo '<option  value="xxx" >Select Profile From Database</option>';
while ($i < $num) {
if ((isset($_POST['id'])) && ($_POST['id'] == mysql_result($result,$i,"id"))){$selected = "selected";}else{$selected = "";}
$full_name = mysql_result($result,$i,"name")." ".mysql_result($result,$i,"position");
echo "<option  value=\"".mysql_result($result,$i,"id")."\" ".$selected.">".$full_name."</option>";
$i++;
}
echo '</select>';
echo '<input type="submit" name="submit" value="select"  class="db_select"/>';
if (isset($_POST['id'])){
echo '<input type="checkbox" name="delete1" id="delete1" value="1" />';
echo '<input type="submit" name="delete" id="delete" value="delete" />';
echo '<input type="checkbox" name="delete2" id="delete2" value="2" />';
}
echo "</form></center>";


if (isset($_POST['id'])){

$query="SELECT * FROM profiles WHERE `id` = ".filter_var($_POST['id'],FILTER_SANITIZE_STRING);
$result = mysql_query($query) or die (mysql_error());
$num=mysql_numrows($result);
$result = mysql_fetch_array($result);
//echo ("id: ".$result['0']."");

if (isset($result['id']))           $id	        = $result['id'];           else $id           = "";
if (isset($result['name']))         $p_name         = $result['name'];         else $p_name         = "";
if (isset($result['position']))     $p_position     = $result['position'];     else $p_position     = "";
if (isset($result['company']))      $p_company      = $result['company'];      else $p_company      = "";
if (isset($result['caddress']))     $p_caddress     = $result['caddress'];     else $p_caddress     = "";
if (isset($result['citystatezip'])) $p_citystatezip = $result['citystatezip']; else $p_citystatezip = "";
if (isset($result['cphone']))       $p_cphone       = $result['cphone'];       else $p_cphone       = "";
if (isset($result['hphone']))       $p_hphone       = $result['hphone'];       else $p_hphone       = "";
if (isset($result['ophone']))       $p_ophone       = $result['ophone'];       else $p_ophone       = "";
if (isset($result['bio']))          $p_bio          = $result['bio'];          else $p_bio          = "";
if (isset($result['photo']))        $p_photo        = $result['photo'];        else $p_photo        = "";
if (isset($result['email']))        $p_email        = $result['email'];        else $p_email        = "";
if (isset($result['website']))      $p_website      = $result['website'];      else $p_website      = "";
if (isset($result['facebook']))     $p_facebook     = $result['facebook'];     else $p_facebook     = "";
if (isset($result['twitter']))      $p_twitter      = $result['twitter'];      else $p_twitter      = "";
if (isset($result['linkedin']))     $p_linkedin     = $result['linkedin'];     else $p_linkedin     = "";
if (isset($result['logo']))         $p_logo         = $result['logo'];         else $p_logo         = "";



if ((isset($_POST['delete'])) && (isset($_POST['delete1'])) && (isset($_POST['delete2']))){
$target_path = $upload_path;
if (!empty($p_photo)) { $p_photo = end(explode('/',$p_photo)); $p_photo = $target_path.$p_photo; if (file_exists($p_photo)) unlink($p_photo); }
if (!empty($p_logo))  { $p_logo  = end(explode('/',$p_logo));  $p_logo  = $target_path.$p_logo;  if (file_exists($p_logo))  unlink($p_logo);  }
$query="DELETE FROM profiles WHERE `id` = $_POST[id]";
$result=mysql_query($query);
echo '<script type="text/javascript">/* <![CDATA[ */ window.location = "" /* ]]> */</script>';
}


if (preg_match("/^http/",$p_photo)) {$p_photo_link = $p_photo;unset($p_photo);}
if (preg_match("/^http/",$p_logo))  {$p_logo_link = $p_logo;unset($p_logo);}

//mysql_free_result($query);
$databased = "1";
}
?>

            <form method="post" action="profile_preview.php" enctype="multipart/form-data" target="profile_preview">

<?php $image_types = array('.png','.jpg','.jpeg','.gif','.bmp');?>

<div class="statistics"><span class="sect_title">Profile</span>
<p style="padding-left:20px">Use busniness information where avilable. If you do not want your personal info on the internet, simply leave the filed blank.</p><br />
              <label for="p_name">Name : </label>
              <input type="text" id="p_name" name="p_name" value="<?php if (isset($p_name)) echo $p_name;?>" />
              <label for="p_position">Position : </label>
              <input type="text" id="p_position" name="p_position" value="<?php if (isset($p_position)) echo $p_position; else echo $pre_p_position;?>" />
              <label for="p_email">Email : </label>
              <input type="text" id="p_email" name="p_email" value="<?php if (isset($p_email)) echo $p_email; else echo $pre_p_email;?>" />
              <br />
              <label for="p_company">Company : </label>
              <input type="text" id="p_company" name="p_company" value="<?php if (isset($p_company)) echo $p_company; else echo $pre_p_company;?>" />
              <label for="p_caddress">Address : </label>
              <input type="text" id="p_caddress" name="p_caddress" value="<?php if (isset($p_caddress)) echo $p_caddress; else echo $pre_p_caddress;?>" />
              <label for="p_citystatezip">City, St Zip : </label>
              <input type="text" id="p_citystatezip" name="p_citystatezip" value="<?php if (isset($p_citystatezip)) echo $p_citystatezip; else echo $pre_p_citystatezip;?>" />
              <br />
              <label for="p_cphone">Phone (C) : </label>
              <input type="text" id="p_cphone" name="p_cphone" value="<?php if (isset($p_cphone)) echo $p_cphone;?>" />
              <label for="p_ophone">Phone (O) : </label>
              <input type="text" id="p_ophone" name="p_ophone" value="<?php if (isset($p_ophone)) echo $p_ophone; else echo $pre_p_ophone;?>" />
              <label for="p_hphone">Phone (H) : </label>
              <input type="text" id="p_hphone" name="p_hphone" value="<?php if (isset($p_hphone)) echo $p_hphone;?>" />
              <br />
              <label for="p_website">Website : </label>
              <input type="text" id="p_website" name="p_website" value="<?php if (isset($p_website)) echo $p_website; else echo $pre_website1;?>" />
<br /><br /><p style="padding-left:20px">Tips for the phone numbers: If you only use a cell phone, but "Same" in the other two boxes. This will let the viewer know it is ok to contact you on your cell phone.</p>
</div>
              <br />
              <br />
<div class="description"><span class="sect_title">Biography</span>
              <textarea class="" rows="12" cols="113" name="p_bio"><?php if (isset($p_bio)) echo stripslashes($p_bio);?></textarea>
</div>
              <br />
              <br />
<div id="images" class="images"><span class="sect_title">Photo</span>
<p style="padding-left:20px">You can upload a photo OR you can link to a photo already on the internet</p><br />
<div class="center_images full_width">
<div class="full_width">

<?php
if (isset($p_photo)) $p_photo_txt = end(explode('/',$p_photo));
if (isset($p_photo_link)) $p_photo_link_txt = end(explode('/',$p_photo_link));
?>

<div class="upload_container">
<label for="p_photo">Upload Pic</label><input type="file" name="p_photo" id="p_photo" />
<?php if (!empty($p_photo)) { echo '<span class="span_current" >Current : <a href="'.$p_photo.'" rel="images" class="preview popup" title="'.$p_photo_txt.'" >'.$p_photo.'</a></span> <span class="remove_cbox">(remove<input type="checkbox" name="r_p_photo" value="1" class="small_cbox"/>)</span>'; } ?>
</div>
<div class="preview_area" id="preview-area99"><span>preview</span>
<?php if ((is_firefox()) && (empty($p_photo))) { echo '<img src="" id="image-preview99" class="max_w_h"/>'; }
elseif (!empty($p_photo)) {echo '<a href="'.$p_photo.'" rel="images" class="preview" title="'.$p_photo_txt.'" ><img src="'.$p_photo.'" alt="'.$p_photo_txt.'" class="max_w_h" /></a>';} ?>
</div>

<div class="upload_container">

              <label for="p_photo_link" style="width:120px;">Link To Photo : </label>
              <input type="text" id="p_photo_link" name="p_photo_link" value="<?php if (isset($p_photo_link)) echo $p_photo_link;?>" style="width:260px;" />
<span class="remove_cbox">(remove<input type="checkbox" name="r_p_photo_link" value="1" class="small_cbox"/>)</span>
</div>

<div class="preview_area" id="preview-area99"><span>preview</span>
<?php if ((is_firefox()) && (empty($p_photo_link))) { echo '<img src="" id="image-preview99" class="max_w_h"/>'; }
elseif (!empty($p_photo_link)) {echo '<a href="'.$p_photo_link.'" rel="images" class="preview" title="'.$p_photo_link_txt.'" ><img src="'.$p_photo_link.'" alt="'.$p_photo_link_txt.'" class="max_w_h" /></a>';} ?>
</div>

</div>
<div class="clear"></div>

</div></div>

<div id="images" class="images"><span class="sect_title">Logo</span>
<p style="padding-left:20px">You can upload a logo OR you can link to a logo already on the internet. For best results the logo should be 115px wide!</p><br />
<div class="center_images full_width">
<div class="full_width">

<?php
if (isset($p_logo)) $p_logo_txt = end(explode('/',$p_logo));
if (isset($p_logo_link)) $p_logo_link_txt = end(explode('/',$p_logo_link));
?>

<div class="upload_container">
<label for="p_logo" style="width:120px;">Upload Logo</label><input type="file" name="p_logo" id="p_logo" />
<?php if (!empty($p_logo)) { echo '<span class="span_current" >Current : <a href="'.$p_logo.'" rel="images" class="preview popup" title="'.$p_logo_txt.'" >'.$p_logo.'</a></span> <span class="remove_cbox">(remove<input type="checkbox" name="r_p_logo" value="1" class="small_cbox"/>)</span>'; } ?>
</div>
<div class="preview_area" id="preview-area99"><span>preview</span>
<?php if ((is_firefox()) && (empty($p_logo))) { echo '<img src="" id="image-preview99" class="max_w_h"/>'; }
elseif (!empty($p_logo)) {echo '<a href="'.$p_logo.'" rel="images" class="preview" title="'.$p_logo_txt.'" ><img src="'.$p_logo.'" alt="'.$p_logo_txt.'" class="max_w_h" /></a>';} ?>
</div>

<div class="upload_container">

<label for="p_logo_link" style="width:120px;">Link To Logo : </label>
<input type="text" id="p_logo_link" name="p_logo_link" value="<?php if (isset($p_logo_link)) echo $p_logo_link;?>" style="width:260px;" />
<span class="remove_cbox">(remove<input type="checkbox" name="r_p_logo_link" value="1" class="small_cbox"/>)</span>
</div>

<div class="preview_area" id="preview-area99"><span>preview</span>
<?php if ((is_firefox()) && (empty($p_logo_link))) { echo '<img src="" id="image-preview99" class="max_w_h"/>'; }
elseif (!empty($p_logo_link)) {echo '<a href="'.$p_logo_link.'" rel="images" class="preview" title="'.$p_logo_link_txt.'" ><img src="'.$p_logo_link.'" alt="'.$p_logo_link_txt.'" class="max_w_h" /></a>';} ?>
</div>

</div>
<div class="clear"></div>


</div></div>

<div id="images" class="images"><span class="sect_title">Social</span>
<p style="padding-left:20px">If you do not have an accout, simply leave the filed blank!</p><br />
              <label for="p_facebook">Facebook : </label>
              <input type="text" id="p_facebook" name="p_facebook" value="<?php if (isset($p_facebook)) echo $p_facebook;?>" />
              <label for="p_twitter">Twitter : </label>
              <input type="text" id="p_twitter" name="p_twitter" value="<?php if (isset($p_twitter)) echo $p_twitter;?>" />
              <label for="p_linkedin">Linkedin : </label>
              <input type="text" id="p_linkedin" name="p_linkedin" value="<?php if (isset($p_linkedin)) echo $p_linkedin;?>" />
              <br />
</div>


<div class="clear"></div>

<?php 
//because we cannot pre-populate the 'file' fileds, we must make them hidden fields
//so when the form is submitted they follow over to the next step.
if (!empty($id)) {
if (!empty($id))    { echo '<input type="hidden" id="id"       name="id"       value="'.$id.'" />'."\n"; }
if (!empty($p_photo)) { echo '<input type="hidden" id="db_p_photo" name="db_p_photo" value="'.$p_photo.'" />'."\n"; }
if (!empty($p_logo))  { echo '<input type="hidden" id="db_p_logo"  name="db_p_logo"  value="'.$p_logo.'" />'."\n"; }

} ?>

</div>


              <input type="submit" name="submit" value="Preview" id="preview_button"/>
            </form>
<p style="text-align:center;">&copy; 2010 <a href="http://www.fremonttech.com"><font color="#ff8c00">Fremont</font><font color="#000000">Tech</font></a> | <a href="<?php echo '?logout'; ?>" style="color:#F50F0F;">Logout</a></p>
</div>
</div>
</div>
<div class="clear" style=""></div>
<?php include('_footer.php') 
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