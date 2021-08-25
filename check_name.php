<?php

 require_once 'adminpanel/src/halimah.php';

 if(!empty($_POST['name'])){
     $name = mysqli_real_escape_string($db,$_POST['name']);
     $res = mysqli_query($db,"select count(user_name) as count FROM isusers WHERE user_name = '$name'") or die(mysqli_error()); 
     $count = mysqli_fetch_array($res);
     if($count[0]==0){
         echo 'true';
     }else{
         echo 'false';
     }
 }
?>