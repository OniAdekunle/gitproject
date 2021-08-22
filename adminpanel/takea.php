<?php
include'src/session.php';
include'src/halimah.php';



if(isset($_GET['unapprove'])){

$unapprove_id = $_GET['unapprove'];

$unapprove_comment = "update isquestions set q_status ='Disabled' where id = '$unapprove_id'";

$run_unapprove = mysqli_query($db,$unapprove_comment);

echo "<script type='text/javascript'>
alert('Question Disabled');window.location.href = 'listquestion.php';</script>";

}

if(isset($_GET['approve'])){

$approve_id = $_GET['approve'];

$approve_comment = "update isquestions set q_status ='Enabled' where id='$approve_id'";

$run_approve = mysqli_query($db,$approve_comment);

echo "<script type='text/javascript'>
alert('Question Enabled');window.location.href = 'listquestion.php';</script>";

}

?>

