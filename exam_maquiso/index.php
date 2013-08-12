<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> RBTM Inventory </title>
<script type="text/javascript" src="./js/jquery-1.8.3.js"></script>


</head>
<?php
	        include("db_rbtm.php");  ///---merge
$pageNum = 0;
		if(isset($_GET['page']))
	{  $pageNumView = $_GET['page']; 
	$pageNum = $pageNumView - 1; };//$offset 
		
		$query = "SELECT * FROM $tbl_name "." LIMIT $pageNum, 1"; // queries one single record to be displayed 
		$result = mysql_query($query) or die('Error, query failed');
		$rows=mysql_fetch_array($result);
				
			include("db_edit.php"); 
		
?>

<script type="text/javascript">
$(document).ready(function(){
  $("#delrec").click(function(){
  var rr=confirm("Are you sure?");
   if (rr==true)
  {    
   //var idval = "<?php echo $rows['id']; ?>";
   $.post("db_del.php",{ idtext:"<?php echo $rows['id']; ?>" },
	function(data,status){
		alert("Data: " + data + "\nStatus: " + status);
		document.location.reload(true); //refresh  page
	});
  }else{ 
    //alert("You pressed Cancel!");
	};
  });
});
</script>
<body>
<table width="800" border="2" align="center" cellpadding="2" cellspacing="5" bgcolor="#CCCCCC">
<td>
<form id="form1" name="form1" method="get" action="submenu_choice.php">
<table width="100%" border="1" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td align="left" colspan="2"><input type="submit" name="list" value="LIST" /> <input type="submit" name="new" value="NEW" /> <input id="delrec" type="button" name="delete" value="DELETE" /> </td>
<!-- added by raymacz <formaction> IE not supported-->
</tr>
</form>
</tr>
<tr>
<form id="form3" name="form3" method="post" action="">
<tr>
<th colspan="3" bgcolor="#00CCFF"><strong>Details</strong> </th>
</tr>
<tr>
<td width="14%"><strong>Name</strong></td>
<td width="84%"><input name="namedetails" type="text" id="namedetails" size="20" value="<?php echo $rows['name']; ?>"/> </td> 
</tr>
</form>
<form id="form4" name="form4" method="post" action="">
<tr>
<td width="14%"><strong>Phone</strong></td>
<td width="84%"><input name="phonedetails" type="text" id="phonedetails" size="20" value="<?php echo $rows['phone']; ?>"/> </td> 
</tr>
</form>
<form id="form5" name="form5" method="post" action="">
<tr>
<td width="14%"><strong>Address</strong></td>
<td width="84%"><input name="addressdetails" type="text" id="addressdetails" size="50" value="<?php echo $rows['address']; ?>"/></td>
</tr>
</form>
<form id="form6" name="form6" method="post" action="">
<tr>
<td><strong>Email</strong></td>
<td><input name="emaildetails" type="text" id="emaildetails" size="50" value="<?php echo $rows['email']; ?>"/></td>
</tr>
</form>
<form id="form7" name="form7" method="post" action="">
<tr>
<td><strong>Status</strong></td>
<td><input name="statusdetails" type="text" id="statusdetails" size="50" value="<?php echo $rows['status']; ?>"/></td>
</tr>
<tr>
<td align="left" colspan="2"> <small> <em>Note: To update records, please type on the text box and press Enter . </em></small></td>
</tr>
</form>
</table>
</td>
</body>
</table>
<?php

mysql_close();
?>
</html>
