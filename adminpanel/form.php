<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Admin Template</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
                    <a href="index">
                        <i class="fas fa-chart-bar"></i>
                        <span class="info-txt">Dashbaord</span>
                    </a>
                </li>
                <li class="active">
                    <a href="form">
                        <i class="fab fa-wpforms"></i>
                        <span class="info-txt">Forms</span>
                    </a>
                </li>
                <li>
                    <a href="datatables">
                            <i class="fas fa-table"></i>
                        <span class="info-txt">Datatables</span>
                    </a>
                </li>
                
                <li>
                    <a href="settings">
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
                                <h1>Forms</h1>
                            </div> 
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- Normal Form Starts -->
                    <div class="col-md-6">
                        <div class="card card-box card-danger">
                            <div class="card-header">
                                <h2>Normal Form</h2>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group has-error">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
                                        <span class="form-text">Please enter valid email.</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                    </div>
                                    <button type="submit" class="btn btn-danger">Login Now!</button>
                                </form>
                            </div>
                        </div>        
                    </div>
                    <!-- Normal Form Starts- End -->

                    <!-- Horizontal Form Starts -->
                    <div class="col-md-6">
                        <div class="card card-box card-success">
                            <div class="card-header">
                                <h2>Horizontal Form</h2>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group row has-success">
                                        <label for="inputEmail3" class="col-md-2 col-form-label">Email</label>
                                        <div class="col-md-10">
                                            <input type="email" class="form-control" value="muni@smarttutorials.com" id="inputEmail3" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row has-success">
                                        <label for="inputPassword3" class="col-md-2 col-form-label">Password</label>
                                        <div class="col-md-10">
                                        <input type="password" value="12345" class="form-control" id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div>
                                    <fieldset class="form-group">
                                        <div class="row">
                                        <legend class="col-form-label col-md-2 pt-0">Radios</legend>
                                        <div class="col-md-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    First radio
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Second radio
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                    </fieldset>
                                    <div class="form-group row">
                                        <div class="col-md-2">Remember Me</div>
                                        <div class="col-md-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                            <label class="form-check-label" for="gridCheck1">
                                                    Remember Me
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-10">
                                        <button type="submit" class="btn btn-success">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>  
                        </div>  
                    </div>        
                    <!-- Horizontal Form - End -->
                    <div class="clearfix"></div>

                    <!--- Full form starts-->
                    <div class="col-12">
                        <div class="card card-box card-info">
                            <div class="card-header">
                                <h2>Full Page Form</h2>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group row has-success">
                                        <label for="inputEmail3" class="col-md-2 col-form-label">Email</label>
                                        <div class="col-md-10">
                                            <input type="email" class="form-control" value="muni@smarttutorials.com" id="inputEmail3" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row has-success">
                                        <label for="inputPassword3" class="col-md-2 col-form-label">Password</label>
                                        <div class="col-md-10">
                                        <input type="password" value="12345" class="form-control" id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="form-group row has-error">
                                        <label for="invoiceNumber" class="col-md-2 col-form-label">Invoice Number</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="invoiceNumber" placeholder="Invoice Number">
                                            <span class="form-text mt-2">Please enter invoice number.</span>
                                        </div>
                                    </div>


                                    <fieldset class="form-group">
                                        <div class="row">
                                        <legend class="col-form-label col-md-2 pt-0">Radios</legend>
                                        <div class="col-md-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    First radio
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Second radio
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                    </fieldset>
                                    <div class="form-group row">
                                        <div class="col-md-2">Remember Me</div>
                                        <div class="col-md-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                            <label class="form-check-label" for="gridCheck1">
                                                    Remember Me
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-10">
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>   
                    </div>
                    <!--- Full form ends-->
                </div>
            </div>
        </main>
    </div>
<script type="text/javascript" src="js/vendor.js"></script><script type="text/javascript" src="js/app.js"></script><script type="text/javascript" src="js/style.js"></script></body>
</html>