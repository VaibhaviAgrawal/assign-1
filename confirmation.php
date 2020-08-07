<?php session_start(); ?>
<?php if($_POST){
    $_SESSION['gpc_ques1']=$_POST['gpc_ques1'];
    $_SESSION['gpc_ques2']=$_POST['gpc_ques2'];
    $_SESSION['gpc_ques3']=$_POST['gpc_ques3'];
    $_SESSION['gpc_ques4']=$_POST['gpc_ques4'];
    $_SESSION['gpc_ques5']=$_POST['gpc_ques5'];
    $_SESSION['gpc_ques6']=$_POST['gpc_ques6'];
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
            <div class="col-12 ">
                <div class="card">
                    <h3 class="card-header bg-secondary text-white" >Overview</h3>
            
                    <form action="final.php" method="POST">
                        
                    <?php
echo '<b>First Name:</b> ' . $_SESSION['name'] . '<br>';
echo '<b>Comapany Name:</b> ' . $_SESSION['company_name'] . '<br>' ;
echo '<b>Telephone: </b>' . $_SESSION['telnum'] . '<br>';
echo '<b>Address:</b> ' . $_SESSION['address'] . '<br>';
echo '<b>Employee strength:</b> ' . $_SESSION['employee_strength'] . '<br>';
echo '<b>Manager name from TIL:</b> ' . $_SESSION['ManagerName'] . '<br>';
'<br>'; ?>
</form>
<h4 class="card-header bg-secondary text-white" >Leadership Stock Taking</h4>
            
            <form action="final.php" method="POST">

<?php
echo '<b>What are the various departments in your organization </b> '. '<br>' . $_SESSION['lst_ques1'] . '<br>';
echo '<b> How often your department heads come to you for making a critical decisions ?</b>'. '<br>' . $_SESSION['lst_ques2'] . '<br>';
echo '<b>At what rate is your organization growing in last 5 years ? And is this growth as per plan or you wish you could have achieved more ?</b> '. '<br>' . $_SESSION['lst_ques3'] . '<br>';
echo '<b> In your trade, are the prices governed by market or by a Strategy ? </b>' . '<br>'. $_SESSION['lst_ques4'] . '<br>';
echo '<b>Share with us 3 innovations you and your team have introduced in your business in last 5 years.</b> ' . '<br>'. $_SESSION['lst_ques5'] . '<br>';
echo '<b> What % of your annual turnover is contributed by newly acquired customers ?</b>'. '<br>' . $_SESSION['lst_ques6'] . '<br>';
echo '<b> What would happen to your business if you are forced to reduce prices by 40% ?</b>'. '<br>' . $_SESSION['lst_ques7'] . '<br>';
echo ' <b>What are certain plans that are in pipeline and can be implemented anytime ? </b>'. '<br>' . $_SESSION['lst_ques8'] . '<br>';

?>

</form>
<h4 class="card-header bg-secondary text-white" >Team Health Check</h4>
            
            <form action="final.php" method="POST">
                     <?php
                     echo '<b>On what all issues you are required to talk to your owner before taking a decision ? </b>' . '<br>' . $_SESSION['thc_ques1'] . '<br>';
                     echo '<b>When was it that you took an interview of a junior who was suppose to join in your team ? </b>' . '<br>' . $_SESSION['thc_ques2'] . '<br>';
                     echo '<b>Do you have a clearly defined goal sheet which if achieved you know the kind of increment you would get ? </b>' . '<br>' . $_SESSION['thc_ques3'] . '<br>';
                     echo '<b>Do you think at times you failed in delivering your result because of your colleague in other department ? If yes, briefly narrate the incidence. </b>' . '<br>' . $_SESSION['thc_ques4'] . '<br>';
                     echo '<b>How often you get feedback on your performance through your colleague ? </b>' . '<br>' . $_SESSION['thc_ques5'] . '<br>';
                     echo '<b>Do you think it is possible to find true friends at the work place that one can confide with ? </b>' . '<br>' . $_SESSION['thc_ques6'] . '<br>';
                     ?>      
                           
      
</form>
<h4 class="card-header bg-secondary text-white" >Culture Check</h4>
            
            <form action="final.php" method="POST">
                     <?php
                     echo '<b>What is the process you have to follow if you have to seek a leave ? </b>' . '<br>' . $_SESSION['cc_ques1'] . '<br>';
                     echo '<b>What is the frequency of a structured business review meeting in your organization ? </b>' . '<br>' . $_SESSION['cc_ques2'] . '<br>';
                     echo '<b>What is your opinion about meetings ? Do you think they yield anything ? </b>' . '<br>' . $_SESSION['cc_ques3'] . '<br>';
                     echo '<b>Do you think poor performers feel the heat in the company ? </b>' . '<br>' . $_SESSION['cc_ques4'] . '<br>';
                     echo '<b>If you are not getting the desired results, What do you do ? </b>' . '<br>' . $_SESSION['cc_ques5'] . '<br>';
                     echo '<b>When was it that you were trained to do your job better ? </b>' . '<br>' . $_SESSION['cc_ques6'] . '<br>';
                     ?>      

</form>
<h4 class="card-header bg-secondary text-white" >Energy Health Check</h4>
            
            <form action="final.php" method="POST">
                     <?php
                     echo '<b>Why do you feel like coming to office everyday? </b>' . '<br>' . $_SESSION['ehc_ques1'] . '<br>';
                     echo '<b>Complete the sentence.. I like my office because... </b>' . '<br>' . $_SESSION['ehc_ques2'] . '<br>';
                     echo '<b>These four occasions were really good in the year gone by... </b>' . '<br>' . $_SESSION['ehc_ques3'] . '<br>';
                     echo '<b>My family feels pride because I work in this company, Yes or No ? </b>' . '<br>' . $_SESSION['ehc_ques4'] . '<br>';
                     echo '<b>We should have 5 days a week in our company.  </b>' . '<br>' . $_SESSION['ehc_ques5'] . '<br>';
                     echo '<b>If our company would have had this one thing more, we all would have loved it. </b>' . '<br>' . $_SESSION['ehc_ques6'] . '<br>';
                     ?>                                                
  
</form>
<h4 class="card-header bg-secondary text-white" >Growth Potential Check</h4>
            
            <form action="final.php" method="POST">
                     <?php
                     echo '<b>Who is your nearest business competitor and how big or small is that company vis-a-vis yours ? </b>' . '<br>' . $_SESSION['gpc_ques1'] . '<br>';
                     echo '<b>Do you think your team as a whole is firing on all cylinders, i.e. to the best of their ability or you see that there is a scope for doing better ? </b>' . '<br>' . $_SESSION['gpc_ques2'] . '<br>';
                     echo '<b>Are you able to get and retain the right talent ? </b>' . '<br>' . $_SESSION['gpc_ques3'] . '<br>';
                     echo '<b>Define how your customers would describe your company as a brand ? </b>' . '<br>' . $_SESSION['gpc_ques4'] . '<br>';
                     echo '<b>What part of the country still remains untapped as a market for you ?  </b>' . '<br>' . $_SESSION['gpc_ques5'] . '<br>';
                     echo '<b>This is what stops you from going Global ?  </b>' . '<br>' . $_SESSION['gpc_ques6'] . '<br>';
                     ?>                               
                           <input name="form" type="submit" value="Submit the Form" /><br>
                        
                           <!--<button onclick="goBack()">Go Back</button>-->
                     
                    </form>
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
</body>

</html>
<script>
function goBack() {
  window.history.back();
}



</script> 
<?php } ?>