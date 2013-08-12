<?php
/*
 * if it's going to need the DB, then it's smart to require it.
 */
require_once LIB_PATH.DS.'database.php';

class DatabaseObject {
/*
 *  Late Static Bindings in PHP 5.3 http://www.php.net/lsb
 * self:: replaced with static::
 *  then use get_called_class() when creating a new object
 */

   protected static $table_name="users";

   // Common DB Methods
  static public function  find_all() {
    //return self::find_by_sql("SELECT * FROM users");
    return static::find_by_sql("SELECT * FROM ".static::$table_name);
  }

  static public function find_by_id($id=0)  {
    global $database;
    //$result_array = self::find_by_sql("SELECT * FROM users WHERE id={$id} LIMIT 1");
    $result_array = static::find_by_sql("SELECT * FROM ".static::$table_name." WHERE id={$id} LIMIT 1");
    return !empty($result_array) ? array_shift($result_array) : false;
  }

  static public function find_by_sql($sql='') {
    global $database;
    $result_set = $database->query($sql);
    $object_array = array();
    while ($row = $database->fetch_array($result_set)) {
        $object_array[] = static::instantiate($row);
    }
    return $object_array;
  }

  static private function instantiate($record) {
    // check that $record_set exists and is an array

    //$object = new self;
    $class_name = get_called_class();
    $object = new $class_name;

    // Simple, long-form approach;
//    $object->id =       $record['id'];
//    $object->username =  $record['username'];
//    $object->password = $record['password'];
//    $object->first_name = $record["first_name"];
//    $object->last_name = $record["last_name"];

  // More dynamic, short-form approach:
    foreach($record as $attribute => $value) {
       if($object->has_attribute($attribute)) {
           $object->$attribute = $value;
        }
     }
    return $object;
  }

  private function has_attribute ($attribute) {
       // get_object_ returns an associative array with all attributes
      // (incl. private ones!) as the keys  and their current values as the value
      $object_vars = get_object_vars($this);
      // we don't care about the value, we just want to know if the key exists
      // Will return true or false
     return array_key_exists($attribute, $object_vars);
  }

}


?>
