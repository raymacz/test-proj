<?php  

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="boslot"; // Mysql password 
// $db_name="retail_db"; // Database name 
// $tbl_name="product_inventory"; // Table name 
$db_name="db_maquiso"; // Database name 
$tbl_name="contact_info"; // Table name 

	$conn = mysql_connect("$host", "$username", "$password");
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("$db_name", $conn);
?>

