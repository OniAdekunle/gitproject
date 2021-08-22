<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                            <img src="https://www.gravatar.com/avatar/f7e77acb3e7fd828ea16e1d3c9b4e3e4?s=200&amp;d=mm&amp;r=g">
                            <span>Muni Ayothi</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="user-info-container-top">
                                <div class="user-content">
                                    <div class="image">
                                        <img src="https://www.gravatar.com/avatar/f7e77acb3e7fd828ea16e1d3c9b4e3e4?s=200&amp;d=mm&amp;r=g">
                                    </div>
                                    <div class="clearfix"></div>
                                    <p>Muni Ayothi</p>
                                    <!-- <p class="sub">Senior Developer</p> -->
                                </div>
                                <div class="user-footer">
                                    <div class="row">
                                        <div class="col-6">
                                            <a class="btn" href="javascript:;">Profile</a>
                                        </div>
                                        <div class="col-6">
                                            <a class="btn" href="javascript:;">Sign Out</a>
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
                    <p>Muni Ayothi</p>
                    <p class="online">
                        <i class="fas fa-circle"></i> Online</p>
                </span>
            </section>
            <ul class="side-nav-container">
                <li class="header">
                    <p>MAIN NAVIGATION</p>
                </li>
                <li>
                    <a href="index.html">
                        <i class="fas fa-chart-bar"></i>
                        <span class="info-txt">Dashbaord</span>
                    </a>
                </li>
                <li>
                    <a href="form.html">
                        <i class="fab fa-wpforms"></i>
                        <span class="info-txt">Forms</span>
                    </a>
                </li>
                <li >
                    <a href="datatables.html">
                            <i class="fas fa-table"></i>
                        <span class="info-txt">Datatables</span>
                    </a>
                </li>
                <li class="active">
                    <a href="chart.html">
                        <i class="fas fa-chart-area"></i>
                        <span class="info-txt">Charts</span>
                    </a>
                </li>
                <li>
                    <a href="settings.html">
                        <i class="fas fa-cog"></i>
                        <span class="info-txt">Settings</span>
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
                                <h1>Charts</h1>
                            </div> 
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- Column Chart -->
                    <div class="col-md-12">
                        <div class="card card-box card-success">
                            <div class="card-body">
                                <!-- <div id="payments-chart"></div> -->
                                <canvas id="canvas"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Column Chart  End -->

                    <!-- LINE Chart -->
                    <div class="col-md-12">
                        <div class="card card-box card-success">
                            <div class="card-body">
                                <!-- <div id="payments-chart"></div> -->
                                <canvas id="lineCanvas"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- LINE Chart END -->

                    <!-- LINE Chart -->
                    <div class="col-md-12">
                        <div class="card card-box card-success">
                            <div class="card-body">
                                <!-- <div id="payments-chart"></div> -->
                                <canvas id="pieCanvas"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- LINE Chart END -->

                    
                </div>
            </div>
        </main>
    </div>
<script type="text/javascript" src="js/vendor.js"></script><script type="text/javascript" src="js/app.js"></script><script type="text/javascript" src="js/style.js"></script></body>
</html>