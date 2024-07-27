<?php
if (isset($_POST['profile'])) $p_id = $_POST['profile'];
if (isset($profile)) $p_id = $profile;
$query="SELECT * FROM profiles WHERE `id` = ".$p_id."";
$result = mysql_query($query) or die (mysql_error());
$num=mysql_numrows($result);
$result = mysql_fetch_array($result);
//echo ("id: ".$result[0]."");

if (isset($result['id']))           $p_id	        = $result['id'];           else $p_id           = "";
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

//mysql_free_result($query);

$p_email = str_replace('@','&#64;',$p_email);


if (get_magic_quotes_gpc() == "1"){
$p_bio = stripslashes($p_bio);
}


$p_website_name = parse_url($p_website);
$p_website_name = $p_website_name['host'];

?>
<td colspan="5" bgcolor="<?php echo $fg_color;?>"><hr width="90%" size="1"></td>
<tr>
  <td colspan="5" bgcolor="<?php echo $fg_color;?>" ><table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="<?php echo $fg_color;?>">
      <tr>
        <th rowspan="7" scope="col" width="20">&nbsp;</th>
        <th rowspan="7" cellpadding="10"><p><?php if (!empty($p_photo)) echo '<img alt="Photo" src="'.$p_photo.'" width="200">'; else echo "&nbsp;"; ?><br>
            <font color="<?php echo $hl_color;?>"><?php echo $p_name;?><br>
            <i> <?php echo $p_position;?></i></font></p></th>
        <th rowspan="7" scope="col" width="20">&nbsp;</th>
        <th colspan="4" scope="col"><font color="<?php echo $hl_color;?>"><?php echo $p_name.' - '.$p_company.' - <i>'.$p_position.'</i> </font>';
          if (!empty($p_facebook)) echo ' <a href="'.$p_facebook.'"><img src="'.$this_site.'images/facebook.png" /></a> ';
          if (!empty($p_twitter)) echo ' <a href="'.$p_twitter.'"><img src="'.$this_site.'images/twitter.png" /></a> ';
          if (!empty($p_linkedin)) echo ' <a href="'.$p_linkedin.'"><img src="'.$this_site.'images/linkedin.png" /></a> ';?>
        </th><th rowspan="7" scope="col" width="20">&nbsp;</th>
      </tr>
      <tr>
        <td colspan="4" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td><font color="<?php echo $ft_color;?>">Cell : </font></td>
        <td><font color="<?php echo $ft_color;?>"><?php echo $p_cphone; ?></font></td>
        <td><font color="<?php echo $ft_color;?>"><?php echo '<a href="'.$p_website.'">'.$p_website_name.'</a>';?></font></td>
        <td rowspan="4" width="115"><?php if (!empty($p_logo)) echo '<img alt="Logo" src="'.$p_logo.'" width="115">'; else echo "&nbsp;"; ?></td>
      </tr>
      <tr>
        <td><font color="<?php echo $ft_color;?>">Home : </font></td>
        <td><font color="<?php echo $ft_color;?>"><?php echo $p_hphone; ?></font></td>
        <td><font color="<?php echo $ft_color;?>"><?php echo $p_company; ?></font></td>
      </tr>
      <tr>
        <td><font color="<?php echo $ft_color;?>">Office : </font></td>
        <td><font color="<?php echo $ft_color;?>"><?php echo $p_ophone; ?></font></td>
        <td><font color="<?php echo $ft_color;?>"><?php echo $p_caddress; ?></font></td>
      </tr>

      <tr>
        <td><font color="<?php echo $ft_color;?>">Email : </font></td>
        <td><font color="<?php echo $ft_color;?>"><?php if (!empty($p_email)) echo '<a href="mailto:'.$p_email.'">'.$p_email.'</a>'; else echo "&nbsp;";?></font></td>
        <td><font color="<?php echo $ft_color;?>"><?php echo $p_citystatezip; ?></font></td>
      </tr>

      <tr>
        <td colspan="4"><font color="<?php echo $ft_color;?>"><?php echo $p_bio; ?></font></td>
      </tr>
    </table></td>
</tr>
