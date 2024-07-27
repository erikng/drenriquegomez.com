<?php include('../../_header.php');
// Automotive
echo '<style>body{background-color:'.$bg_color.'}#show_message_boxes {bottom: 0px !important;}.delete, .expired, .success, .warning {margin:0}</style>';
if ($_SERVER['REMOTE_ADDR'] == "76.85.131.31") $disabled = "";
$target_path = "../../".$upload_path;
if (!empty($_FILES['image00']['tmp_name'])) { if (!file_exists($target_path.filter_var($_FILES['image00']['name'],FILTER_SANITIZE_STRING))) {$image00 = upload_primary(filter_var($_FILES['image00']['tmp_name'],FILTER_SANITIZE_STRING),filter_var($_FILES['image00']['name'],FILTER_SANITIZE_STRING),$target_path);} else {$image00 = filter_var($_FILES['image00']['name'],FILTER_SANITIZE_STRING); } }	 if (isset($_POST['image00'])) {$image00 = filter_var($_POST['image00'],FILTER_SANITIZE_STRING); }	 if (!empty($_POST['db_image00'])) { $image00 = filter_var($_POST['db_image00'],FILTER_SANITIZE_STRING); }	 if (isset($_POST['r_image00'])) {$image00x = filter_var($_POST['db_image00'],FILTER_SANITIZE_STRING); $image00 = "";}	if ((isset($_POST['r_image00_2'])) && (file_exists($target_path.str_replace($pri_ext, $org_ext, filter_var($_POST['image00'],FILTER_SANITIZE_STRING))))) { unlink($target_path.str_replace($pri_ext, $org_ext, filter_var($_POST['image00'],FILTER_SANITIZE_STRING))); if (file_exists($target_path.filter_var($_POST['image09'],FILTER_SANITIZE_STRING))) unlink($target_path.filter_var($_POST['image09'],FILTER_SANITIZE_STRING)); $image00=""; } if (empty($image00)) $image00 = "";
if (!empty($_FILES['image01']['tmp_name'])) { if (!file_exists($target_path.filter_var($_FILES['image01']['name'],FILTER_SANITIZE_STRING))) {$image01 = upload_thumb(filter_var($_FILES['image01']['tmp_name'],FILTER_SANITIZE_STRING),filter_var($_FILES['image01']['name'],FILTER_SANITIZE_STRING),$target_path);} else {$image01 = filter_var($_FILES['image01']['name'],FILTER_SANITIZE_STRING); } }	 if (isset($_POST['image01'])) {$image01 = filter_var($_POST['image01'],FILTER_SANITIZE_STRING); }	 if (!empty($_POST['db_image01'])) { $image01 = filter_var($_POST['db_image01'],FILTER_SANITIZE_STRING); }	 if (isset($_POST['r_image01'])) {$image01x = filter_var($_POST['db_image01'],FILTER_SANITIZE_STRING); $image01 = "";}	if ((isset($_POST['r_image01_2'])) && (file_exists($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image01'],FILTER_SANITIZE_STRING))))) { unlink($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image01'],FILTER_SANITIZE_STRING))); if (file_exists($target_path.filter_var($_POST['image01'],FILTER_SANITIZE_STRING))) unlink($target_path.filter_var($_POST['image01'],FILTER_SANITIZE_STRING)); $image01=""; } if (empty($image01)) $image01 = "";
if (!empty($_FILES['image02']['tmp_name'])) { if (!file_exists($target_path.filter_var($_FILES['image02']['name'],FILTER_SANITIZE_STRING))) {$image02 = upload_thumb(filter_var($_FILES['image02']['tmp_name'],FILTER_SANITIZE_STRING),filter_var($_FILES['image02']['name'],FILTER_SANITIZE_STRING),$target_path);} else {$image02 = filter_var($_FILES['image02']['name'],FILTER_SANITIZE_STRING); } }	 if (isset($_POST['image02'])) {$image02 = filter_var($_POST['image02'],FILTER_SANITIZE_STRING); }	 if (!empty($_POST['db_image02'])) { $image02 = filter_var($_POST['db_image02'],FILTER_SANITIZE_STRING); }	 if (isset($_POST['r_image02'])) {$image02x = filter_var($_POST['db_image02'],FILTER_SANITIZE_STRING); $image02 = "";}	if ((isset($_POST['r_image02_2'])) && (file_exists($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image02'],FILTER_SANITIZE_STRING))))) { unlink($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image02'],FILTER_SANITIZE_STRING))); if (file_exists($target_path.filter_var($_POST['image02'],FILTER_SANITIZE_STRING))) unlink($target_path.filter_var($_POST['image02'],FILTER_SANITIZE_STRING)); $image02=""; } if (empty($image02)) $image02 = "";
if (!empty($_FILES['image03']['tmp_name'])) { if (!file_exists($target_path.filter_var($_FILES['image03']['name'],FILTER_SANITIZE_STRING))) {$image03 = upload_thumb(filter_var($_FILES['image03']['tmp_name'],FILTER_SANITIZE_STRING),filter_var($_FILES['image03']['name'],FILTER_SANITIZE_STRING),$target_path);} else {$image03 = filter_var($_FILES['image03']['name'],FILTER_SANITIZE_STRING); } }	 if (isset($_POST['image03'])) {$image03 = filter_var($_POST['image03'],FILTER_SANITIZE_STRING); }	 if (!empty($_POST['db_image03'])) { $image03 = filter_var($_POST['db_image03'],FILTER_SANITIZE_STRING); }	 if (isset($_POST['r_image03'])) {$image03x = filter_var($_POST['db_image03'],FILTER_SANITIZE_STRING); $image03 = "";}	if ((isset($_POST['r_image03_2'])) && (file_exists($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image03'],FILTER_SANITIZE_STRING))))) { unlink($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image03'],FILTER_SANITIZE_STRING))); if (file_exists($target_path.filter_var($_POST['image03'],FILTER_SANITIZE_STRING))) unlink($target_path.filter_var($_POST['image03'],FILTER_SANITIZE_STRING)); $image03=""; } if (empty($image03)) $image03 = "";
if (!empty($_FILES['image04']['tmp_name'])) { if (!file_exists($target_path.filter_var($_FILES['image04']['name'],FILTER_SANITIZE_STRING))) {$image04 = upload_thumb(filter_var($_FILES['image04']['tmp_name'],FILTER_SANITIZE_STRING),filter_var($_FILES['image04']['name'],FILTER_SANITIZE_STRING),$target_path);} else {$image04 = filter_var($_FILES['image04']['name'],FILTER_SANITIZE_STRING); } }	 if (isset($_POST['image04'])) {$image04 = filter_var($_POST['image04'],FILTER_SANITIZE_STRING); }	 if (!empty($_POST['db_image04'])) { $image04 = filter_var($_POST['db_image04'],FILTER_SANITIZE_STRING); }	 if (isset($_POST['r_image04'])) {$image04x = filter_var($_POST['db_image04'],FILTER_SANITIZE_STRING); $image04 = "";}	if ((isset($_POST['r_image04_2'])) && (file_exists($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image04'],FILTER_SANITIZE_STRING))))) { unlink($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image04'],FILTER_SANITIZE_STRING))); if (file_exists($target_path.filter_var($_POST['image04'],FILTER_SANITIZE_STRING))) unlink($target_path.filter_var($_POST['image04'],FILTER_SANITIZE_STRING)); $image04=""; } if (empty($image04)) $image04 = "";
if (!empty($_FILES['image05']['tmp_name'])) { if (!file_exists($target_path.filter_var($_FILES['image05']['name'],FILTER_SANITIZE_STRING))) {$image05 = upload_thumb(filter_var($_FILES['image05']['tmp_name'],FILTER_SANITIZE_STRING),filter_var($_FILES['image05']['name'],FILTER_SANITIZE_STRING),$target_path);} else {$image05 = filter_var($_FILES['image05']['name'],FILTER_SANITIZE_STRING); } }	 if (isset($_POST['image05'])) {$image05 = filter_var($_POST['image05'],FILTER_SANITIZE_STRING); }	 if (!empty($_POST['db_image05'])) { $image05 = filter_var($_POST['db_image05'],FILTER_SANITIZE_STRING); }	 if (isset($_POST['r_image05'])) {$image05x = filter_var($_POST['db_image05'],FILTER_SANITIZE_STRING); $image05 = "";}	if ((isset($_POST['r_image05_2'])) && (file_exists($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image05'],FILTER_SANITIZE_STRING))))) { unlink($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image05'],FILTER_SANITIZE_STRING))); if (file_exists($target_path.filter_var($_POST['image05'],FILTER_SANITIZE_STRING))) unlink($target_path.filter_var($_POST['image05'],FILTER_SANITIZE_STRING)); $image05=""; } if (empty($image05)) $image05 = "";
if (!empty($_FILES['image06']['tmp_name'])) { if (!file_exists($target_path.filter_var($_FILES['image06']['name'],FILTER_SANITIZE_STRING))) {$image06 = upload_thumb(filter_var($_FILES['image06']['tmp_name'],FILTER_SANITIZE_STRING),filter_var($_FILES['image06']['name'],FILTER_SANITIZE_STRING),$target_path);} else {$image06 = filter_var($_FILES['image06']['name'],FILTER_SANITIZE_STRING); } }	 if (isset($_POST['image06'])) {$image06 = filter_var($_POST['image06'],FILTER_SANITIZE_STRING); }	 if (!empty($_POST['db_image06'])) { $image06 = filter_var($_POST['db_image06'],FILTER_SANITIZE_STRING); }	 if (isset($_POST['r_image06'])) {$image06x = filter_var($_POST['db_image06'],FILTER_SANITIZE_STRING); $image06 = "";}	if ((isset($_POST['r_image06_2'])) && (file_exists($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image06'],FILTER_SANITIZE_STRING))))) { unlink($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image06'],FILTER_SANITIZE_STRING))); if (file_exists($target_path.filter_var($_POST['image06'],FILTER_SANITIZE_STRING))) unlink($target_path.filter_var($_POST['image06'],FILTER_SANITIZE_STRING)); $image06=""; } if (empty($image06)) $image06 = "";
if (!empty($_FILES['image07']['tmp_name'])) { if (!file_exists($target_path.filter_var($_FILES['image07']['name'],FILTER_SANITIZE_STRING))) {$image07 = upload_thumb(filter_var($_FILES['image07']['tmp_name'],FILTER_SANITIZE_STRING),filter_var($_FILES['image07']['name'],FILTER_SANITIZE_STRING),$target_path);} else {$image07 = filter_var($_FILES['image07']['name'],FILTER_SANITIZE_STRING); } }	 if (isset($_POST['image07'])) {$image07 = filter_var($_POST['image07'],FILTER_SANITIZE_STRING); }	 if (!empty($_POST['db_image07'])) { $image07 = filter_var($_POST['db_image07'],FILTER_SANITIZE_STRING); }	 if (isset($_POST['r_image07'])) {$image07x = filter_var($_POST['db_image07'],FILTER_SANITIZE_STRING); $image07 = "";}	if ((isset($_POST['r_image07_2'])) && (file_exists($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image07'],FILTER_SANITIZE_STRING))))) { unlink($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image07'],FILTER_SANITIZE_STRING))); if (file_exists($target_path.filter_var($_POST['image07'],FILTER_SANITIZE_STRING))) unlink($target_path.filter_var($_POST['image07'],FILTER_SANITIZE_STRING)); $image07=""; } if (empty($image07)) $image07 = "";
if (!empty($_FILES['image08']['tmp_name'])) { if (!file_exists($target_path.filter_var($_FILES['image08']['name'],FILTER_SANITIZE_STRING))) {$image08 = upload_thumb(filter_var($_FILES['image08']['tmp_name'],FILTER_SANITIZE_STRING),filter_var($_FILES['image08']['name'],FILTER_SANITIZE_STRING),$target_path);} else {$image08 = filter_var($_FILES['image08']['name'],FILTER_SANITIZE_STRING); } }	 if (isset($_POST['image08'])) {$image08 = filter_var($_POST['image08'],FILTER_SANITIZE_STRING); }	 if (!empty($_POST['db_image08'])) { $image08 = filter_var($_POST['db_image08'],FILTER_SANITIZE_STRING); }	 if (isset($_POST['r_image08'])) {$image08x = filter_var($_POST['db_image08'],FILTER_SANITIZE_STRING); $image08 = "";}	if ((isset($_POST['r_image08_2'])) && (file_exists($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image08'],FILTER_SANITIZE_STRING))))) { unlink($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image08'],FILTER_SANITIZE_STRING))); if (file_exists($target_path.filter_var($_POST['image08'],FILTER_SANITIZE_STRING))) unlink($target_path.filter_var($_POST['image08'],FILTER_SANITIZE_STRING)); $image08=""; } if (empty($image08)) $image08 = "";
if (!empty($_FILES['image09']['tmp_name'])) { if (!file_exists($target_path.filter_var($_FILES['image09']['name'],FILTER_SANITIZE_STRING))) {$image09 = upload_thumb(filter_var($_FILES['image09']['tmp_name'],FILTER_SANITIZE_STRING),filter_var($_FILES['image09']['name'],FILTER_SANITIZE_STRING),$target_path);} else {$image09 = filter_var($_FILES['image09']['name'],FILTER_SANITIZE_STRING); } }	 if (isset($_POST['image09'])) {$image09 = filter_var($_POST['image09'],FILTER_SANITIZE_STRING); }	 if (!empty($_POST['db_image09'])) { $image09 = filter_var($_POST['db_image09'],FILTER_SANITIZE_STRING); }	 if (isset($_POST['r_image09'])) {$image09x = filter_var($_POST['db_image09'],FILTER_SANITIZE_STRING); $image09 = "";}	if ((isset($_POST['r_image09_2'])) && (file_exists($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image09'],FILTER_SANITIZE_STRING))))) { unlink($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image09'],FILTER_SANITIZE_STRING))); if (file_exists($target_path.filter_var($_POST['image09'],FILTER_SANITIZE_STRING))) unlink($target_path.filter_var($_POST['image09'],FILTER_SANITIZE_STRING)); $image09=""; } if (empty($image09)) $image09 = "";
if (!empty($_FILES['image10']['tmp_name'])) { if (!file_exists($target_path.filter_var($_FILES['image10']['name'],FILTER_SANITIZE_STRING))) {$image10 = upload_thumb(filter_var($_FILES['image10']['tmp_name'],FILTER_SANITIZE_STRING),filter_var($_FILES['image10']['name'],FILTER_SANITIZE_STRING),$target_path);} else {$image10 = filter_var($_FILES['image10']['name'],FILTER_SANITIZE_STRING); } }	 if (isset($_POST['image10'])) {$image10 = filter_var($_POST['image10'],FILTER_SANITIZE_STRING); }	 if (!empty($_POST['db_image10'])) { $image10 = filter_var($_POST['db_image10'],FILTER_SANITIZE_STRING); }	 if (isset($_POST['r_image10'])) {$image10x = filter_var($_POST['db_image10'],FILTER_SANITIZE_STRING); $image10 = "";}	if ((isset($_POST['r_image10_2'])) && (file_exists($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image10'],FILTER_SANITIZE_STRING))))) { unlink($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image10'],FILTER_SANITIZE_STRING))); if (file_exists($target_path.filter_var($_POST['image10'],FILTER_SANITIZE_STRING))) unlink($target_path.filter_var($_POST['image10'],FILTER_SANITIZE_STRING)); $image10=""; } if (empty($image10)) $image10 = "";
if (!empty($_FILES['image11']['tmp_name'])) { if (!file_exists($target_path.filter_var($_FILES['image11']['name'],FILTER_SANITIZE_STRING))) {$image11 = upload_thumb(filter_var($_FILES['image11']['tmp_name'],FILTER_SANITIZE_STRING),filter_var($_FILES['image11']['name'],FILTER_SANITIZE_STRING),$target_path);} else {$image11 = filter_var($_FILES['image11']['name'],FILTER_SANITIZE_STRING); } }	 if (isset($_POST['image11'])) {$image11 = filter_var($_POST['image11'],FILTER_SANITIZE_STRING); }	 if (!empty($_POST['db_image11'])) { $image11 = filter_var($_POST['db_image11'],FILTER_SANITIZE_STRING); }	 if (isset($_POST['r_image11'])) {$image11x = filter_var($_POST['db_image11'],FILTER_SANITIZE_STRING); $image11 = "";}	if ((isset($_POST['r_image11_2'])) && (file_exists($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image11'],FILTER_SANITIZE_STRING))))) { unlink($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image11'],FILTER_SANITIZE_STRING))); if (file_exists($target_path.filter_var($_POST['image11'],FILTER_SANITIZE_STRING))) unlink($target_path.filter_var($_POST['image11'],FILTER_SANITIZE_STRING)); $image11=""; } if (empty($image11)) $image11 = "";
if (!empty($_FILES['image12']['tmp_name'])) { if (!file_exists($target_path.filter_var($_FILES['image12']['name'],FILTER_SANITIZE_STRING))) {$image12 = upload_thumb(filter_var($_FILES['image12']['tmp_name'],FILTER_SANITIZE_STRING),filter_var($_FILES['image12']['name'],FILTER_SANITIZE_STRING),$target_path);} else {$image12 = filter_var($_FILES['image12']['name'],FILTER_SANITIZE_STRING); } }	 if (isset($_POST['image12'])) {$image12 = filter_var($_POST['image12'],FILTER_SANITIZE_STRING); }	 if (!empty($_POST['db_image12'])) { $image12 = filter_var($_POST['db_image12'],FILTER_SANITIZE_STRING); }	 if (isset($_POST['r_image12'])) {$image12x = filter_var($_POST['db_image12'],FILTER_SANITIZE_STRING); $image12 = "";}	if ((isset($_POST['r_image12_2'])) && (file_exists($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image12'],FILTER_SANITIZE_STRING))))) { unlink($target_path.str_replace($tmb_ext, $org_ext, filter_var($_POST['image12'],FILTER_SANITIZE_STRING))); if (file_exists($target_path.filter_var($_POST['image12'],FILTER_SANITIZE_STRING))) unlink($target_path.filter_var($_POST['image12'],FILTER_SANITIZE_STRING)); $image12=""; } if (empty($image12)) $image12 = "";

//only on automotive
if (!empty($_POST['vin']))          $vin          = filter_var($_POST['vin'],FILTER_SANITIZE_STRING);          else $vin = "";
if (!empty($_POST['make']))         $make         = filter_var($_POST['make'],FILTER_SANITIZE_STRING);         else $make = "";
if (!empty($_POST['model']))        $model        = filter_var($_POST['model'],FILTER_SANITIZE_STRING);        else $model = "";
if (!empty($_POST['trim']))         $trim         = filter_var($_POST['trim'],FILTER_SANITIZE_STRING);         else $trim = "";
if (!empty($_POST['doors']))        $doors        = filter_var($_POST['doors'],FILTER_SANITIZE_STRING);        else $doors = "";
if (!empty($_POST['miles']))        $miles        = filter_var($_POST['miles'],FILTER_SANITIZE_STRING);        else $miles = "";
if (!empty($_POST['transmission'])) $transmission = filter_var($_POST['transmission'],FILTER_SANITIZE_STRING); else $transmission = "";
if (!empty($_POST['fuel']))         $fuel         = filter_var($_POST['fuel'],FILTER_SANITIZE_STRING);         else $fuel = "";
if (!empty($_POST['drivetrain']))   $drivetrain   = filter_var($_POST['drivetrain'],FILTER_SANITIZE_STRING);   else $drivetrain = "";
if (!empty($_POST['year']))         $year         = filter_var($_POST['year'],FILTER_SANITIZE_STRING);         else $year = "";
if (!empty($_POST['engine']))       $engine       = filter_var($_POST['engine'],FILTER_SANITIZE_STRING);       else $engine = "";
if (!empty($_POST['address']))  $address  = filter_var($_POST['address'],FILTER_SANITIZE_STRING);    else $address ="";
if (!empty($_POST['city']))     $city     = filter_var($_POST['city'],FILTER_SANITIZE_STRING);       else $city ="";
if (!empty($_POST['county']))   $county   = filter_var($_POST['county'],FILTER_SANITIZE_STRING);     else $county ="";
if (!empty($_POST['state']))    $state    = filter_var($_POST['state'],FILTER_SANITIZE_STRING);      else $state ="";
//end automotive

if (isset($_POST['db_id'] ))        $id           = filter_var($_POST['db_id'],FILTER_SANITIZE_STRING);
if (!empty($_POST['title']))        $title        = htmLawed($_POST['title'],FILTER_SANITIZE_STRING);
if (!empty($_POST['feat_1']))       $feat_1       = filter_var($_POST['feat_1'],FILTER_SANITIZE_STRING);
if (!empty($_POST['feat_2']))       $feat_2       = filter_var($_POST['feat_2'],FILTER_SANITIZE_STRING);
if (!empty($_POST['feat_3']))       $feat_3       = filter_var($_POST['feat_3'],FILTER_SANITIZE_STRING);
if (!empty($_POST['description']))  $descr        = htmLawed($_POST['description']);
if (!empty($_POST['phone']))        $phone        = filter_var($_POST['phone'],FILTER_SANITIZE_STRING);     else $phone = "";
if (!empty($_POST['price']))        $price        = filter_var($_POST['price'],FILTER_SANITIZE_STRING);     else $price = "";
if (!empty($_POST['o_date']))       $o_date       = filter_var($_POST['o_date'],FILTER_SANITIZE_STRING);    elseif (!empty($_POST['db_o_date']))  $o_date = filter_var($_POST['db_o_date'],FILTER_SANITIZE_STRING); else $o_date = (mktime()-$offset);
if (!empty($_POST['u_date']))       $u_date       = filter_var($_POST['u_date'],FILTER_SANITIZE_STRING);    elseif (!empty($_POST['db_u_date']))  $u_date = filter_var($_POST['db_u_date'],FILTER_SANITIZE_STRING); else $u_date = (mktime()-$offset);
if (!empty($_POST['hits']))         $hits         = filter_var($_POST['hits'],FILTER_SANITIZE_STRING);      elseif (!empty($_POST['db_hits']))    $hits   = filter_var($_POST['db_hits'],FILTER_SANITIZE_STRING);   else $hits = "";
if (!empty($_POST['hits_2']))       $hits_2       = filter_var($_POST['hits_2'],FILTER_SANITIZE_STRING);    elseif (!empty($_POST['db_hits_2']))  $hits_2 = filter_var($_POST['db_hits_2'],FILTER_SANITIZE_STRING); else $hits_2 = "";
if (!empty($_POST['email']))        $email        = filter_var($_POST['email'],FILTER_SANITIZE_STRING);     else $email    = $pre_email;
if (!empty($_POST['website1']))     $website1     = filter_var($_POST['website1'],FILTER_SANITIZE_STRING);  else $website1 = $pre_website1;
if (!empty($_POST['website2']))     $website2     = filter_var($_POST['website2'],FILTER_SANITIZE_STRING);  else $website2 = $pre_website2;
if (!empty($_POST['website3']))     $website3     = filter_var($_POST['website3'],FILTER_SANITIZE_STRING);  else $website3 = $pre_website3;
if (!empty($_POST['template']))     $temp_no      = filter_var($_POST['template'],FILTER_SANITIZE_STRING);  else $temp_no = "";
if (!empty($_POST['bg_color']))     $bg_color     = filter_var($_POST['bg_color'],FILTER_SANITIZE_STRING);  else $bg_color = "";
if (!empty($_POST['fg_color']))     $fg_color     = filter_var($_POST['fg_color'],FILTER_SANITIZE_STRING);  else $fg_color = "";
if (!empty($_POST['ft_color']))     $ft_color     = filter_var($_POST['ft_color'],FILTER_SANITIZE_STRING);  else $ft_color = "";
if (!empty($_POST['hl_color']))     $hl_color     = filter_var($_POST['hl_color'],FILTER_SANITIZE_STRING);  else $hl_color = "";
if (!empty($_POST['profile']))      $profile      = filter_var($_POST['profile'],FILTER_SANITIZE_STRING);   else $profile = "";
if (!empty($_POST['template']))     $template     = filter_var($_POST['template'],FILTER_SANITIZE_STRING);  else $template = "";

if (!empty($_POST['radius']))     $radius    = $_POST['radius']; 
if (!empty($_POST['top_l']))      $top_l     = $_POST['top_l'];
if (!empty($_POST['top_r']))      $top_r     = $_POST['top_r'];
if (!empty($_POST['bot_l']))      $bot_l     = $_POST['bot_l'];
if (!empty($_POST['bot_r']))      $bot_r     = $_POST['bot_r'];




if (empty($hits))   { $hits = "0"; }
if (empty($hits_2)) { $hits_2 = "0"; }

if (!empty($title))  { $title  = stripslashes(mb_convert_encoding($title, 'HTML-ENTITIES', 'UTF-8'));} else $title = "";
if (!empty($feat_1)) $feat_1  = stripslashes($feat_1); $feat_1x = explode("\n",$feat_1);$feat_1y = htmlentities($feat_1,ENT_QUOTES);
if (!empty($feat_2)) $feat_2  = stripslashes($feat_2); $feat_2x = explode("\n",$feat_2);$feat_2y = htmlentities($feat_2,ENT_QUOTES);
if (!empty($feat_3)) $feat_3  = stripslashes($feat_3); $feat_3x = explode("\n",$feat_3);$feat_3y = htmlentities($feat_3,ENT_QUOTES);
if (!empty($descr))  { $descr  = htmLawed(stripslashes($_POST['description'])); $descr = str_replace($minify,'', $descr); } else { $description = ""; $descr = ""; }





if ((isset($address)) && (isset($city)) && (isset($state))) {
    $g_addy    = str_replace(" ", "+", $address); $g_city    = str_replace(" ", "+", $city);
    $googlemap = "http://maps.google.com/?q=loc%3A" . $g_addy . "+" . $g_city . "+" . $state . "+US";
    $yahoomap  = "http://maps.yahoo.com/map?ard=1&q1=" . $g_addy . "+" . $g_city . "+" . $state . "+US#mvt=m&q1=" . $g_addy . "+" . $g_city . "+" . $state . "+US";
}
if ($price == "$") $price ="";
if (empty($address)) $googlemap = "";
if (empty($address)) $yahoomap = "";
if (empty($address)) $city = "";

if (($db_enabled = "1") && (isset($_POST['add_to_db']))) {
$insert_template = serialize(array('bg_color'=>$bg_color,'fg_color'=>$fg_color,'ft_color'=>$ft_color,'hl_color'=>$hl_color,'template'=>$template,'profile'=>$profile));
$insert_specs    = serialize(array('phone'=>$phone,'vin'=>$vin,'make'=>$make,'model'=>$model,'trim'=>$trim,'doors'=>$doors,'miles'=>$miles,'transmission'=>$transmission,'engine'=>$engine,'fuel'=>$fuel,'drivetrain'=>$drivetrain,'year'=>$year,'price'=>$price,'email'=>$email,'website1'=>$website1,'website2'=>$website2,'website3'=>$website3));
$insert_images   = serialize(array('image00'=>$image00,'image01'=>$image01,'image02'=>$image02,'image03'=>$image03,'image04'=>$image04,'image05'=>$image05,'image06'=>$image06,'image07'=>$image07,'image08'=>$image08,'image09'=>$image09,'image10'=>$image10,'image11'=>$image11,'image12'=>$image12,'radius'=>$radius,'top_l'=>$top_l,'top_r'=>$top_r,'bot_l'=>$bot_l,'bot_r'=>$bot_r));
$insert_dates    = serialize(array('o_date'=>$o_date,'u_date'=>$u_date,'hits'=>$hits,'hits_2'=>$hits_2));
$insert_descr    = serialize(array('title'=>stripslashes(mb_convert_encoding($title, 'HTML-ENTITIES', 'UTF-8')),'descr'=>base64_encode(serialize($descr)),'feat_1'=>base64_encode(serialize($feat_1)),'feat_2'=>base64_encode(serialize($feat_2)),'feat_3'=>base64_encode(serialize($feat_3)),));


if (!empty($id)) {
$query = 'UPDATE automotive SET  `vin`=\''.$insert_specs.'\', `description`=\''.$insert_descr.'\', `image`=\''.$insert_images.'\', `u_date`=\''.$insert_dates.'\', `template`=\''.$insert_template.'\' WHERE `id`="'.$id.'"';
$db_message = "<h1>The Database Has Been Updated</h1>";
$result = mysql_query($query) or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $query . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());
}//end if post db_id isset
else {
$query = "INSERT INTO automotive (id,vin,description,image,u_date,template)
VALUES ('','$insert_specs','$insert_descr','$insert_images','$insert_dates','$insert_template')";
$db_message = "<h2>The Database Has Beed Added To</h1>";
$result = mysql_query($query) or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $query . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());
}
}//end if add to db

if (empty($id)) {$id = mysql_insert_id();}

if (isset($_POST['template'])){
$template = "automotive".$_POST['template'].".php";
$tempx = file_get_contents($template);
$tempx = str_replace("counter.php","", $tempx);
eval('?>'.$tempx);
}
?>

<?php if (isset($_POST['add_to_db'])) echo '<script type="text/javascript"> /* <![CDATA[ */ $(document).ready(function(){ document.forms["reload"].submit(); }); /* ]]> */ </script>'; ?>
<div class="show_code">
<p>Only what is ABOVE this box will be on the actual craigslist ad!!</p>
<form action="" method="post">

<?php
if (isset($image00x)) {$image00 = $image00x;}
if (isset($image01x)) {$image01 = $image01x;}
if (isset($image02x)) {$image02 = $image02x;}
if (isset($image03x)) {$image03 = $image03x;}
if (isset($image04x)) {$image04 = $image04x;}
if (isset($image05x)) {$image05 = $image05x;}
if (isset($image06x)) {$image06 = $image06x;}
if (isset($image07x)) {$image07 = $image07x;}
if (isset($image08x)) {$image08 = $image08x;}
if (isset($image09x)) {$image09 = $image09x;}
if (isset($image10x)) {$image10 = $image10x;}
if (isset($image11x)) {$image11 = $image11x;}
if (isset($image12x)) {$image12 = $image12x;}

//only automotive
if (isset($vin)) {         echo'<input type="hidden" id="vin"          name="vin"          value="'.$vin.'">'."\n"; }
if (isset($make)) {        echo'<input type="hidden" id="make"         name="make"         value="'.$make.'">'."\n"; }
if (isset($model)) {       echo'<input type="hidden" id="model"        name="model"        value="'.$model.'">'."\n"; }
if (isset($trim)) {        echo'<input type="hidden" id="trim"         name="trim"         value="'.$trim.'">'."\n"; }
if (isset($miles)) {       echo'<input type="hidden" id="miles"        name="miles"        value="'.$miles.'">'."\n"; }
if (isset($transmission)) {echo'<input type="hidden" id="transmission" name="transmission" value="'.$transmission.'">'."\n"; }
if (isset($engine)) {      echo'<input type="hidden" id="engine"       name="engine"       value="'.$engine.'">'."\n"; }
if (isset($doors)) {       echo'<input type="hidden" id="doors"        name="doors"        value="'.$doors.'">'."\n"; }
if (isset($fuel)) {        echo'<input type="hidden" id="fuel"         name="fuel"         value="'.$fuel.'">'."\n"; }
if (isset($drivetrain)) {  echo'<input type="hidden" id="drivetrain"   name="drivetrain"   value="'.$drivetrain.'">'."\n"; }
if (isset($year))     {    echo'<input type="hidden" id="year"         name="year"         value="'.$year.'">'."\n"; }
//end only automotive

if (!empty($id)) {         echo'<input type="hidden" id="id"           name="db_id"        value="'.$id.'">'."\n"; }
if (isset($title)) {       echo'<input type="hidden" id="title"        name="title"        value="'.$title.'">'."\n"; }
if (isset($phone)) {       echo'<input type="hidden" id="phone"        name="phone"        value="'.$phone.'">'."\n"; }
if (isset($price)) {       echo'<input type="hidden" id="price"        name="price"        value="'.$price.'">'."\n"; }
if (isset($descr)) {       echo'<input type="hidden" id="description"  name="description"  value=\''.htmlentities ($descr).'\'>'."\n"; }
if (isset($feat_1)) {      echo'<input type="hidden" id="feat_1"       name="feat_1"       value=\''.$feat_1y.'\'>'."\n"; }
if (isset($feat_2)) {      echo'<input type="hidden" id="feat_2"       name="feat_2"       value=\''.$feat_2y.'\'>'."\n"; }
if (isset($feat_3)) {      echo'<input type="hidden" id="feat_3"       name="feat_3"       value=\''.$feat_3y.'\'>'."\n"; }
if (isset($image00)) {     echo'<input type="hidden" id="image00"      name="image00"      value="'.$image00.'">'."\n"; }
if (isset($image01)) {     echo'<input type="hidden" id="image01"      name="image01"      value="'.$image01.'">'."\n"; }
if (isset($image02)) {     echo'<input type="hidden" id="image02"      name="image02"      value="'.$image02.'">'."\n"; }
if (isset($image03)) {     echo'<input type="hidden" id="image03"      name="image03"      value="'.$image03.'">'."\n"; }
if (isset($image04)) {     echo'<input type="hidden" id="image04"      name="image04"      value="'.$image04.'">'."\n"; }
if (isset($image05)) {     echo'<input type="hidden" id="image05"      name="image05"      value="'.$image05.'">'."\n"; }
if (isset($image06)) {     echo'<input type="hidden" id="image06"      name="image06"      value="'.$image06.'">'."\n"; }
if (isset($image07)) {     echo'<input type="hidden" id="image07"      name="image07"      value="'.$image07.'">'."\n"; }
if (isset($image08)) {     echo'<input type="hidden" id="image08"      name="image08"      value="'.$image08.'">'."\n"; }
if (isset($image09)) {     echo'<input type="hidden" id="image09"      name="image09"      value="'.$image09.'">'."\n"; }
if (isset($image10)) {     echo'<input type="hidden" id="image10"      name="image10"      value="'.$image10.'">'."\n"; }
if (isset($image11)) {     echo'<input type="hidden" id="image11"      name="image11"      value="'.$image11.'">'."\n"; }
if (isset($image12)) {     echo'<input type="hidden" id="image12"      name="image12"      value="'.$image12.'">'."\n"; }
if (isset($temp_no))  {    echo'<input type="hidden" id="template"     name="template"     value="'.$temp_no.'">'."\n"; }
if (isset($website1)) {    echo'<input type="hidden" id="website1"     name="website1"     value="'.$website1.'">'."\n"; }
if (isset($website2)) {    echo'<input type="hidden" id="website2"     name="website2"     value="'.$website2.'">'."\n"; }
if (isset($website3)) {    echo'<input type="hidden" id="website3"     name="website3"     value="'.$website3.'">'."\n"; }
if (isset($bg_color)) {    echo'<input type="hidden" id="bg_color"     name="bg_color"     value="'.$bg_color.'">'."\n"; }
if (isset($fg_color)) {    echo'<input type="hidden" id="fg_color"     name="fg_color"     value="'.$fg_color.'">'."\n"; }
if (isset($ft_color)) {    echo'<input type="hidden" id="ft_color"     name="ft_color"     value="'.$ft_color.'">'."\n"; }
if (isset($hl_color)) {    echo'<input type="hidden" id="hl_color"     name="hl_color"     value="'.$hl_color.'">'."\n"; }
if (isset($profile))  {    echo'<input type="hidden" id="profile"      name="profile"      value="'.$profile.'">'."\n"; }
if (isset($o_date)) {      echo'<input type="hidden" id="o_date"       name="o_date"       value="'.$o_date.'">'."\n"; }
if (isset($u_date)) {      echo'<input type="hidden" id="u_date"       name="u_date"       value="'.$u_date.'">'."\n"; }
if (!empty($hits))   {      echo'<input type="hidden" id="hits"         name="hits"         value="'.$hits.'">'."\n"; }   else {      echo'<input type="hidden" id="hits"         name="hits"         value="0">'."\n"; }
if (!empty($hits_2)) {      echo'<input type="hidden" id="hits_2"       name="hits_2"       value="'.$hits_2.'">'."\n"; } else {      echo'<input type="hidden" id="hits_2"       name="hits_2"       value="0">'."\n"; }

if (isset($radius)) {      echo'<input type="hidden" id="radius"       name="radius"       value="'.$radius.'">'."\n"; }
if (isset($top_l)) {       echo'<input type="hidden" id="top_l"        name="top_l"        value="'.$top_l.'">'."\n"; }
if (isset($top_r)) {       echo'<input type="hidden" id="top_r"        name="top_r"        value="'.$top_r.'">'."\n"; }
if (isset($bot_l)) {       echo'<input type="hidden" id="bot_l"        name="bot_l"        value="'.$bot_l.'">'."\n"; }
if (isset($bot_r)) {       echo'<input type="hidden" id="bot_r"        name="bot_r"        value="'.$bot_r.'">'."\n"; }

?>
<?php
if ((isset($_POST['r_image00'])) || (isset($_POST['r_image01'])) || (isset($_POST['r_image02'])) || (isset($_POST['r_image03'])) || 
    (isset($_POST['r_image04'])) || (isset($_POST['r_image05'])) || (isset($_POST['r_image06'])) || (isset($_POST['r_image07'])) || 
    (isset($_POST['r_image08'])) || (isset($_POST['r_image09'])) || (isset($_POST['r_image10'])) || (isset($_POST['r_image11'])) || (isset($_POST['r_image12'])) ){
echo '<span style="color:red;font-size:40px;font-variant:small-caps">Confirm Delete</span><br />';}
if (isset($_POST['r_image00'])) {     echo'<label style="width:auto;color:red;">Delete image <strong>'.str_replace($pri_ext, $org_ext, $image00).' &amp; '.$image00.'</strong> ? </label><input type="checkbox" id="r_image00_2"      name="r_image00_2"      value="1"><br />'; }
if (isset($_POST['r_image01'])) {     echo'<label style="width:auto;color:red;">Delete image <strong>'.str_replace($pri_ext, $org_ext, $image01).' &amp; '.$image01.'</strong> ? </label><input type="checkbox" id="r_image01_2"      name="r_image01_2"      value="1"><br />'; }
if (isset($_POST['r_image02'])) {     echo'<label style="width:auto;color:red;">Delete image <strong>'.str_replace($pri_ext, $org_ext, $image02).' &amp; '.$image02.'</strong> ? </label><input type="checkbox" id="r_image02_2"      name="r_image02_2"      value="1"><br />'; }
if (isset($_POST['r_image03'])) {     echo'<label style="width:auto;color:red;">Delete image <strong>'.str_replace($pri_ext, $org_ext, $image03).' &amp; '.$image03.'</strong> ? </label><input type="checkbox" id="r_image03_2"      name="r_image03_2"      value="1"><br />'; }
if (isset($_POST['r_image04'])) {     echo'<label style="width:auto;color:red;">Delete image <strong>'.str_replace($pri_ext, $org_ext, $image04).' &amp; '.$image04.'</strong> ? </label><input type="checkbox" id="r_image04_2"      name="r_image04_2"      value="1"><br />'; }
if (isset($_POST['r_image05'])) {     echo'<label style="width:auto;color:red;">Delete image <strong>'.str_replace($pri_ext, $org_ext, $image05).' &amp; '.$image05.'</strong> ? </label><input type="checkbox" id="r_image05_2"      name="r_image05_2"      value="1"><br />'; }
if (isset($_POST['r_image06'])) {     echo'<label style="width:auto;color:red;">Delete image <strong>'.str_replace($pri_ext, $org_ext, $image06).' &amp; '.$image06.'</strong> ? </label><input type="checkbox" id="r_image06_2"      name="r_image06_2"      value="1"><br />'; }
if (isset($_POST['r_image07'])) {     echo'<label style="width:auto;color:red;">Delete image <strong>'.str_replace($pri_ext, $org_ext, $image07).' &amp; '.$image07.'</strong> ? </label><input type="checkbox" id="r_image07_2"      name="r_image07_2"      value="1"><br />'; }
if (isset($_POST['r_image08'])) {     echo'<label style="width:auto;color:red;">Delete image <strong>'.str_replace($pri_ext, $org_ext, $image08).' &amp; '.$image08.'</strong> ? </label><input type="checkbox" id="r_image08_2"      name="r_image08_2"      value="1"><br />'; }
if (isset($_POST['r_image09'])) {     echo'<label style="width:auto;color:red;">Delete image <strong>'.str_replace($pri_ext, $org_ext, $image09).' &amp; '.$image09.'</strong> ? </label><input type="checkbox" id="r_image09_2"      name="r_image09_2"      value="1"><br />'; }
if (isset($_POST['r_image10'])) {     echo'<label style="width:auto;color:red;">Delete image <strong>'.str_replace($pri_ext, $org_ext, $image10).' &amp; '.$image10.'</strong> ? </label><input type="checkbox" id="r_image10_2"      name="r_image10_2"      value="1"><br />'; }
if (isset($_POST['r_image11'])) {     echo'<label style="width:auto;color:red;">Delete image <strong>'.str_replace($pri_ext, $org_ext, $image11).' &amp; '.$image11.'</strong> ? </label><input type="checkbox" id="r_image11_2"      name="r_image11_2"      value="1"><br />'; }
if (isset($_POST['r_image12'])) {     echo'<label style="width:auto;color:red;">Delete image <strong>'.str_replace($pri_ext, $org_ext, $image12).' &amp; '.$image12.'</strong> ? </label><input type="checkbox" id="r_image12_2"      name="r_image12_2"      value="1"><br />'; }
?>
<br class="clear" />
<input <?php if (isset($disabled)) echo $disabled;?> type="submit" name="add_to_db" value="Save" style="padding:20px;"/>
</form>

<?php
$next_increment    = 0;
$qShowStatus       = "SHOW TABLE STATUS LIKE 'automotive'";
$qShowStatusResult = mysql_query($qShowStatus) or die ( "Query failed: " . mysql_error() . "<br/>" . $qShowStatus );
$row = mysql_fetch_assoc($qShowStatusResult);
$next_increment = $row['Auto_increment'];
//echo $next_increment;
if ($id == "0") { $id = $next_increment; $hidder = "hidder"; }
?>
<form action="../automotive.php" method="post" target="automotive" name="reload">
<input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
</form>
</div>


<?php if ( (!empty($id)) && (!isset($hidder)) ) { ?>
<div class="show_code">
<div class="statistics" style="margin-top:20px;width:990px;"><span class="sect_title">Posting Title:</span>
<p>Title Preview : <input type="text" value="<?php echo $title;?>" style="font-size:20px;text-align:left;width:825px;border:0;" disabled/></p>
<input type="text" value="<?php echo htmlentities(mb_convert_encoding($title, 'HTML-ENTITIES', 'UTF-8'));?>" style="font-size:30px;width:950px;text-align:center;"/><br />
<p>Copy the text in the box above into the "Posting Title:" on CraigsList</p>
</div>
<div class="statistics" style="margin-top:40px;width:990px;"><span class="sect_title">Posting Description:</span>
<p>Copy the contents of the box below into craigslist "Posting Description"<br />You do not need to upload images in craigslist as we have already included them here!</p>
<textarea style="width:960px; height:500px;"><?php eval('?>'.minify());?></textarea>
</div>
<p><a class="uncompressed" href="#">Show Non-Condensed Code</a></p>
<div style="margin-bottom:100px;">Copy the contents of the above box into craigslist "Posting Description"<br />You do not need to upload images in craigslist as we have already included them here!</div>
</div>


<script type="text/javascript">
$(document).ready(function(){
$(".uncompressed").colorbox({width:"860px", inline:true, href:"#uncompressed"});
});</script>

<div style='display:none'>
<div id='uncompressed' style='padding:10px; background:#fff;'>
<textarea style="width:800px; height:800px;"><?php 
$temp = file_get_contents($template);
$temp = str_replace("&#9733;",'&amp;#9733;', $temp);
$temp = str_replace("&nbsp;",'&amp;nbsp;', $temp);
eval('?>'.$temp);
?></textarea>
</div>
</div>
<?php } else { echo '<div class="clear" style="height:50px;">&nbsp;</div>';} ?>
<?php include('../../_footer.php') ?>