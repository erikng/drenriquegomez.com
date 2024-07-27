<?php
if (isset($_GET['item'])) {
    include('_config.php');
    $get_number                       = $_GET['item'];
    $break_up                         = explode('_', $get_number);
    $database                         = $break_up['0'];
    $id                               = $break_up['1'];
    if ($database == "a")             $database = "automotive";
    if ($database == "g")             $database = "general";
    if ($database == "r")             $database = "real_estate";
    $query                            = "SELECT * FROM $database WHERE `id` = " . $id . "";
    $result                           = mysql_query($query) or die(mysql_error());
    $num                              = mysql_numrows($result);
    $result                           = mysql_fetch_array($result);
    if (isset($result['u_date']))     $pull_dates = unserialize($result['u_date']);
    if (isset($pull_dates['o_date'])) $o_date = $pull_dates['o_date'];
    if (isset($pull_dates['u_date'])) $u_date = $pull_dates['u_date'];
    if (isset($pull_dates['hits']))   $hits = $pull_dates['hits'];
    if (isset($pull_dates['hits_2'])) $hits_2 = $pull_dates['hits_2'];
    $hits++;
    if (!empty($id)) {  $insert_dates = serialize(array('o_date' => $o_date,'u_date' => $u_date,'hits' => $hits,'hits_2' => $hits_2));
        $query        = 'UPDATE ' . $database . ' SET `u_date`=\'' . $insert_dates . '\' WHERE `id`="' . $id . '"';
        $result = mysql_query($query) or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $query . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());
    } //end if post db_id isset
    header("Location: http://www.google.com");
} else
    header("Location: http://www.google.com");
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