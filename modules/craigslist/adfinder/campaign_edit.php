<?php
include('check_login.php');
include('functions.php');
include('config.php');

$listing_id = intval($_GET['id']);
mysql_connect(DB_HOST, DB_USER, DB_PASS) or die(mysql_error());
mysql_select_db(DB_NAME) or die(mysql_error());

$sql = "select * from ".PREFIX."campaigns where campaign_id = " . $listing_id;
$res = mysql_query($sql);
$listing = mysql_fetch_assoc($res);

$category_options = category_options($listing['type_id']);
$location_options = location_options(unserialize($listing['states']));

if($_POST['submit'])
{
	if(!$error)
	{
		if($_POST['states'] != unserialize($listing['states'])
		|| intval($_POST['type_id']) != $listing['type_id']
		|| get_input($_POST['search']) != $listing['search']
		)
		{
			$sql = "delete from " . PREFIX . "history where campaign_id = " . $listing_id;
			mysql_query($sql);
		}
		$sql = "update ".PREFIX."campaigns set 
		states = '".serialize($_POST['states'])."', 
		type_id = ".intval($_POST['type_id']).", 
		title = '".addslashes(get_input($_POST['title']))."', 
		search = '".addslashes(get_input($_POST['search']))."',
		start = ".intval($_POST['start']) . " where campaign_id = " . $listing_id;

		mysql_query($sql) or die($sql .'<br/>' . mysql_error());
		header('location:campaigns.php');
	}
}
?>

<?php include('header.php')?>

<h1>Edit Campaign</h1>
<?php if($error){?>
<div class="error_msg"><?php echo $error;?></div>
<?php } ?>
<form action="" method="post" enctype="multipart/form-data" onsubmit="return check_campaign()">

<table class="detail">
<tr>
<th width="10%"><label for="title">Title</label></th>
<td colspan="2"><input type="text" class="txt" name="title" id="title" value="<?php echo get_input($listing['title']);?>" size="60" /></td>
</tr>

<tr>
<th><label for="type_id">Category</label></th>
<td colspan="2"><select name="type_id" id="type_id">
<option value=""></option>
<?php echo $category_options;?>
</select></td>
</tr>

<tr>
<th><label for="states">Location</label></th>
<td width="6%"><select name="states[]" size="20" multiple="multiple" id="states">
<?php echo $location_options;?>
</select></td>
<td width="84%" valign="middle">&nbsp; (Hold down CTRL to select multiple locations.)</td>
</tr>

<tr>
<th><label for="search">Keyword(s)</label></th>
<td colspan="2"><input type="text" class="txt" name="search" id="search" value="<?php echo htmlspecialchars($listing['search']);?>" size="60" />
&nbsp; <a href="index.php#tips"><u>Keyword Tips</u></a></td>
</tr>

<tr>
<th><label for="start"># of  Days</label></th>
<td colspan="2"><input type="text" class="txt" name="start" id="start" value="<?php echo $listing['start'] ? intval($listing['start']) : 0;?>" size="4"/>
  &nbsp;&nbsp; (Enter the number of days back to check ads. Max 45; 0 will only search ads from today; Collects past ads first run only)</td>
</tr>

<tr>
<td colspan="3" align="center">
<input type="submit" name="submit" value="Submit" class="btn" />
<input type="button" onclick="goto('campaigns.php')" value="Back"  class="btn" /></td>
</tr>
</table>
</form>


<?php include('footer.php')?>