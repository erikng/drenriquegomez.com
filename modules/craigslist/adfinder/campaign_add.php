<?php
error_reporting(E_ERROR);
set_time_limit(120);

include('check_login.php');
include('functions.php');
include('config.php');

mysql_connect(DB_HOST, DB_USER, DB_PASS) or die(mysql_error());
mysql_select_db(DB_NAME) or die(mysql_error());

$category_options = category_options($_REQUEST['type_id']);
$location_options = location_options($_REQUEST['state_id']);

if($_POST['submit'])
{
	if(!$error)
	{
		$sql = "insert into ".PREFIX."campaigns (states, type_id, title, search, status, start) values (
		'".serialize($_POST['states'])."', 
		".intval($_POST['type_id']).", 
		'".addslashes(get_input($_POST['title']))."', 
		'".addslashes(get_input($_POST['search']))."',
		1,
		".intval($_POST['start']).")";
		mysql_query($sql) or die($sql .'<br/>' . mysql_error());
		header('location:campaigns.php');
	}
}
?>

<?php include('header.php')?>

<h1>Add New Campaign</h1>
<?php if($error){?>
<div class="error_msg"><?php echo $error;?></div>
<?php } ?>
<form action="" method="post" enctype="multipart/form-data" onsubmit="return check_campaign()">

<table class="detail">
<tr>
<th width="11%"><label for="title">Title</label></th>
<td colspan="2"><input type="text" class="txt" name="title" id="title" value="<?php echo get_input($_POST['title']);?>" size="60"/></td>
</tr>

<tr>
<th><label for="type_id">Category</label></th>
<td colspan="2"><select name="type_id" id="type_id">
<option value=""></option>
<?php echo $category_options;?>
</select></td>
</tr>

<tr>
<th valign="top"><label for="states">Location</label></th>
<td width="6%" valign="middle"><select name="states[]" size="20" multiple="multiple" id="states">
  <?php echo $location_options;?>
</select></td>
<td width="83%" valign="middle">&nbsp; (Hold down CTRL to select multiple locations.)</td>
</tr>

<tr>
<th><label for="search">Keyword(s)</label></th>
<td colspan="2"><input type="text" class="txt" name="search" id="search" value="<?php echo get_input($_POST['search']);?>" size="60"/>
&nbsp; <a href="index.php#tips"><u>Keyword Tips</u></a></td>
</tr>

<tr>
<th><label for="start"># of  Days</label></th>
<td colspan="2"><input type="text" class="txt" name="start" id="start" value="<?php echo $_POST['start'] ? intval($_POST['start']) : 0;?>" size="4"/>
&nbsp;&nbsp; (Enter the number of days back to check ads. Max 45; 0 will only search ads from today; Collects past ads first run only)</td>
</tr>

<tr>
<td colspan="3" align="center">
<input type="submit" name="submit" value="Submit" class="btn" />
<input type="button" onclick="goto('campaigns.php')" value="Cancel"  class="btn" /></td>
</tr>
</table>
</form>


<?php include('footer.php')?>