<html>

<script type="text/javascript" src="./js/jquery-1.8.3.js"></script>

</script>

<head>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<table height="200" width="800" border="2" align="center" cellpadding="2" cellspacing="5" bgcolor="#CCCCCC">
<td>
<form id="form1" name="form1" method="get" action="index.php">
<table id="csstable" width="100%" border="1" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td align="right" colspan="5"><input type="submit" name="Submit" value="Back" /></td>
</tr>
<tr>
<td class="tdtest" align="right" colspan="2"><h1>Enter New Record</h1></td>
</tr>
</form>
</tr>
<tr>
<form id="form_inv_input1" name="form_inv_input1" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
<tr>
<th colspan="3"><strong>Details</strong> </th>
</tr>
<tr>
<td width="14%"><strong>Name</strong></td>
<td width="84%"><input name="name1" type="text" id="name1" size="50" value=""/></td>
</tr>
<tr>
<td width="14%"><strong>Phone</strong></td>
<td width="84%"><input name="phone1" type="text" id="phone1" size="50" value=""/></td>
</tr>
<tr>
<td width="14%"><strong>Address</strong></td>
<td width="84%"><input name="address1" type="text" id="address1" size="50" value=""/></td>
</tr>
<tr>
<td width="14%"><strong>Email</strong></td>
<td width="84%"><input name="email1" type="text" id="email1" size="50" value=""/></td>
</tr>
<tr>
<td width="14%"><strong>Status</strong></td>
<td width="84%">
<select name="status1" type="text" id="status1">
  <option value="Single">Single</option>
  <option value="Married">Married</option>
</select>
</td>

</tr>
<td> &nbsp; </td>
<td align="right" >     <input type="reset" name="Reset" value="Reset" /> <input type="submit" name="Submit" value="Submit" /> </td>
</tr>
<?php
	$url1="Please input complete Fields";

if (isset($_POST['name1']))
 { $url1=check_input($url1); 
 };
 //name phone address email status
 function check_input($xxx)
 {
	$name1 = trim($_POST['name1']);
	$phone = trim($_POST['phone1']);
	$address = trim($_POST['address1']);
	$email = trim($_POST['email1']);
	$status = trim($_POST['status1']);

	if (($status!="")&&($name1!="")&&($address!="")) // name,status, address must be filled
		{		include("db_rbtm.php");	
		  $query = "SELECT * FROM contact_info";
	      $result = mysql_query($query) or die('Error, query failed');
		  while($rows= mysql_fetch_array($result))  
			{
   		  if (($name1==$rows['name']))   // duplicate names check
		      { 
			$xxx="Record already Exist!";
			  };
		   	};
		   if ($xxx!="Record already Exist!") // if not duplicates, insert new records
			{ 	$sql_new="INSERT INTO contact_info (name, phone, address, email, status) VALUES ('$_POST[name1]', '$_POST[phone1]', '$_POST[address1]', '$_POST[email1]', '$_POST[status1]')";
				if (!mysql_query($sql_new,$conn))  {  die('Error: ' . mysql_error());  };  	
				$xxx="New Records Added";
			};
			mysql_close();
		}
	else	
		{ $xxx="Product ID, Name & Category is required"; };
	return $xxx;
};
?>
<tr>
<th colspan="3" bgcolor="#00CCFF"><div id="msg"><strong><?php echo $url1; ?></strong></div></th> 
</tr>
</td>
</table>
</form>
</table>
</body>
</html>