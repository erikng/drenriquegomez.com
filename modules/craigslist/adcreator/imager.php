<?php
if (isset($_GET['img'])) {
include('_header.php');
?>
<script type="text/javascript">
/* <![CDATA[ */
window.name = 'imager'
/* ]]> */
</script>


<?php
$get_number = $_GET['img'];

$break_up = explode('_',$get_number);
$database = array_shift($break_up);
$id = array_shift($break_up);
$img = implode('_',$break_up);

if ($database == "a") $database = "automotive";
if ($database == "g") $database = "general";
if ($database == "r") $database = "real_estate";

$query="SELECT * FROM $database WHERE `id` = ".$id."";
$result = mysql_query($query) or die (mysql_error());
$num=mysql_numrows($result);
$result = mysql_fetch_array($result);
//echo ("id: ".$result['0']."");
//echo "<pre>";
//print_r($result);
//echo "</pre>";

if (isset($result['id']))           $id           = $result['id'];

if ($database == "automotive") {
//just for automotive
if (isset($result['vin'])) $pull_specs = unserialize($result['vin']);
if (isset($pull_specs['phone']))        $phone = $pull_specs['phone'];                else $phone = "";
if (isset($pull_specs['price']))        $price = $pull_specs['price'];                else $price = "";
if (isset($pull_specs['year']))         $year = $pull_specs['year'];                  else $year = "";
if (isset($pull_specs['vin']))          $vin = $pull_specs['vin'];                    else $vin = "";
if (isset($pull_specs['make']))         $make = $pull_specs['make'];                  else $make = "";
if (isset($pull_specs['model']))        $model = $pull_specs['model'];                else $model = "";
if (isset($pull_specs['trim']))         $trim = $pull_specs['trim'];                  else $trim = "";
if (isset($pull_specs['doors']))        $doors = $pull_specs['doors'];                else $doors = "";
if (isset($pull_specs['miles']))        $miles = $pull_specs['miles'];                else $miles = "";
if (isset($pull_specs['transmission'])) $transmission = $pull_specs['transmission'];  else $transmission = "";
if (isset($pull_specs['engine']))       $engine = $pull_specs['engine'];              else $engine = "";
if (isset($pull_specs['fuel']))         $fuel = $pull_specs['fuel'];                  else $fuel = "";
if (isset($pull_specs['drivetrain']))   $drivetrain = $pull_specs['drivetrain'];      else $drivetrain = "";
if (isset($pull_specs['website1']))     $website1 = $pull_specs['website1'];          else $website1 = "";
if (isset($pull_specs['website2']))     $website2 = $pull_specs['website2'];          else $website2 = "";
if (isset($pull_specs['website3']))     $website3 = $pull_specs['website3'];          else $website3 = "";
//end only automotive
}

if ($database == "real_estate") {
//just for real estate
if (isset($result['mls'])) $pull_specs = unserialize($result['mls']);
if (isset($pull_specs['price']))        $price = $pull_specs['price'];                else $price = "";
if (isset($pull_specs['mls']))         $mls = $pull_specs['mls'];                     else $mls = "";
if (isset($pull_specs['phone']))        $phone = $pull_specs['phone'];                else $phone = "";
if (isset($pull_specs['address']))     $address = $pull_specs['address'];             else $address = "";
if (isset($pull_specs['city']))        $city = $pull_specs['city'];                   else $city = "";
if (isset($pull_specs['county']))      $county = $pull_specs['county'];               else $county = "";
if (isset($pull_specs['state']))       $state = $pull_specs['state'];                 else $state = "";
if (isset($pull_specs['bed']))         $bed = $pull_specs['bed'];                     else $bed = "";
if (isset($pull_specs['bath']))        $bath = $pull_specs['bath'];                   else $bath = "";
if (isset($pull_specs['garage']))      $garage = $pull_specs['garage'];               else $garage = "";
if (isset($pull_specs['year']))        $year = $pull_specs['year'];                   else $year = "";
if (isset($pull_specs['sqft']))        $sqft = $pull_specs['sqft'];                   else $sqft = "";
if (isset($pull_specs['lotsize']))     $lotsize = $pull_specs['lotsize'];             else $lotsize = "";
if (isset($pull_specs['website1']))     $website1 = $pull_specs['website1'];          else $website1 = "";
if (isset($pull_specs['website2']))     $website2 = $pull_specs['website2'];          else $website2 = "";
if (isset($pull_specs['website3']))     $website3 = $pull_specs['website3'];          else $website3 = "";
//end only real estate
}

if ($database == "general") {
//just for general
if (isset($result['location'])) $pull_specs = unserialize($result['location']);
if (isset($pull_specs['phone']))        $phone = $pull_specs['phone'];                else $phone = "";
if (isset($pull_specs['price']))        $price = $pull_specs['price'];                else $price = "";
if (isset($pull_specs['address']))     $address = $pull_specs['address'];             else $address = "";
if (isset($pull_specs['city']))        $city = $pull_specs['city'];                   else $city = "";
if (isset($pull_specs['county']))      $county = $pull_specs['county'];               else $county = "";
if (isset($pull_specs['state']))       $state = $pull_specs['state'];                 else $state = "";
if (isset($pull_specs['location']))     $location = $pull_specs['location'];          else $location = "";
if (isset($pull_specs['website1']))     $website1 = $pull_specs['website1'];          else $website1 = "";
if (isset($pull_specs['website2']))     $website2 = $pull_specs['website2'];          else $website2 = "";
if (isset($pull_specs['website3']))     $website3 = $pull_specs['website3'];          else $website3 = "";
//end only real estate
}

if (isset($result['template'])) $pull_template = unserialize($result['template']);
if (isset($pull_template['bg_color'])) $bg_color = $pull_template['bg_color'];          else $bg_color = "";
if (isset($pull_template['fg_color'])) $fg_color = $pull_template['fg_color'];          else $fg_color = "";
if (isset($pull_template['ft_color'])) $ft_color = $pull_template['ft_color'];          else $ft_color = "";
if (isset($pull_template['hl_color'])) $hl_color = $pull_template['hl_color'];          else $hl_color = "";
if (isset($pull_template['template'])) $temp_no  = $pull_template['template'];          else $template = "";
if (isset($pull_template['profile']))  $profile  = $pull_template['profile'];           else $profile = "";

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

if (isset($result['u_date'])) $pull_dates = unserialize($result['u_date']);
if (isset($pull_dates['o_date'])) $o_date = $pull_dates['o_date'];           else $o_date = "";
if (isset($pull_dates['u_date'])) $u_date = $pull_dates['u_date'];           else $u_dat = "";
if (isset($pull_dates['hits']))   $hits   = $pull_dates['hits'];             else $hits = "";
if (isset($pull_dates['hits_2'])) $hits_2 = $pull_dates['hits_2'];           else $hits_2 = "";

if (isset($result['description'])) $pull_descr = unserialize($result['description']);
if (isset($pull_descr['title']))  $title  = $pull_descr['title'];
if (isset($pull_descr['descr']))  $descr  = stripslashes(unserialize(base64_decode($pull_descr['descr'])));
if (isset($pull_descr['feat_1'])) { $feat_1 = unserialize(base64_decode($pull_descr['feat_1'])); if ($feat_1 != "") $feat_1 = explode("\n",$feat_1);}
if (isset($pull_descr['feat_2'])) { $feat_2 = unserialize(base64_decode($pull_descr['feat_2'])); if ($feat_2 != "") $feat_2 = explode("\n",$feat_2);}
if (isset($pull_descr['feat_3'])) { $feat_3 = unserialize(base64_decode($pull_descr['feat_3'])); if ($feat_3 != "") $feat_3 = explode("\n",$feat_3);}

 



if ((!empty($address)) && (!empty($city)) && (!empty($state))) {
    $g_addy    = str_replace(" ", "+", $address);
    $g_city    = str_replace(" ", "+", $city);
    $googlemap = "http://maps.google.com/?q=loc%3A" . $g_addy . "+" . $g_city . "+" . $state . "+US";
    $yahoomap  = "http://maps.yahoo.com/map?ard=1&q1=" . $g_addy . "+" . $g_city . "+" . $state . "+US#mvt=m&q1=" . $g_addy . "+" . $g_city . "+" . $state . "+US";
}


?>
<style type="text/css" media="all">
/* <![CDATA[ */
body { background-color:<?php echo $bg_color; ?> }
a.magic_button, a.magic_button span { background-color:#<?php echo swap_color($hl_color); ?>;}
a.magic_button:hover, a.magic_button:hover span { background-color:#<?php echo hover_color($hl_color); ?>; }
/* ]]> */
</style>
<table cellspacing="0" cellpadding="0" border="0" width="100%">
  <tr>
    <td align="center" bgcolor="<?php echo $bg_color;?>"><table cellspacing="0" cellpadding="0" border="0" width="960">
<?php if (isset($logo)) echo '<tr><td>&nbsp;</td></tr><tr><td border="0"><a href="'.$website1.'" target="_blank"><img src="'.$logo.'" border="0" width="960" /></a></td></tr>';?>
        <tr>
          <td><table cellpadding="0" cellspacing="0" width="960">
              <tr>
                <td colspan="3" bgcolor="<?php echo $bg_color;?>"><img src="<?php echo $this_site;?>images/top_rounded.png"></td>
              </tr>
              <tr>
                <td bgcolor="#eaeaea" width="250" align="left"><font color="<?php echo $ft_color;?>" size="5">&nbsp;<?php echo $price ?></font></td>


            <?php
            if ($database == "automotive")  { echo '<td bgcolor="#eaeaea" width="" align="center"><font color="'.$ft_color.'" size="5">'.$title.'</font></td>'; } 
            if ($database == "general")     { echo '<td bgcolor="#eaeaea" width="" align="center"><font color="'.$ft_color.'" size="5">'.$title.'</font></td>'; } 
            if ($database == "real_estate") { echo '<td bgcolor="#eaeaea" width="" align="center"><font color="'.$ft_color.'" size="5">'.$address.'</font></td>'; }


                if (isset($mls)) {          echo '<td bgcolor="#eaeaea" width="250" align="right"><font color="'.$ft_color.'" size="5"><font size="2">MLS : </font> '.$mls.' &nbsp;</font></td>'; }
                elseif (isset($vin)) {      echo '<td bgcolor="#eaeaea" width="250" align="right"><font color="'.$ft_color.'" size="5"><font size="2">VIN/Serial : </font> '. $vin.' &nbsp;</font></td>'; }
                elseif (isset($location)) { echo '<td bgcolor="#eaeaea" width="250" align="right"><font color="'.$ft_color.'" size="5"><font size="2">Location : </font> '. $location.'&nbsp;</font></td>'; } ?>

              </tr>
              <tr>
                <td colspan="3" bgcolor="<?php echo $fg_color;?>"><img src="<?php echo $this_site;?>images/top_square.png"></td>
              </tr>
            </table>
            <?php if ($database == "automotive") {?>
            <table align="center" border="0" cellpadding="0" cellspacing="0"  width="100%" bgcolor="<?php echo $fg_color;?>">
              <tr>
                <td colspan="6" align="center"><font color="<?php echo $hl_color;?>" size="6">Specifications</font></td>
              </tr>
              <?php if ((!empty($price)) || (!empty($vin))) { ?>
              <tr>
                <td width="150" align="right">&nbsp;</td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Price : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $price ?></font></td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">VIN / Stock : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $vin ?></font></td>
                <td width="150" align="left">&nbsp;</td>
              </tr>
              <?php } ?>
              <?php if ((!empty($make)) || (!empty($model))) { ?>
              <tr>
                <td width="150" align="right">&nbsp;</td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Make : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $make ?></font></td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Model : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $model ?></font></td>
                <td width="150" align="left">&nbsp;</td>
              </tr>
              <?php } ?>
              <?php if ((!empty($miles)) || (!empty($transmission))) { ?>
              <tr>
                <td width="150" align="right">&nbsp;</td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Miles : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $miles ?></font></td>
                <td width="101" align="right"><font color="<?php echo $ft_color;?>">Transmission : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $transmission ?></font></td>
                <td width="150" align="left">&nbsp;</td>
              </tr>
              <?php } ?>
              <?php if ((!empty($year)) || (!empty($engine))) { ?>
              <tr>
                <td width="150" align="right">&nbsp;</td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Year : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $year ?></font></td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Engine : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $engine ?></font></td>
                <td width="150" align="left">&nbsp;</td>
              </tr>
              <?php } ?>
              <?php if ((!empty($fuel)) || (!empty($drivetrain))) { ?>
              <tr>
                <td width="150" align="right">&nbsp;</td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Fuel : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $fuel ?></font></td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Drivetrain : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $drivetrain ?></font></td>
                <td width="150" align="left">&nbsp;</td>
              </tr>
              <?php } ?>
              <?php if ((!empty($googlemap)) || (!empty($yahoomap))) { ?>
              <tr>
                <td width="150" align="right">&nbsp;</td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Google Map : </font></td>
                <td align="left">&nbsp;<a href="<?php echo $googlemap;?>" target="_blank"><font color="<?php echo $hl_color;?>" size="2">Click Here</font></a></td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Yahoo Map : </font></td>
                <td align="left">&nbsp;<a href="<?php echo $yahoomap;?>" target="_blank"><font color="<?php echo $hl_color;?>" size="2">Click Here</font></a></td>
                <td width="150" align="left">&nbsp;</td>
              </tr>
              <?php } ?>
              <tr>
                <td colspan="6"><hr width="90%" size="1"></td>
              </tr>
            </table>
            <?php } ?>
            <?php if ($database == "general") {?>
            <table align="center" border="0" cellpadding="0" cellspacing="0"  width="100%" bgcolor="<?php echo $fg_color;?>">
              <tr>
                <td colspan="6" align="center"><font color="<?php echo $hl_color;?>" size="6">Specifications</font></td>
              </tr>
              <tr>
                <td width="150" align="right">&nbsp;</td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Price : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $price ?></font></td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Location : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $location ?></font></td>
                <td width="150" align="left">&nbsp;</td>
              </tr>
              <?php if ((!empty($address)) || (!empty($city))) { ?>
              <tr>
                <td width="150" align="right">&nbsp;</td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Address : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $address ?></font></td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">City : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $city ?></font></td>
                <td width="150" align="left">&nbsp;</td>
              </tr>
              <?php } ?>
              <?php if ((!empty($googlemap)) || (!empty($yahoomap))) { ?>
              <tr>
                <td width="150" align="right">&nbsp;</td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Google Map : </font></td>
                <td align="left">&nbsp;
                  <?php if (!empty($googlemap)) echo '<a href="'.$googlemap.'" target="_blank"><font color="'.$hl_color.'" size="2">Click Here</font></a>'; else echo "N/A"; ?></td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Yahoo Map : </font></td>
                <td align="left">&nbsp;
                  <?php if (!empty($yahoomap)) echo '<a href="'.$yahoomap.'" target="_blank"><font color="'.$hl_color.'" size="2">Click Here</font></a>'; else echo "N/A"; ?></td>
                <td width="150" align="left">&nbsp;</td>
              </tr>
              <?php } ?>
              <tr>
                <td colspan="6"><hr width="90%" size="1"></td>
              </tr>
            </table>
            <?php } ?>
            <?php if ($database == "real_estate") {?>
            <table align="center" border="0" cellpadding="0" cellspacing="0"  width="100%" bgcolor="<?php echo $fg_color;?>">
              <tr>
                <td colspan="6" align="center"><font color="<?php echo $hl_color;?>" size="6">Specifications</font></td>
              </tr>
              <?php if ((!empty($price)) || (!empty($mls))) { ?>
              <tr>
                <td width="150" align="right">&nbsp;</td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Price : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $price ?></font></td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">MLS : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $mls ?></font></td>
                <td width="150" align="left">&nbsp;</td>
              </tr>
              <?php } ?>
              <?php if ((!empty($address)) || (!empty($city))) { ?>
              <tr>
                <td width="150" align="right">&nbsp;</td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Address : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $address ?></font></td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">City : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $city ?></font></td>
                <td width="150" align="left">&nbsp;</td>
              </tr>
              <?php } ?>
              <?php if ((!empty($bed)) || (!empty($bath))) { ?>
              <tr>
                <td width="150" align="right">&nbsp;</td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Bed : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $bed ?></font></td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Bath : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $bath ?></font></td>
                <td width="150" align="left">&nbsp;</td>
              </tr>
              <?php } ?>
              <?php if ((!empty($year)) || (!empty($garage))) { ?>
              <tr>
                <td width="150" align="right">&nbsp;</td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Year : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $year ?></font></td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Garage : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $garage ?></font></td>
                <td width="150" align="left">&nbsp;</td>
              </tr>
              <?php } ?>
              <?php if ((!empty($sqft)) || (!empty($lotsize))) { ?>
              <tr>
                <td width="150" align="right">&nbsp;</td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">SQ. FT. : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $sqft ?></font></td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Lot Size : </font></td>
                <td align="left"><font color="<?php echo $ft_color;?>">&nbsp;<?php echo $lotsize ?></font></td>
                <td width="150" align="left">&nbsp;</td>
              </tr>
              <?php } ?>
              <?php if ((!empty($googlemap)) || (!empty($yahoomap))) { ?>
              <tr>
                <td width="150" align="right">&nbsp;</td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Google Map : </font></td>
                <td align="left">&nbsp;<a href="<?php echo $googlemap;?>" target="_blank"><font color="<?php echo $hl_color;?>" size="2">Click Here</font></a></td>
                <td width="100" align="right"><font color="<?php echo $ft_color;?>">Yahoo Map : </font></td>
                <td align="left">&nbsp;<a href="<?php echo $yahoomap;?>" target="_blank"><font color="<?php echo $hl_color;?>" size="2">Click Here</font></a></td>
                <td width="150" align="left">&nbsp;</td>
              </tr>
              <?php } ?>
              <tr>
                <td colspan="6"><hr width="90%" size="1"></td>
              </tr>
            </table>
            <?php } ?>
            <table border="0" cellpadding="0" cellspacing="0" width="960" align="center"  bgcolor="<?php echo $fg_color;?>">
              <tr align="center">
                <td colspan="6" align="center"><a href="<?php echo $this_site.$upload_path.$image00;?>" rel="images" title=""><img src="<?php echo $this_site.$upload_path.$image00;?>" border="0"  /></a></td>
              </tr>
              <tr align="center">
                <td>&nbsp;</td>
              </tr>
              <tr align="center">
                <td width="160px"><?php if (!empty($image01)) {?>
                  <a href="<?php echo $this_site.$upload_path.$image01;?>" rel="images" title=""><img src="<?php echo $this_site.$upload_path.$image01;?>" border="0" width="150px" /></a>
                  <?php } else { echo "&nbsp;"; } ?></td>
                <td width="160px"><?php if (!empty($image02)) {?>
                  <a href="<?php echo $this_site.$upload_path.$image02;?>" rel="images" title=""><img src="<?php echo $this_site.$upload_path.$image02;?>" border="0" width="150px" /></a>
                  <?php } else { echo "&nbsp;"; } ?></td>
                <td width="160px"><?php if (!empty($image03)) {?>
                  <a href="<?php echo $this_site.$upload_path.$image03;?>" rel="images" title=""><img src="<?php echo $this_site.$upload_path.$image03;?>" border="0" width="150px" /></a>
                  <?php } else { echo "&nbsp;"; } ?></td>
                <td width="160px"><?php if (!empty($image04)) {?>
                  <a href="<?php echo $this_site.$upload_path.$image04;?>" rel="images" title=""><img src="<?php echo $this_site.$upload_path.$image04;?>" border="0" width="150px" /></a>
                  <?php } else { echo "&nbsp;"; } ?></td>
                <td width="160px"><?php if (!empty($image05)) {?>
                  <a href="<?php echo $this_site.$upload_path.$image05;?>" rel="images" title=""><img src="<?php echo $this_site.$upload_path.$image05;?>" border="0" width="150px" /></a>
                  <?php } else { echo "&nbsp;"; } ?></td>
                <td width="160px"><?php if (!empty($image06)) {?>
                  <a href="<?php echo $this_site.$upload_path.$image06;?>" rel="images" title=""><img src="<?php echo $this_site.$upload_path.$image06;?>" border="0" width="150px" /></a>
                  <?php } else { echo "&nbsp;"; } ?></td>
              </tr>
              <tr align="center">
                <td>&nbsp;</td>
              </tr>
              <tr align="center">
                <td width="160px"><?php if (!empty($image07)) {?>
                  <a href="<?php echo $this_site.$upload_path.$image07;?>" rel="images" title=""><img src="<?php echo $this_site.$upload_path.$image07;?>" border="0" width="150px" /></a>
                  <?php } else { echo "&nbsp;"; } ?></td>
                <td width="160px"><?php if (!empty($image08)) {?>
                  <a href="<?php echo $this_site.$upload_path.$image08;?>" rel="images" title=""><img src="<?php echo $this_site.$upload_path.$image08;?>" border="0" width="150px" /></a>
                  <?php } else { echo "&nbsp;"; } ?></td>
                <td width="160px"><?php if (!empty($image09)) {?>
                  <a href="<?php echo $this_site.$upload_path.$image09;?>" rel="images" title=""><img src="<?php echo $this_site.$upload_path.$image09;?>" border="0" width="150px" /></a>
                  <?php } else { echo "&nbsp;"; } ?></td>
                <td width="160px"><?php if (!empty($image10)) {?>
                  <a href="<?php echo $this_site.$upload_path.$image10;?>" rel="images" title=""><img src="<?php echo $this_site.$upload_path.$image10;?>" border="0" width="150px" /></a>
                  <?php } else { echo "&nbsp;"; } ?></td>
                <td width="160px"><?php if (!empty($image11)) {?>
                  <a href="<?php echo $this_site.$upload_path.$image11;?>" rel="images" title=""><img src="<?php echo $this_site.$upload_path.$image11;?>" border="0" width="150px" /></a>
                  <?php } else { echo "&nbsp;"; } ?></td>
                <td width="160px"><?php if (!empty($image12)) {?>
                  <a href="<?php echo $this_site.$upload_path.$image12;?>" rel="images" title=""><img src="<?php echo $this_site.$upload_path.$image12;?>" border="0" width="150px" /></a>
                  <?php } else { echo "&nbsp;"; } ?></td>
              </tr>
              <tr align="center">
                <td>&nbsp;</td>
              </tr>
            </table>
<?php if ((!empty($feat_1)) || (!empty($feat_2)) || (!empty($feat_3))) { ?>
            <table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="<?php echo $fg_color;?>">
              <tr>
                <td colspan="5"><hr width="90%" size="1"></td>
              </tr>
              <tr>
                <td colspan="5" align="center"><font color="<?php echo $hl_color;?>" size="6">Features</font></td>
              </tr>
              <tr>
                <td width="100">&nbsp;</td>
                <td width="" align="left"><table width="100%" align="left" cellpadding="0" cellspacing="0" bgcolor="<?php echo $fg_color;?>">
                    <?php if (!empty($feat_1)) { foreach($feat_1 as $row=>$feature){if ($feature != "") echo '<tr><td><font color="'.$hl_color.'">&#9733; </font><font color="'.$ft_color.'">'.$feature.'</font></td></tr>';}} else echo "&nbsp;";?>
                  </table></td>
                <td width="" align="left"><table width="100%" align="left" cellpadding="0" cellspacing="0" bgcolor="<?php echo $fg_color;?>">
                    <?php if (!empty($feat_2)) { foreach($feat_2 as $row=>$feature){if ($feature != "") echo '<tr><td><font color="'.$hl_color.'">&#9733; </font><font color="'.$ft_color.'">'.$feature.'</font></td></tr>';}} else echo "&nbsp;";?>
                  </table></td>
                <td width="" align="left"><table width="100%" align="left" cellpadding="0" cellspacing="0" bgcolor="<?php echo $fg_color;?>">
                    <?php if (!empty($feat_3)) { foreach($feat_3 as $row=>$feature){if ($feature != "") echo '<tr><td><font color="'.$hl_color.'">&#9733; </font><font color="'.$ft_color.'">'.$feature.'</font></td></tr>';}} else echo "&nbsp;";?>
                  </table></td>
                <td width="">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="5"><hr width="90%" size="1"></td>
              </tr>
            </table>
<?php } ?>
            <table width="100%" cellspacing="10" cellpadding="0" border="0" bgcolor="<?php echo $fg_color;?>">
              <tr>
                <td align="center"><font color="<?php echo $hl_color;?>" size="6" align="center"><?php echo $title;?></font></td>
              </tr>
              <tr>
                <td align="center"><font color="<?php echo $ft_color;?>"><?php echo $descr;?></font></td>
              </tr>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="<?php echo $bg_color;?>">
              <?php if ((isset($profile)) && (!empty($profile))) include('themes/profile.php');?>
<tr>
<td bgcolor="<?php echo $fg_color;?>" width="50%">
    <?php
if ($database == "automotive")
    $item = "vin=" . rawurlencode($vin);
if ($database == "general")
    $item = "title=" . rawurlencode($title);
if ($database == "real_estate")
    $item = "mls=" . rawurlencode($mls);

$pos = strpos($popup_link,$this_site);
if($pos === false) {
echo '<a href="'.$popup_link.'" class="magic_button" style="float: right;margin-right: 50px;"><span>Contact Us</span></a>';
}
else {
echo '<a href="'.$this_site.'contact.php?'.$item.'" class="magic_button" style="float: right;margin-right: 50px;"><span>Contact Us</span></a>';
}
    
?> 
</td>
<td bgcolor="<?php echo $fg_color;?>" width="50%">
<a href="<?php echo $this_site;?>listings.php" class="magic_button" style="float: left;margin-left: 50px;"><span>Check Out Our Other Listings</span></a>
</td>
</tr>
              <tr>
                <td colspan="2"><img src="<?php echo $this_site;?>images/bottom_rounded.png" border="0"/></td>
              </tr>
              <?php if ($database == "real_estate") { ?>
              <tr align="center">
                <td colspan="2"><a href="http://www.craigslist.org/about/FHA" target="_blank"><img src="<?php echo $this_site;?>images/eho_logo.png" border="0"/></a></td>
              </tr>
              <?php } ?>

                <?php if ((!empty($link_back)) && ($link_back == "1")) {?>
                <tr align="center">
                  <td colspan="3"><font size="1">Craigslist Listing Tool by <a href="http://codecanyon.net/item/craigslist-listing-tool/158260?ref=<?php if (!empty($env_user)) echo $env_user; else echo "FremontTech";?>">FremontTech</a></font></td>
                </tr>
				<?php } else echo '<tr><td>&nbsp;</td></tr>';?>

            </table></td>
        </tr>
      </table></td>
  </tr>
</table>


<p style="text-align:center;margin-top:15px;">&copy; 2010 <a href="http://www.fremonttech.com">FremontTech</a></p>


<?php

//echo $hits_2."<br />";

//if ((isset($_SESSION['counted'])) && ($_SESSION['counted'] != $database.$id)) {
    if (isset($hits_2)) $hits_2++;
    if (!empty($id)) {
$insert_dates    = serialize(array('o_date'=>$o_date,'u_date'=>$u_date,'hits'=>$hits,'hits_2'=>$hits_2));
$query = 'UPDATE '.$database.' SET `u_date`=\''.$insert_dates.'\' WHERE `id`="'.$id.'"';
$result = mysql_query($query) or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $query . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());
    } //end if post db_id isset
    
//    $_SESSION['counted'] = $database.$id;
//}
//echo $hits_2."<br />";
?> 










<div style='display:none'>
  <div id='second_box'  rel="images" style='padding:10px; background:#fff;'> <span style="font-size:40px;">
    <?php if (!empty($popup_title)) echo $popup_title;?>
    </span><br />
    <span style="">
    <?php if (!empty($popup_body)) echo stripslashes(unserialize(base64_decode($popup_body)));;?>
    </span><br /><br />


<?php
if ($database == "automotive")
    $item = "vin=" . rawurlencode($vin);
if ($database == "general")
    $item = "title=" . rawurlencode($title);
if ($database == "real_estate")
    $item = "mls=" . rawurlencode($mls);
$pos = strpos($popup_link,$this_site);
if($pos === false) {
echo '<a href="'.$popup_link.'" class="magic_button" style="float: left;margin-right: 50px;"><span>Contact Us</span></a>';
}
else {
echo '<a href="'.$this_site.'contact.php?'.$item.'" class="magic_button" style="float: left;margin-right: 50px;"><span>Contact Us</span></a>';
}
   
?> 
<a href="<?php echo $this_site;?>listings.php" class="magic_button" style="float: left;margin-left: 50px;"><span>Check Out Our Other Listings</span></a>
 

  </div>
</div>
<?php include('_footer.php');
 } ?>







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