<?php
/*
require_once '../includes/functions.php';
require_once '../includes/database.php';
require_once '../includes/user.php'; // if require fails in USER, __autoload */

require_once '../includes/initialize.php';
/*
if (isset($database)) {echo 'true'; } else {echo 'false';}
echo '<br />';
echo $database->escape_value("it's working?<br />");
$sql = "INSERT INTO users (id, username, password, first_name, last_name) ";
$sql .= "VALUES (1, 'user1', 'pass1', 'fname1', 'lname1')";
// $result = $database->query($sql);
*/

 $user = User::find_by_id(1);
 echo $user->full_name();
 echo '<hr />';

$users = User::find_all();
foreach($users as $user){
  echo "User: ".$user->username. "<br />";
  echo "Name: ".$user->full_name(). "<br /><br />";
}


// $record_set = User::find_all();
// while ($record= $database->fetch_array($record_set)) {
//   echo 'User: '.$record['username']."<br />";
//   echo 'Firstname: '.$record["first_name"].' Lastname: '.$record["last_name"];
// }

?>