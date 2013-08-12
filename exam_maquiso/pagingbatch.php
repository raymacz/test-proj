<?php
  	//$query = " SELECT * FROM product_inventory"." LIMIT $pagebatch, $max_row_LV";  //replaced
	$query = "SELECT * FROM contact_info";
	$result_LV = mysql_query($query) or die('Error, query failed');
	//-------begin the records query by starting & ending point
	$i_LV=0;
	$iii_LV=0;
	$ii_LV=0;
  while($rows_LV = mysql_fetch_array($result_LV))
	{
	++$i_LV;
	if ($i_LV%2 == 0) 
	 {$colorb="#99CFFF";}
	else
	 {$colorb="#FFFFFF";};
	$iii_LV=$i_LV+$ii_LV;
	echo '<tr bgcolor='.$colorb.' >'; 
	echo '<tr bgcolor='.$colorb.' onmouseover=" mOver(this)" onmouseout=" mOut(this)" >'; 
	echo '<td><a onmouseout="this.removeAttribute(\'href\')" onmouseover="this.href=\'index.php?page='.$i_LV.'\'" > '.$rows_LV['name'].'</a></td>';
	echo "<td> ".$rows_LV['phone']."</a></td>";
	echo "<td> ".$rows_LV['address']."</a></td>";
	echo "<td> ".$rows_LV['email']."</a></td>";
	echo "<td> ".$rows_LV['status']."</a></td>";
	echo "</tr>";
	};
  for ($i=$i_LV; $i<=$max_row_LV-1; ++$i)	{ 

		if ($i%2 == 0) 
		{$colorb="#FFFFFF";}
		else
		{$colorb="#99CFFF";};
		echo "<tr bgcolor=".$colorb.">"; echo "<td>-</td>";  echo "<td>-</td>";	echo "<td>-</td>";	echo "<td>-</td>";	echo "<td>-</td>";	echo "</tr>";
		$iii_LV=$i_LV+$ii_LV;
	};	
?>