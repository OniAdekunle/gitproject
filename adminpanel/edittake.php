<?php
include'src/session.php';
include'src/halimah.php';
include('checkies.php');

is_check();


if(isset($_POST['postbutton'])) { 

  
//insert to data if no such data
$getin = mysqli_query($db,"UPDATE onfwd_client_tbl SET
real_costs='".mysqli_real_escape_string($db,$_POST['ramount'])."', 
onfwd_costs='".mysqli_real_escape_string($db,$_POST['tamount'])."',
extrakg_cost='".mysqli_real_escape_string($db,$_POST['extkgs'])."' WHERE id = '".$_POST['idss']."'");

if($getin){
echo '<script type="text/javascript">
alert("Update was successful.")
window.location.href = "page-postcredit-tariff-list-edit";
</script>';
}else{	
	echo '<script type="text/javascript">
alert("Not updated at all)
window.location.href = "page-postcredit-tariff-list-edit";
</script>';
	
	}
}




if(isset($_GET['edits'])){
	$cids = $_GET['edits'];
	
	$query_imageRandomIN = "SELECT * FROM isquestions WHERE id = '".$cids."' ";
	 $imageRandomIN = mysqli_query($db,$query_imageRandomIN) or die(mysqli_error());
	 $getData_imageRandomIN = mysqli_fetch_assoc($imageRandomIN);
	 $totalRows_imageRandomIN = mysqli_num_rows($imageRandomIN);
	
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>See TV Admin</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
<link href="css/style.css" rel="stylesheet"></head>
<body>
    <header class="top-navigation">
        <div class="logo-container">
            <img class="lg-logo" src="./src/img/logo-3.png" alt="Smart Admin">
            <span class="sm-logo">SA</span>
        </div>
        <nav class="top-navbar">
            <span class="toggle-container" id="menuToggler">
                <i class="fas fa-bars"></i>
            </span>
            <div class="menu-open-container">
                <div class="wrapper-menu">
                    <div class="line-menu half start"></div>
                    <div class="line-menu"></div>
                    <div class="line-menu half end"></div>
                </div>
            </div>

            <!-- User Profile -->
            <ul class="header-nav">
                <li class="user-info">
                    <div class="dropdown">
                        <a class="dropdown-toggle user-c" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="fortopal.png" height="60" width="30">
                            <span>Adara</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="user-info-container-top">
                                <div class="user-content">
                                    <div class="image">
                                        <img src="fortopal.png" height="40" width="20">
                                    </div>
                                    <div class="clearfix"></div>
                                    <p>Adara</p>
                                    <!-- <p class="sub">Senior Developer</p> -->
                                </div>
                                <div class="user-footer">
                                    <div class="row">
                                        <div class="col-6">
                                           <a class="btn" href="logout">Sign Out</a>
                                        </div>
                                        <div class="col-6">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </li>
            </ul>
            <!-- User Profile -->
        </nav>
    </header>
    <div class="wrapper">
        <aside class="main-sidebar">
            <section class="user-container">
                <span class="user">
                    <i class="far fa-user-circle"></i>
                </span>
                <span class="user-info">
                    <p><?php echo $_SESSION['username'];?></p>
                    <p class="online">
                        <i class="fas fa-circle"></i> Online</p>
                </span>
            </section>
            <ul class="side-nav-container">
                <li class="header">
                    <p>MAIN NAVIGATION</p>
                </li>
                <li>
                    <a href="index">
                        <i class="fas fa-chart-bar"></i>
                        <span class="info-txt">Dashbaord</span>
                    </a>
                </li>
                
                 <li>
                    <a href="addcatgory">
                        <i class="fas fa-cog"></i>
                        <span class="info-txt">Add Levels</span>
                    </a>
                </li>
                <li>
                    <a href="listcategory">
                        <i class="fas fa-cog"></i>
                        <span class="info-txt">List Levels</span>
                    </a>
                </li>
               
                <li class="active">
                    <a href="settings">
                        <i class="fas fa-cog"></i>
                        <span class="info-txt">Add Questions</span>
                    </a>
                </li>
                <li>
                    <a href="listquestion">
                            <i class="fas fa-table"></i>
                        <span class="info-txt">List of Questions</span>
                    </a>
                </li>
                 
                <li>
                    <a href="listplayer">
                            <i class="fas fa-table"></i>
                        <span class="info-txt">List of Quiz Players</span>
                    </a>
                </li>
            </ul>
        </aside>
        <main class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-container">
                            <div class="header-title">
                                <h1>Settings</h1>
                            </div> 
                        </div>
                    </div>
                    <!-- Settings Info -->
                    <div class="col-md-12">
                        <div class="card card-box card-success">
                            <div class="card-body">
                                <div class="row">
    <div class="col-md-offset-2 col-md-8">
        <h1>Quiz Update</h1>
        <form action="" method="post">
        	
        
            <div class="form-group">
                <label for="question">Category</label>
                <select class="form-control" id="question" name="iscategory" Required>
                
                <option><?php echo $getData_imageRandomIN['category_id'];?></option>
                <option></option>
               
               	<?php
					  $dd_serlIc = mysqli_query($db,"SELECT * From iscategories ");
					  while($serlIc = mysqli_fetch_array($dd_serlIc)){
						  $serc = $serlIc['id'];
						  $serc2 = $serlIc['category_name'];
						  ?> 
						  <option value="<?php echo $serc;?>"> <?php echo $serc2;?></option>
					<?php  }?>
                
                </select>
            </div>
            <div class="form-group">
                <label for="question">Question Type</label>
                <select class="form-control" name="istype" Required>
                <option><?php echo $getData_imageRandomIN['qtypeid'];?></option>
                <option></option>
            	<?php
					  $dd_serlIci = mysqli_query($db,"SELECT * From istype");
					  while($serlIci = mysqli_fetch_array($dd_serlIci)){
						  $serci = $serlIci['id'];
						  $serc2i = $serlIci['qtype_name'];
						  ?> 
						  <option value="<?php echo $serci;?>"> <?php echo $serc2i;?></option>
					<?php  }?>   
                </select>
            </div>
            <div class="form-group">
                <label for="question">Stages Type</label>
                <select class="form-control" name="isstage" Required>
                <option><?php echo $getData_imageRandomIN['stagesid'];?></option>
                <option></option>
            	<?php
					  $dd_serlIcii = mysqli_query($db,"SELECT * From isstage");
					  while($serlIcii = mysqli_fetch_array($dd_serlIcii)){
						  $sercii = $serlIcii['qst_id'];
						  $serc2ii = $serlIcii['stage_name'];
						  ?> 
						  <option value="<?php echo $sercii;?>"> <?php echo $serc2ii;?></option>
					<?php  }?>   
                </select>
            </div>
            <div class="form-group">
                <label for="question">Ask Question</label>
                <input type="text" class="form-control" id="question" name="question"  Required value="<?php echo $getData_imageRandomIN['question_name'];?>">
            </div>
            
            <div class="form-group">
                <label for="wrong_answer1">Answers 1</label>
                <input type="text" class="form-control" id="wrong_answer1" name="choice1" Required value="<?php echo $getData_imageRandomIN['answer1'];?>">
            </div>
            <div class="form-group">
                <label for="wrong_answer2">Answers 2</label>
                <input type="text" class="form-control" id="wrong_answer2" name="choice2" Required value="<?php echo $getData_imageRandomIN['answer2'];?>">
            </div>
            <div class="form-group">
                <label for="wrong_answer3">Answers 3</label>
                <input type="text" class="form-control" id="wrong_answer3" name="choice3" Required value="<?php echo $getData_imageRandomIN['answer3'];?>">
            </div>
             <div class="form-group">
                <label for="wrong_answer3">Answers 4</label>
                <input type="text" class="form-control" id="wrong_answer4" name="choice4" Required value="<?php echo $getData_imageRandomIN['answer4'];?>">
            </div>
            <div class="form-group">
                <label for="correct_answer">Answer</label>
                <select class="form-control" id="corrects" name="corrects" Required>
                <option><?php echo $getData_imageRandomIN['answer'];?></option>
                <option></option>
                <option value="1">Choice #1 </option>
                <option value="2">Choice #2</option>
                <option value="3">Choice #3</option>
                <option value="4">Choice #4</option>
                </select>
            </div>
            <div class="form-group">
                <label for="correct_answer">Status</label>
                <select class="form-control" name="dstatus" Required>
                <option><?php echo $getData_imageRandomIN['q_status'];?></option>
                <option></option>
                <option value="Enabled">Enabled </option>
                <option value="Disabled">Disabled</option>
               
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-large" value="submit" name="submitupdate">+ Add Question</button>

        </form>
    </div>
     </div>
                            </div>    
                        </div>
                    </div>
                    <!-- Settings Info - End -->
                </div>
            </div>
        </main>
    </div>
<script type="text/javascript" src="js/vendor.js"></script><script type="text/javascript" src="js/app.js"></script><script type="text/javascript" src="js/style.js"></script></body>
</html>