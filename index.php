<?php
session_start();
error_reporting(0);

require 'adminpanel/src/halimah.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SEE TV</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet" media="screen">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->
        <style>        
        body{
			color:#000;}
        </style>
	</head>
	<body>
        <header>
			<p class="text-center" style="text-align:center; font-size:18px">
				Welcome to SEETV,  <strong><small><font color="#FF0000"><?php if(!empty($_SESSION['name'])){echo '&nbsp;'. $_SESSION['name'].'&nbsp;'.$_SESSION['qnums'];}?></font></small></strong>
			</p>
             <p class="text-center" style="text-align:right; font-size:18px; margin-right:10px;">
             <?php if(!empty($_SESSION['name'])){?>
             <a href="logout.php" class='btn btn-danger'>Logout</a>
             <?php } ?>
            </p>            
		</header>
       
		<div class="container">
			<div class="row">
				<div class="col-xs-14 col-sm-7 col-lg-7">
					<div class='image'>
                    <h2>SEE TV</h2>
                    
                    <?php
                  $query_imageRandomPROis = "SELECT DISTINCT(qstage_id) FROM isusers 
				  WHERE user_name = '".$_SESSION['name']."'";
				  $imageRandomPROis = mysql_query($query_imageRandomPROis,$con) or die(mysql_error());				  
				  $sti = Array();
				  while($row_imageRandomPROis = mysql_fetch_array($imageRandomPROis)){
				  $sti[] = $row_imageRandomPROis['qstage_id'];
				  
				  }
				  ?>
                    <div class="special" style="color:#000 !important;">
                   <?php  
				    $newone = implode(",",(array)$sti);
					
					$dateChunks = array_unique(array_merge(explode(',', $newone)));
					$firstChunk = $dateChunks[0]; //5
					$secondChunk = $dateChunks[1]; //4
					$thirdChunk = $dateChunks[2]; //3
					$forthChunk = $dateChunks[3]; //2
					$fiftChunk = $dateChunks[4]; //1
					
					//echo $newone;
					//echo '<br/>';
					//echo $firstChunk;
					//echo '<br/>';
					//echo $secondChunk;
					//echo '<br/>';
					//echo $thirdChunk;
					//echo '<br/>';
					//echo $forthChunk;
					//echo '<br/>';
					//echo $fiftChunk;
				   
				 ?>
  
   
  <div class="five">
  <h4>Preliminary</h4>
  <?php if($firstChunk == 5){?>
  <span class="dot" style="color:#fff !important; background:#000 !important;">6</span>
  <span class="dot" style="color:#fff !important; background:#000 !important;">7</span>
   <span class="dot" style="color:#fff !important; background:#000 !important;">8</span>
  <?php } else{?>
  <span class="dot">6</span>
  <span class="dot">7</span>
  <span class="dot">8</span>
  <?php } ?>
</div>

<div class="four">
   <h4>Second Round</h4>
   <?php if($secondChunk == 4){?>
  <span class="dot" style="color:#fff !important; background:#000 !important;">4</span>
  <span class="dot" style="color:#fff !important; background:#000 !important;">5</span>
  <?php } else{?>
  <span class="dot">4</span>
  <span class="dot">5</span>
  <?php } ?>
  </div>
  
  <div class="three">
  <h4>Quater Final</h4>
  <?php if($thirdChunk == 3){?>
  <span class="dot" style="color:#fff !important; background:#000 !important;">3</span>
  <?php } else{?>
  <span class="dot">3</span>
  <?php } ?>
  </div>
  
   <div class="two">
  <h4>Semi Final</h4>
  <?php if($forthChunk == 2){?>
  <span class="dot" style="color:#fff !important; background:#000 !important;">2</span>
  <?php } else{?>
  <span class="dot">2</span>
  <?php } ?>
  </div>
                
	<div class="one">
  <h4>Final</h4>
  <?php if($fiftChunk == 1){?>
  <span class="dot" style="color:#fff !important; background:#000 !important;">1</span>
  <?php } else{?>
  <span class="dot">1</span>
  <?php } ?>
  </div>
  

</div>
<div class="special" style="color:#333; margin-top:-20px;">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Score</th>
      <th scope="col">Stage</th>
    </tr>
  </thead>
  <tbody>
<?php
$i=0;

$get_p = "select * from isscores WHERE acct_name = '".$_SESSION['name']."'";
$run_pi = mysql_query($get_p);
$run_pii = mysql_fetch_array($run_pi);
$ci = $run_pii['cat_id'];
$cii = $run_pii['qtype_id'];

$get_postsi = "select * from isquestions WHERE category_id = '".$ci."' AND qtypeid = '$cii'";
$run_poi = mysql_query($get_postsi);
$rowsii = mysql_num_rows($run_poi);


$get_posts = "SELECT DISTINCT(qstage_id),user_name,score FROM isusers WHERE user_name = '".$_SESSION['name']."'";
$run_posts = mysql_query($get_posts);
while($row_posts = mysql_fetch_array($run_posts)){
$post_id = $row_posts['user_name'];
$post_title = $row_posts['score'];
$post_author = $row_posts['qstage_id'];

$i++;
?>
    <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $post_id;?></td>
      <td><?php echo $post_title;?></td>
      <td><?php 
	  if($post_author === '1'){
		  echo 'Final';
		    }elseif($post_author == '2'){ 
		      echo 'Semi Final';
		        }elseif($post_author == '3'){
			     echo 'Quater Final';
			        }elseif($post_author == '4'){
				      echo 'Second Round';
				        }elseif($post_author == '5'){
							echo 'Preliminary';}?>
          
          </td>
          
          <?php $num+=$post_title; ?>
    </tr>
   <?php } ?> 
  </tbody>
 <tr>
      <th scope="row">*</th>
      <td colspan="1"><strong>Total Score</strong></td>
      <td class="btn btn-default btn-sm" style="width:60px; height:auto;"><b><font color="#FF0000"><?php echo $num;?> @ <?php echo $rowsii;?></font></b></td>
    </tr>
  </tr>
</table>
</div>
					</div>
				</div>
				<div class="col-xs-10 col-sm-5 col-lg-5">
					<div class="intro">
						<p class="text-center" style="color:#F00; font-weight:bold;">
                        <?php 
    					echo $_SESSION['msg'];
    					unset($_SESSION['msg']); // remove it now we have used it
						
						/*					
						if(isset($_GET)){
							echo $_GET['msg']; // print_r($_GET);       
						}else{
						  echo "Url has no message";
						}
						*/

						?>
							
						</p>
						<?php if(empty($_SESSION['name'])){?>
						<form class="form-signin" method="post" id='signin' name="signin" action="questions.php">
							<div class="form-group">
								<input type="text" id='name' name='name' class="form-control" placeholder="Enter your Name"/>
								<span class="help-block"></span>
							</div>
                            <div class="form-group">
								<input type="text" id='nums' name='qnums' class="form-control" placeholder="Enter Phone Number"/>
								<span class="help-block"></span>
							</div>
							<div class="form-group">
							    <select class="form-control" name="category" id="category">
							        <option value="">Choose your category</option>
                                   
                                    <?php 
                                    $query_imageRandomPROix = "SELECT * FROM iscategories";
				  $imageRandomPROix = mysql_query($query_imageRandomPROix,$con) or die(mysql_error());
				  $row_imageRandomPROix = mysql_fetch_assoc($imageRandomPROix);
				  $totalRows_imageRandomPROix = mysql_num_rows($imageRandomPROix);
				  
				  ?>
                  <?php do{?>
                                  <option value="<?php echo $row_imageRandomPROix['id'];?>">
				  			<?php echo $row_imageRandomPROix['category_name'];?>
                  			</option>  
                                  <!--<option value="2">HTML</option>
                                  <option value="3">PHP</option>
                                  <option value="4">CSS</option> --> 
                                  <?php } while ($row_imageRandomPROix =  mysql_fetch_assoc($imageRandomPROix)); ?>                              
                                </select>
                                <span class="help-block"></span>
							</div>
                            
                            <div class="form-group">
							  <select class="form-control" name="qtype" id="qtype">
							  <option value="">Choose your quiz type</option>
                             
                             <?php 
                                    $query_imageRandomPROiixt = "SELECT * FROM istype";
				  $imageRandomPROiixt = mysql_query($query_imageRandomPROiixt,$con) or die(mysql_error());
				  $row_imageRandomPROiixt = mysql_fetch_assoc($imageRandomPROiixt);
				  $totalRows_imageRandomPROiixt = mysql_num_rows($imageRandomPROiixt);
				  
				  ?>
                  <?php do{?>
                                  <option value="<?php echo $row_imageRandomPROiixt['id'];?>">
				  <?php echo $row_imageRandomPROiixt['qtype_name'];?>
                  </option> 
                  <?php } while ($row_imageRandomPROiixt = mysql_fetch_assoc($imageRandomPROiixt)); ?>                             
                              </select>
                                <span class="help-block"></span>
							</div>
                             <div class="form-group">
                            <select name="qstage" class="form-control" id="qstage">
                             <option value="">Choose your stage</option>
                            
                             <?php 
                                    $query_imageRandomPROiix = "SELECT * FROM isstage ORDER BY qst_id DESC limit 1 ";
				  $imageRandomPROiix = mysql_query($query_imageRandomPROiix,$con) or die(mysql_error());
				  $row_imageRandomPROiix = mysql_fetch_assoc($imageRandomPROiix);
				  $totalRows_imageRandomPROiix = mysql_num_rows($imageRandomPROiix);
				  
				  ?>
                  <?php do{?>
                                  <option value="<?php echo $row_imageRandomPROiix['qst_id'];?>">
				  <?php echo $row_imageRandomPROiix['stage_name'];?>
                  </option> 
                  <?php } while ($row_imageRandomPROiix = mysql_fetch_assoc($imageRandomPROiix)); ?>
                            </select>
                            <span class="help-block"></span>
                                        </div>
							
							<br>
							<button class="btn btn-success btn-block" type="submit">
								Set Go!!!
							</button>
						</form>
						
						<?php }else{?>
						    <form class="form-signin" method="post" id='signin' name="signin" action="questions.php">
                            <div class="form-group">
							    <select class="form-control" name="category" id="category">
							        <option value="">Choose your category</option>
                                    
                                    <?php 
                                    $query_imageRandomPROi = "SELECT * FROM iscategories ORDER BY id DESC";
				  $imageRandomPROi = mysql_query($query_imageRandomPROi,$con) or die(mysql_error());
				  $row_imageRandomPROi = mysql_fetch_assoc($imageRandomPROi);
				  $totalRows_imageRandomPROi = mysql_num_rows($imageRandomPROi);
				  
				  ?>
                  <?php do{?>
                                  <option value="<?php echo $row_imageRandomPROi['id'];?>">
				  <?php echo $row_imageRandomPROi['category_name'];?>
                  </option>  
                                  <!--<option value="2">HTML</option>
                                  <option value="3">PHP</option>
                                  <option value="4">CSS</option> --> 
                                  <?php } while ($row_imageRandomPROi =  mysql_fetch_assoc($imageRandomPROi)); ?>                              
                                </select>
                                <span class="help-block"></span>
							</div>
                            
                            <div class="form-group">
							  <select class="form-control" name="qtype" id="qtype">
							  <option value="">Choose your quiz type</option>
                               
                             <?php 
                                    $query_imageRandomPROii = "SELECT * FROM istype";
				  $imageRandomPROii = mysql_query($query_imageRandomPROii,$con) or die(mysql_error());
				  $row_imageRandomPROii = mysql_fetch_assoc($imageRandomPROii);
				  $totalRows_imageRandomPROii = mysql_num_rows($imageRandomPROii);
				  
				  ?>
                  <?php do{?>
                                  <option value="<?php echo $row_imageRandomPROii['id'];?>">
				  <?php echo $row_imageRandomPROii['qtype_name'];?>
                  </option> 
                  <?php } while ($row_imageRandomPROii = mysql_fetch_assoc($imageRandomPROii)); ?>                              
                               </select>
                                <span class="help-block"></span>
							</div>
                             <div class="form-group">
                            <select name="qstage" class="form-control" id="qstage">
                             <option>Choose your stage</option>
                             
                             
                  <?php
                  $query_imageRandomPRO = "SELECT * FROM isstage
				  WHERE qst_id NOT IN (SELECT qstage_id FROM isusers 
				  WHERE user_name = '".$_SESSION['name']."' AND user_phone = '".$_SESSION['qnums']."') 
				  ORDER BY qst_id DESC";
				  $imageRandomPRO = mysql_query($query_imageRandomPRO,$con) or die(mysql_error());
				  $row_imageRandomPRO = mysql_fetch_assoc($imageRandomPRO);
				  $totalRows_imageRandomPRO = mysql_num_rows($imageRandomPRO);
				  ?>
                 <?php do { ?>
                  <option value="<?php echo $row_imageRandomPRO['qst_id'];?>">
				  <?php echo $row_imageRandomPRO['stage_name'];?>
                  </option>     
                  <?php } while ($row_imageRandomPRO =  mysql_fetch_assoc($imageRandomPRO)); ?>               
                  </select>  
                            <span class="help-block"></span>
                                        </div>
                            
                            <br>
                             <?php //print $st ; echo '<br/>';
							 //echo $st; ?>
                            <button class="btn btn-success btn-block" type="submit">
                               Set Go!!!
                            </button>
                        </form>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
        <br/>
        <br/>
        <br/>
		<footer>
			<p class="text-center" id="foot">
				&copy; <a href="#" target="_blank">SEE TV</a> 2020
			</p>
		</footer>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/jquery.validate.min.js"></script>

		<script>
			$(document).ready(function() {
				$("#signin").validate({
					submitHandler : function() {
					    console.log(form.valid());
						if (form.valid()) {
						    alert("sf");
							return true;
						} else {
							return false;
						}

					},
					rules : {
						name : {
							required : true,
							minlength : 3,
							remote : {
								url : "check_name.php",
								type : "post",
								data : {
									username : function() {
										return $("#name").val();
									}
								}
							}
						},
						category:{
						    required : true
						}
					},
					messages : {
						name : {
							required : "Please enter your name",
							remote : "Name is already taken, Please choose some other name"
						},
						category:{
                            required : "Please choose your category to start Quiz"
                        }
					},
					errorPlacement : function(error, element) {
						$(element).closest('.form-group').find('.help-block').html(error.html());
					},
					highlight : function(element) {
						$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
					},
					success : function(element, lab) {
						var messages = new Array("That's Great!", "Looks good!", "You got it!", "Great Job!", "Smart!", "That's it!");
						var num = Math.floor(Math.random() * 6);
						$(lab).closest('.form-group').find('.help-block').text(messages[num]);
						$(lab).addClass('valid').closest('.form-group').removeClass('has-error').addClass('has-success');
					}
				});
			});
		</script>

	</body>
</html>
