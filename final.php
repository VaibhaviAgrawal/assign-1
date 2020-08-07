<?php session_start();

?>


<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<?php 
$score_lst=0;
if( $_SESSION['lst_ques1'] =="has basic departments like, HR, Finance, Marketing & Sales" ){
    $score_lst=$score_lst+1;
}
if($_SESSION['lst_ques2'] =="Once in a while, Rarely" ){
    $score_lst=$score_lst+1;
}
if($_SESSION['lst_ques3'] =="as per plan " ){
    $score_lst=$score_lst+1;
}
if( $_SESSION['lst_ques4'] =="prices are governed by strategy" ){
    $score_lst=$score_lst+1;
}
if($_SESSION['lst_ques5'] =="Some innovations" ){
    $score_lst=$score_lst+1;
}
if( $_SESSION['lst_ques6'] =="between 10% and 40%" ){
    $score_lst=$score_lst+1;
}
if($_SESSION['lst_ques7'] ==" the leader has a plan which he thinks can counter this" ){
    $score_lst=$score_lst+1;
}
if( $_SESSION['lst_ques8'] =="We have plans in pipeline" ){
    $score_lst=$score_lst+1;
}
//------------------------------------------------------------------------------------------------------------------------------

$score_thc=0;

if( $_SESSION['thc_ques1'] =="A defined criterion above which it goes to owner, daily operational decisions can be taken " ){
    $score_thc=$score_thc+1;
}
if( $_SESSION['thc_ques2'] =="Eveytime, there is a defined process " ){
    $score_thc=$score_thc+1;
}
if( $_SESSION['thc_ques3'] =="Yes, KRA KPIs defined, Incentive structure defined" ){
    $score_thc=$score_thc+1;
}
if( $_SESSION['thc_ques4'] =="No, we work as a team. Department heads help each other" ){
    $score_thc=$score_thc+1;
}
if( $_SESSION['thc_ques5'] =="Regularly, there is a feedback mechanism" ){
    $score_thc=$score_thc+1;
}
if($_SESSION['thc_ques6'] =="Yes" ){
    $score_thc=$score_thc+1;
}
//-------------------------------------------------------------------------------------------------------

$score_cc=0;

if( $_SESSION['cc_ques1'] =="Leave Application and Approval process" ){
    $score_cc=$score_cc+1;
}
if( $_SESSION['cc_ques2'] =="Weekly Meeting with reporting manager that has defined agenda" ){
    $score_cc=$score_cc+1;
}
if( $_SESSION['cc_ques3'] =="Yes, meetings are to the point and productive. Decisions are taken" ){
    $score_cc=$score_cc+1;
}
if( $_SESSION['cc_ques4'] =="Yes, there is a process for PIP and people are given feedback and guidance to improve (handholding)" ){
    $score_cc=$score_cc+1;
}
if( $_SESSION['cc_ques5'] =="People are ready to help without passing a judgement on your ability " ){
    $score_cc=$score_cc+1;
}
if( $_SESSION['cc_ques6'] =="Training happens regularly basis the performance appraisal process" ){
    $score_cc=$score_cc+1;
}

//-------------------------------------------------------------------------------------------------------------------------------------------------------------------
$score_ehc=0;

if($_SESSION['ehc_ques1'] =="To learn something new, Imporve myself as a person." ){
    $score_ehc=$score_ehc+1;
}
if( $_SESSION['ehc_ques2']=="I enjoy working" ){
    $score_ehc=$score_ehc+1;
}
if($_SESSION['ehc_ques3'] =="Yes, there were" ){
    $score_ehc=$score_ehc+1;
}
if( $_SESSION['ehc_ques4'] =="Yes" ){
    $score_ehc=$score_ehc+1;
}
if($_SESSION['ehc_ques5'] =="I wont mind working on saturdays" ){
    $score_ehc=$score_ehc+1;
}
if( $_SESSION['ehc_ques6'] =="basic hygine or work enviornment betterment" ){
    $score_ehc=$score_ehc+1;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$score_gpc=0;

if( $_SESSION['gpc_ques1'] =="want to improve for our own betterment not for showing anyone else" ){
    $score_gpc=$score_gpc+1;
}
if( $_SESSION['gpc_ques1'] =="Yes" ){
    $score_gpc=$score_gpc+1;
}
if( $_SESSION['gpc_ques1'] =="Yes" ){
    $score_gpc=$score_gpc+1;
}
if( $_SESSION['gpc_ques1'] =="We are able describe that properly" ){
    $score_gpc=$score_gpc+1;
}
if( $_SESSION['gpc_ques1'] =="There are some reachable countries" ){
    $score_gpc=$score_gpc+1;
}
if($_SESSION['gpc_ques1'] =="There are something in which we can work and remove them as barrier for our globalization" ){
    $score_gpc=$score_gpc+1;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$final_score=$score_lst+$score_cc+$score_thc+$score_ehc+$score_gpc;

define('DB_NAME', 'assignment-1');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$link){die('Could not connect: ' . mysqli_error());
}

$db_selected=mysqli_select_db( $link, DB_NAME);

if(!$db_selected){
    die('Can\'t use' . DB_NAME. ': ' . mysqli_error());
}
//echo 'connected Successfully';
$value= $_SESSION{'name'};
$value2= $_SESSION{'company_name'};
$value3= $_SESSION{'address'};
$value4= $_SESSION{'telnum'};
$value5= $_SESSION{'employee_strength'};
$value6= $_SESSION{'ManagerName'};
$value_lst_1=$_SESSION{'lst_ques1'};
$value_lst_2=$_SESSION{'lst_ques2'};
$value_lst_3=$_SESSION{'lst_ques3'};
$value_lst_4=$_SESSION{'lst_ques4'};
$value_lst_5=$_SESSION{'lst_ques5'};
$value_lst_6=$_SESSION{'lst_ques6'};
$value_lst_7=$_SESSION{'lst_ques7'};
$value_lst_8=$_SESSION{'lst_ques8'};
$value_thc_1=$_SESSION{'thc_ques1'};
$value_thc_2=$_SESSION{'thc_ques2'};
$value_thc_3=$_SESSION{'thc_ques3'};
$value_thc_4=$_SESSION{'thc_ques4'};
$value_thc_5=$_SESSION{'thc_ques5'};
$value_thc_6=$_SESSION{'thc_ques6'};
$value_cc_1=$_SESSION{'cc_ques1'};
$value_cc_2=$_SESSION{'cc_ques2'};
$value_cc_3=$_SESSION{'cc_ques3'};
$value_cc_4=$_SESSION{'cc_ques4'};
$value_cc_5=$_SESSION{'cc_ques5'};
$value_cc_6=$_SESSION{'cc_ques6'};
$value_ehc_1=$_SESSION{'ehc_ques1'};
$value_ehc_2=$_SESSION{'ehc_ques2'};
$value_ehc_3=$_SESSION{'ehc_ques3'};
$value_ehc_4=$_SESSION{'ehc_ques4'};
$value_ehc_5=$_SESSION{'ehc_ques5'};
$value_ehc_6=$_SESSION{'ehc_ques6'};
$value_gpc_1=$_SESSION{'gpc_ques1'};
$value_gpc_2=$_SESSION{'gpc_ques2'};
$value_gpc_3=$_SESSION{'gpc_ques3'};
$value_gpc_4=$_SESSION{'gpc_ques4'};
$value_gpc_5=$_SESSION{'gpc_ques5'};
$value_gpc_6=$_SESSION{'gpc_ques6'};

//$value_score_final;


//cc_ques1, cc_ques2, cc_ques3, cc_ques4, cc_ques5, cc_ques6
//'$value_cc_1', '$value_cc_2', '$value_cc_3', '$value_cc_4', '$value_cc_5', '$value_cc_6'
//thc_ques1, thc_ques2, thc_ques3, thc_ques4, thc_ques5, thc_ques6
//'$value_thc_1', '$value_thc_2', '$value_thc_3', '$value_thc_4', '$value_thc_5', '$value_thc_6'
$sql = "INSERT INTO table1 (name, company_name, address, telnum, employee_strength, ManagerName, 
lst_ques1, lst_ques2, lst_ques3, lst_ques4, lst_ques5, lst_ques6, lst_ques7, lst_ques8,
thc_ques1, thc_ques2, thc_ques3, thc_ques4, thc_ques5, thc_ques6,
cc_ques1, cc_ques2, cc_ques3, cc_ques4, cc_ques5, cc_ques6,
ehc_ques1, ehc_ques2, ehc_ques3, ehc_ques4, ehc_ques5, ehc_ques6,
gpc_ques1, gpc_ques2, gpc_ques3, gpc_ques4, gpc_ques5, gpc_ques6, final_score,
score_lst, score_thc, score_cc, score_ehc, score_gpc
)
 VALUES ('$value', '$value2', '$value3', '$value4', '$value5', '$value6',
  '$value_lst_1', '$value_lst_2', '$value_lst_3', '$value_lst_4', '$value_lst_5', '$value_lst_6', '$value_lst_7', '$value_lst_8',
  '$value_thc_1', '$value_thc_2', '$value_thc_3', '$value_thc_4', '$value_thc_5', '$value_thc_6',
  '$value_cc_1', '$value_cc_2', '$value_cc_3', '$value_cc_4', '$value_cc_5', '$value_cc_6',
  '$value_ehc_1', '$value_ehc_2', '$value_ehc_3', '$value_ehc_4', '$value_ehc_5', '$value_ehc_6',
  '$value_gpc_1', '$value_gpc_2', '$value_gpc_3', '$value_gpc_4', '$value_gpc_5', '$value_gpc_6', '$final_score',
  '$score_lst' , '$score_thc', '$score_cc', '$score_ehc', '$score_gpc'
  
  )";
//$sql = "INSERT INTO table1 (lst_ques1, lst_ques2, lst_ques3, lst_ques4, lst_ques5, lst_ques6, lst_ques7, lst_ques8 ) VALUES ('$value_lst_1', '$value_lst_2', '$value_lst_3', '$value_lst_4', '$value_lst_5', '$value_lst_6', '$value_lst_7', '$value_lst_8')"; 
//'$score_thc'. '$score_cc', '$score_ehc', '$score_gpc'
  //, score_thc, score_cc, score_ehc, score_gpc
if (!mysqli_query($link, $sql)){
    die('Error: '. mysqli_error($link));
}
mysqli_close($link);

?>

<?php {
   
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Required meta tags always come first -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
     <link rel="stylesheet" href="css/styles.css">
    <title>The Impact Learning</title>
</head>

<body>
   

    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>The Impact Learning</h1>
                    <p></p>
                </div>
                <div class="col-12 col-sm-6 align-self-center">
                    <img src="img/logo.png" class="img-fluid">
                    
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        

        
        
        <!-------------------------------------->
        <div class="row row-content" id="basicdetails">
            <div class="col-12 col-sm-8 offset-sm-2">
                <div class="card">
                    <h3 class="card-header bg-secondary text-white" >Form submitted</h3>
            
                    <form action="final.php" method="POST">
                        
                  Congratulations, You have successfully submitted the form. <br>
                  Here's your score <br>
                  
                    
                       <?php echo 'Final score is '.$final_score.' out of 32'. '<br>' ; 
                       $per_score_final= (int)($final_score*(100/32));
                       
                       ?>
                       <div class="progress">
                       <div class="progress-bar bg-success" role="progressbar" aria-valuenow="<?php echo $per_score_final ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $per_score_final. '%' ?>">
                       <?php echo $per_score_final. '%' ?> 
                       </div>
                     </div>
                     <?php
                       echo 'Leadership Stock Taking score is '.$score_lst. ' out of 8'. '<br>' ; 
                       $per_score_lst=(int)($score_lst*(100/8));
                       ?>
                       <div class="progress">
                       <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="<?php echo $per_score_lst ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $per_score_lst. '%' ?>">
                       <?php echo $per_score_lst. '%' ?> 
                       </div>
                     </div>
                     <?php  echo 'Team Health Check score is '.$score_thc.' out of 6'. '<br>' ; 
                     $per_score_thc=(int)($score_thc*(100/6));
                     ?>
                      <div class="progress">
                       <div class="progress-bar bg-info" role="progressbar" aria-valuenow="<?php echo $per_score_thc ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $per_score_thc. '%' ?>">
                       <?php echo $per_score_thc. '%' ?> 
                       </div>
                     </div> 
                     <?php  echo 'Culture Check score is '. $score_cc .' out of 6'. '<br>' ; 
                    $per_score_cc=(int)($score_cc*(100/6));
                     ?>
                       <div class="progress">
                       <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="<?php echo $per_score_cc ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $per_score_cc. '%' ?>">
                       <?php echo $per_score_cc. '%' ?> 
                       </div>
                     </div> 
                     <?php  echo 'Energy Health Check score is '.$score_ehc.' out of 6'. '<br>' ; 
                     $per_score_ehc=(int)($score_ehc*(100/6));?>
                       <div class="progress">
                       <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="<?php echo $per_score_ehc ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $per_score_ehc. '%' ?>">
                       <?php echo $per_score_ehc. '%' ?> 
                       </div>
                     </div>
                     <?php  echo 'Group Potentiall Check score is '.$score_gpc.' out of 6'. '<br>' ;
                     $per_score_gpc=(int)($score_gpc *(100/6)); ?>
                       <div class="progress">
                       <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="<?php echo $per_score_gpc ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $per_score_gpc. '%' ?>">
                       <?php echo $per_score_gpc. '%' ?> 
                       </div>
                     </div> 
                   
                       If you need further help
                       <div class="btn-group" role="button">
                 
                    <a role="button" class="btn btn-success" href="mailto:partners@theimpactlearning.com"><i class="fa fa-envelope-o"></i>Email</a>
                </div>
                       <br>
                       
                     <a href="./index.html">Go back to the Starting page</a>
                     


                           <!--<button onclick="goBack()">Go Back</button>-->
                     
                    </form>

        
<!--<div class="box"> 
    
    <div class="chart" data-percent="73">73%</div>
    
</div>-->

                    
             </div>
            </div>
        </div>
        
        <!-------------------------------------->
    </div>

    <footer class="footer">
    <div class="container">
    <div class="row justify-content-center">             
                <div class="col-auto">
                    <p> The Impact Learning (A Venture of A & P Business Consulting LLP)</p>
                </div>
           </div>
    </div>
    </footer>

     <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
     <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
     <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
     <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
   <!--  <script> src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script> src="jquery.easypiechart.js"></script>
<script>
    $(function() {
        $('.chart').easyPieChart({
            //your options goes here
        });
    });
</script> -->
</body>

</html>

<?php } ?>