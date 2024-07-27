<?php 
include('_header.php');
//show_path();
clearstatcache();
$target_path = $upload_path;

if (!empty($_FILES['p_photo']['tmp_name'])) { if (!file_exists($target_path.$_FILES['p_photo']['name'])) {$p_photo = upload_p_photo($_FILES['p_photo']['tmp_name'],$_FILES['p_photo']['name'],$target_path);} else {$p_photo = $_FILES['p_photo']['name']; } } elseif (isset($_POST['r_p_photo'])) {$p_photox = $_POST['db_p_photo']; $p_photo = "";} elseif (!empty($_POST['db_p_photo'])) { $p_photo = $_POST['db_p_photo']; } else $p_photo = "";
if (!empty($_FILES['p_logo']['tmp_name']))  { if (!file_exists($target_path.$_FILES['p_logo']['name']))  {$p_logo  = upload_p_logo ($_FILES['p_logo']['tmp_name'], $_FILES['p_logo']['name'], $target_path);} else {$p_logo  = $_FILES['p_logo']['name'];  } } elseif (isset($_POST['r_p_logo']))  {$p_logox  = $_POST['db_p_logo'];  $p_logo  = "";} elseif (!empty($_POST['db_p_logo']))  { $p_logo  = $_POST['db_p_logo'];  } else $p_logo  = "";
if (isset($_POST['p_photo']))        $p_photo         = filter_var($_POST['p_photo'],FILTER_SANITIZE_STRING);
if (isset($_POST['p_logo']))         $p_logo          = filter_var($_POST['p_logo'],FILTER_SANITIZE_STRING);

if (isset($_POST['id']))             $id              = filter_var($_POST['id'],FILTER_SANITIZE_STRING);           else $id           = "";
if (isset($_POST['p_name']))         $p_name          = filter_var($_POST['p_name'],FILTER_SANITIZE_STRING);         else $p_name         = "";
if (isset($_POST['p_cphone']))       $p_cphone        = filter_var($_POST['p_cphone'],FILTER_SANITIZE_STRING);       else $p_cphone       = "";
if (isset($_POST['p_hphone']))       $p_hphone        = filter_var($_POST['p_hphone'],FILTER_SANITIZE_STRING);       else $p_hphone       = "";
if (isset($_POST['p_ophone']))       $p_ophone        = filter_var($_POST['p_ophone'],FILTER_SANITIZE_STRING);       else $p_ophone       = "";
if (isset($_POST['p_position']))     $p_position      = filter_var($_POST['p_position'],FILTER_SANITIZE_STRING);     else $p_position     = "";
if (isset($_POST['p_company']))      $p_company       = filter_var($_POST['p_company'],FILTER_SANITIZE_STRING);      else $p_company      = "";
if (isset($_POST['p_caddress']))     $p_caddress      = filter_var($_POST['p_caddress'],FILTER_SANITIZE_STRING);     else $p_caddress     = "";
if (isset($_POST['p_citystatezip'])) $p_citystatezip  = filter_var($_POST['p_citystatezip'],FILTER_SANITIZE_STRING); else $p_citystatezip = "";
if (isset($_POST['p_email']))        $p_email         = filter_var($_POST['p_email'],FILTER_SANITIZE_STRING);        else $p_email        = "";
if (isset($_POST['p_website']))      $p_website       = filter_var($_POST['p_website'],FILTER_SANITIZE_STRING);      else $p_website      = "";
if (isset($_POST['p_photo_link']))   $p_photo_link    = filter_var($_POST['p_photo_link'],FILTER_SANITIZE_STRING);   else $p_photo_link   = "";
if (isset($_POST['p_facebook']))     $p_facebook      = filter_var($_POST['p_facebook'],FILTER_SANITIZE_STRING);     else $p_facebook     = "";
if (isset($_POST['p_twitter']))      $p_twitter       = filter_var($_POST['p_twitter'],FILTER_SANITIZE_STRING);      else $p_twitter      = "";
if (isset($_POST['p_linkedin']))     $p_linkedin      = filter_var($_POST['p_linkedin'],FILTER_SANITIZE_STRING);     else $p_linkedin     = "";


$p_bio = $_POST['p_bio'];
$p_bio = stripslashes($p_bio);



if ((isset($_POST['r_p_photo']))&&($_POST['r_p_photo'] =="1")) {unset($p_photo);unset($p_photo);unset($_POST['db_p_photo']);}
if ((isset($_POST['r_p_photo_link']))&&($_POST['r_p_photo_link'] =="1")) {unset($p_photo_link);}

if ((isset($_POST['r_p_logo']))&&($_POST['r_p_logo'] =="1")) {unset($p_logo);unset($p_logo);unset($_POST['db_p_logo']);}
if ((isset($_POST['r_p_logo_link']))&&($_POST['r_p_logo_link'] =="1")) {unset($p_logo_link);}


if ( (!empty($p_photo)) && (!preg_match("/^http/",$p_photo)) ) $p_photo = $this_site.$upload_path.$p_photo;
if ( (!empty($p_logo))  && (!preg_match("/^http/",$p_logo)) )  $p_logo = $this_site.$upload_path.$p_logo;



if ((empty($p_photo)) && (!empty($p_photo))) $p_photo=$p_photo;
if ((empty($p_photo)) && (!empty($_POST['db_p_photo']))) $p_photo=filter_var($_POST['db_p_photo'],FILTER_SANITIZE_STRING);
if ((empty($p_photo)) && (empty($p_photo)) && (isset($p_photo_link))) $p_photo=filter_var($p_photo_link,FILTER_SANITIZE_STRING);

if ((empty($p_logo)) && (!empty($p_logo))) $p_logo=$p_logo;
if ((empty($p_logo)) && (!empty($_POST['db_p_logo']))) $p_logot=filter_var($_POST['db_p_logo'],FILTER_SANITIZE_STRING);
if ((empty($p_logo)) && (empty($p_logo)) && (isset($p_logo_link))) $p_logo=filter_var($p_logo_link,FILTER_SANITIZE_STRING);


if (($db_enabled = "1") && (isset($_POST['add_to_db']))) {

if (!empty($id)){
$p_biox = addslashes($p_bio);
$query = 'UPDATE profiles SET `name`="'.$p_name.'", `cphone`="'.$p_cphone.'", `hphone`="'.$p_hphone.'", `ophone`="'.$p_ophone.'", `position`="'.$p_position.'", `company`="'.$p_company.'", `caddress`="'.$p_caddress.'", `citystatezip`="'.$p_citystatezip.'", `photo`="'.$p_photo.'", `email`="'.$p_email.'", `website`="'.$p_website.'", `bio`="'.$p_biox.'", `facebook`="'.$p_facebook.'", `twitter`="'.$p_twitter.'", `linkedin`="'.$p_linkedin.'", `logo`="'.$p_logo.'" WHERE `id`="'.$id.'"';
$db_message = "<h1>The Database Has Been Updated</h1>";
$result = mysql_query($query) or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $query . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());
}//end if post db_id isset
else {
$p_biox = addslashes($p_bio);
$query = "INSERT INTO profiles (id,name,cphone,hphone,ophone,position,company,caddress,citystatezip,photo,email,website,bio,facebook,twitter,linkedin,logo)
VALUES ('','$p_name','$p_cphone','$p_hphone','$p_ophone','$p_position','$p_company','$p_caddress','$p_citystatezip','$p_photo','$p_email','$p_website','$p_biox','$p_facebook','$p_twitter','$p_linkedin','$p_logo')";
$db_message = "<h2>The Database Has Beed Added To</h1>";
$result = mysql_query($query) or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $query . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());
}
}//end if add to db

if (empty($id)) {$id = mysql_insert_id();}

$p_website_name = parse_url($p_website);
if (isset($p_website_name['host'])) {
$p_website_name = $p_website_name['host'];
}
?>
<script>
<!--
window.name = 'profile_preview'
// -->
</script>

<center>
<tr><td colspan="5">&nbsp;<hr /></td></tr>
<tr>
  <td colspan="5"><table width="960px" border="0">
      <tr>
        <th colspan="4" rowspan="7" scope="col"><p> <?php if (!empty($p_photo)) echo '<img alt="Photo" src="'.$p_photo.'" width="200">'; else echo "&nbsp;"; ?><br>
            <?php if (!empty($p_photo)) echo $p_name;?><br>
            <em> <?php if (!empty($p_photo)) echo $p_position;?></em></p></th>
        <th rowspan="7" scope="col" width="20">&nbsp;</th>
        <th colspan="4" scope="col"><?php echo $p_name.' - '.$p_company.' - <em>'.$p_position.'</em>';?>
<?php
          if (!empty($p_facebook)) echo ' <a href="'.$p_facebook.'"><img src="'.$this_site.'images/facebook.png" /></a> ';
          if (!empty($p_twitter)) echo ' <a href="'.$p_twitter.'"><img src="'.$this_site.'images/twitter.png" /></a> ';
          if (!empty($p_linkedin)) echo ' <a href="'.$p_linkedin.'"><img src="'.$this_site.'images/linkedin.png" /></a> ';
?>

</th>
      </tr>
      <tr>
        <td colspan="4" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td width="65">Cell : </td>
        <td width="200"><?php echo $p_cphone;?></td>
        <td width="350"><?php echo '<a href="'.$p_website.'">'.$p_website_name.'</a>';?></td>
        <td rowspan="4" width="115"><?php if (!empty($p_logo)) echo '<img alt="Logo" src="'.$p_logo.'" width="115">'; else echo "&nbsp;"; ?></td>
      </tr>
      <tr>
        <td>Home : </td>
        <td><?php echo $p_hphone;?></td>
        <td><?php echo $p_company;?></td>

      </tr>
      <tr>
        <td>Office : </td>
        <td><?php echo $p_ophone;?></td>
        <td><?php echo $p_caddress;?></td>

      </tr>

      <tr>
        <td>Email : </td>
        <td><?php echo '<a href="mailto:'.$p_email.'">'.$p_email.'</a>';?></td>
        <td><?php echo $p_citystatezip;?></td>

      </tr>

      <tr>
        <td colspan="4"><?php echo stripslashes($p_bio);;?></td>
      </tr>
    </table></td>
</tr>
</center>








<center>
<hr />
<p>Only what is ABOVE this line will be on the actual craigslist ad!!</p>
<?php if (isset($_POST['add_to_db'])) echo '<script type="text/javascript"> /* <![CDATA[ */ $(document).ready(function(){ document.forms["reload"].submit(); }); /* ]]> */ </script>'; ?>
<form action="" method="post">
<?php
if (!empty($id))          { echo'<input type="hidden" id="id"           name="id"           value="'.$id.'"'."\n"; }
if (isset($p_name))         { echo'<input type="hidden" id="p_name"         name="p_name"         value="'.$p_name.'"'."\n"; }
if (isset($p_cphone))       { echo'<input type="hidden" id="p_cphone"       name="p_cphone"       value="'.$p_cphone.'"'."\n"; }
if (isset($p_hphone))       { echo'<input type="hidden" id="p_hphone"       name="p_hphone"       value="'.$p_hphone.'"'."\n"; }
if (isset($p_ophone))       { echo'<input type="hidden" id="p_ophone"       name="p_ophone"       value="'.$p_ophone.'"'."\n"; }
if (isset($p_position))     { echo'<input type="hidden" id="p_position"     name="p_position"     value="'.$p_position.'"'."\n"; }
if (isset($p_company))      { echo'<input type="hidden" id="p_company"      name="p_company"      value="'.$p_company.'"'."\n"; }
if (isset($p_caddress))     { echo'<input type="hidden" id="p_caddress"     name="p_caddress"     value="'.$p_caddress.'"'."\n"; }
if (isset($p_citystatezip)) { echo'<input type="hidden" id="p_citystatezip" name="p_citystatezip" value="'.$p_citystatezip.'"'."\n"; }
if (isset($p_photo))        { echo'<input type="hidden" id="p_photo"        name="p_photo"        value="'.$p_photo.'"'."\n"; }
if (isset($p_logo))         { echo'<input type="hidden" id="p_logo"        name="p_logo"        value="'.$p_logo.'"'."\n"; }
if (isset($p_email))        { echo'<input type="hidden" id="p_email"        name="p_email"        value="'.$p_email.'"'."\n"; }
if (isset($p_website))      { echo'<input type="hidden" id="p_website"      name="p_website"      value="'.$p_website.'"'."\n"; }
if (isset($p_bio))          { echo'<input type="hidden" id="p_bio"          name="p_bio"          value=\''.$p_bio.'\''."\n"; }

if (isset($p_facebook))     { echo'<input type="hidden" id="p_facebook"     name="p_facebook"     value="'.$p_facebook.'"'."\n"; }
if (isset($p_twitter))      { echo'<input type="hidden" id="p_twitter"      name="p_twitter"      value="'.$p_twitter.'"'."\n"; }
if (isset($p_linkedin))     { echo'<input type="hidden" id="p_linkedin"     name="p_linkedin"     value="'.$p_linkedin.'"'."\n"; }

?>

<input <?php if (isset($disabled)) echo $disabled;?> type="submit" name="add_to_db" value="Save" style="padding:20px;"/>
</form>

<?php
$next_increment    = 0;
$qShowStatus       = "SHOW TABLE STATUS LIKE 'profiles'";
$qShowStatusResult = mysql_query($qShowStatus) or die ( "Query failed: " . mysql_error() . "<br/>" . $qShowStatus );
$row = mysql_fetch_assoc($qShowStatusResult);
$next_increment = $row['Auto_increment'];
//echo "next ".$next_increment."<br />";
//echo "current ".$id."<br />";
if ($id == "0") { $id = $next_increment; $hidder = "hidder"; }
?>
<form action="profile.php" method="post" target="profile" name="reload">
<input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
</form>

<?php include('_footer.php') ?>





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