
<?php
         // include("db_rbtm.php"); //--- merge
		 //initialize
		 $id_old=$rows['id'];
		 //check if text is changed
		if(isset($_POST['namedetails']))  
    		{  
				$namedetails_edit = trim($_POST['namedetails']);
                $query_edit = "UPDATE contact_info SET name = '".$namedetails_edit."' WHERE id = '".$id_old."'";
				mysql_query($query_edit);
			   $rows['name']=$namedetails_edit;
			};
		if(isset($_POST['phonedetails']))  
    		{  
				$phonedetails_edit = trim($_POST['phonedetails']);
                $query_edit = "UPDATE contact_info SET phone = '".$phonedetails_edit."' WHERE id = '".$id_old."'";
				mysql_query($query_edit);
			   $rows['phone']=$phonedetails_edit;
			};
		if(isset($_POST['addressdetails']))  
    		{  
				$addressdetails_edit = trim($_POST['addressdetails']);
                $query_edit = "UPDATE contact_info SET address = '".$addressdetails_edit."' WHERE id = '".$id_old."'";
				mysql_query($query_edit);
			   $rows['address']=$addressdetails_edit;
			};
		if(isset($_POST['emaildetails']))  
    		{  
				$emaildetails_edit = trim($_POST['emaildetails']);
                $query_edit = "UPDATE contact_info SET email = '".$emaildetails_edit."' WHERE id = '".$id_old."'";
				mysql_query($query_edit);
			   $rows['email']=$emaildetails_edit;
			};
		if(isset($_POST['statusdetails']))  
    		{  
				$statusdetails_edit = trim($_POST['statusdetails']);
                $query_edit = "UPDATE contact_info SET status = '".$statusdetails_edit."' WHERE id = '".$id_old."'";
				mysql_query($query_edit);
			   $rows['status']=$statusdetails_edit;
			};
		
?> 

<?php

?>


