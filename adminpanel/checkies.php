<?php
include'src/session.php';
include'src/halimah.php';

function is_check(){
		
	if(!isset($_SESSION['useremail'])){
		
		echo '<script type="text/javascript">
			alert("This is a secure page, you must login to access this page !!!");
			window.location.href = "loginform.php";
			</script>';				
			//header("Location:page-login.php");		
	}
	 		
}

?>