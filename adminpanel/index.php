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

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="./icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./icons/favicon-16x16.png">
    <link rel="manifest" href="./icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Favicon -->

    <title>Smart Admin Template</title>
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
                                            <!--<a class="btn" href="logout">Sign Out</a>-->
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
                <li class="active">
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
                                <h1>Dashbaord</h1>
                            </div> 
                        </div>
                    </div>
                    <!-- Overall Info -->
                    <div class="col-sm-6 col-md-4">
                        <div class="card card-dashboard">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5 dash-icon info-color">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="col-7">
                                        <div class="text-right">
                                            <p>Add Question</p>
                                            <p>5,9990</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card card-dashboard">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5 dash-icon success-color">
                                            <i class="fas fa-plus-circle"></i>
                                    </div>
                                    <div class="col-7">
                                        <div class="text-right">
                                            <p>List Scores</p>
                                            <p>5,9990</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card card-dashboard ">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5 dash-icon danger-color">
                                        <i class="fas fa-minus-circle"></i>
                                    </div>
                                    <div class="col-7">
                                        <div class="text-right">
                                            <p>List Players</p>
                                            <p>5,9990</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Overall Info - End -->
                    
                    
                    <!-- Overall Info -->
                    <div class="col-sm-6 col-md-4">
                        <div class="card card-dashboard">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5 dash-icon info-color">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="col-7">
                                        <div class="text-right">
                                            <p>List Question</p>
                                            <p>5,9990</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card card-dashboard">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5 dash-icon success-color">
                                            <i class="fas fa-plus-circle"></i>
                                    </div>
                                    <div class="col-7">
                                        <div class="text-right">
                                            <p>Awards</p>
                                            <p>5,9990</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card card-dashboard ">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5 dash-icon danger-color">
                                        <i class="fas fa-minus-circle"></i>
                                    </div>
                                    <div class="col-7">
                                        <div class="text-right">
                                            <p>Send Mail to Player</p>
                                            <p>5,9990</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Overall Info - End -->
                    
                    
                   

                    <!-- Column Chart -->
                    <div class="col-md-12">
                        <div class="card card-box card-success">
                            <div class="card-body">
                                <!-- <div id="payments-chart"></div> -->
                                <!--<canvas id="canvas"></canvas>-->
                            </div>
                        </div>
                    </div>
                    <!-- Column Chart  End -->
                </div>
            </div>
        </main>
    </div>
<script type="text/javascript" src="js/vendor.js"></script><script type="text/javascript" src="js/app.js"></script><script type="text/javascript" src="js/style.js"></script></body>
</html>