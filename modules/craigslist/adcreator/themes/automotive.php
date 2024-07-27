<?php include('../_header.php');
//Automotive
?>
<script>
<!--
window.name = 'automotive'
// -->
</script>
<div id="outter_wrapper">
  <div id="inner_wrapper">
    <div id="automotive">
      <div id="header"><a href="automotive.php"><img src="../images/title_automotive.png" alt="" /></a></div>



<?php
$query="SELECT * FROM automotive";
$result=mysql_query($query);
$num=mysql_numrows($result);
$expired_o = array();    $expired_u = array();    $warning_o = array();    $warning_u = array();
$i=0;
echo '<center><form action="" method="post"><select name="id" id="id">';
echo '<option  value="xxx" >Select Listing From Database</option>';
while ($i < $num) {
$id = mysql_result($result,$i,"id"); 
$vin = unserialize(mysql_result($result,$i,"vin")); 
$year = $vin['year'];
$make = $vin['make'];
$model = $vin['model'];
$dates = unserialize(mysql_result($result,$i,"u_date"));
$o_date = $dates['o_date'];
$u_date = $dates['u_date'];
if ((isset($_POST['id'])) && ($_POST['id'] == $id)){$selected = "selected";}else{$selected = "";}
$full_address = $year." ".$make." ".$model;
echo "<option  value=\"".$id."\" ".$selected.">".$full_address."</option>";
$or_date = $o_date;
$up_date = $u_date;
if((!empty($or_date)) && (($or_date+$lapse1)<=$now)){$expired_o[] = $full_address;}
if((!empty($or_date)) && (($or_date+$lapse2)<=$now) && (!in_array($full_address,$expired_o))){$warning_o[] = $full_address;}
if((!empty($up_date)) && (($up_date+$lapse1)<=$now)){$expired_u[] = $full_address;}
if((!empty($up_date)) && (($up_date+$lapse2)<=$now) && (!in_array($full_address,$expired_u))){$warning_u[] = $full_address;}
$i++;
unset($id, $vin, $year, $make, $model, $dates, $o_date, $u_date);
}
echo '</select>';
echo '<input type="submit" name="submit" value="select"  class="db_select"/>';
if ((isset($_POST['id']))&&($_POST['id'] != "xxx")){
echo '<input '.$disabled.' type="checkbox" name="delete1" id="delete1" value="1" />';
echo '<input '.$disabled.' type="submit" name="delete" id="delete" value="delete" />';
echo '<input '.$disabled.' type="checkbox" name="delete2" id="delete2" value="2" />';
}
echo "</form></center>";


if ((isset($_POST['id']))&&($_POST['id'] != "xxx")){


$query="SELECT * FROM automotive WHERE `id` = ".htmLawed($_POST['id'])."";
$result = mysql_query($query) or die (mysql_error());
$num=mysql_numrows($result);
$result = mysql_fetch_array($result);
//echo ("id: ".$result['0']."");

if (isset($result['id']))              $id = $result['id'];  

if (isset($result['vin'])) $pull_specs = unserialize($result['vin']);
if (isset($pull_specs['phone']))        $phone = $pull_specs['phone'];
if (isset($pull_specs['price']))        $price = $pull_specs['price'];
if (isset($pull_specs['year']))         $year = $pull_specs['year'];
if (isset($pull_specs['vin']))          $vin = $pull_specs['vin'];
if (isset($pull_specs['make']))         $make = $pull_specs['make'];
if (isset($pull_specs['model']))        $model = $pull_specs['model'];
if (isset($pull_specs['trim']))         $trim = $pull_specs['trim'];
if (isset($pull_specs['doors']))        $doors = $pull_specs['doors'];
if (isset($pull_specs['miles']))        $miles = $pull_specs['miles'];
if (isset($pull_specs['transmission'])) $transmission = $pull_specs['transmission'];
if (isset($pull_specs['engine']))       $engine = $pull_specs['engine'];
if (isset($pull_specs['fuel']))         $fuel = $pull_specs['fuel'];
if (isset($pull_specs['drivetrain']))   $drivetrain = $pull_specs['drivetrain'];
if (isset($pull_specs['website1']))     $website1 = $pull_specs['website1'];
if (isset($pull_specs['website2']))     $website2 = $pull_specs['website2'];
if (isset($pull_specs['website3']))     $website3 = $pull_specs['website3'];

if (isset($result['template'])) $pull_template = unserialize($result['template']);
if (isset($pull_template['bg_color'])) $bg_color = $pull_template['bg_color'];
if (isset($pull_template['fg_color'])) $fg_color = $pull_template['fg_color'];
if (isset($pull_template['ft_color'])) $ft_color = $pull_template['ft_color'];
if (isset($pull_template['hl_color'])) $hl_color = $pull_template['hl_color'];
if (isset($pull_template['template'])) $temp_no  = $pull_template['template'];
if (isset($pull_template['profile']))  $profile  = $pull_template['profile'];

if (isset($result['image'])) $pull_images = unserialize($result['image']);
if (isset($pull_images['image00']))    $image00 = str_replace($pri_ext, $org_ext, $pull_images['image00']);           else $image00 = "";
if (isset($pull_images['image01']))    $image01 = str_replace($tmb_ext, $org_ext, $pull_images['image01']);           else $image01 = "";
if (isset($pull_images['image02']))    $image02 = str_replace($tmb_ext, $org_ext, $pull_images['image02']);           else $image02 = "";
if (isset($pull_images['image03']))    $image03 = str_replace($tmb_ext, $org_ext, $pull_images['image03']);           else $image03 = "";
if (isset($pull_images['image04']))    $image04 = str_replace($tmb_ext, $org_ext, $pull_images['image04']);           else $image04 = "";
if (isset($pull_images['image05']))    $image05 = str_replace($tmb_ext, $org_ext, $pull_images['image05']);           else $image05 = "";
if (isset($pull_images['image06']))    $image06 = str_replace($tmb_ext, $org_ext, $pull_images['image06']);           else $image06 = "";
if (isset($pull_images['image07']))    $image07 = str_replace($tmb_ext, $org_ext, $pull_images['image07']);           else $image07 = "";
if (isset($pull_images['image08']))    $image08 = str_replace($tmb_ext, $org_ext, $pull_images['image08']);           else $image08 = "";
if (isset($pull_images['image09']))    $image09 = str_replace($tmb_ext, $org_ext, $pull_images['image09']);           else $image09 = "";
if (isset($pull_images['image10']))    $image10 = str_replace($tmb_ext, $org_ext, $pull_images['image10']);           else $image10 = "";
if (isset($pull_images['image11']))    $image11 = str_replace($tmb_ext, $org_ext, $pull_images['image11']);           else $image11 = "";
if (isset($pull_images['image12']))    $image12 = str_replace($tmb_ext, $org_ext, $pull_images['image12']);           else $image12 = "";

if (isset($pull_images['radius']))   $radius = $pull_images['radius'];         else $radius = "0";
if (isset($pull_images['top_l']))    $top_l = $pull_images['top_l'];           else $top_l = "no";
if (isset($pull_images['top_r']))    $top_r = $pull_images['top_r'];           else $top_r = "no";
if (isset($pull_images['bot_l']))    $bot_l = $pull_images['bot_l'];           else $bot_l = "no";
if (isset($pull_images['bot_r']))    $bot_r = $pull_images['bot_r'];           else $bot_r = "no";


if (isset($result['u_date'])) $pull_dates = unserialize($result['u_date']);
if (isset($pull_dates['o_date'])) $o_date = $pull_dates['o_date'];
if (isset($pull_dates['u_date'])) $u_date = $pull_dates['u_date'];
if (isset($pull_dates['hits']))   $hits   = $pull_dates['hits'];
if (isset($pull_dates['hits_2'])) $hits_2 = $pull_dates['hits_2'];

if (isset($result['description'])) $pull_descr = unserialize($result['description']);
if (isset($pull_descr['title']))  $title  = $pull_descr['title'];
if (isset($pull_descr['descr']))  $descr  = stripslashes(unserialize(base64_decode($pull_descr['descr'])));
if (isset($pull_descr['feat_1'])) $feat_1 = unserialize(base64_decode($pull_descr['feat_1']));
if (isset($pull_descr['feat_2'])) $feat_2 = unserialize(base64_decode($pull_descr['feat_2']));
if (isset($pull_descr['feat_3'])) $feat_3 = unserialize(base64_decode($pull_descr['feat_3']));
$databased = "1";

if ($o_date == ""){unset($o_date);}
if ($u_date == ""){unset($u_date);}
if (empty($hits)) $hits="0";
if (empty($hits_2)) $hits_2="0";

//delete a listing from the database and remove associated photos
if ((isset($_POST['delete'])) && (isset($_POST['delete1'])) && (isset($_POST['delete2'])) && ($_POST['id'] !="14") ){
$target_path = "../".$upload_path;
if (!empty($pull_images['image00'])) { $image00 = $target_path.$pull_images['image00']; if (file_exists($image00)) unlink($image00); }
if (!empty($pull_images['image01'])) { $image01 = $target_path.$pull_images['image01']; if (file_exists($image01)) unlink($image01); }
if (!empty($pull_images['image02'])) { $image02 = $target_path.$pull_images['image02']; if (file_exists($image02)) unlink($image02); }
if (!empty($pull_images['image03'])) { $image03 = $target_path.$pull_images['image03']; if (file_exists($image03)) unlink($image03); }
if (!empty($pull_images['image04'])) { $image04 = $target_path.$pull_images['image04']; if (file_exists($image04)) unlink($image04); }
if (!empty($pull_images['image05'])) { $image05 = $target_path.$pull_images['image05']; if (file_exists($image05)) unlink($image05); }
if (!empty($pull_images['image06'])) { $image06 = $target_path.$pull_images['image06']; if (file_exists($image06)) unlink($image06); }
if (!empty($pull_images['image07'])) { $image07 = $target_path.$pull_images['image07']; if (file_exists($image07)) unlink($image07); }
if (!empty($pull_images['image08'])) { $image08 = $target_path.$pull_images['image08']; if (file_exists($image08)) unlink($image08); }
if (!empty($pull_images['image09'])) { $image09 = $target_path.$pull_images['image09']; if (file_exists($image09)) unlink($image09); }
if (!empty($pull_images['image10'])) { $image10 = $target_path.$pull_images['image10']; if (file_exists($image10)) unlink($image10); }
if (!empty($pull_images['image11'])) { $image11 = $target_path.$pull_images['image11']; if (file_exists($image11)) unlink($image11); }
if (!empty($pull_images['image12'])) { $image12 = $target_path.$pull_images['image12']; if (file_exists($image12)) unlink($image12); }
$query="DELETE FROM automotive WHERE `id` = ".htmLawed($_POST['id']);
$result=mysql_query($query);
echo '<script type="text/javascript">/* <![CDATA[ */ window.location = "" /* ]]> */</script>';
}//end isset delete

}

?>


<?php 

if(isset($o_date)){
    if(($now-$lapse1)>=$o_date) { $o_color = "red"; } else { $o_color = "green"; }
    $o_ago = $now - $o_date;
    $o_ago = ceil(($o_ago/3600)/24);
    if ($o_ago == "1") { $o_ago = "Today"; } elseif ($o_ago == "2") { $o_ago = "Yesterday"; } else { $o_ago = " ~ ".$o_ago." days ago"; }
}//end if o_date isset

if(isset($u_date)){
    if(($now-$lapse1)>$u_date){ $u_color = "red"; } else { $u_color = "green"; }
    $u_ago = $now - $u_date;
    $u_ago = ceil(($u_ago/3600)/24);
    if ($u_ago == "1") { $u_ago = "Today"; } elseif ($u_ago == "2") { $u_ago = "Yesterday"; } else { $u_ago = " ~ ".$u_ago." days ago"; }
}//end if u_date isset


if ( (isset($_POST['id'])) && ($_POST['id'] != "xxx") ) {?>
<div class="description">
<div style="width:810px;margin: -18px auto 0;font-size:12px;">
<div style="width: 400px;float:left;">This Craigslist Post has been viewed <span style="font-weight:bold;color:red"><?php if (isset($hits)) echo $hits; else echo 0;?></span> times<br /></div>
<div style="width: 400px;float:left;">Created On : <?php if (isset($o_date)) echo swap_date($o_date).' <span class="'.$o_color.'">'.$o_ago."</span>"; ?></div>
<br class="clear" />
<div style="width: 400px;float:left;"><span style="font-weight:bold;color:red"><?php if (isset($hits_2)) echo $hits_2; else echo 0;?></span> people have clicked an image for a better view.<br /></div>
<div style="width: 400px;float:left;">Updated On :  <?php if (isset($u_date)) echo swap_date($u_date).' <span class="'.$u_color.'">'.$u_ago."</span>";?></div>
</div></div>
<br /><br />
<?php } ?>



<form method="post" action="<?php echo $this_site;?>themes/automotive/result.php" enctype="multipart/form-data" target="preview">
  <div class="statistics"><span class="sect_title">Fancy Title</span>
    <p style="font-size:30px; text-align:center;"> &#9754;<!-- Finger Point Left --> 
      &#9755;<!-- Finger Point Right --> 
      &#9756;<!-- Finger Point Left --> 
      &#9757;<!-- Finger Point Up --> 
       &#8962;<!-- House --> 
       &#9787;<!-- Smiley --> 
       &#9733;<!-- Star --> 
       &#9819;<!-- Crown --> 
       &#10026;<!-- Star Ball --> 
       &#164;<!-- Sun --> 
       &#9824;<!-- Spade --> 
       &#9829;<!-- Heart --> 
       &#9830;<!-- Diamond --> 
       &#9658;<!-- Right --> 
       &#9668;<!-- Left --> 
      &#8592;<!-- Left Arrow --> 
      &#8594;<!-- Right Arrow --> 
      &#8596;<!-- Double Arrow --> 
       &#9600;<!-- Box --> 
       &#1769;<!-- Statue --> 
       &#9644;<!-- Bar --> 
      <(&bull;&#768;&#191;&bull;&#769;)><!-- face --> <a class="other_symbols" href="#"><span style="font-size:20px;">S</span><span style="font-size:12px;display:inline-block;font-variant:small-caps;line-height:8px;text-align:left">'more<br />ymbols</span></a>
    </p>
<label for="title">Title : </label>
<input type="text" id="title" name="title" maxlength="71" value="<?php if (isset($title)) echo $title; else echo $pre_title;?>"  style="font-size:25px;width:700px;"/>
<p style="text-align:center">Simply copy and paste the symbols above into the Title to make it stand out!</p>
</div>
<br />
<br />


<div class="statistics"><span class="sect_title">Statistics</span>


              <label for="price">Price : </label>
              <input type="text" id="price" name="price" value="<?php if (isset($price)) echo $price; else echo "$";?>" />
              <label for="vin">VIN / Stock : </label>
              <input type="text" id="vin" name="vin" value="<?php if (isset($vin)) echo $vin;?>" />
              <label for="trim">Trim : </label>
              <input type="text" id="trim" name="trim" value="<?php if (isset($trim)) echo $trim;?>" />
              <br />
              <label for="year">Year : </label>
              <input type="text" id="year" name="year" value="<?php if (isset($year)) echo $year;?>" />
              <label for="make">Make : </label>
              <input type="text" id="make" name="make" value="<?php if (isset($make)) echo $make;?>" />
              <label for="model">Model : </label>
              <input type="text" id="model" name="model" value="<?php if (isset($model)) echo $model;?>" />
              <label for="engine">Engine : </label>
              <input type="text" id="engine" name="engine" value="<?php if (isset($engine)) echo $engine;?>" />
              <label for="transmission">Transmission : </label>
              <input type="text" id="transmission" name="transmission" value="<?php if (isset($transmission)) echo $transmission;?>" />
              <label for="drivetrain">Drivetrain : </label>
              <input type="text" id="drivetrain" name="drivetrain" value="<?php if (isset($drivetrain)) echo $drivetrain;?>" />
              <label for="miles">Miles : </label>
              <input type="text" id="miles" name="miles" value="<?php if (isset($miles)) echo $miles;?>" />
              <label for="fuel">Fuel : </label>
              <input type="text" id="fuel" name="fuel" value="<?php if (isset($fuel)) echo $fuel;?>" />
              <label for="doors">Doors : </label>
              <input type="text" id="doors" name="doors" value="<?php if (isset($doors)) echo $doors;?>" />

              <hr class="dotted" style="width:75%; text-align:center" />
              <label for="phone">Phone : </label>
              <input type="text" id="phone" name="phone" value="<?php if (isset($title)) echo $phone; else echo $pre_phone;?>" />
              <label for="email" >Email Addy : </label>
              <input type="text" id="email" name="email" value="<?php if (isset($email)) echo $email; else echo $pre_email;?>" />
              <br />
              <label for="website1">Website : </label>
              <input type="text" id="website1" name="website1" value="<?php if (!empty($pre_website1)) echo $pre_website1.'"'; ?> />
              <label for="website2">About Us : </label>
              <input type="text" id="website2" name="website2" value="<?php if (!empty($pre_website2)) echo $pre_website2.'"'; ?> />
              <label for="website3">Contact Us : </label>
              <input type="text" id="website3" name="website3" value="<?php if (!empty($pre_website3)) echo $pre_website3.'"'; ?> />
              
              <br />

    <hr class="dotted" style="width:75%; text-align:center" />
    <p style="text-align:center">If you would like to display a map to a meeting location fill in the fileds below, if not, leave blank</p>
    <label for="address">Address : </label>
    <input type="text" id="address" name="address" value="<?php if (isset($address)) echo $address; else echo $pre_address;?>" />
    <label for="city">City : </label>
    <input type="text" id="city" name="city" value="<?php if (isset($city)) echo $city; else echo $pre_city;?>" />
    <label for="state">State : </label>
    <input type="text" id="state" name="state" value="<?php if (isset($state)) echo $state; else echo $pre_state;?>" />
    <br />
    <!--label for="county">County : </label>
    <input type="text" id="county" name="county" value="<?php if (isset($county)) echo $county; else echo $pre_county;?>" /-->
    <label for="zipcode">ZipCode : </label>
    <input type="text" id="zipcode" name="zipcode" value="<?php if (isset($zipcode)) echo $zipcode; else echo $pre_zipcode;?>" />

    <br />
</div>
              <br />
              <br />
<div class="description"><span class="sect_title">Features <span style="font-size:20px;vertical-align: 3px;">Aftermarket / Upgrades</span></span>
<div style="width:810px;margin:0 auto;">
<textarea cols="30" rows="5" style="width:260px;" name="feat_1" id="feat_1"><?php if (isset($feat_1)) echo $feat_1;?></textarea>
<textarea cols="30" rows="5" style="width:260px;" name="feat_2" id="feat_2"><?php if (isset($feat_2)) echo $feat_2;?></textarea>
<textarea cols="30" rows="5" style="width:260px;" name="feat_3" id="feat_3"><?php if (isset($feat_3)) echo $feat_3;?></textarea>
<p>One feature per line. For best results, put equal number of features in each box. (ex. 3-3-3 or 5-5-5 )</p>
</div></div>
              <br />
              <br />


<div class="description"><span class="sect_title">Description</span>
              <textarea class="" rows="12" cols="113" id="description" name="description"><?php if (isset($descr)) echo stripslashes($descr);?></textarea>
<p style="text-align:center;height: 1px;"><a class='uploader' href="<?php echo $this_site;?>upload_sizer.php?uploader">Upload an Image for the Description</a></p>
</div>
              <br />
              <br />
<div id="images" class="images"><span class="sect_title">Images</span>

<div style="width: 17%;display: inline-block;">
<label for="radius" style="width:100px">Radius </label> <select name="radius"><option value="0" <?php if ( (isset($radius)) && ($radius == "0") ) echo "selected";?> >0</option><option value="1" <?php if ( (isset($radius)) && ($radius == "1") ) echo "selected";?> >1</option><option value="2" <?php if ( (isset($radius)) && ($radius == "2") ) echo "selected";?> >2</option><option value="3" <?php if ( (isset($radius)) && ($radius == "3") ) echo "selected";?> >3</option><option value="4" <?php if ( (isset($radius)) && ($radius == "4") ) echo "selected";?> >4</option><option value="5" <?php if ( (isset($radius)) && ($radius == "5") ) echo "selected";?> >5</option><option value="6" <?php if ( (isset($radius)) && ($radius == "6") ) echo "selected";?> >6</option><option value="7" <?php if ( (isset($radius)) && ($radius == "7") ) echo "selected";?> >7</option><option value="8" <?php if ( (isset($radius)) && ($radius == "8") ) echo "selected";?> >8</option><option value="9" <?php if ( (isset($radius)) && ($radius == "9") ) echo "selected";?> >9</option><option value="10" <?php if ( (isset($radius)) && ($radius == "10") ) echo "selected";?> >10</option><option value="11" <?php if ( (isset($radius)) && ($radius == "11") ) echo "selected";?> >11</option><option value="12" <?php if ( (isset($radius)) && ($radius == "12") ) echo "selected";?> >12</option><option value="12" <?php if ( (isset($radius)) && ($radius == "13") ) echo "selected";?> >13</option><option value="14" <?php if ( (isset($radius)) && ($radius == "14") ) echo "selected";?> >14</option><option value="15" <?php if ( (isset($radius)) && ($radius == "15") ) echo "selected";?> >15</option><option value="16" <?php if ( (isset($radius)) && ($radius == "16") ) echo "selected";?> >16</option><option value="17" <?php if ( (isset($radius)) && ($radius == "17") ) echo "selected";?> >17</option><option value="18" <?php if ( (isset($radius)) && ($radius == "18") ) echo "selected";?> >18</option><option value="19" <?php if ( (isset($radius)) && ($radius == "19") ) echo "selected";?> >19</option><option value="20" <?php if ( (isset($radius)) && ($radius == "20") ) echo "selected";?> >20</option><option value="21" <?php if ( (isset($radius)) && ($radius == "21") ) echo "selected";?> >21</option><option value="22" <?php if ( (isset($radius)) && ($radius == "22") ) echo "selected";?> >22</option><option value="23" <?php if ( (isset($radius)) && ($radius == "23") ) echo "selected";?> >23</option><option value="23" <?php if ( (isset($radius)) && ($radius == "24") ) echo "selected";?> >24</option><option value="25" <?php if ( (isset($radius)) && ($radius == "25") ) echo "selected";?> >25</option></select>
</div>
<div style="width: 20%;display: inline-block;">
<label for="top_l" style="width:100px">Top Left </label> <select name="top_l"><option value="no" <?php if ( (isset($top_l)) && ($top_l == "no") ) echo "selected";?> >No</option><option value="yes" <?php if ( (isset($top_l)) && ($top_l == "yes") ) echo "selected";?>>Yes</option></select>
</div>
<div style="width: 20%;display: inline-block;">
<label for="top_r" style="width:100px">Top Right </label> <select name="top_r"><option value="no" <?php if ( (isset($top_r)) && ($top_r == "no") ) echo "selected";?>>No</option><option value="yes" <?php if ( (isset($top_l)) && ($top_l == "yes") ) echo "selected";?>>Yes</option></select>
</div>
<div style="width: 20%;display: inline-block;">
<label for="bot_l" style="width:100px">Bottom Left </label> <select name="bot_l"><option value="no" <?php if ( (isset($bot_l)) && ($bot_l == "no") ) echo "selected";?>>No</option><option value="yes" <?php if ( (isset($bot_l)) && ($bot_l == "yes") ) echo "selected";?>>Yes</option></select>
</div>
<div style="width: 20%;display: inline-block;">
<label for="bot_r" style="width:100px">Bottom Right </label> <select name="bot_r"><option value="no" <?php if ( (isset($bot_r)) && ($bot_r == "no") ) echo "selected";?>>No</option><option value="yes" <?php if ( (isset($bot_r)) && ($bot_r == "yes") ) echo "selected";?>>Yes</option></select>
</div>
<br class="clear" />

<br />
<div class="center_images full_width"><div class="success" style="float: right;width: 300px;"><span class="success_title">Tip</span>Pre-Size your images to be 600px wide.<br /><a class='uploader' href="<?php echo $this_site;?>upload_sizer.php?resizer">Use This Resizer If Needed</a></div>
<div class="full_width">
<div class="upload_container">
<label for="image00">Primary : </label><input type="file" name="image00" id="image00" />
<?php if (!empty($image00)) { echo '<span class="span_current" >Current : <a href="'.$this_site.$upload_path.$image00.'" rel="images2" class="preview popup" title="Image 00 - '.$image00.'" >'.$image00.'</a></span> <span class="remove_cbox">(remove<input type="checkbox" name="r_image00" value="1" class="small_cbox"/>)</span>'; } ?>
</div>
<div class="preview_area" id="preview-area00"><span>preview</span>
<?php if ((is_firefox()) && (empty($image00))) { echo '<img src="" id="image-preview00" class="max_w_h" />'; }
elseif (!empty($image00)) {echo '<a href="'.$this_site.$upload_path.$image00.'" rel="images2" class="preview" title="Image 00 - '.$image00.'" ><img src="'.$this_site.$upload_path.$image00.'" alt="'.$image00.'" class="max_w_h" /></a>';} ?>
</div>
<div class="clear"></div>

<div class="upload_container">
<label for="image01">Image 01 : </label><input type="file" name="image01" id="image01" />
<?php if (!empty($image01)) { echo '<span class="span_current" >Current : <a href="'.$this_site.$upload_path.$image01.'" rel="images2" class="preview popup" title="Image 01 - '.$image01.'" >'.$image01.'</a></span> <span class="remove_cbox">(remove<input type="checkbox" name="r_image01" value="1" class="small_cbox"/>)</span>'; } ?>
</div>
<div class="preview_area" id="preview-area01"><span>preview</span>
<?php if ((is_firefox()) && (empty($image01))) { echo '<img src="" id="image-preview01" class="max_w_h"/>'; }
elseif (!empty($image01)) {echo '<a href="'.$this_site.$upload_path.$image01.'" rel="images2" class="preview" title="Image 01 - '.$image01.'" ><img src="'.$this_site.$upload_path.$image01.'" alt="'.$image01.'"class="max_w_h" /></a>';} ?>
</div>

<div class="upload_container">
<label for="image02">Image 02 : </label><input type="file" name="image02" id="image02" />
<?php if (!empty($image02)) { echo '<span class="span_current" >Current : <a href="'.$this_site.$upload_path.$image02.'" rel="images2" class="preview popup" title="Image 02 - '.$image02.'" >'.$image02.'</a></span> <span class="remove_cbox">(remove<input type="checkbox" name="r_image02" value="1" class="small_cbox"/>)</span>'; } ?>
</div>
<div class="preview_area" id="preview-area02"><span>preview</span>
<?php if ((is_firefox()) && (empty($image02))) { echo '<img src="" id="image-preview02" class="max_w_h"/>'; }
elseif (!empty($image02)) {echo '<a href="'.$this_site.$upload_path.$image02.'" rel="images2" class="preview" title="Image 02 - '.$image02.'" ><img src="'.$this_site.$upload_path.$image02.'" alt="'.$image02.'"class="max_w_h" /></a>';} ?>
</div>

<div class="upload_container">
<label for="image03">Image 03 : </label><input type="file" name="image03" id="image03" />
<?php if (!empty($image03)) { echo '<span class="span_current" >Current : <a href="'.$this_site.$upload_path.$image03.'" rel="images2" class="preview popup" title="Image 03 - '.$image03.'" >'.$image03.'</a></span> <span class="remove_cbox">(remove<input type="checkbox" name="r_image03" value="1" class="small_cbox"/>)</span>'; } ?>
</div>
<div class="preview_area" id="preview-area03"><span>preview</span>
<?php if ((is_firefox()) && (empty($image03))) { echo '<img src="" id="image-preview03" class="max_w_h"/>'; }
elseif (!empty($image03)) {echo '<a href="'.$this_site.$upload_path.$image03.'" rel="images2" class="preview" title="Image 03 - '.$image03.'" ><img src="'.$this_site.$upload_path.$image03.'" alt="'.$image03.'"class="max_w_h" /></a>';} ?>
</div>

<div class="upload_container">
<label for="image04">Image 04 : </label><input type="file" name="image04" id="image04" />
<?php if (!empty($image04)) { echo '<span class="span_current" >Current : <a href="'.$this_site.$upload_path.$image04.'" rel="images2" class="preview popup" title="Image 04 - '.$image04.'" >'.$image04.'</a></span> <span class="remove_cbox">(remove<input type="checkbox" name="r_image04" value="1" class="small_cbox"/>)</span>'; } ?>
</div>
<div class="preview_area" id="preview-area04"><span>preview</span>
<?php if ((is_firefox()) && (empty($image04))) { echo '<img src="" id="image-preview04" class="max_w_h"/>'; }
elseif (!empty($image04)) {echo '<a href="'.$this_site.$upload_path.$image04.'" rel="images2" class="preview" title="Image 04 - '.$image04.'" ><img src="'.$this_site.$upload_path.$image04.'" alt="'.$image04.'"class="max_w_h" /></a>';} ?>
</div>

<div class="upload_container">
<label for="image05">Image 05 : </label><input type="file" name="image05" id="image05" />
<?php if (!empty($image05)) { echo '<span class="span_current" >Current : <a href="'.$this_site.$upload_path.$image05.'" rel="images2" class="preview popup" title="Image 05 - '.$image05.'" >'.$image05.'</a></span> <span class="remove_cbox">(remove<input type="checkbox" name="r_image05" value="1" class="small_cbox"/>)</span>'; } ?>
</div>
<div class="preview_area" id="preview-area05"><span>preview</span>
<?php if ((is_firefox()) && (empty($image05))) { echo '<img src="" id="image-preview05" class="max_w_h"/>'; }
elseif (!empty($image05)) {echo '<a href="'.$this_site.$upload_path.$image05.'" rel="images2" class="preview" title="Image 05 - '.$image05.'" ><img src="'.$this_site.$upload_path.$image05.'" alt="'.$image05.'"class="max_w_h" /></a>';} ?>
</div>

<div class="upload_container">
<label for="image06">Image 06 : </label><input type="file" name="image06" id="image06" />
<?php if (!empty($image06)) { echo '<span class="span_current" >Current : <a href="'.$this_site.$upload_path.$image06.'" rel="images2" class="preview popup" title="Image 06 - '.$image06.'" >'.$image06.'</a></span> <span class="remove_cbox">(remove<input type="checkbox" name="r_image06" value="1" class="small_cbox"/>)</span>'; } ?>
</div>
<div class="preview_area" id="preview-area06"><span>preview</span>
<?php if ((is_firefox()) && (empty($image06))) { echo '<img src="" id="image-preview06" class="max_w_h"/>'; }
elseif (!empty($image06)) {echo '<a href="'.$this_site.$upload_path.$image06.'" rel="images2" class="preview" title="Image 06 - '.$image06.'" ><img src="'.$this_site.$upload_path.$image06.'" alt="'.$image06.'"class="max_w_h" /></a>';} ?>
</div>

<div class="upload_container">
<label for="image07">Image 07 : </label><input type="file" name="image07" id="image07" />
<?php if (!empty($image07)) { echo '<span class="span_current" >Current : <a href="'.$this_site.$upload_path.$image07.'" rel="images2" class="preview popup" title="Image 07 - '.$image07.'" >'.$image07.'</a></span> <span class="remove_cbox">(remove<input type="checkbox" name="r_image07" value="1" class="small_cbox"/>)</span>'; } ?>
</div>
<div class="preview_area" id="preview-area07"><span>preview</span>
<?php if ((is_firefox()) && (empty($image07))) { echo '<img src="" id="image-preview07" class="max_w_h"/>'; }
elseif (!empty($image07)) {echo '<a href="'.$this_site.$upload_path.$image07.'" rel="images2" class="preview" title="Image 07 - '.$image07.'" ><img src="'.$this_site.$upload_path.$image07.'" alt="'.$image07.'"class="max_w_h" /></a>';} ?>
</div>

<div class="upload_container">
<label for="image08">Image 08 : </label><input type="file" name="image08" id="image08" />
<?php if (!empty($image08)) { echo '<span class="span_current" >Current : <a href="'.$this_site.$upload_path.$image08.'" rel="images2" class="preview popup" title="Image 08 - '.$image08.'" >'.$image08.'</a></span> <span class="remove_cbox">(remove<input type="checkbox" name="r_image08" value="1" class="small_cbox"/>)</span>'; } ?>
</div>
<div class="preview_area" id="preview-area08"><span>preview</span>
<?php if ((is_firefox()) && (empty($image08))) { echo '<img src="" id="image-preview08" class="max_w_h"/>'; }
elseif (!empty($image08)) {echo '<a href="'.$this_site.$upload_path.$image08.'" rel="images2" class="preview" title="Image 08 - '.$image08.'" ><img src="'.$this_site.$upload_path.$image08.'" alt="'.$image08.'"class="max_w_h" /></a>';} ?>
</div>

<div class="upload_container">
<label for="image09">Image 09 : </label><input type="file" name="image09" id="image09" />
<?php if (!empty($image09)) { echo '<span class="span_current" >Current : <a href="'.$this_site.$upload_path.$image09.'" rel="images2" class="preview popup" title="Image 09 - '.$image09.'" >'.$image09.'</a></span> <span class="remove_cbox">(remove<input type="checkbox" name="r_image09" value="1" class="small_cbox"/>)</span>'; } ?>
</div>
<div class="preview_area" id="preview-area09"><span>preview</span>
<?php if ((is_firefox()) && (empty($image09))) { echo '<img src="" id="image-preview09" class="max_w_h"/>'; }
elseif (!empty($image09)) {echo '<a href="'.$this_site.$upload_path.$image09.'" rel="images2" class="preview" title="Image 09 - '.$image09.'" ><img src="'.$this_site.$upload_path.$image09.'" alt="'.$image09.'"class="max_w_h" /></a>';} ?>
</div>

<div class="upload_container">
<label for="image10">Image 10 : </label><input type="file" name="image10" id="image10" />
<?php if (!empty($image10)) { echo '<span class="span_current" >Current : <a href="'.$this_site.$upload_path.$image10.'" rel="images2" class="preview popup" title="Image 10 - '.$image10.'" >'.$image10.'</a></span> <span class="remove_cbox">(remove<input type="checkbox" name="r_image10" value="1" class="small_cbox"/>)</span>'; } ?>
</div>
<div class="preview_area" id="preview-area10"><span>preview</span>
<?php if ((is_firefox()) && (empty($image10))) { echo '<img src="" id="image-preview10" class="max_w_h"/>'; }
elseif (!empty($image10)) {echo '<a href="'.$this_site.$upload_path.$image10.'" rel="images2" class="preview" title="Image 10 - '.$image10.'" ><img src="'.$this_site.$upload_path.$image10.'" alt="'.$image10.'"class="max_w_h" /></a>';} ?>
</div>

<div class="upload_container">
<label for="image11">Image 11 : </label><input type="file" name="image11" id="image11" />
<?php if (!empty($image11)) { echo '<span class="span_current" >Current : <a href="'.$this_site.$upload_path.$image11.'" rel="images2" class="preview popup" title="Image 11 - '.$image11.'" >'.$image11.'</a></span> <span class="remove_cbox">(remove<input type="checkbox" name="r_image11" value="1" class="small_cbox"/>)</span>'; } ?>
</div>
<div class="preview_area" id="preview-area11"><span>preview</span>
<?php if ((is_firefox()) && (empty($image11))) { echo '<img src="" id="image-preview11" class="max_w_h"/>'; }
elseif (!empty($image11)) {echo '<a href="'.$this_site.$upload_path.$image11.'" rel="images2" class="preview" title="Image 11 - '.$image11.'" ><img src="'.$this_site.$upload_path.$image11.'" alt="'.$image11.'"class="max_w_h" /></a>';} ?>
</div>

<div class="upload_container">
<label for="image12">Image 12 : </label><input type="file" name="image12" id="image12" />
<?php if (!empty($image12)) { echo '<span class="span_current" >Current : <a href="'.$this_site.$upload_path.$image12.'" rel="images2" class="preview popup" title="Image 12 - '.$image12.'" >'.$image12.'</a></span> <span class="remove_cbox">(remove<input type="checkbox" name="r_image12" value="1" class="small_cbox"/>)</span>'; } ?>
</div>
<div class="preview_area" id="preview-area12"><span>preview</span>
<?php if ((is_firefox()) && (empty($image12))) { echo '<img src="" id="image-preview12" class="max_w_h"/>'; }
elseif (!empty($image12)) {echo '<a href="'.$this_site.$upload_path.$image12.'" rel="images2" class="preview" title="Image 12 - '.$image12.'" ><img src="'.$this_site.$upload_path.$image12.'" alt="'.$image12.'"class="max_w_h" /></a>';} ?>
</div>

</div>































<div class="clear"></div>


</div></div><div class="clear"></div>

<?php 
//because we cannot pre-populate the 'file' fileds, we must make them hidden fields
//so when the form is submitted they follow over to the next step.
if (!empty($id)) {
$u_date = (mktime()-$offset);
if (!empty($id))       { echo '<input type="hidden" id="db_id"       name="db_id"       value="'.$id.'" />'."\n"; }
if (!empty($o_date))   { echo '<input type="hidden" id="db_o_date"   name="db_o_date"   value="'.$o_date.'" />'."\n"; }
if (!empty($u_date))   { echo '<input type="hidden" id="db_u_date"   name="db_u_date"   value="'.$u_date.'" />'."\n"; }
if (!empty($hits))     { echo '<input type="hidden" id="db_hits"     name="db_hits"     value="'.$hits.'" />'."\n"; }
if (!empty($hits_2))   { echo '<input type="hidden" id="db_hits_2"   name="db_hits_2"   value="'.$hits_2.'" />'."\n"; }
if (!empty($image00))  { echo '<input type="hidden" id="db_image00"  name="db_image00"  value="'.str_replace($org_ext, $pri_ext, $image00).'" />'."\n"; }
if (!empty($image01))  { echo '<input type="hidden" id="db_image01"  name="db_image01"  value="'.str_replace($org_ext, $tmb_ext, $image01).'" />'."\n"; }
if (!empty($image02))  { echo '<input type="hidden" id="db_image02"  name="db_image02"  value="'.str_replace($org_ext, $tmb_ext, $image02).'" />'."\n"; }
if (!empty($image03))  { echo '<input type="hidden" id="db_image03"  name="db_image03"  value="'.str_replace($org_ext, $tmb_ext, $image03).'" />'."\n"; }
if (!empty($image04))  { echo '<input type="hidden" id="db_image04"  name="db_image04"  value="'.str_replace($org_ext, $tmb_ext, $image04).'" />'."\n"; }
if (!empty($image05))  { echo '<input type="hidden" id="db_image05"  name="db_image05"  value="'.str_replace($org_ext, $tmb_ext, $image05).'" />'."\n"; }
if (!empty($image06))  { echo '<input type="hidden" id="db_image06"  name="db_image06"  value="'.str_replace($org_ext, $tmb_ext, $image06).'" />'."\n"; }
if (!empty($image07))  { echo '<input type="hidden" id="db_image07"  name="db_image07"  value="'.str_replace($org_ext, $tmb_ext, $image07).'" />'."\n"; }
if (!empty($image08))  { echo '<input type="hidden" id="db_image08"  name="db_image08"  value="'.str_replace($org_ext, $tmb_ext, $image08).'" />'."\n"; }
if (!empty($image09))  { echo '<input type="hidden" id="db_image09"  name="db_image09"  value="'.str_replace($org_ext, $tmb_ext, $image09).'" />'."\n"; }
if (!empty($image10))  { echo '<input type="hidden" id="db_image10"  name="db_image10"  value="'.str_replace($org_ext, $tmb_ext, $image10).'" />'."\n"; }
if (!empty($image11))  { echo '<input type="hidden" id="db_image11"  name="db_image11"  value="'.str_replace($org_ext, $tmb_ext, $image11).'" />'."\n"; }
if (!empty($image12))  { echo '<input type="hidden" id="db_image12"  name="db_image12"  value="'.str_replace($org_ext, $tmb_ext, $image12).'" />'."\n"; }
} ?>

<div class="templates"><span class="sect_title">Template</span>
<div id="temp_holder" >


<div style="width:100%">

<?php include('../colors.php');?>
</div>

<div style="clear:both; height:20px;"></div>
<hr class="dotted" />

<div class="temp_shell">
<div class="temp_box">
<label for="temp1"><img src="../images/temp_1.png" /></label></div>
<input type="radio" name="template" value="1" class="temp_button" id="temp1" <?php if ((isset($temp_no)) && ($temp_no == "1")) echo "checked"; if (!isset($temp_no)) echo "checked";?> />
</div>

<div class="temp_shell">
<div class="temp_box">
<label for="temp2"><img src="../images/temp_2.png" /></label></div>
<input type="radio" name="template" value="2" class="temp_button" id="temp2" <?php if ((isset($temp_no)) && ($temp_no == "2")) echo "checked";?> />
</div>

<div class="temp_shell">
<div class="temp_box">
<label for="temp3"><img src="../images/temp_3.png" /></label></div>
<input type="radio" name="template" value="3" class="temp_button" id="temp3" <?php if ((isset($temp_no)) && ($temp_no == "3")) echo "checked";?> />
</div>

<div class="temp_shell">
<div class="temp_box">
<label for="temp4"><img src="../images/temp_4.png" /></label></div>
<input type="radio" name="template" value="4" class="temp_button" id="temp4" <?php if ((isset($temp_no)) && ($temp_no == "4")) echo "checked";?> />
</div>

<div class="temp_shell">
<div class="temp_box">
<label for="temp5"><img src="../images/temp_5.png" /></label></div>
<input type="radio" name="template" value="5" class="temp_button" id="temp5" <?php if ((isset($temp_no)) && ($temp_no == "5")) echo "checked";?> />
</div>

<div style="clear:both;"></div>
<hr class="dotted" />


<div style="text-align:center;margin-top:20px;">
<p>Would you like to include a profile with this listing?</p>
<?php
$query="SELECT * FROM profiles";
$result=mysql_query($query);
$num=mysql_numrows($result);
if (empty($selected)) $selected = "";
$j=0;
echo '<select name="profile" id="profile">';
echo '<option  value="" '.$selected.'>Do Not Include Profile</option>';
while ($j < $num) {
if ((isset($profile)) && ($profile == mysql_result($result,$j,"id"))){$selected = "selected";}else{$selected = "";}
$full_name = mysql_result($result,$j,"name")." - ".mysql_result($result,$j,"position");
echo "<option  value=\"".mysql_result($result,$j,"id")."\" ".$selected.">".$full_name."</option>";
$j++;
}
echo '</select>';
?>
</div>

</div>
</div>


              <input type="submit" name="submit" value="Preview" id="preview_button"/>
            </form>


</div>
<p style="text-align:center;">&copy; 2010 <a href="http://www.fremonttech.com"><font color="#ff8c00">Fremont</font><font color="#000000">Tech</font></a> | <a href="<?php echo '?logout'; ?>" style="color:#F50F0F;">Logout</a></p>
</div>
</div>



<?php include('../_footer.php') ?>