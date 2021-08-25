<?php

 
define('DB_HOST', 'remotemysql.com');
define('DB_NAME', 'cOYfI99iLm');
define('DB_USER','cOYfI99iLm');
define('DB_PASSWORD','03GcT6IPsK'); 

/* define('DB_HOST', 'localhost');
define('DB_NAME', 'quiz_table');
define('DB_USER','root');
define('DB_PASSWORD','1974HAMZAcom'); */

$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

?>