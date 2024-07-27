<?php
include('check_login.php');
include('functions.php');
include('config.php');

mysql_connect(DB_HOST, DB_USER, DB_PASS) or die(mysql_error());
mysql_select_db(DB_NAME) or die(mysql_error());

if($_GET['del'])
{
	$id = intval($_GET['del']);
	$sql = "delete from ".PREFIX."campaigns where campaign_id = $id";
	mysql_query($sql);

	header('location:campaigns.php');
}
if(isset($_GET['pause']))
{
	$id = intval($_GET['pause']);

	$sql = "update ".PREFIX."campaigns set status = 0 where campaign_id = " . $id;
	mysql_query($sql);

	header('location:campaigns.php');
}
if(isset($_GET['reset']))
{
	$id = intval($_GET['reset']);

	$sql = "delete from ".PREFIX."history where campaign_id = " . $id;
	mysql_query($sql);

	header('location:campaigns.php');
}
if(isset($_GET['resume']))
{
	$id = intval($_GET['resume']);

	$sql = "update ".PREFIX."campaigns set status = 1 where campaign_id = " . $id;
	mysql_query($sql);

	header('location:campaigns.php');
}
$page = intval($_GET['p']);
if($page == 0) $page = 1;
$perpage = PERPAGE_ADMIN;

$left = ($page - 1) * $perpage;


$sql_all = "select * from ".PREFIX."campaigns";
$sql_this_page = "select c.*, t.title category from ".PREFIX."campaigns c, ".PREFIX."types t where c.type_id = t.type_id limit " . $left . ", " . $perpage;

$res = mysql_query($sql_all);
$allPages = ceil(mysql_num_rows($res) / $perpage);

if($allPages > 1)
{
	for($i = 1; $i <= $allPages; $i ++)
	{
		if($page == $i)
		{
			$pagination .= '<a class="current">'.$i.'</a>'; 
		}else{
			$pagination .= '<a href="campaigns.php?p='.$i.'">'.$i.'</a>'; 
		}
	}
}else{
	$pagination = '';
}

$res = mysql_query($sql_this_page);
$listings = array();

while($row = mysql_fetch_assoc($res))
{
	$listings[] = $row;
}
?>

<?php include('header.php')?>

<h1>View Campaigns</h1>
<table class="list">
<tr>
<td colspan="5" align="right"><input type="button" onclick="goto('execute.php')" value="Execute"  class="btn" />
&nbsp; Click Execute to run your campaign(s) manually.</td>
</tr>
<tr>
<th width="280">Title</th>
<th>Category</th>
<th>Keywords</th>
<th width="80">Status</th>
<th>Action</th>
</tr>
<?php foreach($listings as $key => $listing):?>
<tr class="<?php echo $key%2 ? 'even' : 'odd'?>">
<td><?php echo $listing['title'];?></td>
<td><?php echo $listing['category'];?></td>
<td><?php echo $listing['search'];?></td>
<td align="center"><?php echo get_status($listing['status']);?></td>
<td align="center">
<?php if($listing['status'] == 1){?>
<input type="button" onclick="goto('?pause=<?php echo $listing['campaign_id']?>')" value="Pause"  class="btn" />
<?php }else{ ?>
<input type="button" onclick="goto('?resume=<?php echo $listing['campaign_id']?>')" value="Resume"  class="btn" />
<?php }?>
<input type="button" onclick="goto('?reset=<?php echo $listing['campaign_id']?>')" value="Reset"  class="btn" />
<input type="button" onclick="goto('campaign_edit.php?id=<?php echo $listing['campaign_id'];?>')" value="Edit"  class="btn" />
<input type="button" onclick="if(confirm('Do you really want to delete it?')) goto('?del=<?php echo $listing['campaign_id'];?>')" value="Delete"  class="btn" />

</td>

</tr>
<?php endforeach; ?>
<?php if($pagination){?>
<tr>
<td colspan="5">
<div class="pagination"><?php echo $pagination;?></div>
</td>
</tr>
<?php }?>
<tr>
<td colspan="5" align="right"><input type="button" onclick="goto('execute.php')" value="Execute"  class="btn" />
&nbsp; Click Execute to run your campaign(s) manually.</td>
</tr>
</table>
<?php include('footer.php')?>