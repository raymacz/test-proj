<?php
         include("db_rbtm.php"); 
 		 $id_fdidXX = $_POST["idtext"];
		 $query_del = " DELETE FROM contact_info WHERE id ='".$id_fdidXX."'";
		 mysql_query($query_del) or die('Error, query failed'); // this is activated for deletion
		 $response="Records Deleted from SERVER!";
		 echo $response;
		 mysql_close();
?> 



