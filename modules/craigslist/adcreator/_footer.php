<div id="footer">

<?php
//keeps the footer bar hidden if no menu or message boxes
if ((!isset($expired_u)) && (!isset($expired_o)) && (!isset($db_message)) && ($show_menu != "bottom")) {
    echo '<style type="text/css">/* <![CDATA[ */ #footer{margin:0;padding:0} #show_message_boxes{margin:0;padding:0}/* ]]> */</style>';
}
if (isset($icon_size)) {
    echo '<style type="text/css">/* <![CDATA[ */ #menu_bottom li img {height:'.$icon_size.'px;} #menu_left li img {height:'.$icon_size.'px;} /* ]]> */</style>';
}

if ((($show_wrn > "0") && (!empty($expired_u))) || (($show_exp > "0") && (!empty($expired_o))) || (!empty($db_message))) {
    echo '<div id="show_message_boxes">';
    if ($show_exp > "0") {
        if ((isset($expired_o)) && (count($expired_o) > 0) || (isset($expired_u)) && (count($expired_u) > 0)) {
            if ((count($expired_o) > 0) && ($show_exp == "1") || (count($expired_o) > 0) && ($show_exp == "3")) {
                echo '<div class="expired"><span class="expired_title">Expired</span>';
                echo "<p>According to the 'originally created date' of the following linsting(s), they have exceeded Craigslist 45 day expiration!</p><br class=\"clear\" />";
                foreach ($expired_o as $row => $exp_addy) {
                    echo $exp_addy . "<br />";
                }
                echo '<span class="config_msg">you can turn this message off on the config page</span>';
                echo "</div>";
            }
            if ((count($expired_u) > 0) && ($show_exp == "2") || (count($expired_u) > 0) && ($show_exp == "3")) {
                echo '<div class="expired"><span class="expired_title">Expired</span>';
                echo "<p>According to the 'last updated date' of the following listing(s), they have exceeded Craigslist 45 day expiration!</p><br class=\"clear\" />";
                foreach ($expired_u as $row => $exp_addy) {
                    echo $exp_addy . "<br />";
                }
                echo '<span class="config_msg">you can turn this message off on the config page</span>';
                echo "</div>";
            }
        } //counts more than 0
    } //if show expired
    if ($show_wrn > "0") {
        if ((isset($warning_o)) && (count($warning_o) > 0) || (isset($warning_u)) && (count($warning_u) > 0)) {
            if ((count($warning_o) > 0) && ($show_wrn == "1") || (count($warning_o) > 0) && ($show_wrn == "3")) {
                echo '<div class="warning"><span class="warning_title">Warning</span>';
                echo "<p>According to the 'originally created date' of the following linsting(s), they will expire in a week!</p><br class=\"clear\" />";
                foreach ($warning_o as $row => $exp_addy) {
                    echo $exp_addy . "<br />";
                }
                echo '<span class="config_msg">you can turn this message off on the config page</span>';
                echo "</div>";
            }
            if ((count($warning_u) > 0) && ($show_wrn == "2") || (count($warning_u) > 0) && ($show_wrn == "3")) {
                echo '<div class="warning"><span class="warning_title">Warning</span>';
                echo "<p>According to the 'last updated date' of the following listing(s), they will expire in a week!</p><br class=\"clear\" />";
                foreach ($warning_u as $row => $exp_addy) {
                    echo $exp_addy . "<br />";
                }
                echo '<span class="config_msg">you can turn this message off on the config page</span>';
                echo "</div>";
            }
        } //counts more than 0
    } //if show expired
    if (isset($db_message)) {
        echo '<div class="success"><span class="success_title">Database Modification</span>';
        echo "<p>" . $db_message . "</p>";
        echo "</div>";
    }
    if ((isset($popup_active)) && ($popup_active == "active") && (empty($email)) && (empty($popup_link))) {
        echo '<div class="expired" style="padding:20px 10px 30px 50px;" ><span class="expired_title">No Email Address</span>';
        echo "<p>If you do not put an email address in the config page the contact form will not work!</p>";
        echo "</div>";
    } //if no email
    echo '</div>';
}



if ( (isset($show_menu)) && ($show_menu == "bottom") || (isset($show_menu)) && ($show_menu == "both")) {
                                                      echo '<ul id="menu_bottom" style="padding-top: 10px;background: none repeat scroll 0 0 #333333;bottom: 0;padding-top: 10px;position: fixed;">';
                                                      echo '<li class="button_b_home">   <a href="'.$this_site.'">                                       <img src="'.$this_site.'images/button_home.png"   alt="CraigsList Tool Home"/><br />Home</a></li>';
if ( (isset($show_real)) && ($show_real == "1") )     echo '<li class="button_b_real">   <a href="'.$this_site.'themes/realestate.php">                  <img src="'.$this_site.'images/button_real.png"   alt="Real Estate"/><br />Real Estate</a></li>';
if ( (isset($show_auto)) && ($show_auto == "1") )     echo '<li class="button_b_auto">   <a href="'.$this_site.'themes/automotive.php">                  <img src="'.$this_site.'images/button_auto.png"   alt="Automotive"/><br />Automotive</a></li>';
if ( (isset($show_gen)) && ($show_gen == "1") )       echo '<li class="button_b_gen">    <a href="'.$this_site.'themes/general.php">                     <img src="'.$this_site.'images/button_gen.png"    alt="General"/><br />General</a></li>';
if ( (isset($show_prof)) && ($show_prof == "1") )     echo '<li class="button_b_prof">   <a href="'.$this_site.'profile.php">                            <img src="'.$this_site.'images/button_prof.png"   alt="Profile"/><br />Profile</a></li>';
if ( (isset($show_config)) && ($show_config == "1") ) echo '<li class="button_b_config"> <a href="'.$this_site.'config.php">                             <img src="'.$this_site.'images/button_config.png" alt="Config"/><br />Config</a></li>';
if ( (isset($show_stats)) && ($show_stats == "1") )   echo '<li class="button_b_stats">  <a href="'.$this_site.'stats.php">                              <img src="'.$this_site.'images/button_stats.png"  alt="Stats"/><br />Stats</a></li>';
                                                      echo '<li class="button_b_list">   <a href="'.$this_site.'listings.php" target="list">             <img src="'.$this_site.'images/button_list.png"   alt="All List"/><br />All Listings</a></li>';
if ( (isset($show_cllink)) && ($show_cllink == "1") ) echo '<li class="button_b_craig">  <a href="https://accounts.craigslist.org/" target="craigslist"> <img src="'.$this_site.'images/button_craig.png"  alt="CraigsList"/><br />Craigslist</a></li>';
                                                      echo '</ul>';
}

if ( (isset($show_menu)) && ($show_menu == "left") || (isset($show_menu)) && ($show_menu == "both")) {
                                                      echo '<div style="position:fixed;top:50%;margin-top:-350px;left:50%; margin-left:-690px;width: 180px;"><ul id="menu_left">';
                                                      echo '<li class="button_l_home">   <a href="'.$this_site.'">                                       <img src="'.$this_site.'images/button_home.png"   alt="CraigsList Tool Home"/><br />Home</a></li>';
if ( (isset($show_real)) && ($show_real == "1") )     echo '<li class="button_l_real">   <a href="'.$this_site.'themes/realestate.php">                  <img src="'.$this_site.'images/button_real.png"   alt="Real Estate"/><br />Real Estate</a></li>';
if ( (isset($show_auto)) && ($show_auto == "1") )     echo '<li class="button_l_auto">   <a href="'.$this_site.'themes/automotive.php">                  <img src="'.$this_site.'images/button_auto.png"   alt="Automotive"/><br />Automotive</a></li>';
if ( (isset($show_gen)) && ($show_gen == "1") )       echo '<li class="button_l_gen">    <a href="'.$this_site.'themes/general.php">                     <img src="'.$this_site.'images/button_gen.png"    alt="General"/><br />General</a></li>';
if ( (isset($show_prof)) && ($show_prof == "1") )     echo '<li class="button_l_prof">   <a href="'.$this_site.'profile.php">                            <img src="'.$this_site.'images/button_prof.png"   alt="Profile"/><br />Profile</a></li>';
if ( (isset($show_config)) && ($show_config == "1") ) echo '<li class="button_l_config"> <a href="'.$this_site.'config.php">                             <img src="'.$this_site.'images/button_config.png" alt="Config"/><br />Config</a></li>';
if ( (isset($show_stats)) && ($show_stats == "1") )   echo '<li class="button_l_stats">  <a href="'.$this_site.'stats.php">                              <img src="'.$this_site.'images/button_stats.png"  alt="Stats"/><br />Stats</a></li>';
                                                      echo '<li class="button_l_list">   <a href="'.$this_site.'listings.php" target="list">             <img src="'.$this_site.'images/button_list.png"   alt="All List"/><br />All Listings</a></li>';
if ( (isset($show_cllink)) && ($show_cllink == "1") ) echo '<li class="button_l_craig">  <a href="https://accounts.craigslist.org/" target="craigslist"> <img src="'.$this_site.'images/button_craig.png"  alt="CraigsList"/><br />Craigslist</a></li>';
                                                      echo '</ul></div>';
}
?>
</div>

<?php if ( ($pag == "config.php") || ($pag == "profile.php") || ($pag == "realestate.php") || ($pag == "automotive.php") || ($pag == "general.php") ) { ?>
<div style='display:none'>
  <div id='other_symbols' style='padding:10px; background:#fff;'>
<table style="font-size:30px">
<tr><td>&#1161;</td><td>&#1439;</td><td>&#1442;</td><td>&#1468;</td><td>&#1567;</td><td>&#1769;</td><td>&#1792;</td><td>&#2039;</td><td>&#3349;</td><td>&#3572;</td></tr>
<tr><td>&#4028;</td><td>&#4036;</td><td>&#4042;</td><td>&#4960;</td><td>&#4962;</td><td>&#4968;</td><td>&#5125;</td><td>&#5130;</td><td>&#5775;</td><td>&#7449;</td></tr>
<tr><td>&#8251;</td><td>&#8253;</td><td>&#8258;</td><td>&#8400;</td><td>&#8401;</td><td>&#8404;</td><td>&#8405;</td><td>&#8406;</td><td>&#8407;</td><td>&#8413;</td></tr>
<tr><td>&#8414;</td><td>&#8415;</td><td>&#8416;</td><td>&#8417;</td><td>&#8470;</td><td>&#5414;</td><td>&#5416;</td><td>&#5419;</td><td>&#5422;</td><td>&#5734;</td></tr>
<tr><td>&#5731;</td><td>&#4413;</td><td>&#4415;</td><td>&#3914;</td><td>&#3919;</td><td>&#3917;</td><td>&#3922;</td><td>&#9883;</td><td>&#9885;</td><td>&#9889;</td></tr>
<tr><td>&#9996;</td><td>&#9998;</td><td>&#10003;</td><td>&#10004;</td><td>&#10005;</td><td>&#10006;</td><td>&#10007;</td></tr>
<?php $bad = array('9994','9995','9917','9918','9919','9920','9921','9922','9923','9924','9925','9926','9927','9928','9929','9930','9931','9932','9933','9934','9935','9936','9937','9938','9939','9940','9941','9942','9943','9944','9945','9946','9947','9948','9949','9950','9951','9952','9953','9954','9955','9956','9957','9958','9959','9960','9961','9962','9963','9964','9965','9966','9967','9968','9969','9970','9971','9972','9973','9974','9975','9976','9977','9978','9979','9980','9981','9982','9983','9984','9904','9905','9906','9886','9887','9291','9292','9293','9294','9295','9296','9297','9298','9299','9300','9301','9302','9303','9304','9305','9306','9307','9308','9309','9310','9311','9255','9256','9257','9258','9259','9260','9261','9262','9263','9264','9265','9266','9267','9268','9269','9270','9271','9272','9273','9274','9275','9276','9277','9278','9279','9185','9186','9187','9188','9189','9190','9191','9192','9193','9194','9195','9196','9197','9198','9199','9200','9201','9202','9203','9204','9205','9206','9207','9208','9209','9210','9211','9212','9213','9214','9215','8581','8582','8583','8584','8585','8586','8587','8588','8589','8590','8591','8527','8528','8529','8530','8524','9180','9181','9182','9183','9184');
$symbol = "8448"; while ($symbol < 10000) { echo "<tr>";
if (!in_array($symbol,$bad)) echo "<td>&#".$symbol."; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";$symbol++;
if (!in_array($symbol,$bad)) echo "<td>&#".$symbol."; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";$symbol++;
if (!in_array($symbol,$bad)) echo "<td>&#".$symbol."; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";$symbol++;
if (!in_array($symbol,$bad)) echo "<td>&#".$symbol."; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";$symbol++;
if (!in_array($symbol,$bad)) echo "<td>&#".$symbol."; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";$symbol++;
if (!in_array($symbol,$bad)) echo "<td>&#".$symbol."; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";$symbol++;
if (!in_array($symbol,$bad)) echo "<td>&#".$symbol."; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";$symbol++;
if (!in_array($symbol,$bad)) echo "<td>&#".$symbol."; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";$symbol++;
if (!in_array($symbol,$bad)) echo "<td>&#".$symbol."; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";$symbol++;
if (!in_array($symbol,$bad)) echo "<td>&#".$symbol."; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";$symbol++;
echo "<tr>"; } ?></table>
</div>
</div>
<?php } ?>

<?php if ( (isset($wysiwyg)) && ($wysiwyg == "on") ) { include('wysiwyg.php'); } ?>
</body>
</html>
<?php
//free database memory
//if (isset($result))
//mysql_free_result($result);
//close connection
//if (isset($dbconnect))
//mysql_close($dbconnect);

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