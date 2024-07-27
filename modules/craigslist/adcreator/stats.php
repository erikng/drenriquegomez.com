<?php include('_header.php'); ?>
<div id="outter_wrapper">
  <div id="inner_wrapper">
    <div id="stats">
      <div id="header"><a href="stats.php"><img src="images/title_stats.png" alt="" /></a></div>
<?php
            $now          = mktime();
            $lapse1       = "3888000"; //45 days in seconds - expired
            $lapse2       = "3283200"; //38 days in seconds - warning
            $expired_o    = array();
            $expired_u    = array();
            $warning_o    = array();
            $warning_u    = array();
            $gm_total_hits   = "0";
            $gm_total_hits_2 = "0";
            $gm_num = "0";
            $show_gt = "0";



if ( (isset($show_real)) && ($show_real == "1") ) { ?>
<div id="realestate">
<div class="statistics" style="margin-top:30px;padding:20px 10px 10px 10px;width:900px;border: 1px solid #f50f0f;"><span class="sect_title" style="color:#f50f0f;border-color:#f50f0f;">Real Estate Hit Counts</span>
        <table width="100%" border="0" summary="summ" cellpadding="0" cellspacing="0">
          <tr>
            <th scope="col" width="125">Address</th>
            <th scope="col" width="30">CL Hits</th>
            <th scope="col" width="50">Imager Hits</th>
            <th scope="col" width="100">Created</th>
            <th scope="col" width="100">Updated</th>
          </tr>
          <?php
            $query="SELECT * FROM real_estate ORDER BY id ASC";
            $result=mysql_query($query);
            $num=mysql_numrows($result);
            $hits         = "0";
            $hits_2       = "0";
            $total_hits   = "0";
            $total_hits_2 = "0";
            $i            = 0;
            while ($i < $num) {
                $color         = "black";
                $id            = mysql_result($result, $i, "id");
                $mls           = unserialize(mysql_result($result, $i, "mls"));
                $address       = $mls['address'];
                $city          = $mls['city'];
                $state         = $mls['state'];
                $dates         = unserialize(mysql_result($result, $i, "u_date"));
                $o_date        = $dates['o_date'];
                $u_date        = $dates['u_date'];
                $hits          = $dates['hits'];
                $hits_2        = $dates['hits_2'];
                $total_hits   += $hits;
                $total_hits_2 += $hits_2;
                $gm_total_hits   += $hits;
                $gm_total_hits_2 += $hits_2;
                $gm_num++;
                $full_address  = $address . ' ' . $city . ', ' . $state;
                $or_date       = $o_date;
                $up_date       = $u_date;
                if ($hits == "") $hits = "0";
                if ($hits_2 == "") $hits_2 = "0";
              if ((!empty($or_date)) && (($or_date + $lapse1) <= $now)) { $expired_o[] = $full_address;$color = "red"; }
              if ((!empty($or_date)) && (($or_date + $lapse2) <= $now) && (!in_array($full_address, $expired_o))) { $warning_o[] = $full_address;$color = "orange"; }
              if ((!empty($up_date)) && (($up_date + $lapse1) <= $now)) { $expired_u[] = $full_address;$color = "red"; }
              if ((!empty($up_date)) && (($up_date + $lapse2) <= $now) && (!in_array($full_address, $expired_u))) { $warning_u[] = $full_address;$color = "orange"; }
              echo '<tr><td><span style="color:' . $color . '" class="stats_list">' . $full_address . '</span></td><td align="center"><span style="color:' . $color . '">' . $hits . '</span></td><td align="center"><span style="color:' . $color . '">' . $hits_2 . '</span></td><td align="center"><span style="color:' . $color . '">' . swap_date_timeless($o_date) . '</span></td><td align="center"><span style="color:' . $color . '">' . swap_date_timeless($u_date) . '</span></td></tr>';
              $i++;
            }
          ?>
        </table>
        <hr class="dotted" />
        <table width="100%" border="0" summary="summ">
          <tr>
            <th scope="col" >Total Listings</th>
            <th scope="col" >Total CL Hits</th>
            <th scope="col" >Total Imager Hits</th>
          </tr>
          <?php echo '<tr><th>'.$num.'</th><th align="center">'.$total_hits.'</th><th align="center">'.$total_hits_2.'</th></tr>'; ?>
        </table>
        <hr class="dotted" />
      </div>
      </div>

<?php $show_gt++; } 


if ( (isset($show_auto)) && ($show_auto == "1") ) { ?>
<div id="automotive">
<div class="statistics" style="margin-top:30px;padding:20px 10px 10px 10px;width:900px;border: 1px solid #00BFFF;"><span class="sect_title" style="color:#00BFFF;border-color:#00BFFF;">Automotive Hit Counts</span>
        <table width="100%" border="0" summary="summ" cellpadding="0" cellspacing="0" >
          <tr>
            <th scope="col" width="125">Specs</th>
            <th scope="col" width="30">CL Hits</th>
            <th scope="col" width="50">Imager Hits</th>
            <th scope="col" width="100">Created</th>
            <th scope="col" width="100">Updated</th>
          </tr>
          <?php
            $query="SELECT * FROM automotive ORDER BY id ASC";
            $result=mysql_query($query);
            $num=mysql_numrows($result);
            $total_hits   = "0";
            $total_hits_2 = "0";
            $i            = 0;
            while ($i < $num) {
                $color         = "black";
                $id            = mysql_result($result, $i, "id");
                $vin           = unserialize(mysql_result($result, $i, "vin"));
                $year          = $vin['year'];
                $make          = $vin['make'];
                $model         = $vin['model'];
                $dates         = unserialize(mysql_result($result, $i, "u_date"));
                $o_date        = $dates['o_date'];
                $u_date        = $dates['u_date'];
                $hits          = $dates['hits'];
                $hits_2        = $dates['hits_2'];
                $total_hits   += $hits;
                $total_hits_2 += $hits_2;
                $gm_total_hits   += $hits;
                $gm_total_hits_2 += $hits_2;
                $gm_num++;
                $full_address  = $year . ' ' . $make . ' ' . $model;
                $or_date       = $o_date;
                $up_date       = $u_date;
                if ($hits == "") $hits = "0";
                if ($hits_2 == "") $hits_2 = "0";
              if ((!empty($or_date)) && (($or_date + $lapse1) <= $now)) { $expired_o[] = $full_address;$color = "red"; }
              if ((!empty($or_date)) && (($or_date + $lapse2) <= $now) && (!in_array($full_address, $expired_o))) { $warning_o[] = $full_address;$color = "orange"; }
              if ((!empty($up_date)) && (($up_date + $lapse1) <= $now)) { $expired_u[] = $full_address;$color = "red"; }
              if ((!empty($up_date)) && (($up_date + $lapse2) <= $now) && (!in_array($full_address, $expired_u))) { $warning_u[] = $full_address;$color = "orange"; }
              echo '<tr><td><span style="color:' . $color . '" class="stats_list">' . $full_address . '</span></td><td align="center"><span style="color:' . $color . '">' . $hits . '</span></td><td align="center"><span style="color:' . $color . '">' . $hits_2 . '</span></td><td align="center"><span style="color:' . $color . '">' . swap_date_timeless($o_date) . '</span></td><td align="center"><span style="color:' . $color . '">' . swap_date_timeless($u_date) . '</span></td></tr>';
              $i++;
            }
          ?>
        </table>
        <hr class="dotted" />
        <table width="100%" border="0" summary="summ">
          <tr>
            <th scope="col" >Total Listings</th>
            <th scope="col" >Total CL Hits</th>
            <th scope="col" >Total Imager Hits</th>
          </tr>
          <?php echo '<tr><th>'.$num.'</th><th align="center">'.$total_hits.'</th><th align="center">'.$total_hits_2.'</th></tr>'; ?>
        </table>
        <hr class="dotted" />
      </div>
      </div>
<?php $show_gt++; } ?>

<?php if ( (isset($show_gen)) && ($show_gen == "1") ) { ?>
<div id="general">
<div class="statistics" style="margin-top:30px;padding:20px 10px 10px 10px;width:900px;border-color:#ff9900;"><span class="sect_title" style="border-color:#ff9900;color:#ff9900;">General Hit Counts</span>
        <table width="100%" border="0" summary="summ" cellpadding="0" cellspacing="0" >
          <tr>
            <th scope="col" width="125">Title</th>
            <th scope="col" width="30">CL Hits</th>
            <th scope="col" width="50">Imager Hits</th>
            <th scope="col" width="100">Created</th>
            <th scope="col" width="100">Updated</th>
          </tr>
          <?php
            $query="SELECT * FROM general ORDER BY id ASC";
            $result=mysql_query($query);
            $num=mysql_numrows($result);
            $total_hits   = "0";
            $total_hits_2 = "0";
            $i            = 0;
            while ($i < $num) {
                $color         = "black";
                $id            = mysql_result($result, $i, "id");
                $description   = unserialize(mysql_result($result, $i, "description"));
                $title         = $description['title'];
                $dates         = unserialize(mysql_result($result, $i, "u_date"));
                $o_date        = $dates['o_date'];
                $u_date        = $dates['u_date'];
                $hits          = $dates['hits'];
                $hits_2        = $dates['hits_2'];
                $total_hits   += $hits;
                $total_hits_2 += $hits_2;
                $gm_total_hits   += $hits;
                $gm_total_hits_2 += $hits_2;
                $gm_num++;
                $full_address  = $title;
                $or_date       = $o_date;
                $up_date       = $u_date;
                if ($hits == "") $hits = "0";
                if ($hits_2 == "") $hits_2 = "0";
              if ((!empty($or_date)) && (($or_date + $lapse1) <= $now)) { $expired_o[] = $full_address;$color = "red"; }
              if ((!empty($or_date)) && (($or_date + $lapse2) <= $now) && (!in_array($full_address, $expired_o))) { $warning_o[] = $full_address;$color = "orange"; }
              if ((!empty($up_date)) && (($up_date + $lapse1) <= $now)) { $expired_u[] = $full_address;$color = "red"; }
              if ((!empty($up_date)) && (($up_date + $lapse2) <= $now) && (!in_array($full_address, $expired_u))) { $warning_u[] = $full_address;$color = "orange"; }
              echo '<tr><td><span style="color:' . $color . '" class="stats_list">' . $full_address . '</span></td><td align="center"><span style="color:' . $color . '">' . $hits . '</span></td><td align="center"><span style="color:' . $color . '">' . $hits_2 . '</span></td><td align="center"><span style="color:' . $color . '">' . swap_date_timeless($o_date) . '</span></td><td align="center"><span style="color:' . $color . '">' . swap_date_timeless($u_date) . '</span></td></tr>';
              $i++;
            }
          ?>
        </table>
        <hr class="dotted" />
        <table width="100%" border="0" summary="summ">
          <tr>
            <th scope="col" >Total Listings</th>
            <th scope="col" >Total CL Hits</th>
            <th scope="col" >Total Imager Hits</th>
          </tr>
          <?php echo '<tr><th>'.$num.'</th><th align="center">'.$total_hits.'</th><th align="center">'.$total_hits_2.'</th></tr>'; ?>
        </table>
        <hr class="dotted" />
</div></div>
<?php $show_gt++; } ?>

<?php if ($show_gt > "1") { ?>
<div id="automotive">
<div class="statistics" style="margin-top:30px;padding:20px 10px 10px 10px;width:900px;border: 1px solid #a885de;"><span class="sect_title" style="color:#a885de;border-color:#a885de;">Grand Total Hit Counts</span>
        <table width="100%" border="0" summary="summ">
          <tr>
            <th scope="col" >Total Listings</th>
            <th scope="col" >Total CL Hits</th>
            <th scope="col" >Total Imager Hits</th>
          </tr>
          <?php echo '<tr><th>'.$gm_num.'</th><th align="center">'.$gm_total_hits.'</th><th align="center">'.$gm_total_hits_2.'</th></tr>'; ?>
        </table>
</div></div>
<?php } ?>


        <p style="text-align:center;">Key:<br />
          <span style="color:red">Expired : Red</span> | <span style="color:orange">About To Expire : Orange</span></p>
      </div>
<p style="text-align:center;">&copy; 2010 <a href="http://www.fremonttech.com"><font color="#ff8c00">Fremont</font><font color="#000000">Tech</font></a> | <a href="<?php echo '?logout'; ?>" style="color:#F50F0F;">Logout</a></p>
</div>
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