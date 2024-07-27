<?php
include('_header.php');
//lets see if the database has been setup
if (file_exists('db_config.php')) {
    $setup_configs = file('db_config.php');
    $myServer      = trim($setup_configs['2']);
    $myUser        = trim($setup_configs['4']);
    $myPass        = trim($setup_configs['5']);
    $myDB          = trim($setup_configs['3']);
    $dbconnect = mysql_connect($myServer, $myUser, $myPass) or die("Couldn't connect to SQL Server on $myServer");
    $dbselect = mysql_select_db($myDB, $dbconnect) or die("Couldn't open database $myDB");
    if ($dbselect == "1") {
        $db_enabled = "1";
    }
} //end file exists
if ((isset($_POST['submit'])) && (!isset($db_enabled))) {
    if ((isset($_POST['myServer'])) && (isset($_POST['myDB'])) && (isset($_POST['myUser'])) && (isset($_POST['myPass'])) && (isset($_POST['adminUser'])) && (isset($_POST['adminPass']))) {
        $myServer  = $_POST['myServer'];
        $myUser    = $_POST['myUser'];
        $myPass    = $_POST['myPass'];
        $myDB      = $_POST['myDB'];
        $adminUser = $_POST['adminUser'];
        $adminPass = $_POST['adminPass'];
        $dbconnect = @mysql_connect($myServer, $myUser, $myPass) or die("Could not connect to SQL Server on $myServer");
        $dbselect = @mysql_select_db($myDB, $dbconnect) or die("Could not open database $myDB");
        $setup_configs = "<?php /* \n\n" . $_POST['myServer'] . "\n" . $_POST['myDB'] . "\n" . $_POST['myUser'] . "\n" . $_POST['myPass'] . "\n */ ?>";
        $adminPass     = md5($adminPass);
        $db_enabled    = "1";
        include('db_sql.php');
        $query = "INSERT INTO `_admin` (`id`, `username`, `password`) VALUES ('', '$adminUser', '$adminPass')";
        $result = mysql_query($query) or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $query . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());
        if ($result == "1") {
            file_put_contents('db_config.php', $setup_configs);
        }
        $_SESSION['username'] = $adminUser;
    } // all isset
} // isset submit and not db_enabled
?>

<div id="outter_wrapper">
  <div id="inner_wrapper">
    <div id="config">
      <div id="header"><a href="config.php"><img src="images/title_setup.png" alt="" /></a></div>
      <form method="post" action="" enctype="multipart/form-data">
        <?php if (!isset($db_enabled)) { ?>
        <div style="height:30px;"></div>
        <div class="statistics"><span class="sect_title">Database Setup</span>
          <div style="float:left;width:450px;text-align:center">
            <label for="myServer" style="width:100px;">Server : </label>
            <input type="text" id="myServer" name="myServer" value="localhost" />
          </div>
          <div style="float:left;width:450px;text-align:center">
            <label for="myDB" style="width:100px;">Database : </label>
            <input type="text" id="myDB"     name="myDB"     value="" />
          </div>
          <div style="float:left;width:450px;text-align:center">
            <label for="myUser" style="width:100px;">User : </label>
            <input type="text" id="myUser"   name="myUser"   value="" />
          </div>
          <div style="float:left;width:450px;text-align:center">
            <label for="myPass" style="width:100px;">Password : </label>
            <input type="password" id="myPass"   name="myPass"   value="" />
          </div>
          <br class="clear" />
        </div>
        <br />
        <br />
        <div class="statistics"><span class="sect_title">Admin Setup</span>
          <div style="float:left;width:450px;text-align:center">
            <label for="adminUser" style="width:100px;">Admin User : </label>
            <input type="text" id="adminUser"   name="adminUser"   value="" />
          </div>
          <div style="float:left;width:450px;text-align:center">
            <label for="adminPass" style="width:100px;">Admin Pass : </label>
            <input type="password" id="adminPass"   name="adminPass"   value="" />
          </div>
        </div>
        <input type="submit" name="submit" value="Save" id="preview_button"/>
      </form>
    </div>
  </div>
</div>
<?php } else { echo '<script type="text/javascript">/* <![CDATA[ */ window.location = "config.php" /* ]]> */</script>'; }
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