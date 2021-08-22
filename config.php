<?php

 
//define('BASE_PATH','http://localhost/qq/');
define('DB_HOST', 'your_host');
define('DB_NAME', 'your_db');
define('DB_USER','your_user');
define('DB_PASSWORD','your_pass');

$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

?>