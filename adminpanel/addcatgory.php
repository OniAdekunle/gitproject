<?php
include'src/session.php';
include'src/halimah.php';
include('checkies.php');

is_check();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SEE TV Admin </title>
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
                                        <img src="fortopal.png" height="60" width="30">
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
                
                <li class="active">
                    <a href="addcatgory">
                        <i class="fas fa-cog"></i>
                        <span class="info-txt">Add levels</span>
                    </a>
                </li>
                
                <li>
                    <a href="listcategory">
                        <i class="fas fa-cog"></i>
                        <span class="info-txt">List levels</span>
                    </a>
                </li>
               
                <li>
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
        <h1>Add Category</h1>
        <form action="" method="post">
             <?php 

if(isset($_POST['qcates'])){

$cat_title = $_POST['qcate'];

$insert_cat = "insert into iscategories (category_name) values ('$cat_title')";

$run_cat = mysqli_query($db,$insert_cat);

if($run_cat){
echo "<script type='text/javascript'>
alert('Category Inserted');window.location.href = 'listcategory.php';</script>";
}

}

?>
            
            <div class="form-group">
                <label for="question">Category</label>
                <input type="text" class="form-control" id="question" name="qcate" Required>
            </div>
            
            <button type="submit" class="btn btn-primary btn-large" value="submit" name="qcates">+ Add Category</button>

        </form>
    </div>
     </div>
                            </div>    
                        </div>
                    </div>
                    <!-- Settings Info - End -->
                    <!-- Settings Info -->
                    <div class="col-md-12">
                        <div class="card card-box card-success">
                            <div class="card-body">
                                <div class="row">
    <div class="col-md-offset-2 col-md-8">
        <h1>Add Play Type</h1>
        <form action="" method="post">
         <?php 

if(isset($_POST['playtype'])){

$cat_title = $_POST['played'];

$insert_cat = "insert into istype (qtype_name) values ('$cat_title')";

$run_cat = mysqli_query($db,$insert_cat);

if($run_cat){
echo "<script type='text/javascript'>
alert('Simple or Hard Inserted');window.location.href = 'listcategory.php';</script>";
}

}

?>
            
            <div class="form-group">
                <label for="question">Play Type</label>
                <input type="text" class="form-control" id="question" name="played"  Required>
            </div>
            
            <button type="submit" class="btn btn-primary btn-large" value="submit" name="playtype">+ Add Play Type</button>

        </form>
    </div>
     </div>
                            </div>    
                        </div>
                    </div>
                    <!-- Settings Info - End -->
                    <!-- Settings Info -->
                    <div class="col-md-12">
                        <div class="card card-box card-success">
                            <div class="card-body">
                                <div class="row">
    <div class="col-md-offset-2 col-md-8">
        <h1>Add Stages</h1>
        <form action="" method="post">
        <?php 

if(isset($_POST['stages'])){

$cat_title = $_POST['isstages'];

$insert_cat = "insert into isstage (stage_name) values ('$cat_title')";

$run_cat = mysqli_query($db,$insert_cat);

if($run_cat){
echo "<script type='text/javascript'>
alert('Stage Inserted');window.location.href = 'listcategory.php';</script>";
}

}

?>
            
            <div class="form-group">
                <label for="question">Stages</label>
                <input type="text" class="form-control" id="question" name="isstages" Required>
            </div>
            
            <button type="submit" class="btn btn-primary btn-large" value="submit" name="stages">+ Add Stages</button>

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