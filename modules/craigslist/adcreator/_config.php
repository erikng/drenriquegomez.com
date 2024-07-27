<?php
//lets see if the database has been setup and where the config file is
if (file_exists('db_config.php'))
    $setup_configs = file('db_config.php');
if (file_exists('../db_config.php'))
    $setup_configs = file('../db_config.php');
if (file_exists('../../db_config.php'))
    $setup_configs = file('../../db_config.php');
if (isset($setup_configs)) {
    $myServer = trim($setup_configs['2']);
    $myUser   = trim($setup_configs['4']);
    $myPass   = trim($setup_configs['5']);
    $myDB     = trim($setup_configs['3']);
    $dbconnect = mysql_connect($myServer, $myUser, $myPass) or die("Couldn't connect to SQL Server on $myServer");
    $dbselect = mysql_select_db($myDB, $dbconnect) or die("Our host is having SQL problems! If you see this message, wait a minute and refresh this page.");
    if ($dbselect == "1") {
        $db_enabled = "1";
    }
    $query  = "SELECT * FROM _settings";
    $result = mysql_query($query) or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $query . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());
    $num    = mysql_numrows($result);
    $result = mysql_fetch_array($result);
    //if (isset($result['id']))        $id           = $result['id'];
    if (isset($result['domain']))      $domain = unserialize($result['domain']);
    if (isset($result['show']))        $show = unserialize($result['show']);
    if (isset($result['website']))     $website = unserialize($result['website']);
    if (isset($result['comp_info']))   $comp_info = unserialize($result['comp_info']);
    if (isset($result['colors']))      $colors = unserialize($result['colors']);
    if (isset($result['title']))       $pre_title = $result['title'];
    if (isset($domain['main']))        $this_domain = $domain['main'];
    if (isset($domain['folder']))      $this_folder = $domain['folder'];
    if (isset($domain['uploads']))     $upload_path = $domain['uploads'];
    if (isset($show['warn']))          $show_wrn = $show['warn'];
    if (isset($show['expr']))          $show_exp = $show['expr'];
    if (isset($show['wysiwyg']))       $wysiwyg = $show['wysiwyg'];
    if (isset($show['menu']))          $show_menu = $show['menu'];
    if (isset($show['icon_size']))     $icon_size = $show['icon_size'];
    if (isset($show['logo']))          $logo = $show['logo'];
    if (isset($show['link_back']))     $link_back = $show['link_back'];
    if (isset($show['env_user']))      $env_user = $show['env_user'];
    if (isset($show['offset']))        $offset = $show['offset']; else $offset = "0";
    if (isset($show['show_real']))     $show_real = $show['show_real'];
    if (isset($show['show_gen']))      $show_gen = $show['show_gen'];
    if (isset($show['show_auto']))     $show_auto = $show['show_auto'];
    if (isset($show['show_prof']))     $show_prof = $show['show_prof'];
    if (isset($show['show_config']))   $show_config = $show['show_config'];
    if (isset($show['show_stats']))    $show_stats = $show['show_stats'];
    if (isset($show['show_cllink']))   $show_cllink = $show['show_cllink'];
    if (isset($website['website']))    $pre_website1 = $website['website'];
    if (isset($website['about']))      $pre_website2 = $website['about'];
    if (isset($website['contact']))    $pre_website3 = $website['contact'];
    if (isset($comp_info['cname']))    $company = $comp_info['cname'];
    if (isset($comp_info['address']))  $pre_address = $comp_info['address'];
    if (isset($comp_info['phone']))    $pre_phone = $comp_info['phone'];
    if (isset($comp_info['city']))     $pre_city = $comp_info['city'];
    if (isset($comp_info['county']))   $pre_county = $comp_info['county'];
    if (isset($comp_info['zipcode']))  $pre_zipcode = $comp_info['zipcode'];
    if (isset($comp_info['state']))    $pre_state = $comp_info['state'];
    if (isset($comp_info['email']))    $pre_email = $comp_info['email'];
    if (isset($colors['bg_color']))    $bg_color = $colors['bg_color'];
    if (isset($colors['fg_color']))    $fg_color = $colors['fg_color'];
    if (isset($colors['ft_color']))    $ft_color = $colors['ft_color'];
    if (isset($colors['hl_color']))    $hl_color = $colors['hl_color'];
    if (isset($result['popup']))       $popup = unserialize($result['popup']);
    if (isset($popup['popup_active'])) $popup_active = $popup['popup_active'];
    if (isset($popup['popup_title']))  $popup_title = $popup['popup_title'];
    if (isset($popup['popup_body']))   $popup_body = $popup['popup_body'];
    if (isset($popup['popup_link']))   $popup_link = $popup['popup_link'];
    $root                              = dirname(realpath(__FILE__)) . '/';
    $this_site                         = $this_domain . "/" . $this_folder . "/";
    $realestate                        = $this_site . "themes/realestate/";
    $automotive                        = $this_site . "themes/automotive/";
    $general                           = $this_site . "themes/general/";
    $logo                              = $this_site . "images/".$logo;
    $minify                            = array("\r","\n","\t","  ");
    $pre_p_position                    = ""; //"Broker";
    if (isset($comp_info['email']))    $pre_p_email = $comp_info['email'];
    if (isset($comp_info['cname']))    $pre_p_company = $comp_info['cname'];
    if (isset($comp_info['address']))  $pre_p_caddress = $comp_info['address'];
    if (isset($comp_info['phone']))    $pre_p_ophone = $comp_info['phone'];
    $offset                            = ($offset * 3600);
    $o_date                            = (mktime() - $offset);
    $now                               = (mktime() - $offset);
    $lapse1                            = "3888000"; //45 days in seconds - expired
    $lapse2                            = "3283200"; //38 days in seconds - warning
    if (isset($comp_info['city']) && isset($comp_info['state']) && isset($comp_info['zipcode']))
        $pre_p_citystatezip = $comp_info['city'] . " " . $comp_info['state'] . ". " . $comp_info['zipcode'];
} //end if isset $setup_configs

$image_types = array('.png','.jpg','.jpeg','.gif','.bmp');
$org_ext = array(".png",".jpg",".jpeg",".gif",".bmp");
$tmb_ext = array("_tmb.png","_tmb.jpg","_tmb.jpeg","_tmb.gif","_tmb.bmp");
$pri_ext = array("_pri.png","_pri.jpg","_pri.jpeg","_pri.gif","_pri.bmp");
/*----------------------------------------------------------*\
|                                                            |
|      ________)                         ______)             |
|     (, /                              (, /         /)      |
|       /___, __   _ ___   _____  _/_     /    _  _ (/       |
|    ) /     / (__(/_// (_(_) / (_(__  ) /   _(/_(__/ )_     |
|   (_/  ©2010 FremontTech              (_)                  |
|                                                            |
\*----------------------------------------------------------*/
?>