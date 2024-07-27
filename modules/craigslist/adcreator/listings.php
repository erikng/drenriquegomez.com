<?php include('_header.php'); $show_menu="none"; ?>

<script type="text/javascript"> 
/* <![CDATA[ */
window.name = 'listings';
/* ]]> */
</script>
<style>
table {
	margin:inherit;
	padding:inherit
}
.main_border {
	background:#FFF;
	border:1px solid #B3B3B3;
	display:block
}
.main_border span {
	display:block;
	padding:0 10px
}
#inner_table th {
	background-color:#00BFFF;
	color:#FEFEFE;
	font-size:14px;
	font-weight:700;
	height:33px;
	text-align:center
}
.std_1 {
	background:#e3e3e3;
	color:#000;
	height:33px;
	text-align:center
}
.std_2 {
	background:#d3d3d3;
	color:#000;
	height:33px;
	text-align:center
}
#inner_table tr:hover, .blue_text:hover {
	background:#b3b3b3;
	color:#FEFEFE;
	height:33px;
	padding:0 10px
}
.blue_text {
	color:#24a5e1;
	font-size:12px;
	font-weight:700
}
#inner_table tr:hover td:hover {
	background-color:#00BFFF;
	color:#FEFEFE;
	font-size:18px;
	font-weight:700;
	text-align:center
}
td span {
	background-color:#00BFFF;
	color:#FEFEFE;
	font-size:14px;
	font-weight:700;
	height:50px;
	padding-top:10px!important;
	text-align:center
}
.border {
	border:1px solid #B3B3B3
}
.border2 {
	background:#FFF;
	border:1px solid #B3B3B3
}
td.tip {
	position:relative
}
span.tip, span.tip p {
	background-color:none;
	color:#FEFEFE;
	display:none;
	font-size:14px;
	font-weight:400;
	height:0;
	padding-top:0!important;
	position:relative;
	text-align:center;
	visibility:hidden
}
td.tip:hover span.tip {
	background:url(images/tooltip.png) no-repeat scroll 0 0 transparent;
	color:#000;
	display:block;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:11px;
	font-weight:400;
	height:100px;
	margin-left:-30px;
	margin-top:-120px;
	overflow:hidden;
	padding:10px 0!important;
	position:absolute;
	visibility:visible;
	width:150px;
	z-index:1
}
td.tip:hover span.tip p {
	color:#000;
	display:block;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:11px;
	font-weight:400;
	height:65px;
	margin-left:0;
	margin-top:0;
	overflow:hidden;
	padding-left:7px;
	position:absolute;
	visibility:visible;
	width:135px;
	z-index:1
}
.no {
	background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAADSUlEQVQ4y62UXUiTURjHn3ebaznN1XK2FNPCihD7oOxD+6LoA42QioJECUGC7jRMvUivosuIrvoO3VbWckUm2YdgUrgy04xaqViazeEHplTUxb//MZsmRTcNnp3zvu85v/N//uc5RwDI/4jRv/siUi6S7o6M7L5sNDrZn+bkOxUOhmusdfwcZ3Zo2pmrZrOf/ay7IuOgGyI7biUkfOoqLUXTvn1w6PUeTpo5GcSJ4WUiZQ+XL4cvLQ03o6K+VopkB0Fuu723+9gx9OTlwV9UhGe7dsGh07kV7BeIkDBCztevXIl327bhbVISfGzdFstIEFQRFlb58tAhBEpK0JWVhcCRI3hOmEuvv0GAhcpC2F56nJqKD3v2oC0hAR0pKfCuXQuX0XgnCOLAGVdCQ2+15OSg7+hR9GRmor+gAM2cxDQr6YnDu2kTAlzk3ZIl6N66FY0bN6LcYKjlArODoDHpNpfJ5Hlx4AAGiovh37sXg4cPoyUjA41MYfDgQfSsWYMAlTbz2RkScp9pz3FMNNs1vkO2yyZTVWt2NoboVWD3bgzn52OEwAAVDfD5RXo6XFOm1HFsrJp38U+gMZjFaTR6WpnecGHh6OR+ejPEXXq5ebNS8oDq7UrJBYZvIsg5oU4YBuVJ486dGKGavqVLMbhwIT4R1Lx+PfitWpWBmnOe0fsXUHi5pl16QjMHcnPRM38+htgfJqR33jz0K5PpE0ujStmgQB8ng1TFMs4+WrYM/u3b8T46Gn0bNqCV0bJuHQa2bEF3TAwCTM+bnAyCbp4TmfUbiC+nlqtiYxrv6UeH1YqPbBXAqdc/YDpVT1etGjW8027HB75vYHWfFan2U9m4Ip3uVD3ro33FCvgsFnRxxabVq3FVp6tzi0RfZ8oVmuZpoFoFabPZ0MnvjxcvRgWLNgi6YjYHXrHAfHFxaCewiaAaTas9IRJfQOkqjvO4VItc8/JoKMjb2Fi0qSNitX4Pgjw8eFU227fX9OEZJVNhXSaLLUbGfxbGfp6A0yLXvYmJeEPj78XHgzdHfhB0j4NOiuTcjoj4XGEw1C8QWfS3eydWZC53y10zffoXqixMEdGCoAiCQhnhIlFhItZ/XWIca+XY2SbWnIzt2g/CBlp/iusZhAAAAABJRU5ErkJggg==) no-repeat scroll 50% 50% transparent
}
.yes {
	background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAASCAYAAABB7B6eAAADa0lEQVQ4y7WUfUzTRxzGn9+vjYgwCrQw2lVn1TVOQDOj00TdmMGNF6mZg+ELCp2MdsSIrzFOZUZHUGYMw4EviApucRviYinMBEsMWkgMcSCEF2ltxU7KHMsiLA7IfPzDwUSlwcQ9yd0fl7vP53LfuwNJ/J/tcfdExmkA/3S8WKQQxHU4iU9wCuJ/wy9H4AM/xVafCz91/sCCpjxKDMJ5eEP2cgR+kGsOymurusvZN9DHvoFeFrUfZdCOgDrIoXyuQKoGXjE83oHHaBE6u1DdUOn+kbY/W/nLvWts+K2ervudNFrXUkjC2WcFUgiKDLFQWzLBKZmG8NHYknDMXVL5Rne5+wxruy20uEy0uCpY82sVN17RM/CwSFGHyyMFfvBTZXpXZDans9B2gAtMyh7vCCx9Gu67GNHxtWF/lN4toMlVwlLncZ5zFrHMcZrramIY9A0oTcMgXoN+WCAEIEiV7VWzu8nI0zdzWXQzh/m23Yytm9wvi8aKIXjwaqSuaQ77p9iVxWLnfp64tY8n7dk83pHFFVfncloxOMGIfoQgZUSR5Tp8oTVLGH0xnDuv6/lVyyYeat/Cg7b1/Lhx6kNVGjImGrHVYJvN/DubmOfMYO6tDcyzb+aXranU1ak583swMA1uIQAfPHNNZRHImVMGTr8AzjJLudyq5cbGKO5qS+A++0qu6ZhCgyOMBzqTmOVM5B7Hh9zREcPkG6GMqfflnFKRr34m3BF8Mf/J4xwWSGSYOXE97O+ZBS68DL5lARdYwffrvfhRs5zJ7ZNotE1nuj2UBpuWK9sU3GJ/l587IrnwvA9D9GK74I03n67XiCKL4zFDswFti81e3Na6hIuugZENYFyLlCkdSmY4wrj99tvcfnsev+5KYdnv+xlZLqdKLzZC/PfOexIAgDAO6teThUuxF/251xHHbY4I5rgSmel6h7nueBbe0/NEj55Nf1UxyqRkyCpcBSB7HnzUlwzAf3ISTAkWJY90pbLA/SnP9exhdW8+qx/k0NZfQ12FhsEJKAcwfjS4JwEAeKlWoTLxkprW3u9Y13uW1r8P8+5gI3XmSVQsQ8nwb+khngQAIAQvx7dJFg1bH1Sza7CFqyu1g4FxODYW+FgEIIngZSiI/dmf8eaggcAoYe9Y4WMSDE1SxCBbHiXsehH40NpH5admKIe3pFoAAAAASUVORK5CYII=) no-repeat scroll 50% 50% transparent
}
#footer {
	display:none
}
</style>
<div id="outter_wrapper">
  <?php
if (isset($_GET['loggedout'])) {
    echo '<div class="success" style="margin-top:20px;"><span class="success_title">Logged Out</span>';
    echo "<p>You have been logged out of the Craigslist Listing Tool.</p>";
    echo "</div>";
}

if ( (!isset($_SESSION['username'])) && (!empty($demo)) ) {
    echo '<div class="success" style="margin-top:20px;"><span class="success_title">Log In</span>';
    echo '<p><a href="?admin">Click Here To Log In</a></p>';
    echo '</div>';
}


if (isset($_SESSION['username'])) {
echo '<style type="text/css">/* <![CDATA[ */ #footer{display:block}/* ]]> */</style>';
$show_menu = "both";
}


?>
  <div id="inner_wrapper">
    <div id="stats" style="background:none;">
      <div id="header"><img src="images/title_listings.png" alt="" /></div>
      <?php
        $now             = mktime();
        $lapse1          = "3888000"; //45 days in seconds - expired
        $lapse2          = "3283200"; //38 days in seconds - warning
        $expired_o       = array();
        $expired_u       = array();
        $warning_o       = array();
        $warning_u       = array();
        $gm_total_hits   = "0";
        $gm_total_hits_2 = "0";
        $gm_num          = "0";
        $show_gt         = "0";
      if ((isset($show_real)) && ($show_real == "1")) {
      ?>
      <div id="realestate">
        <div class="statistics" style="margin-top:30px;padding:20px 10px 10px 10px;/*width:1140px;*/width:900px;border: 1px solid #f50f0f;"><span class="sect_title" style="color:#f50f0f;border-color:#f50f0f;">Real Estate For Sale</span> 
          <!-- for the dark border and white bottom box -->
          <table width="900" border="0" cellspacing="0" cellpadding="0" class="main_border">
            <tr>
              <td><table width="880" border="0" cellspacing="1" cellpadding="0" id="inner_table">
                  <tr>
                    <th width="50px">ID</th>
                    <th width="90px">Image</th>
                    <th width="100px">Price</th>
                    <th width="300px">Address</th>
                    <th width="60px">Year</th>
                    <th width="60px">Bed</th>
                    <th width="60px">Bath</th>
                    <th width="60px">Garage</th>
                    <th width="100px">Sq. Ft.</th>
                  </tr>
                  <?php
                  $query        = "SELECT * FROM real_estate ORDER BY id ASC";
                  $result       = mysql_query($query);
                  $num          = mysql_numrows($result);
                  $hits         = "0";
                  $hits_2       = "0";
                  $total_hits   = "0";
                  $total_hits_2 = "0";
                  $i            = 0;
                  while ($i < $num) {
                      $color = "black";
                      $id    = mysql_result($result, $i, "id");
                      $mls   = unserialize(mysql_result($result, $i, "mls"));
                      if (isset($mls['address'])) $address = $mls['address'];
                      if (isset($mls['city']))    $city = $mls['city'];
                      if (isset($mls['state']))   $state = $mls['state'];
                      if (isset($mls['price']))   $price = $mls['price'];
                      if (isset($mls['phone']))   $phone = $mls['phone'];
                      if (isset($mls['county']))  $county = $mls['county'];
                      if (isset($mls['zipcode'])) $zipcode = $mls['zipcode'];
                      if (isset($mls['bed']))     $bed = $mls['bed'];
                      if (isset($mls['bath']))    $bath = $mls['bath'];
                      if (isset($mls['garage']))  $garage = $mls['garage'];
                      if (isset($mls['year']))    $year = $mls['year'];
                      if (isset($mls['sqft']))    $sqft = $mls['sqft'];
                      if (isset($mls['lotsize'])) $lotsize = $mls['lotsize'];
                      $images = unserialize(mysql_result($result, $i, "image"));
                      if (isset($images['image00'])) $image00 = str_replace($pri_ext, $org_ext, $images['image00']); else $image00 = "";
                      $full_address = $address . ' ' . $city . ', ' . $state;
                      if ($i % 2) { echo '<tr class="std_1" onClick="window.open(\'' . $this_site . 'imager.php?img=r_' . $id . '_' . $image00 . '\',\'imager\')" style="cursor: pointer; cursor: hand;">';
                      } else {      echo '<tr class="std_2" onClick="window.open(\'' . $this_site . 'imager.php?img=r_' . $id . '_' . $image00 . '\',\'imager\')" style="cursor: pointer; cursor: hand;">';
                      }
                      echo '<!-- ID      --><td><span>' . $id . '</span></td>
                            <!-- Image   --><td><a href="' . $this_site . $upload_path . $image00 . '" rel="images2" class="preview" title="' . $image00 . '" ><img src="' . $this_site . $upload_path . $image00 . '" alt="' . $image00 . '" class="max_w_h" height="50" /></a></td>
                            <!-- Price   --><td>' . $price . '</td>
                            <!-- Address --><td class="blue_text">' . $full_address . '</td>
                            <!-- Year    --><td>' . $year . '</td>
                            <!-- Bed     --><td>' . $bed . '</td>
                            <!-- Bath    --><td>' . $bath . '</td>
                            <!-- Garage  --><td>' . $garage . '</td>
                            <!-- Sq. Ft. --><td>' . $sqft . '</td>
                            </tr>';
                  $i++;
                  }
                  ?>
                  <tr>
                    <td colspan="10" class="center">Click any row to view more details</td>
                  </tr>
                </table></td>
            </tr>
          </table>
          <?php
    $pos = strpos($popup_link, $this_site);
    if ($pos === false) { echo '<button id="config_button" onClick="window.open(\'' . $popup_link . '\',\'contact\')">Contact Us</button>';
          } else {        echo '<button id="config_button" onClick="window.open(\'contact.php\',\'contact\')">Contact Us</button>';}
    ?>
        </div>
      </div>
      <?php } ?>
      <?php if ((isset($show_auto)) && ($show_auto == "1")) { ?>
      <div id="automotive">
        <div class="statistics" style="margin-top:30px;padding:20px 10px 10px 10px;width:900px;border: 1px solid #00BFFF;"><span class="sect_title" style="color:#00BFFF;border-color:#00BFFF;">Automobiles For Sale </span>
          <table width="900" border="0" cellspacing="0" cellpadding="0" class="main_border">
            <tr>
              <td><table width="880" border="0" cellspacing="1" cellpadding="0" id="inner_table">
                  <tr>
                    <th width="50px">ID</th>
                    <th width="90px">Image</th>
                    <th width="75px">Price</th>
                    <th width="100px">Year Make Model</th>
                    <th width="60px">Miles</th>
                    <th width="100px">Engine</th>
                    <th width="50px">Trim</th>
                    <th width="100px">Transmission</th>
                    <th width="100px">Drivetrain</th>
                  </tr>
                  <?php
                  $query        = "SELECT * FROM automotive ORDER BY id ASC";
                  $result       = mysql_query($query);
                  $num          = mysql_numrows($result);
                  $total_hits   = "0";
                  $total_hits_2 = "0";
                  $i            = 0;
                  while ($i < $num) {
                      $color = "black";
                      $id    = mysql_result($result, $i, "id");
                      $vin   = unserialize(mysql_result($result, $i, "vin"));
                      $year  = $vin['year'];
                      $vin   = unserialize(mysql_result($result, $i, "vin"));
                      if (isset($vin['address']))      $address = $vin['address'];
                      if (isset($vin['city']))         $city = $vin['city'];
                      if (isset($vin['state']))        $state = $vin['state'];
                      if (isset($vin['price']))        $price = $vin['price'];
                      if (isset($vin['phone']))        $phone = $vin['phone'];
                      if (isset($vin['county']))       $county = $vin['county'];
                      if (isset($vin['zipcode']))      $zipcode = $vin['zipcode'];
                      if (isset($vin['year']))         $year = $vin['year'];
                      if (isset($vin['make']))         $make = $vin['make'];
                      if (isset($vin['model']))        $model = $vin['model'];
                      if (isset($vin['engine']))       $engine = $vin['engine'];
                      if (isset($vin['miles']))        $miles = $vin['miles'];
                      if (isset($vin['trim']))         $trim = $vin['trim'];
                      if (isset($vin['transmission'])) $transmission = $vin['transmission'];
                      if (isset($vin['drivetrain']))   $drivetrain = $vin['drivetrain'];
                      $images = unserialize(mysql_result($result, $i, "image"));
                      if (isset($images['image00'])) $image00 = str_replace($pri_ext, $org_ext, $images['image00']);
                      else $image00 = "";
                      $full_address = $year . ' ' . $make . ' ' . $model;
                      if ($i % 2) { echo '<tr class="std_1" onClick="window.open(\'' . $this_site . 'imager.php?img=a_' . $id . '_' . $image00 . '\',\'imager\')" style="cursor: pointer; cursor: hand;">';
                           } else { echo '<tr class="std_2" onClick="window.open(\'' . $this_site . 'imager.php?img=a_' . $id . '_' . $image00 . '\',\'imager\')" style="cursor: pointer; cursor: hand;">'; }
                      echo '<!-- ID      --><td><span>' . $id . '</span></td>
                            <!-- Image   --><td><a href="' . $this_site . $upload_path . $image00 . '" rel="images2" class="preview" title="' . $image00 . '" ><img src="' . $this_site . $upload_path . $image00 . '" alt="' . $image00 . '" class="max_w_h" height="50" /></a></td>
                            <!-- Price   --><td>' . $price . '</td>
                            <!-- YrMkMl  --><td class="blue_text">' . $full_address . '</td>
                            <!-- Miles   --><td>' . $miles . '</td>
                            <!-- Engine  --><td>' . $engine . '</td>
                            <!-- Trim    --><td>' . $trim . '</td>
                            <!-- Trans   --><td>' . $transmission . '</td>
                            <!-- Drvtrn  --><td>' . $drivetrain . '</td>
                            </tr>';
                  $i++;
                  }
                  ?>
                  <tr>
                    <td colspan="10" class="center">Click any row to view more details</td>
                  </tr>
                </table></td>
            </tr>
          </table>
          <?php
    $pos = strpos($popup_link, $this_site);
    if ($pos === false) { echo '<button id="config_button" onClick="window.open(\'' . $popup_link . '\',\'contact\')">Contact Us</button>';
                 } else { echo '<button id="config_button" onClick="window.open(\'contact.php\',\'contact\')">Contact Us</button>'; }
    ?>
        </div>
      </div>
      <?php } 
      if ((isset($show_gen)) && ($show_gen == "1")) { ?>
      <div id="general">
        <div class="statistics" style="margin-top:30px;padding:20px 10px 10px 10px;width:900px;border-color:#ff9900;"><span class="sect_title" style="border-color:#ff9900;color:#ff9900;">General Items For Sale</span>
          <table width="900" border="0" cellspacing="0" cellpadding="0" class="main_border">
            <tr>
              <td><table width="880" border="0" cellspacing="1" cellpadding="0" id="inner_table">
                  <tr>
                    <th width="50px">ID</th>
                    <th width="90px">Image</th>
                    <th width="100px">Price</th>
                    <th width="300px">Title</th>
                    <th width="300px">Location</th>
                  </tr>
                  <?php
                  $query        = "SELECT * FROM general ORDER BY id ASC";
                  $result       = mysql_query($query);
                  $num          = mysql_numrows($result);
                  $total_hits   = "0";
                  $total_hits_2 = "0";
                  $i            = 0;
                  while ($i < $num) {
                      $color        = "black";
                      $id           = mysql_result($result, $i, "id");
                      $description  = unserialize(mysql_result($result, $i, "description"));
                      $title        = $description['title'];
                      $locations    = unserialize(mysql_result($result, $i, "location"));
                      $location     = $locations['location'];
                      $price        = $locations['price'];
                      $template     = unserialize(mysql_result($result, $i, "template"));
                      $profile      = $template['profile'];
                      $full_address = $title;
                      $images       = unserialize(mysql_result($result, $i, "image"));
                      if (isset($images['image00'])) $image00 = str_replace($pri_ext, $org_ext, $images['image00']);
                      else $image00 = "";
                      if ($i % 2) { echo '<tr class="std_1" onClick="window.open(\'' . $this_site . 'imager.php?img=g_' . $id . '_' . $image00 . '\',\'imager\')" style="cursor: pointer; cursor: hand;">';
                           } else { echo '<tr class="std_2" onClick="window.open(\'' . $this_site . 'imager.php?img=g_' . $id . '_' . $image00 . '\',\'imager\')" style="cursor: pointer; cursor: hand;">'; }
                      echo '<!-- ID      --><td><span>' . $id . '</span></td>
                      <!-- Image   --><td><a href="' . $this_site . $upload_path . $image00 . '" rel="images2" class="preview" title="' . $image00 . '" ><img src="' . $this_site . $upload_path . $image00 . '" alt="' . $image00 . '" class="max_w_h" height="50" /></a></td>
                      <!-- Price   --><td>' . $price . '</td>
                      <!-- YrMkMl  --><td class="blue_text">' . $full_address . '</td>
                      <!-- location   --><td>' . $location . '</td>
                      </tr>';
                  $i++;
                  }
                  ?>
                  <tr>
                    <td colspan="10" class="center">Click any row to view more details</td>
                  </tr>
                </table></td>
            </tr>
          </table>
          <?php $pos = strpos($popup_link, $this_site); 
            if ($pos === false) { echo '<button id="config_button" onClick="window.open(\'' . $popup_link . '\',\'contact\')">Contact Us</button>';
                 } else { echo '<button id="config_button" onClick="window.open(\'contact.php\',\'contact\')">Contact Us</button>'; }
          ?>
        </div>
      </div>
      <?php } ?>
      <div style="height:50px;">&nbsp;</div>
      <p style="text-align:center;font-size:12px;">&copy; 2011 <a href="http://www.fremonttech.com">FremontTech</a></p>
    </div>
  </div>
</div>
</div>
<?php
include('_footer.php');
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