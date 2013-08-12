<?php

/*
 * transfer all initialize to one file by moving all require_once from different files
 * ../../includes/ <-- remove since file is located on the same directory
 */

/*
 * Define the core paths
 * Define them as absolute paths to make sure that require_once works as expected
 *
 * DIRECTORY_SEPARATOR is a PHP pre-defined constant
 * // (\ for Windows, / for Unix)
 *
 */

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null:
  define('SITE_ROOT', 'C:'.DS.'xampp'.DS.'htdocs'.DS.'practice_prg'.DS.'photo_gallery');
// absolute "file system path" which is currently windows not the "web server path"
defined('LB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

// load config file first
require_once (LIB_PATH.DS.'configz.php');

// load basic functions next so that everything after can use them
require_once LIB_PATH.DS.'functions.php';

// load core objects
require_once LIB_PATH.DS.'session.php';
require_once LIB_PATH.DS.'database.php';
require_once LIB_PATH.DS.'database_object.php';

// load database-related classes
require_once (LIB_PATH.DS.'user.php'); // if require fails in USER, __autoload
// order is very important in require_once

?>
