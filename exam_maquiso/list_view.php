<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<script>
function mOver(obj)
{
obj.style.backgroundColor="yellow";
}

function mOut(obj)
{
obj.style.backgroundColor="";
}
</script>
<body>
<table width="800" border="2" align="center" cellpadding="2" cellspacing="5" bgcolor="#CCCCCC">
<td>
<table id="csstable" width="100%" border="1" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<form id="form1" name="form1" method="get" action="index.php">
<tr>
<td align="right" colspan="5" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="Back" /></td>
</tr>
<tr>
<td  class="tdtest" align="right" colspan="5" bgcolor="#FFFFFF"><h1>List View </h1></td>
</tr>
</form>
<form id="Listview1" name="listview1" method="POST" action="">
<tr>
<th width="25%" colspan="1" bgcolor="#E6E6E6"><strong>Name</strong> </th>
<th width="18%" bgcolor="#E6E6E6"><strong>Phone</strong> </th>
<th width="40%" bgcolor="#E6E6E6"><strong>Address</strong> </th>
<th width="20%" bgcolor="#E6E6E6"><strong>Email</strong> </th>
<th width="14%" bgcolor="#E6E6E6"><strong>Status</strong> </th>
</tr>
</form>
<?php
 	include './db_rbtm.php'; //include("db_rbtm.php");
	static $max_row_LV=20;
$count=1;
	include './pagingbatch.php';
?>
</table>
<?php
mysql_close();
?>
</body>
</html>