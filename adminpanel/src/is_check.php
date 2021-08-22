<?php

function is_check(){
		
	if(!isset($_SESSION['user_name'])){
		
		echo '<script type="text/javascript">
			alert("This is a secure page, you must login to access this page !!!");
			window.location.href = "page-login.php";
			</script>';				
			//header("Location:page-login.php");		
	}
	 		
}

?>