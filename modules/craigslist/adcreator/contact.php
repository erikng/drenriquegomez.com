<?php
include('_header.php');
//session_start();
$_SESSION['n1']     = rand(1, 20);
$_SESSION['n2']     = rand(1, 20);
$_SESSION['expect'] = $_SESSION['n1'] + $_SESSION['n2'];
$str                = '';
$success            = '';

if (isset($_SESSION['errStr'])) { $str = '<div class="error">'.$_SESSION['errStr'].'</div>'; unset($_SESSION['errStr']);}
if (isset($_SESSION['sent']))   { $success = '<h1>Thank you!</h1>'; $css = '<style type="text/css">#contact-form{display:none;}</style>'; unset($_SESSION['sent']);}
if (!empty($_GET['vin']))        { $_GET['vin']   = rawurldecode($_GET['vin']);   $database = "automotive";  $field = "vin";      $finder = $_GET['vin'];} 
if (!empty($_GET['title']))      { $_GET['title'] = rawurldecode($_GET['title']); $database = "general";     $field = "location"; $finder = $_GET['title'];}
if (!empty($_GET['mls']))        { $_GET['mls']   = rawurldecode($_GET['mls']);   $database = "real_estate"; $field = "mls";      $finder = $_GET['mls'];}


if ( (!empty($_GET['vin'])) || (!empty($_GET['title'])) || (!empty($_GET['mls'])) ) {
$query="SELECT * FROM $database WHERE $field LIKE '%$finder%'";
$result = mysql_query($query) or die (mysql_error());
$num=mysql_numrows($result);
$result = mysql_fetch_array($result);

if (!empty($result['id']))           $id           = $result['id'];

if ($database == "automotive") {
//just for automotive
if (!empty($result['vin'])) $pull_specs = unserialize($result['vin']);
if (!empty($pull_specs['email'])) $l_email = $pull_specs['email']; else $l_email = "";
if (!empty($result['template'])) $pull_template = unserialize($result['template']);
if (!empty($pull_template['profile'])) $profile = $pull_template['profile']; else $profile = "";
//end only automotive
}

if ($database == "real_estate") {
//just for real estate
if (!empty($result['mls'])) $pull_specs = unserialize($result['mls']);
if (!empty($pull_specs['phone']))        $phone = $pull_specs['phone'];
if (!empty($pull_specs['email'])) $l_email = $pull_specs['email']; else $l_email = "";
if (!empty($result['template'])) $pull_template = unserialize($result['template']);
if (!empty($pull_template['profile'])) $profile = $pull_template['profile']; else $profile = "";
//end only real estate
}

if ($database == "general") {
//just for general
if (!empty($result['location'])) $pull_specs = unserialize($result['location']);
if (!empty($pull_specs['email'])) $l_email = $pull_specs['email']; else $l_email = "";
if (!empty($result['template'])) $pull_template = unserialize($result['template']);
if (!empty($pull_template['profile'])) $profile = $pull_template['profile']; else $profile = "";
//end only general
}

if ( (!empty($profile)) && (!empty($profile)) ) {
$query="SELECT * FROM profiles WHERE `id` = ".$profile."";
$result = mysql_query($query) or die (mysql_error());
$num=mysql_numrows($result);
$result = mysql_fetch_array($result);
if (!empty($result['email'])) $p_email = $result['email']; else $p_email = "";

if (!empty($result['name']))         $p_name         = $result['name'];         else $p_name         = "";
if (!empty($result['position']))     $p_position     = $result['position'];     else $p_position     = "";
if (!empty($result['company']))      $p_company      = $result['company'];      else $p_company      = "";
if (!empty($result['caddress']))     $p_caddress     = $result['caddress'];     else $p_caddress     = "";
if (!empty($result['citystatezip'])) $p_citystatezip = $result['citystatezip']; else $p_citystatezip = "";
if (!empty($result['cphone']))       $p_cphone       = $result['cphone'];       else $p_cphone       = "";
if (!empty($result['hphone']))       $p_hphone       = $result['hphone'];       else $p_hphone       = "";
if (!empty($result['ophone']))       $p_ophone       = $result['ophone'];       else $p_ophone       = "";
if (!empty($result['website']))      $p_website      = $result['website'];      else $p_website      = "";
if (!empty($result['facebook']))     $p_facebook     = $result['facebook'];     else $p_facebook     = "";
if (!empty($result['twitter']))      $p_twitter      = $result['twitter'];      else $p_twitter      = "";
if (!empty($result['linkedin']))     $p_linkedin     = $result['linkedin'];     else $p_linkedin     = "";
if (!empty($result['logo']))         $p_logo         = $result['logo'];         else $p_logo         = "";
}

if (!empty($pre_email)) $email = $pre_email;
if (!empty($l_email)) $email = $l_email;
if (!empty($p_email)) $email = $p_email;
if (empty($email)) $epic_fail = "true"; else "";
if (!empty($pre_website1)) { $pre_website1_name = parse_url($pre_website1);$pre_website1_name = $pre_website1_name['host']; }
if (!empty($pre_website2)) { $pre_website2_name = parse_url($pre_website2);$pre_website2_name = $pre_website2_name['host']; }
if (!empty($pre_website3)) { $pre_website3_name = parse_url($pre_website3);$pre_website3_name = $pre_website3_name['host']; }
if (!empty($p_website))    { $p_website_name = parse_url($p_website);$p_website_name = $p_website_name['host']; }
}
?>
<script>
<!--
window.name = 'contact'
// -->
</script>
<style>
#input[type="text"] {filter:none !important;}
</style>
<div id="outter_wrapper">
<?php if ( (!empty($logo)) && (!empty($website1)) ) echo '<div style="margin-top:15px;"><a href="'.$website1.'" target="_blank"><img src="'.$logo.'" border="0" width="960" /></a></div>'; elseif (!empty($logo)) echo '<div style="margin-top:15px;"><img src="'.$logo.'" border="0" width="960" /></div>';?>
  <div id="inner_wrapper" style="background: #f5f5f5">
    <div id="contact">
      <div id="header"><a href="contact.php?<?php
              if (!empty($_GET['vin']))   { echo "vin=".$_GET['vin']; }
              if (!empty($_GET['title'])) { echo "title=".$_GET['title']; }
              if (!empty($_GET['mls']))   { echo "mls=".$_GET['mls']; }
            ?>"><img src="<?php echo $this_site;?>images/title_contact_us.png" alt="" /></a></div>
      <div id="main-container">
        <div id="form-container">
<?php if (empty($epic_fail)) { ;?>
          <h1>Contact Us
            <?php
              if (!empty($_GET['vin']))   { echo ' About VIN : '.$_GET['vin']; }
              if (!empty($_GET['title'])) { echo ' About '.$_GET['title']; }
              if (!empty($_GET['mls']))   { echo ' About MLS : '.$_GET['mls']; }
            ?>
          </h1>
          <h2>Thank you for taking the time to contact us
            <?php
              if (!empty($_GET['vin']))   { echo ' about VIN : '.$_GET['vin']; }
              if (!empty($_GET['title'])) { echo ' about '.$_GET['title']; }
              if (!empty($_GET['mls']))   { echo ' about MLS : '.$_GET['mls']; }
            ?>
          </h2>
          <form id="contact-form" name="contact-form" method="post" action="submit.php" style="width:900px; margin:0 0 0 -25px;">
           <table width="100%" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" class="validate[required,custom[onlyLetter]]" name="name" id="name" value="<?php if (!empty($_SESSION['post']['name'])) echo $_SESSION['post']['name']; ?>" /></td>
                <td><label for="message">Message</label></td>
                <td rowspan="3"><textarea name="message" id="message" class="validate[required]" cols="75" rows="5"><?php if (!empty($_SESSION['post']['message'])) echo $_SESSION['post']['message']?></textarea></td>
                <td id="errOffset">&nbsp;</td>
              </tr>
              <tr>
                <td><label for="email">Email</label></td>
                <td><input type="text" class="validate[required,custom[email]]" name="email" id="email" value="<?php if (!empty($_SESSION['post']['email'])) echo $_SESSION['post']['email']?>" /></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><label for="subject">Subject</label></td>
                <td><select name="subject" id="subject">
                    <option value="" > - Choose -</option>
                    <?php
                      if (!empty($_GET['vin']))   { echo '<option value="VIN : '.$_GET['vin'].'" selected="selected">VIN : '.$_GET['vin'].'</option>'; }
                      if (!empty($_GET['title'])) { echo '<option value="Title : '.$_GET['title'].'" selected="selected">'.$_GET['title'].'</option>'; }
                      if (!empty($_GET['mls']))   { echo '<option value="MLS : '.$_GET['mls'].'" selected="selected">MLS : '.$_GET['mls'].'</option>'; }
                    ?>
                    <option value="General Question">General Question</option>
                    <option value="General Comment">General Comment</option>
                    <option value="General Complaint">General Complaint</option>
                  </select></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><label for="captcha"><?php echo $_SESSION['n1']?> + <?php echo $_SESSION['n2']?> =</label></td>
                <td><input type="text" class="validate[required,custom[onlyNumber]]" name="captcha" id="captcha" /></td>
                <td>&nbsp;</td>
                <td><input type="submit" name="button" id="button" value="Submit" />
                  <input type="reset" name="button2" id="button2" value="Reset" />
                  <?php echo $str;?><img id="loading" src="images/ajax-load.gif" width="16" height="16" alt="loading" /></td>
                <td>&nbsp;</td>
              </tr>
            </table>
<input type="hidden" name="emailAddress" value="<?php echo $email;?>" />
          </form>
          <?php echo $success?>
<hr class="dotted" />

<?php } else { ?>

<div class="expired" style="margin: 20px auto 20px auto;padding: 0;width: 900px;">
<p style="text-align:center;font-size:50px;margin-top: -7px;">Sorry!</p>
<p style="text-align:center;margin-top: -7px;">There is no valid email address on file. </p>
</div>
<?php } ?>
<div class="company">
<?php

if ( (!empty($pre_city)) &&  (!empty($pre_zipcode)) && (!empty($pre_state)) ) $citystzip = $pre_city.", ".$pre_state." ".$pre_zipcode;

if (!empty($pre_phone))   echo '<span style="display: inline-block;width: 90px;">Phone: </span>'  .$pre_phone."<br />";
if (!empty($company))     echo '<span style="display: inline-block;width: 90px;">Company: </span>'.$company."<br />";
if (!empty($citystzip)) {
if (!empty($pre_address)) echo '<span style="display: inline-block;width: 90px;">Address: </span>'.$pre_address."<br />";
if (!empty($citystzip))   echo '<span style="display: inline-block;width: 90px;">&nbsp;</span>'   .$citystzip."<br />";
}
if ( (!empty($pre_website1)) && (!empty($pre_website1_name)) ) echo '<span style="display: inline-block;width: 90px;">Website: </span><a href="'.$pre_website1.'">www.'.$pre_website1_name.'</a><br />';
if ( (!empty($pre_website2)) && (!empty($pre_website2_name)) )  echo '<span style="display: inline-block;width: 90px;">About Us: </span><a href="'.$pre_website2.'">www.'.$pre_website2_name.'/...</a><br />';
if ( (!empty($pre_website3)) && (!empty($pre_website3_name)) )  echo '<span style="display: inline-block;width: 90px;">Contact Us: </span><a href="'.$pre_website3.'">www.'.$pre_website3_name.'/...</a><br />';

if (!empty($pre_email))   echo '<span style="display: inline-block;width: 90px;">Email : </span>'.$pre_email."<br />";
if ( (!empty($pre_email)) && (!empty($l_email)) && ($pre_email != $l_email)) {
if (!empty($l_email))   echo '<span style="display: inline-block;width: 90px;">Email : </span>'.$l_email."<br />";
}
?>
</div>

<div class="agent">
<div style="float:left;width:325px;">
<?php

if (!empty($p_name))     echo '<span style="display: inline-block;width: 110px;">Agent Name : </span>'.$p_name;
  if (!empty($p_facebook)) echo ' <a href="'.$p_facebook.'"><img src="'.$this_site.'images/facebook.png" /></a> ';
  if (!empty($p_twitter)) echo ' <a href="'.$p_twitter.'"><img src="'.$this_site.'images/twitter.png" /></a> ';
  if (!empty($p_linkedin)) echo ' <a href="'.$p_linkedin.'"><img src="'.$this_site.'images/linkedin.png" /></a> ';
echo "<br />";
if (!empty($p_position))   echo '<span style="display: inline-block;width: 110px;">Position: </span>'.$p_position."<br />";
if (!empty($p_cphone))   echo '<span style="display: inline-block;width: 110px;">Cell Phone: </span>'.$p_cphone."<br />";
if (!empty($p_hphone))   echo '<span style="display: inline-block;width: 110px;">Home Phone: </span>'.$p_hphone."<br />";
if (!empty($p_ophone))   echo '<span style="display: inline-block;width: 110px;">Office Phone: </span>'.$p_ophone."<br />";
if (!empty($p_website))  echo '<span style="display: inline-block;width: 110px;">Website: </span><a href="'.$p_website.'">www.'.$p_website_name.'</a><br />';
if (!empty($p_email))   echo '<span style="display: inline-block;width: 110px;">Email : </span>'.$p_email."<br />";
echo '</div>';
echo '<div style="float:left;width:115px;">';
if (!empty($p_logo)) echo '<img src="'.$p_logo.'" />';
echo '</div>';
?>
</div>
<br class="clear"/>



<?php
if ((!empty($pre_address)) && (!empty($pre_city)) && (!empty($pre_state))) {
    $googlemap = $pre_address . " " . $pre_city . ", " . $pre_state . " US";
//echo $googlemap;
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
  var geocoder;
  var map;
  function initialize() {
    geocoder = new google.maps.Geocoder();
    var myOptions = {
      zoom: 13,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    var address = "<?php echo $googlemap; ?>";
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map, 
            position: results[0].geometry.location
        });
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }

</script>

<hr class="dotted" />

<div id="map_canvas"></div>




<?php }  ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('_footer.php'); ?>