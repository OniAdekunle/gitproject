<?php
include'src/session.php';
include'src/halimah.php';



if(isset($_GET['cats'])){

$catsid = $_GET['cats'];

$unapprove_comment = "delete from iscategories where id = '$catsid'";

$run_unapprove = mysqli_query($db,$unapprove_comment);

echo "<script type='text/javascript'>
alert('Category Deleted');window.location.href = 'listcategory.php';</script>";

}

if(isset($_GET['isstages'])){

$isstages_id = $_GET['isstages'];

$approve_comment = "delete from isstage where qst_id='$isstages_id'";

$run_approve = mysqli_query($db,$approve_comment);

echo "<script type='text/javascript'>
alert('Stages Deleted');window.location.href = 'listcategory.php';</script>";

}

if(isset($_GET['istype'])){

$istype_id = $_GET['istype'];

$approve_comment = "delete from istype where id='$istype_id'";

$run_approve = mysqli_query($db,$approve_comment);

echo "<script type='text/javascript'>
alert('Question type Deleted');window.location.href = 'listcategory.php';</script>";

}

?>

