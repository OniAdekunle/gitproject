<?php

include'src/session.php';
include'src/halimah.php';

$message ='';


if(isset($_POST['action'])){
	          
    if($_POST['action']=="login"){
		
        $emailuser = strip_tags(mysqli_real_escape_string($db,$_POST['emailuser']));
        $passworduser = strip_tags(mysqli_real_escape_string($db,$_POST['passworduser']));
        $strSQL = mysqli_query($db,"SELECT * FROM theadmin WHERE User_Email = '".$emailuser."' 
		AND User_Password = '".md5($passworduser)."'");
        $Results = mysqli_fetch_array($strSQL);
		
        if(count($Results)>=1){
			$_SESSION['userid'] = $Results['id'];
			$_SESSION['username'] = $Results['User_Name'];
			$_SESSION['useremail'] = $Results['User_Email'];
			
            $message = $Results['User_Name']." Login Sucessfully!!";
			echo '<script type="text/javascript">
			alert("You have Sucessfully login into your accouunt!!");
			window.location.href = "index.php";</script>';
			
        }else{
			
            $message = "Invalid email or password!!";
			echo '<script type="text/javascript">
			alert("You have provided invalid email or password, try again!!");
			window.location.href = "loginform.php";</script>';
        }        
    }
    elseif($_POST['action']=="signup")
    {
        $nameuser       = mysqli_real_escape_string($db,$_POST['nameuser']);
        $emailuser      = mysqli_real_escape_string($db,$_POST['emailuser']);
        $passworduser   = mysqli_real_escape_string($db,$_POST['passworduser']);
        $query = "SELECT User_Email FROM theadmin WHERE User_Email = '".$emailuser."'";
        $result = mysqli_query($db,$query);
        $numResults = mysqli_num_rows($result);
        if (!filter_var($emailuser, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            $message =  "Invalid email address please type a valid email!!";
			echo '<script type="text/javascript">
			alert("Invalid email address please type a valid email!!");</script>';
        }
        elseif($numResults >=1)
        {
            $message = $emailuser."Email already exist!!";
			echo '<script type="text/javascript">
			alert("Email already exist!!");</script>';
        }
        else
        {
            mysqli_query($db,"INSERT INTO theadmin(User_Name,User_Email,User_Password) VALUES('".$nameuser."','".$emailuser."','".md5($passworduser)."')");
            $message = "Signup Sucessfully!!";
			echo '<script type="text/javascript">
			alert("Registered OK. login now!!");</script>';
        }
    }
}
 
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SEE TV Login</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-page">
  <div class="form">
    <form class="register-form" method="post">
      <input type="text" placeholder="name" name="nameuser"/>
      <input type="password" placeholder="password" name="passworduser"/>
      <input type="text" placeholder="email address" name="emailuser"/>
        <input name="action" type="hidden" value="signup" />
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="post">
      <input type="text" placeholder="username" name="emailuser"/>
      <input type="password" placeholder="password" name="passworduser"/>
       <input name="action" type="hidden" value="login" />
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="./script.js"></script>

</body>
</html>
