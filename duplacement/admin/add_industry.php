<?php
session_start();
include('../include/config.php');
include('../include/commonfunctions.php');

if (empty($_SESSION['adminID']))
{
	header("location:index.php");
}

if (!empty($_POST['edit'])) {
	$industryname  		= trim($_POST['industryname']); 
	$industrystatus  	= trim($_POST['industrystatus']);
	
	$editid	= trim($_POST['editid']);
	
	$query	=  "update dup_industry  set
					industryname = '$industryname', industrystatus = '$industrystatus' where industryid = '$editid'";
	$eres = mysql_query($query);
	if (!empty($eres))
		triggerMessage("admin_create_ind", "Account edited successfully!");	
}


if (!empty($_POST['add'])) {
	$industryname  		= trim($_POST['industryname']); 
	$industrystatus  	= trim($_POST['industrystatus']);
	
	if (!empty($industryname))
	{	
		if ($cn = ChkExists("dup_industry", "industryname", $industryname, "admin_create_ind") == 0)
		{
			$query	=  "INSERT INTO dup_industry ( industryid, industryname, industrystatus)							  
									VALUES 
									('','$industryname','$industrystatus')";
			$res = mysql_query($query);
			if (!empty($res))
				triggerMessage("admin_create_ind", "Created industry Successfully!");
		}
	} else { triggerMessage("admin_create_ind", "Please Enter Industry name!");}
}

if ($_GET['act'] == "edit")
{
	$editid = $_GET['id'];
	$esql = mysql_query("select * from dup_industry where industryid = '$editid' limit 1");
	$eresult = mysql_fetch_array($esql);
}
?>

<?php include("header.php");?>
      <div style="width:770px; float:left;">
        <?php include("menu.php");?>

	
    <div align="left" class="adminright">
    
    <div style="width:600px; padding-top:5px;">
    
    <div style="width:600px; float:left;">
    <form name="frm" action="" method="post">
    <table width="330" border="0" cellspacing="0" cellpadding="0">
  	<tr>
    <td align="left" valign="top"><strong><img src="../images/admin-star.jpg" alt="star" /></strong></td>
    <td height="25" align="left" valign="top" nowrap="nowrap"><span class="blue"><strong> CREATE INDUSTRY</strong></span></td>
    <td height="25" align="left" valign="top"></td>
    <td height="25" align="left" valign="top"></td>
  	</tr>
	<tr>
    <td width="30" align="left" valign="top"></td>
    <td width="110" height="25" align="left" valign="top"></td>
    <td width="20" height="25" align="left" valign="top"></td>
    <td width="170" height="25" align="left" valign="top"><?php outputTrigger('admin_create_ind'); ?></td>
    </tr>
  	<tr>
    <td width="30" align="left" valign="top"></td>
    <td width="110" height="25" align="left" valign="top">Name</td>
    <td width="20" height="25" align="left" valign="top">:</td>
    <td width="170" height="25" align="left" valign="top">
    <input name="industryname" type="text" class="form" id="industryname" size="27"  value="<?php echo $eresult['industryname'];?>"/></td>
  	</tr>
  	<tr>
    <td width="30" align="left" valign="top"></td>
    <td width="110" height="25" align="left" valign="top">Status</td>
    <td width="20" height="25" align="left" valign="top">:</td>
    <td width="170" height="25" align="left" valign="top">
    <select name="industrystatus" class="form" id="status">
    <option value="active" <?php if ($eresult['industrystatus'] == "active") { echo "selected"; } ?>>Active</option>
	<option value="inactive" <?php if ($eresult['industrystatus'] == "inactive") { echo "selected"; } ?>>Inactive</option>
    </select></td>
  	</tr>
  	<tr>
    <td width="30" align="left" valign="top"></td>
    <td width="110" height="5" align="left" valign="top"></td>
    <td width="20" height="5" align="left" valign="top"></td>
    <td width="170" height="5" align="left" valign="top"></td>
  	</tr>
  	<tr>
    <td width="30" align="left" valign="top"></td>
    <td width="110" height="35" align="left" valign="top"></td>
    <td width="20" height="35" align="left" valign="top"></td>
    <td width="170" height="35" align="left" valign="top">
	<?php if (!empty($editid)) { ?>
		<input type="hidden" name="edit" value="1" />
		<input type="hidden" name="editid" value="<?php echo $editid; ?>" />
	<?php } else { ?>
		<input type="hidden" name="add" value="1" />
	<?php } ?>
    <input type="image" src="../images/du-btn-submit.jpg" name="submit" id="submit" value="Submit"  onclick="document.frm.submit();"/></td>
  	</tr>
	</table>
	</form>
	  </div>
		</div>
    	  </div>
    		</div>
           <?php include("footer.php");?>