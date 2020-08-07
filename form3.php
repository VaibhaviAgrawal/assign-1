<?php session_start(); ?>
<?php
{
   $_SESSION['thc_ques1']=$_POST['thc_ques1'];
   $_SESSION['thc_ques2']=$_POST['thc_ques2'];
   $_SESSION['thc_ques3']=$_POST['thc_ques3'];
   $_SESSION['thc_ques4']=$_POST['thc_ques4'];
   $_SESSION['thc_ques5']=$_POST['thc_ques5'];
   $_SESSION['thc_ques6']=$_POST['thc_ques6'];
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
        <div class="row row-content" id="form3">
            <div class="col-12 col-sm-10 offset-sm-1">
                <div class="card">
                    <h3 class="card-header bg-secondary text-white" >Culture Check</h3>
            
                    <form action="form4.php" method="POST">
                        <div class="form-group row">
                            <label for="cc_ques1" class="col-md-4 col-form-label">What is the process you have to follow if you have to seek a leave ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cc_ques1" id="1" value="Leave Application and Approval process">
                                    <label class="form-check-label" for="1">Leave Application and Approval process</label> <!--correct-->
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cc_ques1" id="2" value="Taking leave is based on boss mood. One cannot get leaves even if he has balance">
                                    <label class="form-check-label" for="2">Taking leave is based on boss mood. One cannot get leaves even if he has balance</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cc_ques2" class="col-md-4 col-form-label">What is the frequency of a structured business review meeting in your organization ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cc_ques2" id="3" value="Quarterly or less often, Not at all, Happens but no agenda, informal">
                                    <label class="form-check-label" for="3">Quarterly or less often, Not at all, Happens but no agenda, informal</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cc_ques2" id="4" value="Weekly Meeting with reporting manager that has defined agenda">
                                    <label class="form-check-label" for="4">Weekly Meeting with reporting manager that has defined agenda</label> <!--correct-->
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cc_ques3" class="col-md-4 col-form-label">What is your opinion about meetings ? Do you think they yield anything ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cc_ques3" id="5" value="Yes, meetings are to the point and productive. Decisions are taken">
                                    <label class="form-check-label" for="5">Yes, meetings are to the point and productive. Decisions are taken</label> <!--correct-->
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cc_ques3" id="6" value="Meeting is wast of time and nothing happens. Meetings are without any structure">
                                    <label class="form-check-label" for="6">Meeting is wast of time and nothing happens. Meetings are without any structure</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cc_ques4" class="col-md-4 col-form-label">Do you think poor performers feel the heat in the company ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cc_ques4" id="7" value="NO. Performance doesnot matter. IF you are in good books of boss you can enjoy.">
                                    <label class="form-check-label" for="7">NO. Performance doesnot matter. IF you are in good books of boss you can enjoy.</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cc_ques4" id="8" value="Yes, there is a process for PIP and people are given feedback and guidance to improve (handholding)">
                                    <label class="form-check-label" for="8">Yes, there is a process for PIP and people are given feedback and guidance to improve (handholding)</label> <!--correct-->
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cc_ques5" class="col-md-4 col-form-label">If you are not getting the desired results, What do you do ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cc_ques5" id="9" value="Help is available more as a favor; one has to find his way out on his own">
                                    <label class="form-check-label" for="9">Help is available more as a favor; one has to find his way out on his own</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cc_ques5" id="10" value="People are ready to help without passing a judgement on your ability ">
                                    <label class="form-check-label" for="10">People are ready to help without passing a judgement on your ability </label> <!--correct-->
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cc_ques6" class="col-md-4 col-form-label">When was it that you were trained to do your job better ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cc_ques6" id="11" value="Training happens regularly basis the performance appraisal process">
                                    <label class="form-check-label" for="11">Training happens regularly basis the performance appraisal process</label> <!--correct-->
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cc_ques6" id="12" value="Trainings do happen but cannot call it a regular feature, whatever happens is generic">
                                    <label class="form-check-label" for="12">Trainings do happen but cannot call it a regular feature, whatever happens is generic</label>
                                </div>
                            </div>
                        </div>
                        
                        

                     
                    
                       
                       <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                        <input name="form" type="submit" value="Save and Next page" /><br>
                     <!--   <button onclick="goBack()">Go Back</button>-->
                        
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
</script> 
<?php } ?>