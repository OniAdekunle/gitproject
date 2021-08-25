<?php

require 'adminpanel/src/halimah.php';


$queryimageRandom11 = "SELECT category_id,stagesid,qtypeid,q_status FROM isquestions 
WHERE category_id = '".$_POST['category']."' 
AND stagesid = '".$_POST['qstage']."' 
AND qtypeid = '".$_POST['qtype']."'
AND q_status = 'Disabled'";
$imageRandom11 = mysqli_query($db,$queryimageRandom11) or die(mysqli_error());
$rowimageRandom11 = mysqli_fetch_assoc($imageRandom11);
$totalRowsimageRandom11 = mysqli_num_rows($imageRandom11);

// not working from here
if($rowimageRandom11 >= 1){
	
	 session_start();	
	$_SESSION['msg'] = "No More Quiz for Selected Level, GO for another level of the Quiz";
	//$msg = "No More Questions for Selected again, GO for another levels of questions and get account created";
	
	//header( "Location: index.php?msg=".$msg ) ;
	header( 'Location: index.php' ) ;
	/*
echo "<script type='text/javascript'>
alert('No More Selected Questions again, GO for another levels of questions 
and get account created');window.location.href = 'index.php';</script>";

*/
exit();
}


?>