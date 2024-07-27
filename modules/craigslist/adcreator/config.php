<?php include('_header.php');
//show_path();
//echo "<pre>";print_r($_POST);echo "</pre>";
//echo "<pre>";print_r($_FILES);echo "</pre>";
$image_types = array('.png','.jpg','.jpeg','.gif','.bmp');

?>
<script type="text/javascript">
$(document).ready(function(){
$(".help_expire").colorbox({width:"860px", inline:true, href:"#help_expire"});
$(".help_warnings").colorbox({width:"860px", inline:true, href:"#help_warnings"});
$(".help_menu").colorbox({width:"860px", inline:true, href:"#help_menu"});
$(".help_wysiwyg").colorbox({width:"860px", inline:true, href:"#help_wysiwyg"});
$(".help_domain").colorbox({width:"860px", inline:true, href:"#help_domain"});
$(".help_title").colorbox({width:"860px", inline:true, href:"#help_title"});
$(".second_box").colorbox({width:"50%", inline:true, href:"#second_box"});
$(".help_linkback").colorbox({width:"860px", inline:true, href:"#help_linkback"});
$(".help_website").colorbox({width:"860px", inline:true, href:"#help_website"});
$(".help_show_menu").colorbox({width:"860px", inline:true, href:"#help_show_menu"});
$(".help_image_size").colorbox({width:"860px", inline:true, href:"#help_image_size"});
$(".help_conservation").colorbox({width:"860px", inline:true, href:"#help_conservation"});
});</script>
<style>
input[type="button"] {display:none;}
</style>
<?php 

if (isset($_POST['submit'])) {
  if (!empty($_FILES['logo_file']['tmp_name'])) {
    $rename = explode('.',$_FILES['logo_file']['name']);
    $logo = "logo.".end($rename);
    $target_path = "images/".$logo;
      if (move_uploaded_file($_FILES['logo_file']['tmp_name'], $target_path)) {echo "File is valid, and was successfully uploaded.\n";} else {echo "Upload failed";}
    $_POST['logo'] = $logo;
  }
}

if (isset($db_enabled)) {
    $query = "SELECT * FROM _settings";
    $result = mysql_query($query) or die(mysql_error());
    $num         = mysql_numrows($result);
    $result      = mysql_fetch_array($result);
    //echo ("show: ".$result['2']."");
if (isset($result['0']))           $id           = $result['0'];
if (isset($result['1']))           $domain       = unserialize($result['1']);
if (isset($result['4']))           $show         = unserialize($result['4']);
if (isset($result['5']))           $website      = unserialize($result['5']);
if (isset($result['6']))           $comp_info    = unserialize($result['6']);
if (isset($result['7']))           $colors       = unserialize($result['7']);
if (isset($result['8']))           $title        = $result['8'];
if (isset($domain['main']))        $this_domain  = $domain['main'];
if (isset($domain['folder']))      $this_folder  = $domain['folder'];
if (isset($domain['uploads']))     $uploads_dir  = $domain['uploads'];
if (isset($show['warn']))          $show_wrn     = $show['warn'];
if (isset($show['expr']))          $show_exp     = $show['expr'];
if (isset($show['wysiwyg']))       $wysiwyg      = $show['wysiwyg'];
if (isset($show['menu']))          $menu         = $show['menu'];
if (isset($show['icon_size']))     $icon_size    = $show['icon_size'];
if (isset($show['logo']))          $logo         = "images/".$show['logo'];
if (isset($show['link_back']))     $link_back    = $show['link_back'];
if (isset($show['env_user']))      $env_user     = $show['env_user'];
if (isset($show['offset']))        $offset       = $show['offset']; else $offset = "0";
if (isset($show['show_real']))     $show_real    = $show['show_real'];
if (isset($show['show_gen']))      $show_gen     = $show['show_gen'];
if (isset($show['show_auto']))     $show_auto    = $show['show_auto'];
if (isset($show['show_prof']))     $show_prof    = $show['show_prof'];
if (isset($show['show_config']))   $show_config  = $show['show_config'];
if (isset($show['show_stats']))    $show_stats   = $show['show_stats'];
if (isset($show['show_cllink']))   $show_cllink  = $show['show_cllink'];
if (isset($website['website']))    $website1     = $website['website'];
if (isset($website['about']))      $website2     = $website['about'];
if (isset($website['contact']))    $website3     = $website['contact'];
if (isset($comp_info['cname']))    $company      = $comp_info['cname'];
if (isset($comp_info['phone']))    $phone        = $comp_info['phone'];
if (isset($comp_info['city']))     $city         = $comp_info['city'];
if (isset($comp_info['county']))   $county       = $comp_info['county'];
if (isset($comp_info['state']))    $state        = $comp_info['state'];
if (isset($comp_info['zipcode']))  $zipcode      = $comp_info['zipcode'];
if (isset($comp_info['email']))    $email        = $comp_info['email'];
if (isset($colors['bg_color']))    $bg_color     = $colors['bg_color'];
if (isset($colors['fg_color']))    $fg_color     = $colors['fg_color'];
if (isset($colors['ft_color']))    $ft_color     = $colors['ft_color'];
if (isset($colors['hl_color']))    $hl_color     = $colors['hl_color'];
if (isset($result['9']))           $popup        = unserialize($result['9']);
if (isset($popup['popup_active'])) $popup_active = $popup['popup_active'];
if (isset($popup['popup_title']))  $popup_title  = $popup['popup_title'];
if (isset($popup['popup_body']))   $popup_body   = stripslashes(unserialize(base64_decode($popup['popup_body'])));
if (isset($popup['popup_link']))   $popup_link   = $popup['popup_link'];
$databased   = "1";
} //isset($db_enabled)

if ( (isset($_POST['r_logo'])) && ($_POST['r_logo'] == "1")) {
if (!empty($logo)) $logo = "images/".$logo;
if ((isset($logo)) && (file_exists($logo))) unlink($logo);
$_POST['logo'] = "";
}

if ((isset($_POST['submit'])) && (isset($db_enabled)) ) {

$_POST['uploads_dir'] = implode("/", array_filter(explode("/", $_POST['uploads_dir'])));
if (substr($_POST['uploads_dir'], -1) !== '/') $_POST['uploads_dir'] .= '/';
if (substr($_POST['this_folder'], -1) == '/') $_POST['this_folder'] = implode("/", array_filter(explode("/", $_POST['this_folder'])));
if (substr($_POST['this_domain'], -1) == '/') $_POST['this_domain'] = rtrim($_POST['this_domain'], "/");

    $domain    = serialize(array(
        'main'         => filter_var($_POST['this_domain'],FILTER_SANITIZE_STRING),
        'folder'       => filter_var($_POST['this_folder'],FILTER_SANITIZE_STRING),
        'uploads'      => filter_var($_POST['uploads_dir'],FILTER_SANITIZE_STRING)
    ));
    $show      = serialize(array(
        'warn'         => filter_var($_POST['show_wrn'],FILTER_SANITIZE_STRING),
        'expr'         => filter_var($_POST['show_exp'],FILTER_SANITIZE_STRING),
        'wysiwyg'      => filter_var($_POST['wysiwyg'],FILTER_SANITIZE_STRING),
        'menu'         => filter_var($_POST['menu'],FILTER_SANITIZE_STRING),
        'icon_size'    => filter_var($_POST['icon_size'],FILTER_SANITIZE_STRING),
        'logo'         => filter_var($_POST['logo'],FILTER_SANITIZE_STRING),
        'link_back'    => filter_var($_POST['link_back'],FILTER_SANITIZE_STRING),
        'env_user'     => filter_var($_POST['env_user'],FILTER_SANITIZE_STRING),
        'offset'       => filter_var($_POST['offset'],FILTER_SANITIZE_STRING),
        'show_real'    => filter_var($_POST['show_real'],FILTER_SANITIZE_STRING),
        'show_gen'     => filter_var($_POST['show_gen'],FILTER_SANITIZE_STRING),
        'show_auto'    => filter_var($_POST['show_auto'],FILTER_SANITIZE_STRING),
        'show_prof'    => filter_var($_POST['show_prof'],FILTER_SANITIZE_STRING),
        'show_config'  => filter_var($_POST['show_config'],FILTER_SANITIZE_STRING),
        'show_stats'   => filter_var($_POST['show_stats'],FILTER_SANITIZE_STRING),
        'show_cllink'  => filter_var($_POST['show_cllink'],FILTER_SANITIZE_STRING),

    ));
    $website   = serialize(array(
        'website'      => filter_var($_POST['website1'],FILTER_SANITIZE_STRING),
        'about'        => filter_var($_POST['website2'],FILTER_SANITIZE_STRING),
        'contact'      => filter_var($_POST['website3'],FILTER_SANITIZE_STRING)
    ));
    $comp_info = serialize(array(
        'cname'        => filter_var($_POST['company'],FILTER_SANITIZE_STRING),
        'phone'        => filter_var($_POST['phone'],FILTER_SANITIZE_STRING),
        'address'      => filter_var($_POST['address'],FILTER_SANITIZE_STRING),
        'city'         => filter_var($_POST['city'],FILTER_SANITIZE_STRING),
        'county'       => filter_var($_POST['county'],FILTER_SANITIZE_STRING),
        'state'        => filter_var($_POST['state'],FILTER_SANITIZE_STRING),
        'zipcode'      => filter_var($_POST['zipcode'],FILTER_SANITIZE_STRING),
        'email'        => filter_var($_POST['email'],FILTER_SANITIZE_STRING),
    ));
    $colors    = serialize(array(
        'bg_color'     => filter_var($_POST['bg_color'],FILTER_SANITIZE_STRING),
        'fg_color'     => filter_var($_POST['fg_color'],FILTER_SANITIZE_STRING),
        'ft_color'     => filter_var($_POST['ft_color'],FILTER_SANITIZE_STRING),
        'hl_color'     => filter_var($_POST['hl_color'],FILTER_SANITIZE_STRING)
    ));

    $popup    = serialize(array(
        'popup_active' => filter_var($_POST['popup_active'],FILTER_SANITIZE_STRING),
        'popup_title'  => filter_var($_POST['popup_title'],FILTER_SANITIZE_STRING),
        'popup_body'   => base64_encode(serialize($_POST['popup_body'])),
        'popup_link'   => filter_var($_POST['popup_link'],FILTER_SANITIZE_STRING)
    ));

    $title     = mb_convert_encoding($_POST['title'], 'HTML-ENTITIES', 'UTF-8');
    if (!empty($id)) {
        $query      = 'UPDATE `_settings` SET `domain`=\'' . $domain . '\', `show`=\'' . $show . '\', `website`=\'' . $website . '\', `comp_info`=\'' . $comp_info . '\', `colors`=\'' . $colors . '\', `title`=\'' . $title . '\', `popup`=\'' . $popup . '\' WHERE `id`=\'' . $id . '\'';
        $db_message = "<h1>The Database Has Been Updated</h1>";
        $result = mysql_query($query) or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $query . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());
    } //end update
    else {
        $query      = "INSERT INTO `_settings` (`id`,`domain`,`show`,`website`,`comp_info`,`colors`,`title`,`popup`)
        VALUES ('','$domain','$show','$website','$comp_info','$colors','$title','$popup')";
        $db_message = "<h2>The Database Has Beed Added To</h1>";
        $result = mysql_query($query) or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $query . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());
    } //end add to
echo '<script type="text/javascript">/* <![CDATA[ */ window.location = "" /* ]]> */</script>';
} //end database

if (isset($this_site))
$find_folder = $this_site;
//echo $find_folder."<br />";
$find_folder = rtrim(str_replace($dom."/","",$find_folder),'/');

?>

<div id="outter_wrapper">
  <div id="inner_wrapper">
    <div id="config">
      <div id="header"><a href="config.php"><img src="images/title_setup.png" alt="" /></a></div>
      <form method="post" action="" enctype="multipart/form-data">
        <?php if (isset($db_enabled)) { ?>
        <br />
        <br />
        <div class="statistics"><span class="sect_title">Configuration</span>
          <fieldset>
            <legend><strong>It is very important that these paths be correct!!</strong><small> - <a class="help_domain" href="#">Domain Help</a></small></legend>
            <label for="this_domain">This Domain : </label>
            <input type="text" id="this_domain" name="this_domain" value="<?php if (isset($this_domain)) echo $this_domain;?>" />
            <label for="this_folder">This Dir : </label>
            <input type="text" id="this_folder" name="this_folder" value="<?php if (isset($find_folder)) echo $find_folder;?>" />
            <label for="uploads_dir">Uploads Dir : </label>
            <input type="text" id="uploads_dir" name="uploads_dir" value="<?php if (isset($uploads_dir)) echo $uploads_dir; else echo "uploads/";?>" />
          </fieldset>
          <hr class="dotted" />
          <fieldset>
            <legend><strong>Show or Hide stuff</strong></legend>
            <div style="float:left;width:450px;text-align:center">
              <label for="wysiwyg">WYSIWYG Editor<a class="help_wysiwyg" href="#">*</a> : </label>
              <select name="wysiwyg" id="wysiwyg">
                <option  value="on" <?php if ((isset($wysiwyg)) && ($wysiwyg == "on")) echo "selected";?>>Show</option>
                <option  value="off" <?php if ((isset($wysiwyg)) && ($wysiwyg == "off")) echo "selected";?>>Hide</option>
              </select>
            </div>
            <div style="float:left;width:450px;text-align:center">
              <label for="show_wrn">Show Warnings : </label>
              <select name="show_wrn" id="show_wrn">
                <option  value="0" <?php if ((isset($show_wrn)) && ($show_wrn == "0")) echo "selected";?>>Off</option>
                <option  value="1" <?php if ((isset($show_wrn)) && ($show_wrn == "1")) echo "selected";?>>By Creation Date</option>
                <option  value="2" <?php if ((isset($show_wrn)) && ($show_wrn == "2")) echo "selected"; if (!isset($show_wrn)) echo "selected";?>>By Modified Date</option>
                <option  value="3" <?php if ((isset($show_wrn)) && ($show_wrn == "3")) echo "selected";?>>By Both Dates</option>
              </select>
            </div>
            <div style="float:left;width:450px;text-align:center">
              <label for="menu">Menu Location : </label>
              <select name="menu" id="menu">
                <option  value="bottom" <?php if ((isset($menu)) && ($menu == "bottom")) echo "selected"; if (!isset($menu)) echo "selected";?>>Bottom </option>
                <option  value="left"   <?php if ((isset($menu)) && ($menu == "left")) echo "selected";?>>Left</option>
                <option  value="both"   <?php if ((isset($menu)) && ($menu == "both")) echo "selected";?>>Both </option>
              </select>
            </div>
            <div style="float:left;width:450px;text-align:center">
              <label for="show_exp">Show Expiration : </label>
              <select name="show_exp" id="show_exp">
                <option  value="0" <?php if ((isset($show_exp)) && ($show_exp == "0")) echo "selected";?>>Off</option>
                <option  value="1" <?php if ((isset($show_exp)) && ($show_exp == "1")) echo "selected";?>>By Creation Date</option>
                <option  value="2" <?php if ((isset($show_exp)) && ($show_exp == "2")) echo "selected"; if (!isset($show_exp)) echo "selected";?>>By Modified Date</option>
                <option  value="3" <?php if ((isset($show_exp)) && ($show_exp == "3")) echo "selected";?>>By Both Dates</option>
              </select>
            </div>
            <div style="float:left;width:450px;text-align:center">
              <label for="icon_size">Menu Icon Size : </label>
              <select name="icon_size" id="icon_size">
                <option  value="16" <?php if ((isset($icon_size)) && ($icon_size == "16")) echo "selected";?>>16px </option>
                <option  value="32" <?php if ((isset($icon_size)) && ($icon_size == "32")) echo "selected";?>>32px</option>
                <option  value="48" <?php if ((isset($icon_size)) && ($icon_size == "48")) echo "selected"; if (!isset($icon_size)) echo "selected";?>>48px</option>
                <option  value="64" <?php if ((isset($icon_size)) && ($icon_size == "64")) echo "selected";?>>64px </option>
                <option  value="72" <?php if ((isset($icon_size)) && ($icon_size == "72")) echo "selected";?>>72px </option>
              </select>
            </div>
            <p style="float: left;margin:7px auto 0;width: 100%;"><small><a class="help_wysiwyg" href="#">WYSIWYG Help</a> | <a class="help_menu" href="#">Menu Location Help</a> | <a class="help_warnings" href="#">Show Warning Help</a> | <a class="help_expire" href="#">Show Expire Help</a></small></p>
          </fieldset>
          <hr class="dotted" />
          <fieldset>
            <legend><strong>Show or Hide Themes / Links / Menu / Buttons</strong><small> - <a class="help_show_menu" href="#">Help</a></small></legend>
            <div style="float:left;width:180px;text-align:center">
              <label for="show_real" style="width:100px">Real Estate : </label>
              <select name="show_real" id="show_real" style="">
                <option  value="1" <?php if ((isset($show_real)) && ($show_real == "1")) echo "selected";?>>Show</option>
                <option  value="0" <?php if ((isset($show_real)) && ($show_real == "0")) echo "selected";?>>Hide</option>
              </select>
            </div>
            <div style="float:left;width:180px;text-align:center">
              <label for="show_auto" style="width:100px">Automotive : </label>
              <select name="show_auto" id="show_auto" style="">
                <option  value="1" <?php if ((isset($show_auto)) && ($show_auto == "1")) echo "selected";?>>Show</option>
                <option  value="0" <?php if ((isset($show_auto)) && ($show_auto == "0")) echo "selected";?>>Hide</option>
              </select>
            </div>
            <div style="float:left;width:180px;text-align:center">
              <label for="show_gen" style="width:100px">General : </label>
              <select name="show_gen" id="show_gen" style="">
                <option  value="1" <?php if ((isset($show_gen)) && ($show_gen == "1")) echo "selected";?>>Show</option>
                <option  value="0" <?php if ((isset($show_gen)) && ($show_gen == "0")) echo "selected";?>>Hide</option>
              </select>
            </div>
            <div style="float:left;width:180px;text-align:center">
              <label for="show_prof" style="width:100px">Profile : </label>
              <select name="show_prof" id="show_prof" style="">
                <option  value="1" <?php if ((isset($show_prof)) && ($show_prof == "1")) echo "selected";?>>Show</option>
                <option  value="0" <?php if ((isset($show_prof)) && ($show_prof == "0")) echo "selected";?>>Hide</option>
              </select>
            </div>
            <div style="float:left;width:180px;text-align:center">
              <label for="show_config" style="width:100px">Config : </label>
              <select name="show_config" id="show_config" style="">
                <option  value="1" <?php if ((isset($show_config)) && ($show_config == "1")) echo "selected";?>>Show</option>
                <option  value="0" <?php if ((isset($show_config)) && ($show_config == "0")) echo "selected";?>>Hide</option>
              </select>
            </div>
            <div style="float:left;width:180px;text-align:center">
              <label for="show_stats" style="width:100px">Stats : </label>
              <select name="show_stats" id="show_stats" style="">
                <option  value="1" <?php if ((isset($show_stats)) && ($show_stats == "1")) echo "selected";?>>Show</option>
                <option  value="0" <?php if ((isset($show_stats)) && ($show_stats == "0")) echo "selected";?>>Hide</option>
              </select>
            </div>
            <div style="float:left;width:180px;text-align:center">
              <label for="show_cllink" style="width:100px">CraigsList : </label>
              <select name="show_cllink" id="show_cllink" style="">
                <option  value="1" <?php if ((isset($show_cllink)) && ($show_cllink == "1")) echo "selected";?>>Show</option>
                <option  value="0" <?php if ((isset($show_cllink)) && ($show_cllink == "0")) echo "selected";?>>Hide</option>
              </select>
            </div>
          </fieldset>
          <hr class="dotted" />
          <fieldset>
            <legend><strong>Time Correction</strong></legend>
            <div style="float:left;width: 33%; text-align:center">Server Time : <br />
              <?php echo swap_date(time());?></div>
            <div style="float:left;width: 33%; text-align:center">
              <label for="offset">Offset (hours): </label>
              <select name="offset" id="offset">
                <option  value="12"  <?php if ((isset($offset)) && ($offset ==  "12")) echo "selected";?>>-12</option>
                <option  value="11"  <?php if ((isset($offset)) && ($offset ==  "11")) echo "selected";?>>-11</option>
                <option  value="10"  <?php if ((isset($offset)) && ($offset ==  "10")) echo "selected";?>>-10</option>
                <option  value="9"   <?php if ((isset($offset)) && ($offset ==   "9")) echo "selected";?>>- 9</option>
                <option  value="8"   <?php if ((isset($offset)) && ($offset ==   "8")) echo "selected";?>>- 8</option>
                <option  value="7"   <?php if ((isset($offset)) && ($offset ==   "7")) echo "selected";?>>- 7</option>
                <option  value="6"   <?php if ((isset($offset)) && ($offset ==   "6")) echo "selected";?>>- 6</option>
                <option  value="5"   <?php if ((isset($offset)) && ($offset ==   "5")) echo "selected";?>>- 5</option>
                <option  value="4"   <?php if ((isset($offset)) && ($offset ==   "4")) echo "selected";?>>- 4</option>
                <option  value="3"   <?php if ((isset($offset)) && ($offset ==   "3")) echo "selected";?>>- 3</option>
                <option  value="2"   <?php if ((isset($offset)) && ($offset ==   "2")) echo "selected";?>>- 2</option>
                <option  value="1"   <?php if ((isset($offset)) && ($offset ==   "1")) echo "selected";?>>- 1</option>
                <option  value="0"   <?php if ((isset($offset)) && ($offset ==   "0")) echo "selected"; elseif (!isset($offset)) echo "selected"; ?>> 0 </option>
                <option  value="-1"  <?php if ((isset($offset)) && ($offset ==  "-1")) echo "selected";?>>+ 1</option>
                <option  value="-2"  <?php if ((isset($offset)) && ($offset ==  "-2")) echo "selected";?>>+ 2</option>
                <option  value="-3"  <?php if ((isset($offset)) && ($offset ==  "-3")) echo "selected";?>>+ 3</option>
                <option  value="-4"  <?php if ((isset($offset)) && ($offset ==  "-4")) echo "selected";?>>+ 4</option>
                <option  value="-5"  <?php if ((isset($offset)) && ($offset ==  "-5")) echo "selected";?>>+ 5</option>
                <option  value="-6"  <?php if ((isset($offset)) && ($offset ==  "-6")) echo "selected";?>>+ 6</option>
                <option  value="-7"  <?php if ((isset($offset)) && ($offset ==  "-7")) echo "selected";?>>+ 7</option>
                <option  value="-8"  <?php if ((isset($offset)) && ($offset ==  "-8")) echo "selected";?>>+ 8</option>
                <option  value="-9"  <?php if ((isset($offset)) && ($offset ==  "-9")) echo "selected";?>>+ 9</option>
                <option  value="-10" <?php if ((isset($offset)) && ($offset == "-10")) echo "selected";?>>+10</option>
                <option  value="-11" <?php if ((isset($offset)) && ($offset == "-11")) echo "selected";?>>+11</option>
                <option  value="-12" <?php if ((isset($offset)) && ($offset == "-12")) echo "selected";?>>+12</option>
              </select>
            </div>
            <?php if (isset($offset)) { ?>
            <div style="float:left;width: 33%; text-align:center">Corrected Time : <br />
              <?php echo swap_date((time()-($offset * 3600)));?></div>
            <?php } ?>
          </fieldset>
          <hr class="dotted" />
          <fieldset>
            <legend><strong>Logo</strong></legend>
            <div class="upload_container" style="width: 250px;">
              <label for="logo_file">Logo : </label>
              <input type="file" name="logo_file" id="logo_file" />
              <?php if ( (!empty($logo)) && (file_exists($logo)) ) { echo '<span class="span_current" >Current : <a href="'.$logo.'" rel="images2" class="preview popup" title="Logo - '.$logo.'" >'.array_pop(explode('/',$logo)).'</a></span> <span class="remove_cbox">(remove <input '.$disabled.' type="checkbox" name="r_logo" value="1" class="small_cbox"/>)</span>'; } ?>
            </div>
            <div class="preview_area" id="preview-area00" style="width:550px; margin-left:20px;"><span>Preview - Scaled To Fit</span>
              <?php if ((is_firefox()) && (empty($logo))) { echo '<img src="" id="image-preview00" style="width:550px;" />'; }
                elseif ( (!empty($logo)) && (file_exists($logo)) ) {echo '<a href="'.$logo.'" rel="images" class="preview" title="Logo - '.$logo.'" ><img src="'.$logo.'" alt="'.$logo.'"  style="width:550px;" /></a>';} ?>
            </div>
            <br class="clear" />
            <p style="text-align:center">For Best Results the logo should be 960px X 100px and a corner radius of 13px! Use included logo.psd file</p>
          </fieldset>
          <hr class="dotted" />
          <fieldset>
            <legend><strong>Back Link</strong><small> - <a class="help_linkback" href="#">Link Back Help</a></small></legend>
            <div style="float:left;width:400px;text-align:center">
              <label for="link_back">Show Link Back : </label>
              <select name="link_back" id="link_back">
                <option  value="1" <?php if ((isset($link_back)) && ($link_back == "1")) echo "selected"; if (!isset($link_back)) echo "selected"; ?>>Yes</option>
                <option  value="0" <?php if ((isset($link_back)) && ($link_back == "0")) echo "selected";?>>No</option>
              </select>
            </div>
            <div style="float:left;width:400px;text-align:center">
              <label for="env_user">Envato User Name : </label>
              <input type="text" id="env_user" name="env_user" value="<?php if (isset($env_user)) echo $env_user; else echo "FremontTech";?>" />
            </div>
            <br class="clear" />
            <p style="text-align:center">Make money while your making money! Simply allow the Link Back, put your Envato User name into the next box.</p>
          </fieldset>
        </div>
        <br />
        <br />
        <div class="statistics"><span class="sect_title">Default Information</span>
          <fieldset>
            <legend><strong>Enter the full website address and pages</strong><small> - <a class="help_website" href="#">Tips</a></small></legend>
            <label for="website1" style="width:100px;">Website : </label>
            <input type="text" id="website1" name="website1" value="<?php if (isset($website1)) echo $website1; ?>" />
            <label for="website2" style="width:100px;">About Us : </label>
            <input type="text" id="website2" name="website2" value="<?php if (isset($website2)) echo $website2; ?>" />
            <label for="website3" style="width:100px;">Contact Us : </label>
            <input type="text" id="website3" name="website3" value="<?php if (isset($website3)) echo $website3; else echo $this_site."contact.php";?>" />
          </fieldset>
          <hr class="dotted" />
          <fieldset>
            <legend><strong>Default Company Information.</strong></legend>
            <label for="company" style="width:100px;">Company : </label>
            <input type="text" id="company" name="company" value="<?php if (isset($company)) echo $company;?>" />
            <label for="phone" style="width:100px;">Phone : </label>
            <input type="text" id="phone" name="phone" value="<?php if (isset($pre_phone)) echo $phone; else echo "(555) 555-5555";?>" />
            <label for="email" style="width:100px;">Email Addy : </label>
            <input type="text" id="email" name="email" value="<?php if (isset($pre_email)) echo $email; else echo "Name@Address.com";?>" />
            <br />
            <label for="address" style="width:100px;">Address : </label>
            <input type="text" id="address" name="address" value="<?php if (isset($pre_address)) echo $pre_address; else echo "123 Street St.";?>" />
            <label for="city" style="width:100px;">City : </label>
            <input type="text" id="city" name="city" value="<?php if (isset($pre_city)) echo $pre_city; else echo "City";?>" />
            <label for="state" style="width:100px;">State : </label>
            <input type="text" id="state" name="state" value="<?php if (isset($pre_state)) echo $pre_state; else echo "2 Digit State Abbreviation";?>" />
            <br />
            <label for="zipcode" style="width:100px;">ZipCode : </label>
            <input type="text" id="zipcode" name="zipcode" value="<?php if (isset($pre_zipcode)) echo $zipcode; else echo "12345";?>" />
            <label for="county" style="width:100px;">County : </label>
            <input type="text" id="county" name="county" value="<?php if (isset($pre_county)) echo $county; else echo "County";?>" />
            <div style="display: block;float: right;width: 300px;">&nbsp;</div>
          </fieldset>
        </div>
        <br />
        <br />
        <div class="templates"><span class="sect_title">Default Template Colors</span>
          <div id="temp_holder" style="margin: 0 auto; text-align:center;">
            <?php include('colors.php');?>
            <div style="clear:both;"></div>
          </div>
        </div>
        <br />
        <br />
        <div class="statistics" style=" text-align:center;"><span class="sect_title">Default Fancy Title</span>
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
            
            <(&bull;&#768;&#191;&bull;&#769;)><!-- face --> <a class="other_symbols" href="#"><span style="font-size:20px;">S</span><span style="font-size:12px;display:inline-block;font-variant:small-caps;line-height:8px;text-align:left">'more<br />
            ymbols</span></a> </p>
          <label for="title">Title : </label>
          <input type="text" id="title" name="title" value="<?php if (isset($title)) echo $title; else if (isset($pre_title)) echo $pre_title;?>"  style="font-size:25px;width:700px;"/>
          <p style="text-align:center"><a class="help_title" href="#">Title Help</a> Simply copy and paste the symbols above into the Title to make it stand out!</p>
        </div>
        <br />
        <br />
        <div class="statistics" style="text-align:center;"><span class="sect_title">Imager PopUp</span>
          <p style="text-align:center;">When an image is clicked on in craigslist, it will open up a special page here on the<br />
            CraigsList Listing Tool that can optionally popup a slideshow and a secondary message.<br />
            Leave the Contact Link blank to use the built in contact form.</p>
          <br />
          <script type="text/javascript" src="<?php echo $this_site;?>ckeditor/ckeditor.js"></script>
          <link type="text/css" rel="stylesheet" href="<?php echo $this_site;?>ckeditor/_samples/sample.css" />
          <label for="popup_active">PopUp : </label>
          <select name="popup_active" id="popup_active">
            <option  value="active"   <?php if ((isset($popup_active)) && ($popup_active == "active")) echo "selected"; if (!isset($popup_active)) echo "selected";?>>Active </option>
            <option  value="inactive" <?php if ((isset($popup_active)) && ($popup_active == "inactive")) echo "selected";?>>Inactive</option>
          </select>
          <label for="popup_title">PopUp Title : </label>
          <input type="text" id="popup_title" name="popup_title" value="<?php if (isset($popup_title)) echo $popup_title;?>" />
          <label for="popup_link">Contact Link : </label>
          <input type="text" id="popup_link" name="popup_link" value="<?php if (!empty($popup_link)) echo $popup_link; ?>" title="Leave Blank To Use Built In Contact Form"/>
          <br />
          <br />
          <label for="popup_body">PopUp Body : </label>
          <textarea class="ckeditor" rows="12" cols="113" id="popup_body" name="popup_body"><?php if (isset($popup_body)) echo stripslashes($popup_body);?>
</textarea>
          <p style="text-align:center">After you &darr; Save &darr; these setting you can <a class="second_box" href="#">Preview the popup</a>!</p>
        </div>
        <?php } ?>
        <input <?php if (isset($disabled)) echo $disabled;?> type="submit" name="submit" value="Save" id="preview_button"/>
        <input type="hidden" value="<?php if(!empty($logo)) echo array_pop(explode('/',$logo)); ?>" name="logo" id="logo" />
      </form>
    </div>
    <p style="text-align:center;">&copy; 2010 <a href="http://www.fremonttech.com"><font color="#ff8c00">Fremont</font><font color="#000000">Tech</font></a> | <a href="<?php echo '?logout'; ?>" style="color:#F50F0F;">Logout</a></p>
  </div>
</div>
<div class="clear" style=""></div>
<div style='display:none'>
  <div id='help_warnings' style='padding:10px; background:#fff;'>
    <h3>Show Warnings</h3>
    <p> Off - <strong>Do NOT</strong> notify me of listings that will expire in a week!<br />
      By Creation Date - Show listings that will expire in less than a week based on <strong>origional creation date</strong><br />
      By Modified Date - Show listings that will expire in less than a week based on <strong>last updated date</strong><br />
      By Both Dates - Show listings that will expire in less than a week based on both <strong>origional and updated date</strong></p>
  </div>
</div>
<div style='display:none'>
  <div id='help_expire' style='padding:10px; background:#fff;'>
    <h3>Show Expiration</h3>
    <p> Off - <strong>Do NOT</strong> notify me when listings expire!<br />
      By Creation Date - Show listings that have expired based on <strong>origional creation date</strong><br />
      By Modified Date - Show listings that have expired based on <strong>last updated date</strong><br />
      By Both Dates - Show listings that have expired based on both <strong>origional and updated date</strong></p>
  </div>
</div>
<div style='display:none'>
  <div id='help_menu' style='padding:10px; background:#fff;'>
    <h3>Menu Location</h3>
    <p>To navigate around the Craigslist Listing Tool, you can put the menu on the left, bottom, or both.<br />
      If you have a screen resolution of less than 1024px wide, you will not be able to see the menu if it is on the left.</p>
  </div>
</div>
<div style='display:none'>
  <div id='help_wysiwyg' style='padding:10px; background:#fff;'>
    <h3><span style="color:red">W</span>hat <span style="color:red">Y</span>ou <span style="color:red">S</span>ee <span style="color:red">I</span>s <span style="color:red">W</span>hat <span style="color:red">Y</span>ou <span style="color:red">G</span>et</h3>
    <p>This does not always work with IE6.</p>
    <p>Craigslist is VERY picky about what colors can be used as background and font colors. The WYSIWYG allows you to change the background and font color, but not all colors are compatible!</p>
    <p>Please see the help documentation on how you can set your own "styles" so that they WILL work with craigslist!</p>
    <br />
    <p>If you experience performance edit the WYSIWYG Config file (ckeditor/config.js) and comment out line #5 config.scayt_autoStartup = true;</p>
  </div>
</div>
<div style='display:none'>
  <div id='help_domain' style='padding:10px; background:#fff;'>
    <h3>Domain Help</h3>
    <p>This Domain : The address of where Craigslist Listing Tool is located - (NO END SLASH)<br />
      This Folder : The folder where Craigslist Listing Tool is located (must be in the domain listed prior) (NO START OR END SLASH)<br />
      Uploads Dir : Where is the uploads folder? (must be in the domain listed prior) (NO START SLASH)<br />
      <br />
      for example : http://your-domain.com/clt<br />
      this domain : http://your-domain.com<br />
      this folder : clt<br />
      uploads dir : uploads/ </p>
  </div>
</div>
<div style='display:none'>
  <div id='help_title' style='padding:10px; background:#fff;'>
    <h3>Default Fancy Title</h3>
    <p>This is so you can easly reuse the same symbols in all your listings - "keeping a brand" - type of deal.</p>
  </div>
</div>
<div style='display:none'>
  <div id='second_box'  rel="images" style='padding:10px; background:#fff;'> <span style="font-size:40px;">
    <?php if (!empty($popup_title)) echo $popup_title;?>
    </span><br />
    <span style="">
    <?php if (!empty($popup_body)) echo $popup_body;?>
    </span>
    <?php
      $database = "automotive"; $vin = "123";
      if ($database == "automotive")  $item = "vin=".rawurlencode($vin);
      if ($database == "general")     $item = "title=".rawurlencode($title);
      if ($database == "real_estate") $item = "mls=".rawurlencode($mls);
    ?>
    <?php if (!empty($popup_link))
echo '<button id="config_button" onClick="parent.location=\''.$popup_link.'\'">Contact Us</button>';
else echo '<button id="config_button" onClick="parent.location=\'contact.php?'.$item.'\'">Contact Us</button>';?>
  </div>
</div>
<div style='display:none'>
  <div id='help_linkback' style='padding:10px; background:#fff;'>
    <h3>Link Back Help</h3>
    <p>Refer new users to any of the Envato Marketplaces and you'll receive 30% of their first purchase or cash deposit!</p>
    <br />
    <h2>We Made It Fair &amp; Simple!</h2>
    <p>If you will allow us to linkback to our Craigslist Tool on CodeCanyon - you will get the referral bonus! You scratch our back, we scratch yours!</p>
    <br />
    <h2>Here's how it works</h2>
    <p>At the very bottom of each craigslist post created with our tool, we have a very very small link. When you post your ad on craigslist, it will display that link at the very bottom of the ad. If someone clicks the link it will take them to CodeCanyon to view the Craigslist Tool. If they buy it (or any thing else) you will get 30% of their first transaction! So by helping us advertise our Craigslist Tool, you will get paid by the referral bonus!</p>
  </div>
</div>
<div style='display:none'>
  <div id='help_website' style='padding:10px; background:#fff;'>
    <h3>Website Help</h3>
    <p>If you do not have a website, leave the field blank!</p>
    <p>If you do not have an about us page, leave the field blank!</p>
    <p>If you do not have a contact us page, use the built in one<br />
      <code><?php echo $this_site."contact.php" ?></code></p>
  </div>
</div>
<div style='display:none'>
  <div id='help_show_menu' style='padding:10px; background:#fff;'>
    <h3>Show or hide Sections</h3>
    <p>Hide the sections you don't use. If you are a Real Estate Broker, chances are, you wont be selling automobiles - and vice versa.</p>
    <br />
    <p>To activate the Auto-Load, Config <strong>must</strong> be set to 'Show' <strong>and</strong> only one other section can be set to show. (profile does not count!)</p>
    <br />
    <p>If you 'Show' Real Estate, 'Hide' Automotive, 'Hide' General, and 'Show' Config - when you click the home button, it will auto-load Real Estate</p>
  </div>
</div>
<div style='display:none'>
  <div id='help_image_size' style='padding:10px; background:#fff;'>
    <h3>Max Image Size</h3>
    <p>Use a craigslist user click an image in the listing it will open up the CLT Imager page and start a slideshow. The Max Image Size determings how bing the images are for the slideshow. 600px is recommended.</p>
    <br />
  </div>
</div>
<div style='display:none'>
  <div id='help_conservation' style='padding:10px; background:#fff;'>
    <h3>Conservation</h3>
    <p><strong>Bandwidth</strong> - By conserving bandwidth we will take your uploaded images and create a thumbnail version of them for use on craigslist. The full image size will be the Max Image Size set in the previous field - use for the Imager. The thumbnail will be about 115px wide. This will slightly increase disk space useage.</p>
    <br />
    <p><strong>Disk Space</strong> - By conserving disk space no thumbnail will be created. Instead we will scale the images for use on cragislist. This will increase bandwidth useage.</p>
    <br />
  </div>
</div>
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