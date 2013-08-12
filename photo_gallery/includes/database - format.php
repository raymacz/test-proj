<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('config.php');

//1.Create DB connection
$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
if (!$connection) {
  die("Database connection failed: ".mysql_error());
}

//2.Select a DB to use
$db_select = mysql_select_db(DB_NAME, $connection);
if (!$db_select) {
   die("Database selection failed: ".mysql_error());
}

//3.Perform database query
$sql= "SELECT * FROM subjects";
$result = mysql_query($sql, $connection);
if (!$result) {
   die("Database query failed: ".mysql_error());
}

//4. use returned data
while ($row = mysql_fetch_array($result)) {
  //output data
}

//5. Close connection
if (isset($connection)) {
  mysql_close($connection);
  unset($connection);
 }

//6. Confirm Query private
 function confirm_query($result_set) {
   if (!$result_set) {
     die("Database query failed: ".mysql_error());
   }
}

//7. mysql preparation

  function mysql_prep ($value) {
    $magic_quotes_active = get_magic_quotes_gpc();
    $new_enough_php = function_exists('mysql_real_escape_string'); //i.e. PHP>= V4.3.0
    if ($new_enough_php) { //PHP v4.3.0 or higher
      //undo any magic quote effects to mysql_real_escape_string can do the work
      if ($magic_quotes_active) { $value = stripslashes($value); }
      $value = mysql_real_escape_string($value);
    } else { // before  PHP V4.3.0
      //if magic quotes aren't already on then add slashes manually
      if (!$magic_quotes_active) { $value = addslashes($value); }
      //if magic quotes are active, then the slashes already exist.
    }
    return $value;
  }

?>
