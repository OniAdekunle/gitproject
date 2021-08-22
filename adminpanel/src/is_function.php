<?php

include_once('halimah.php');

// escape string
	function es($db, $string) {
     return mysqli_real_escape_string($string);
	
  	}

	function s($db,$string) {
	  return strip_tags($string);
	}

	function u($string="") {
	  return urlencode($string);
	}
	
	function raw_u($string="") {
	  return rawurlencode($string);
	}
	
	function h($string="") {
	  return htmlspecialchars($string);
	}
	  
	function secure($data) {				
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);	
	  return $data;
	}
	
	$_SESSION['rimg'] = uniqid();
	
?>