<?php session_start(); ?>
<?php
{
    $_SESSION['lst_ques1']=$_POST['lst_ques1'];
    $_SESSION['lst_ques2']=$_POST['lst_ques2'];
    $_SESSION['lst_ques3']=$_POST['lst_ques3'];
    $_SESSION['lst_ques4']=$_POST['lst_ques4'];
    $_SESSION['lst_ques5']=$_POST['lst_ques5'];
    $_SESSION['lst_ques6']=$_POST['lst_ques6'];
    $_SESSION['lst_ques7']=$_POST['lst_ques7'];
    $_SESSION['lst_ques8']=$_POST['lst_ques8'];
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
        <div class="row row-content" id="form2">
            <div class="col-12 col-sm-10 offset-sm-1">
                <div class="card">
                    <h3 class="card-header bg-secondary text-white" >Team Health Check</h3>
            
                    <form action="form3.php" method="POST">
                        <div class="form-group row">
                            <label for="thc_ques1" class="col-md-4 col-form-label">On what all issues you are required to talk to your owner before taking a decision ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="thc_ques1" id="1" value="Most of the issues, All the decisions, Even smallest of the items irrespective of the value goes for owner's approval">
                                    <label class="form-check-label" for="1">Most of the issues, All the decisions, Even smallest of the items irrespective of the value goes for owner's approval</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="thc_ques1" id="2" value="A defined criterion above which it goes to owner, daily operational decisions can be taken ">
                                    <label class="form-check-label" for="2">A defined criterion above which it goes to owner, daily operational decisions can be taken </label> <!--correct -->
                                </div> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="thc_ques2" class="col-md-4 col-form-label">When was it that you took an interview of a junior who was suppose to join in your team ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="thc_ques2" id="3" value="Eveytime, there is a defined process "> <!--correct-->
                                    <label class="form-check-label" for="3">Eveytime, there is a defined process </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="thc_ques2" id="4" value="Once in a while, not defined, owner decide that">
                                    <label class="form-check-label" for="4">Once in a while, not defined, owner decide that</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="thc_ques3" class="col-md-4 col-form-label">Do you have a clearly defined goal sheet which if achieved you know the kind of increment you would get ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="thc_ques3" id="5" value="Yes, KRA KPIs defined, Incentive structure defined"> <!--correct-->
                                    <label class="form-check-label" for="5">Yes, KRA KPIs defined, Incentive structure defined</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="thc_ques3" id="6" value="Depends on owner, not defined, We do what boss says">
                                    <label class="form-check-label" for="6">Depends on owner, not defined, We do what boss says</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="thc_ques4" class="col-md-4 col-form-label">Do you think at times you failed in delivering your result because of your colleague in other department ? If yes, briefly narrate the incidence.</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="thc_ques4" id="7" value="Yes, it happens most of the times. Blaming game">
                                    <label class="form-check-label" for="7">Yes, it happens most of the times. Blaming game</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="thc_ques4" id="8" value="No, we work as a team. Department heads help each other">
                                    <label class="form-check-label" for="8">No, we work as a team. Department heads help each other</label> <!--correct-->
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="thc_ques5" class="col-md-4 col-form-label">How often you get feedback on your performance through your colleague ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="thc_ques5" id="9" value="Regularly, there is a feedback mechanism">
                                    <label class="form-check-label" for="9">Regularly, there is a feedback mechanism</label> <!--correct-->
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="thc_ques5" id="10" value="Never, Not defined, Only in front of the boss.">
                                    <label class="form-check-label" for="10">Never, Not defined, Only in front of the boss.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="thc_ques6" class="col-md-4 col-form-label">Do you think it is possible to find true friends at the work place that one can confide with ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="thc_ques6" id="11" value="Yes"> <!--correct-->
                                    <label class="form-check-label" for="11">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="thc_ques6" id="12" value="No, there are no friends, professional life is different and we don’t talk after office">
                                    <label class="form-check-label" for="12">No, there are no friends, professional life is different and we don’t talk after office</label> <!--correct-->
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