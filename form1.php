<?php session_start(); ?>
<?php
{
    $_SESSION['name']=$_POST['name'];
    $_SESSION['company_name']=$_POST['company_name'];
    $_SESSION['telnum']=$_POST['telnum'];
    $_SESSION['address']=$_POST['address'];
    $_SESSION['employee_strength']=$_POST['employee_strength'];
    $_SESSION['ManagerName']=$_POST['ManagerName'];
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
        <div class="row row-content" id="form1">
            <div class="col-12 col-sm-10 offset-sm-1">
                <div class="card">
                    <h3 class="card-header bg-secondary text-white" >Leadership stock taking</h3>
            
                    <form action="form2.php" method="POST">
                        <div class="form-group row">
                            <label for="lst_ques1" class="col-md-4 col-form-label">What are the various departments in your organization </label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lst_ques1" id="1" value="has basic departments like, HR, Finance, Marketing & Sales">
                                    <label class="form-check-label" for="1">has basic departments like, HR, Finance, Marketing & Sales</label> <!--correct-->
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lst_ques1" id="2" value="Production, Accounts, Admin, Purchase, Design">
                                    <label class="form-check-label" for="2">Production, Accounts, Admin, Purchase, Design</label>
                                </div>
                               
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="lst_ques2" class="col-md-4 col-form-label">How often your department heads come to you for making a critical decisions ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lst_ques2" id="3" value="Once in a while, Rarely">
                                    <label class="form-check-label" for="3">Once in a while, Rarely </label> <!--correct-->
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lst_ques2" id="4" value="Almost everytime">
                                    <label class="form-check-label" for="4">Almost everytime</label>
                                </div>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="lst_ques3" class="col-md-4 col-form-label">At what rate is your organization growing in last 5 years ? And is this growth as per plan or you wish you could have achieved more ?</label>
                            <div class="col-md-8">
                            
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lst_ques3" id="5" value="not as per plan ">
                                    <label class="form-check-label" for="5">not as per plan </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lst_ques3" id="6" value="as per plan ">
                                    <label class="form-check-label" for="6">as per plan </label> <!--correct-->
                                </div>    
                        
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="lst_ques4" class="col-md-4 col-form-label">In your trade, are the prices governed by market or by a Strategy ? </label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lst_ques4" id="7" value="prices are governed by strategy">
                                    <label class="form-check-label" for="7">prices are governed by strategy</label> <!--correct-->
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lst_ques4" id="8" value="market governed">
                                    <label class="form-check-label" for="8">market governed</label>
                                </div>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="lst_ques5" class="col-md-4 col-form-label">Share with us 3 innovations you and your team have introduced in your business in last 5 years.</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lst_ques5" id="9" value="No innovations">
                                    <label class="form-check-label" for="9">No innovations</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lst_ques5" id="10" value="Some innovations">
                                    <label class="form-check-label" for="10">Some innovations</label> <!--correct-->
                                </div>
                                   </div>
                        </div>
                        <div class="form-group row">
                            <label for="lst_ques6" class="col-md-4 col-form-label">What % of your annual turnover is contributed by newly acquired customers ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lst_ques6" id="11" value="smaller than 10 %">
                                    <label class="form-check-label" for="11"> smaller than 10 %</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lst_ques6" id="12" value="between 10% and 40%">
                                    <label class="form-check-label" for="12">between 10% and 40%</label> <!--correct-->
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lst_ques6" id="13" value="more than 40%">
                                    <label class="form-check-label" for="13">more than 40%</label>
                                </div>
                                   </div>
                        </div>
                        <div class="form-group row">
                            <label for="lst_ques7" class="col-md-4 col-form-label">What would happen to your business if you are forced to reduce prices by 40% ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lst_ques7" id="14" value="there is no plan or leader say we will be forced to shut shop or cannot think of anything to counter">
                                    <label class="form-check-label" for="14">there is no plan or leader say we will be forced to shut shop or cannot think of anything to counter</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lst_ques7" id="15" value=" the leader has a plan which he thinks can counter this">
                                    <label class="form-check-label" for="15"> the leader has a plan which he thinks can counter this</label> <!--correct-->
                                </div>
                                     </div>
                        </div>
                        <div class="form-group row">
                            <label for="lst_ques8" class="col-md-4 col-form-label">What are certain plans that are in pipeline and can be implemented anytime ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lst_ques8" id="16" value="We have plans in pipeline">
                                    <label class="form-check-label" for="16">We have plans in pipeline</label> <!--correct-->
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lst_ques8" id="17" value="We have no plans in pipeline">
                                    <label class="form-check-label" for="17">We have no plans in pipeline</label>
                                </div>
                               </div>
                        </div>
                        
                        

                     
                    
                       
                       <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                        <input name="form" type="submit" value="Save and Next page" /><br>
                       <!-- <button onclick="goBack()">Go Back</button>-->


                        </div>
                     </div>
                     
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
/*function score(){
    var x=document.getElementById("1");
    if(x.checked){
        document.getElementById("demo").innerHTML = "score is 1"
        return '1';
        
    }
    document.getElementById("demo").innerHTML = "score is 0"
    return 0;
}
/*
</script> 


 <?php 
} 
?>