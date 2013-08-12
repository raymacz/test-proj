<?php

/*
 * if it's going to need the DB, then it's smart to require it.
 */

require_once (LIB_PATH.DS.'database.php');

class User extends DatabaseObject {

  protected static $table_name="users";
  public $id;
  public $username;
  public $password;
  public $first_name;
  public $last_name;

  public function full_name() {
    if (isset($this->first_name) &&  isset($this->last_name)) {
      return $this->first_name." ".$this->last_name;
    } else {
      return "";
    }
}

  static public function authenticate ($username="", $password="") {
  // global $database; //added by rbtm
    $username = $database->escape_value($username);
    $password = $database->escape_value($password);
    $sql = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' LIMIT 1";
     $result_array = self::find_by_sql($sql);
    return !empty($result_array) ? array_shift($result_array) : false;
  }



 }
?>
