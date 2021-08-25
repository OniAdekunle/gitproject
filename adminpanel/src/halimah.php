<?php

//$Hamzathostname_Mirror = "your server name here";
//$HamzatUser_Mirrior = "your username here";
//$HamzatPass_Mirror = "your password here";
//$Hamzatdatabase_Mirrior = "your database name here";

$Hamzathostname_Mirror = "remotemysql.com";
$HamzatUser_Mirrior = "cOYfI99iLm";
$HamzatPass_Mirror = "03GcT6IPsK";
$Hamzatdatabase_Mirrior = "cOYfI99iLm";


$db = mysqli_connect($Hamzathostname_Mirror, $HamzatUser_Mirrior, $HamzatPass_Mirror, $Hamzatdatabase_Mirrior); 
if(mysqli_connect_errno()) {
    throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
}


?>