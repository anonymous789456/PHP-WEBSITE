<?php
defined('server') ? null : define("server", "sql106.ezyro.com");
defined('user') ? null : define ("user", "ezyro_32072200") ;
defined('pass') ? null : define("pass","0z7n86cgh6tuu");
defined('database_name') ? null : define("database_name", "ezyro_32072200_db_ecommerce") ;

$this_file = str_replace('\\', '/', __File__) ;
$doc_root = $_SERVER['DOCUMENT_ROOT'];

$web_root =  str_replace (array($doc_root, "include/config.php") , '' , $this_file);
$server_root = str_replace ('config/config.php' ,'', $this_file);


define ('web_root' , $web_root);
define('server_root' , $server_root);
?>