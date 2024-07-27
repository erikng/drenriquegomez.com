<?php
set_time_limit(0);
include('check_login.php');
include('functions.php');
include('config.php');


include('header.php')?>


<?php
$output = true;
include('cron.php');
?>

<?php include('footer.php')?>