Name of application: Raymacz
Author: Raymond Ben T. Maquiso
Version: 1.0
How to use:

 1.) install xampp,wamp or any apache server w/ mysql on your PC
 2.) extract the file exam_maquiso.rar
 3.) copy all files to your htdocs or root directory of your apache server
 4.) Create a database 'db_maquiso' on phpmyadmin
 5.) create a table 'contact_info' or simply copy & paste from db_maquiso.sql to phpmyadmin SQL tab.
 6.) go to the directory where you copied the files and look for db_rbtm.php. 
  Find this and edit it according to your username and password in your phpmyadmin...
  
  $host="localhost"; // Host name 
  $username="root"; // Mysql username 
  $password="boslot"; // Mysql password 
  
 7.) run index.php
 8.) This is a sample program where you can Create, Read, Update and Delete records.
 note: To edit/update record... just replace the record by typing on the <input> box & press 'Enter' to confirm
 
 zend_extension = \xampp-portable\php\ext\php_xdebug-2.2.1-5.4-vc9.dll
xdebug.profiler_append = 0
xdebug.profiler_enable = 1
;xdebug.profiler_enable_trigger = 0
xdebug.profiler_output_dir = "\xampp-portable\tmp"
xdebug.profiler_output_name = "cachegrind.out.%t-%s"
xdebug.remote_enable = 1
xdebug.remote_handler = "dbgp"
xdebug.remote_host = "127.0.0.1"
xdebug.trace_output_dir = "\xampp-portable\tmp"
xdebug.remote_log = "\xampp-portable\tmp\xdebug\xdebug_remot.log"
xdebug.extended_info=1
xdebug.remote_mode=req
xdebug.remote_port=9000
;xdebug.profiler_output_name = “cachegrind.out.%p”
xdebug.idekey=xdebug
xdebug.show_exception_trace=0
xdebug.show_local_vars=9
xdebug.show_mem_delta=0
xdebug.trace_format=0





