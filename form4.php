<?php session_start(); ?>
<?php
{
    $_SESSION['cc_ques1']=$_POST['cc_ques1'];
    $_SESSION['cc_ques2']=$_POST['cc_ques2'];
    $_SESSION['cc_ques3']=$_POST['cc_ques3'];
    $_SESSION['cc_ques4']=$_POST['cc_ques4'];
    $_SESSION['cc_ques5']=$_POST['cc_ques5'];
    $_SESSION['cc_ques6']=$_POST['cc_ques6'];

  
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
        <div class="row row-content" id="form4">
            <div class="col-12 col-sm-10 offset-sm-1">
                <div class="card">
                    <h3 class="card-header bg-secondary text-white" >Energy Health Check</h3>
            
                    <form action="form5.php" method="POST">
                        <div class="form-group row">
                            <label for="ehc_ques1" class="col-md-4 col-form-label">Why do you feel like coming to office everyday?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ehc_ques1" id="1" value="To learn something new, Imporve myself as a person.">
                                    <label class="form-check-label" for="1">To learn something new, Imporve myself as a person.</label> <!--correct-->
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ehc_ques1" id="2" value="Only for Money. No clearly defined purpose">
                                    <label class="form-check-label" for="2">Only for Money. No clearly defined purpose</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ehc_ques2" class="col-md-4 col-form-label">Complete the sentence.. I like my office because...</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ehc_ques2" id="3" value="It gives me money">
                                    <label class="form-check-label" for="3">It gives me money</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ehc_ques2" id="4" value="I enjoy working">
                                    <label class="form-check-label" for="4">I enjoy working</label> <!--correct-->
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ehc_ques3" class="col-md-4 col-form-label">These four occasions were really good in the year gone by...</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ehc_ques3" id="5" value="Yes, there were">
                                    <label class="form-check-label" for="5">Yes, there were</label> <!--correct-->
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ehc_ques3" id="6" value="No">
                                    <label class="form-check-label" for="6">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ehc_ques4" class="col-md-4 col-form-label">My family feels pride because I work in this company, Yes or No ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ehc_ques4" id="7" value="No">
                                    <label class="form-check-label" for="7">No</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ehc_ques4" id="8" value="Yes">
                                    <label class="form-check-label" for="8">Yes</label> <!--correct-->
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ehc_ques5" class="col-md-4 col-form-label">We should have 5 days a week in our company. </label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ehc_ques5" id="9" value="Yes">
                                    <label class="form-check-label" for="9">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ehc_ques5" id="10" value="I wont mind working on saturdays">
                                    <label class="form-check-label" for="10">I wont mind working on saturdays</label> <!--correct-->
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ehc_ques6" class="col-md-4 col-form-label">If our company would have had this one thing more, we all would have loved it.</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ehc_ques6" id="11" value="basic hygine or work enviornment betterment">
                                    <label class="form-check-label" for="11">basic hygine or work enviornment betterment</label> <!--correct-->
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ehc_ques6" id="12" value="More than option1">
                                    <label class="form-check-label" for="12">More than option1</label> <!--correct-->
                                </div>
                            </div>
                        </div>
                        
                        

                     
                    
                       
                       <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                        <input name="form" type="submit" value="Save and Next page"/><br>
                      <!--  <button onclick="goBack()">Go Back</button>-->
                        
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