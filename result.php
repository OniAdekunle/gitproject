<?php
include('adminpanel/src/session.php');

require_once 'adminpanel/src/halimah.php';

if(!empty($_SESSION['name'])){
    
    $right_answer = 0;
    $wrong_answer = 0;
    $unanswered = 0; 
  
   $keys = array_keys($_POST);
   $order = join(",",$keys);
   
   //$query="select * from questions id IN($order) ORDER BY FIELD(id,$order)";
  // echo $query;exit;
   include 'adminpanel/src/halimah.php';
   $response = mysqli_query($db,"SELECT id,answer,stagesid,qtypeid,question_name FROM isquestions WHERE id IN($order) ORDER BY FIELD(id,$order)"); // or die(mysql_error());;
   
   $qus = array();
   
   while($result = mysqli_fetch_array($response)){
	   
	   $qus[] = $result['question_name'];
	   
       if($result['answer']==$_POST[$result['id']]){
               $right_answer++;
           }else if($_POST[$result['id']]==5){
               $unanswered++;
           }
           else{
               $wrong_answer++;
           }
   }
   
   $newone = implode(",",(array)$qus);
   
   $name = $_SESSION['name'];
   $resp = mysqli_query($db,"SELECT id,user_name FROM isusers WHERE user_name = '$name' ORDER BY id DESC LIMIT 1");
   $respi = mysqli_fetch_assoc($resp);   
   $last_id = $respi['id'];
   
     
    mysqli_query($db,"UPDATE isusers SET score = '$right_answer' WHERE user_name = '$name' AND id = '".$last_id."'");
	
   //$nPhone = $_SESSION['qnums'];
   //$nQtype = isset($_SESSION['qtype']);
   //$nStage = isset($_SESSION['qstage']);
   //$id = $_SESSION['id'];
   
   if(!empty($_SESSION['name'])){	
   
   
   include 'adminpanel/src/halimah.php';
  
   mysqli_query($db,"INSERT INTO isscores(acct_name,acct_number,score_id,stage_id,qtype_id,cat_id)
   VALUES ('$name','$nPhone','$right_answer','".$_SESSION['qstagei']."','".$_SESSION['qtypei']."','".$_SESSION['categoryi']."')") or die('the problem is here One,contact webmaster'.mysql_error()); 
   
   }
   
   		$getit = $newone;		
		$pieces = array_unique(array_merge(explode(',', $getit)));
		
		foreach($pieces as $preps ) {  
		mysqli_query($db,"UPDATE isquestions SET q_status = 'Disabled' 
		WHERE question_name = '".$preps."' 
		");
		
		//AND stagesid  = '".$nStage."' AND qtypeid = '".$nQtype."' 
		}
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

    </head>
    <body>
        <header>
            <p class="text-center" style="text-align:center; font-size:18px">
				Welcome to SEETV,  <?php if(!empty($_SESSION['name'])){echo 'MESSER &nbsp;'. $_SESSION['name'];}?>
                <BR/>
                <?php // .'&nbsp;'.$_SESSION['qnums'].'&nbsp;'. $newone //echo $last_id;?>
			</p>
        </header>
        <div class="container result">
            <div class="row"> 
                    <div class='result-logo'>
                            <H2>Your Result</H2>
                    </div>    
           </div>  
           <hr>   
           <div class="row"> 
                  <div class="col-xs-18 col-sm-9 col-lg-9"> 
                    <div class='result-logo1'>
                            <img src="image/congra.gif" class="img-responsive" style="margin-left:-30px !important;"/>
                    </div>
                  </div>
                  
                  <div class="col-xs-6 col-sm-3 col-lg-3"> 
                     <a href="index" class='btn btn-success'>Go Next Stage</a>                   
                     <a href="logout.php" class='btn btn-success'>Logout</a>
                   
                       <div style="margin-top: 30%">
                        <p>Total no. of right answers : <span class="answer"><?php echo $right_answer;?></span></p>
                        <p>Total no. of wrong answers : <span class="answer"><?php echo $wrong_answer;?></span></p>
                        <p>Total no. of Unanswered Questions : <span class="answer"><?php echo $unanswered;?></span></p>                   
                       </div> 
                   
                   </div>
                    
            </div>    
            <div class="row">    
                    
            </div>
        </div>
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

        

    </body>
</html>
<?php }else{
    
 header( 'Location: index.php' ) ;
      
}?>