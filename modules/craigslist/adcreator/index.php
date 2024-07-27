<?php include('_header.php'); ?>
<div id="outter_wrapper">
  <div id="inner_wrapper">
    <div id="config">
      <div id="header"><a href="index.php"><img src="images/title_home.png" alt="" /></a></div>
      <div style="width:900px;margin:20px auto;">
        <div style="width:610px;margin:0 auto;">
          <?php if ( (isset($show_real)) && ($show_real == "1") ) { ?>
          <div class="home_box"> <a href="themes/realestate.php">
            <div style="width:300px;margin:0 auto;float:left;border:1px solid #f6f6f6;text-align:center;-moz-border-radius: 5px 5px 5px 5px;"> <span><img src="images/title_real.png" /></span><br />
              <img src="images/realestate.png" /><br />
              <span>For selling houses, real estate, land, or other property on craigslist</span> </div>
            </a> </div>
          <?php } ?>
          <?php if ( (isset($show_auto)) && ($show_auto == "1") ) { ?>
          <div class="home_box"> <a href="themes/automotive.php">
            <div style="width:300px;margin:0 auto;float:left;border:1px solid #f6f6f6;text-align:center;-moz-border-radius: 5px 5px 5px 5px;"> <span><img src="images/title_auto.png" /></span><br />
              <img src="images/automobile.png" /><br />
              <span>For selling Automobiles (Cars, Trucks, Motocycles, etc.) on craigslist</span> </div>
            </a> </div>
          <?php } ?>
          <?php if ( (isset($show_gen)) && ($show_gen == "1") ) { ?>
          <div class="home_box"> <a href="themes/general.php">
            <div style="width:300px;margin:0 auto;float:left;border:1px solid #f6f6f6;text-align:center;-moz-border-radius: 5px 5px 5px 5px;"> <span><img src="images/title_gene.png" /></span><br />
              <img src="images/general.png" /><br />
              <span>For selling just about everything else on craigslist</span> </div>
            </a> </div>
          <?php } ?>
          <?php if ( (isset($show_prof)) && ($show_prof == "1") ) { ?>
          <div class="home_box"> <a href="profile.php">
            <div style="width:300px;margin:0 auto;float:left;border:1px solid #f6f6f6;text-align:center;-moz-border-radius: 5px 5px 5px 5px;"> <span><img src="images/title_prof.png" /></span><br />
              <img src="images/profile.png" /><br />
              <span>Create a profile to easly attach to any of your craigslist posts</span> </div>
            </a> </div>
          <?php } ?>
        </div>
        <button id="config_button" onClick="parent.location='config.php'">Configurator</button>
      </div>
    </div>
    <p style="text-align:center;">&copy; 2010 <a href="http://www.fremonttech.com"><font color="#ff8c00">Fremont</font><font color="#000000">Tech</font></a> | <a href="<?php echo '?logout'; ?>" style="color:#F50F0F;">Logout</a></p>
  </div>
</div>
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