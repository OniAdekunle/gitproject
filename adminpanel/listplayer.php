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
    <title>SEE TV Admin</title>
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
                
                <li class="active">
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
                                <h1>Players</h1>
                            </div> 
                        </div>
                    </div>
                    <!-- Datatables Info -->
                    <div class="col-md-12">
                        <div class="card card-box card-success">
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                            <th>Nos</th>
                                            <th>Player Name</th>
                                            <th>Player Phone</th>
                                            <th>Score</th>
                                            <th>Stage</th>
                                            <th>PlayType</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
							  $i=1;
							  $get_posts = "select * from isscores";
							  $run_posts = mysqli_query($db,$get_posts);
							  while($row_posts=mysqli_fetch_array($run_posts)){
								  $ids = $row_posts['id'];
							  $post_id = $row_posts['acct_name'];
							  $post_title = $row_posts['acct_number'];
							  $post_author = $row_posts['score_id'];
							  $post_a = $row_posts['stage_id'];
							  $post_c = $row_posts['qtype_id'];
							  
							 
							  ?>
                                  <tr>
                                  <?php $ids;?> 
                                    <td><?php echo $i++;?></td>
                                    <td><?php echo $post_id;?></td>
                                    <td><?php echo $post_title ;?></td>
                                    <td><?php echo $post_author ;?></td>  
                                    <td><?php 
	  if($post_a === '1'){
		  echo 'Final';
		    }elseif($post_a == '2'){ 
		      echo 'Semi Final';
		        }elseif($post_a == '3'){
			     echo 'Quater Final';
			        }elseif($post_a == '4'){
				      echo 'Second Round';
				        }elseif($post_a == '5'){
							echo 'Preliminary';}?></td>
                            
                                    <td><?php if($post_c == 1){
									echo 'Simple Question';}
									elseif($post_c == 2){
									echo 'Hard Question';}?>                                    
                                    </td>                                   
                                    <td><a href="#" class="btn btn-sm btn-success">Send SMS</a></td>
                                  </tr>
                                  <?php } ?>
                				</tbody>

                                    <tfoot>
                                        <tr>
                                           <th>Nos</th>
                                            <th>Player Name</th>
                                            <th>Player Phone</th>
                                            <th>Score</th>
                                            <th>Stage</th>
                                            <th>PlayType</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot> 
                                </table> 
                            </div>
                            </div>    
                        </div>
                    </div>
                    <!-- Datatables Info - End -->
                </div>
            </div>
        </main>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
   
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
</body>
</html>