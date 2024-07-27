<?php
include('_header.php');
//session_destroy();
if (isset($_GET['ref'])) $ref = $_GET['ref']; else $ref = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $result   = mysql_query("select * from _admin where username='$username' AND password='$password'");
    $rowCheck = mysql_num_rows($result);
    if ($rowCheck > 0) {
        while ($row = mysql_fetch_array($result)) {
            $_SESSION['username'] = $username;
        }
    } else {
        $error = 'Incorrect login name or password. Please try again.';
    }
} //end isset login
if (isset($_SESSION['username'])) {
    echo '<script type="text/javascript">/* <![CDATA[ */ window.location = "'.$this_site.$ref.'" /* ]]> */</script>';
}
?>

<div id="outter_wrapper">
  <div id="inner_wrapper">
<?php if (isset($_GET['ref'])) echo '<div class="expired">The page you requested : '.$_GET['ref'].' requires authentication!</div>'; ?>
    <form action="" method="POST" style="margin:100px auto 25px auto;display:block;width:375px">
<?php if ( isset($error) ) echo '<div class="expired">'.$error.'</div>';?>
      <label for="username" >Username : </label><input type="text" name="username" style="padding:10px; width:163px"/><?php if (!empty($demo)) { echo "( demo )"; } ?>
      <br />
      <label for="password">Passowrd : </label><input type="password" name="password" style="padding:10px; width:163px"/><?php if (!empty($demo)) { echo "( demo )"; } ?>
      <input type="submit" name="login" value="Login"  style="float: right;margin: 10px 8px 10px auto;padding: 10px;width: 375px;"/>
    </form>
<br class="clear" />
<?php if (!empty($demo)) { ?>
<div class="expired" style="margin-left: 50px; margin-right:50px;"><span class="expired_title">Important Info</span>
<p style="padding-top:7px;">This demo is crippled in the fact that you cannot save your listings!</p>

<!-- <p style="padding-top:7px;">If you want to test on craigslist, simply create a new posting on craigslist, copy and paste the code, and click continue. You will then see a preview of the actual listing on craigslist. <strong>DO NOT ENTER THE "reCAPTCHA" CODE!</strong> or you will post a fake listing on craigslist which violates craigslist <a href="http://www.craigslist.org/about/terms.of.use" target="_blank">TOU</a></p> -->
<p style="padding-top:7px;">To login you will need the username demo and the password demo.</p>
<?php } ?>
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