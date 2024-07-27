<center>
  <table cellspacing="0" cellpadding="0" border="0" width="100%" >
    <tr>
      <td align="center" bgcolor="<?php echo $bg_color;?>"><table cellspacing="0" cellpadding="0" border="0" width="960">
        <?php if ( (!empty($logo)) && (!empty($website1)) ) echo '<tr><td>&nbsp;</td></tr><tr><td border="0"><a href="'.$website1.'" target="_blank"><img src="'.$logo.'" border="0" width="960" /></a></td></tr>'; elseif (!empty($logo)) echo '<tr><td>&nbsp;</td></tr><tr><td border="0"><img src="'.$logo.'" border="0" width="960" /></td></tr>';?>
          <tr>
            <td><table cellpadding="0" cellspacing="0" width="960">
                <tr>
                  <td colspan="3" bgcolor="<?php echo $bg_color;?>"><img src="<?php echo $this_site;?>images/top_rounded.png" alt="" /></td>
                </tr>
                <tr>
                  <td bgcolor="#eaeaea" width="315" align="left"><font color="<?php echo $ft_color;?>" size="5">&nbsp;<?php echo $price ?></font></td>
                  <td bgcolor="#eaeaea" width=""    align="center"><font color="<?php echo $ft_color;?>" size="5"><?php echo $year.' - '.$make.' - '.$model ?></font></td>
                  <td bgcolor="#eaeaea" width="315" align="right"><font color="<?php echo $ft_color;?>" size="4"><font size="2">VIN / Stock : </font> <?php echo $vin ?>&nbsp;</font></td>
                </tr>
                <tr>
                  <td colspan="3" bgcolor="<?php echo $fg_color;?>"><img src="<?php echo $this_site;?>images/top_square.png" alt="" /></td>
                </tr>
              </table>
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
              <?php if ((!empty($feat_1x)) || (!empty($feat_2x)) || (!empty($feat_3x))) { ?>
              <table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="<?php echo $fg_color;?>">
                <tr>
                  <td colspan="5" align="center"><font color="<?php echo $hl_color;?>" size="6">Features</font></td>
                </tr>
                <tr>
                  <td width="100">&nbsp;</td>
                  <td width="" align="left"><table width="100%" align="left" cellpadding="0" cellspacing="0" bgcolor="<?php echo $fg_color;?>">
                      <?php if (!empty($feat_1x)) { foreach($feat_1x as $row=>$feature){if ($feature != "") echo '<tr><td><font color="'.$hl_color.'">&#9733; </font><font color="'.$ft_color.'">'.$feature.'</font></td></tr>';}} else echo "&nbsp;";?>
                    </table></td>
                  <td width="" align="left"><table width="100%" align="left" cellpadding="0" cellspacing="0" bgcolor="<?php echo $fg_color;?>">
                      <?php if (!empty($feat_2x)) { foreach($feat_2x as $row=>$feature){if ($feature != "") echo '<tr><td><font color="'.$hl_color.'">&#9733; </font><font color="'.$ft_color.'">'.$feature.'</font></td></tr>';}} else echo "&nbsp;";?>
                    </table></td>
                  <td width="" align="left"><table width="100%" align="left" cellpadding="0" cellspacing="0" bgcolor="<?php echo $fg_color;?>">
                      <?php if (!empty($feat_3x)) { foreach($feat_3x as $row=>$feature){if ($feature != "") echo '<tr><td><font color="'.$hl_color.'">&#9733; </font><font color="'.$ft_color.'">'.$feature.'</font></td></tr>';}} else echo "&nbsp;";?>
                    </table></td>
                  <td width="">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="5"><hr width="90%" size="1"></td>
                </tr>
              </table>
              <?php } ?>
              <table border="0" cellpadding="0" cellspacing="10" width="100%" bgcolor="<?php echo $fg_color;?>">
                <tr>
                  <td colspan="2" align="center"><font color="<?php echo $hl_color;?>" size="6"><?php echo $title;?></font></td>
                </tr>
                <tr>
                  <td width="50%"><font color="<?php echo $ft_color;?>"><?php echo $descr;?></font></td>
                  <td width="50%"><?php if (!empty($image00)) {?>
                    <a href="<?php echo $this_site."imager.php?img=a_".$id."_".$image00;?>" target="slideshow" rel="nofollow" ><img src="<?php echo $this_site."corners.php?src=".$image00."&radius=".($radius*2)."&tl=".$top_l."&tr=".$top_r."&bl=".$bot_l."&br=".$bot_r."&bg=".str_replace('#','',$fg_color);?>" border="0" width="100%" alt="" /></a>
                    <?php } ?></td>
                </tr>
              </table>
              <table cellspacing="10" cellpadding="0" border="0" bgcolor="<?php echo $fg_color;?>">
                <tr align="center">
                  <td width="250"><?php if (!empty($image01)) {?>
                    <a href="<?php echo $this_site."imager.php?img=a_".$id."_".$image01;?>" target="slideshow" rel="nofollow" ><img src="<?php echo $this_site."corners.php?src=".$image01."&radius=".($radius*2)."&tl=".$top_l."&tr=".$top_r."&bl=".$bot_l."&br=".$bot_r."&bg=".str_replace('#','',$fg_color);?>" border="0" width="115" alt=""  /></a>
                    <?php } else { echo "&nbsp;"; } ?></td>
                  <td width="250"><?php if (!empty($image02)) {?>
                    <a href="<?php echo $this_site."imager.php?img=a_".$id."_".$image02;?>" target="slideshow" rel="nofollow" ><img src="<?php echo $this_site."corners.php?src=".$image02."&radius=".($radius*2)."&tl=".$top_l."&tr=".$top_r."&bl=".$bot_l."&br=".$bot_r."&bg=".str_replace('#','',$fg_color);?>" border="0" width="115" alt=""  /></a>
                    <?php } else { echo "&nbsp;"; } ?></td>
                  <td width="250"><?php if (!empty($image03)) {?>
                    <a href="<?php echo $this_site."imager.php?img=a_".$id."_".$image03;?>" target="slideshow" rel="nofollow" ><img src="<?php echo $this_site."corners.php?src=".$image03."&radius=".($radius*2)."&tl=".$top_l."&tr=".$top_r."&bl=".$bot_l."&br=".$bot_r."&bg=".str_replace('#','',$fg_color);?>" border="0" width="115" alt=""  /></a>
                    <?php } else { echo "&nbsp;"; } ?></td>
                  <td width="250"><?php if (!empty($image04)) {?>
                    <a href="<?php echo $this_site."imager.php?img=a_".$id."_".$image04;?>" target="slideshow" rel="nofollow" ><img src="<?php echo $this_site."corners.php?src=".$image04."&radius=".($radius*2)."&tl=".$top_l."&tr=".$top_r."&bl=".$bot_l."&br=".$bot_r."&bg=".str_replace('#','',$fg_color);?>" border="0" width="115" alt=""  /></a>
                    <?php } else { echo "&nbsp;"; } ?></td>
                  <td width="250"><?php if (!empty($image05)) {?>
                    <a href="<?php echo $this_site."imager.php?img=a_".$id."_".$image05;?>" target="slideshow" rel="nofollow" ><img src="<?php echo $this_site."corners.php?src=".$image05."&radius=".($radius*2)."&tl=".$top_l."&tr=".$top_r."&bl=".$bot_l."&br=".$bot_r."&bg=".str_replace('#','',$fg_color);?>" border="0" width="115" alt=""  /></a>
                    <?php } else { echo "&nbsp;"; } ?></td>
                  <td width="250"><?php if (!empty($image06)) {?>
                    <a href="<?php echo $this_site."imager.php?img=a_".$id."_".$image06;?>" target="slideshow" rel="nofollow" ><img src="<?php echo $this_site."corners.php?src=".$image06."&radius=".($radius*2)."&tl=".$top_l."&tr=".$top_r."&bl=".$bot_l."&br=".$bot_r."&bg=".str_replace('#','',$fg_color);?>" border="0" width="115" alt=""  /></a>
                    <?php } else { echo "&nbsp;"; } ?></td>
                </tr>
                <tr align="center">
                  <td width="250"><?php if (!empty($image07)) {?>
                    <a href="<?php echo $this_site."imager.php?img=a_".$id."_".$image07;?>" target="slideshow" rel="nofollow" ><img src="<?php echo $this_site."corners.php?src=".$image07."&radius=".($radius*2)."&tl=".$top_l."&tr=".$top_r."&bl=".$bot_l."&br=".$bot_r."&bg=".str_replace('#','',$fg_color);?>" border="0" width="115" alt=""  /></a>
                    <?php } else { echo "&nbsp;"; } ?></td>
                  <td width="250"><?php if (!empty($image08)) {?>
                    <a href="<?php echo $this_site."imager.php?img=a_".$id."_".$image08;?>" target="slideshow" rel="nofollow" ><img src="<?php echo $this_site."corners.php?src=".$image08."&radius=".($radius*2)."&tl=".$top_l."&tr=".$top_r."&bl=".$bot_l."&br=".$bot_r."&bg=".str_replace('#','',$fg_color);?>" border="0" width="115" alt=""  /></a>
                    <?php } else { echo "&nbsp;"; } ?></td>
                  <td width="250"><?php if (!empty($image09)) {?>
                    <a href="<?php echo $this_site."imager.php?img=a_".$id."_".$image09;?>" target="slideshow" rel="nofollow" ><img src="<?php echo $this_site."corners.php?src=".$image09."&radius=".($radius*2)."&tl=".$top_l."&tr=".$top_r."&bl=".$bot_l."&br=".$bot_r."&bg=".str_replace('#','',$fg_color);?>" border="0" width="115" alt=""  /></a>
                    <?php } else { echo "&nbsp;"; } ?></td>
                  <td width="250"><?php if (!empty($image10)) {?>
                    <a href="<?php echo $this_site."imager.php?img=a_".$id."_".$image10;?>" target="slideshow" rel="nofollow" ><img src="<?php echo $this_site."corners.php?src=".$image10."&radius=".($radius*2)."&tl=".$top_l."&tr=".$top_r."&bl=".$bot_l."&br=".$bot_r."&bg=".str_replace('#','',$fg_color);?>" border="0" width="115" alt=""  /></a>
                    <?php } else { echo "&nbsp;"; } ?></td>
                  <td width="250"><?php if (!empty($image11)) {?>
                    <a href="<?php echo $this_site."imager.php?img=a_".$id."_".$image11;?>" target="slideshow" rel="nofollow" ><img src="<?php echo $this_site."corners.php?src=".$image11."&radius=".($radius*2)."&tl=".$top_l."&tr=".$top_r."&bl=".$bot_l."&br=".$bot_r."&bg=".str_replace('#','',$fg_color);?>" border="0" width="115" alt=""  /></a>
                    <?php } else { echo "&nbsp;"; } ?></td>
                  <td width="250"><?php if (!empty($image12)) {?>
                    <a href="<?php echo $this_site."imager.php?img=a_".$id."_".$image12;?>" target="slideshow" rel="nofollow" ><img src="<?php echo $this_site."corners.php?src=".$image12."&radius=".($radius*2)."&tl=".$top_l."&tr=".$top_r."&bl=".$bot_l."&br=".$bot_r."&bg=".str_replace('#','',$fg_color);?>" border="0" width="115" alt=""  /></a>
                    <?php } else { echo "&nbsp;"; } ?></td>
                </tr>
              </table>
              <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="<?php echo $bg_color;?>">
                <?php if ((isset($_POST['profile'])) && (!empty($_POST['profile']))) include('../profile.php');?>
                <?php if ((!empty($website1)) || (!empty($website2)) || (!empty($website3))) { ?>
                <tr align="center" bgcolor="<?php echo $fg_color;?>" height="35" valign="bottom">
                  <td bgcolor="<?php echo $fg_color;?>"  width="33%"><?php if (!empty($website1)) { echo '<a href="'.$website1.'"><font color="'.$hl_color.'">Visit Our '.$pre_p_company.' Website</font></a>';} else echo "&nbsp;"; ?></td>
                  <td bgcolor="<?php echo $fg_color;?>"  width="33%"><?php if (!empty($website2)) { echo '<a href="'.$website2.'"><font color="'.$hl_color.'">Learn More About '.$pre_p_company.'</font></a>';} else echo "&nbsp;"; ?></td>
                  <td bgcolor="<?php echo $fg_color;?>"  width="33%"><?php if (!empty($website3)) { echo '<a href="'.$website3.'"><font color="'.$hl_color.'">Contact '.$pre_p_company.'</font></a>';} else echo "&nbsp;"; ?></td>
                </tr>
                <?php } ?>
                <tr>
                  <td colspan="3"><img src="<?php echo $this_site;?>images/bottom_rounded.png" alt="" border="0"/></td>
                </tr>
                <?php if ((!empty($link_back)) && ($link_back == "1")) {?>
                <tr align="center">
                  <td colspan="3"><font size="1">Craigslist Ad Designed by <a href="http://codecanyon.net/item/craigslist-listing-tool/158260?ref=<?php if (!empty($env_user)) echo $env_user; else echo "FremontTech";?>">FremontTech</a></font><img src="<?php echo $this_site.'counter.php?item=a_'.$id ?>" width="0" height="0" /></td>
                </tr>
				<?php } else echo '<tr><td>&nbsp;</td></tr>';?>
              </table></td>
          </tr>
        </table></td>
    </tr>
  </table>
</center>