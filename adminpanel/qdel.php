<?php
include'src/session.php';
include'src/halimah.php';


if(isset($_GET['delete_cat'])){

$delete_id = $_GET['delete_cat'];

$delete_cat = "delete from isquestions where id = '$delete_id'";

$run_delete = mysqli_query($db,$delete_cat);

if($run_delete){
echo "<script type='text/javascript'>
alert('Question Deleted');window.location.href = 'listquestion.php';</script>";
}

}

?>

