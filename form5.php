<?php session_start(); ?>
<?php
{
    $_SESSION['ehc_ques1']=$_POST['ehc_ques1'];
    $_SESSION['ehc_ques2']=$_POST['ehc_ques2'];
    $_SESSION['ehc_ques3']=$_POST['ehc_ques3'];
    $_SESSION['ehc_ques4']=$_POST['ehc_ques4'];
    $_SESSION['ehc_ques5']=$_POST['ehc_ques5'];
    $_SESSION['ehc_ques6']=$_POST['ehc_ques6'];
    
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
        <div class="row row-content" id="form5">
            <div class="col-12 col-sm-10 offset-sm-1">
                <div class="card">
                    <h3 class="card-header bg-secondary text-white" >Growth Potential Check</h3>
            
                    <form action="confirmation.php" method="POST">
                        <div class="form-group row">
                            <label for="gpc_ques1" class="col-md-4 col-form-label">Who is your nearest business competitor and how big or small is that company vis-a-vis yours ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gpc_ques1" id="1" value="There are some">
                                    <label class="form-check-label" for="1">There are some</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gpc_ques1" id="2" value="want to improve for our own betterment not for showing anyone else">
                                    <label class="form-check-label" for="2">want to improve for our own betterment not for showing anyone else</label> <!--correct-->
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gpc_ques2" class="col-md-4 col-form-label">Do you think your team as a whole is firing on all cylinders, i.e. to the best of their ability or you see that there is a scope for doing better ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gpc_ques2" id="3" value="Yes">
                                    <label class="form-check-label" for="3">Yes</label> <!--correct-->
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gpc_ques2" id="4" value="No">
                                    <label class="form-check-label" for="4">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gpc_ques3" class="col-md-4 col-form-label">Are you able to get and retain the right talent ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gpc_ques3" id="5" value="Yes">
                                    <label class="form-check-label" for="5">Yes</label> <!--correct-->
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gpc_ques3" id="6" value="No">
                                    <label class="form-check-label" for="6">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gpc_ques4" class="col-md-4 col-form-label">Define how your customers would describe your company as a brand ?</label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gpc_ques4" id="7" value="We are able describe that properly">
                                    <label class="form-check-label" for="7">We are able describe that properly</label> <!--correct-->
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gpc_ques4" id="8" value="The idea isnt that fascinating">
                                    <label class="form-check-label" for="8">The idea isnt that fascinating</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gpc_ques5" class="col-md-4 col-form-label">What part of the country still remains untapped as a market for you ? </label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gpc_ques5" id="9" value="There is no country like that">
                                    <label class="form-check-label" for="9">There is no country like that</label> 
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gpc_ques5" id="10" value="There are some reachable countries">
                                    <label class="form-check-label" for="10">There are some reachable countries</label> <!--correct-->
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gpc_ques6" class="col-md-4 col-form-label">This is what stops you from going Global ? </label>
                            <div class="col-md-8">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gpc_ques6" id="11" value="There are something in which we can work and remove them as barrier for our globalization">
                                    <label class="form-check-label" for="11">There are something in which we can work and remove them as barrier for our globalization</label> <!--correct-->
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gpc_ques6" id="12" value="Nothing like that">
                                    <label class="form-check-label" for="12">Nothing like that</label>
                                </div>
                            </div>
                        </div>
                        
                        

                     
                    
                       
                       <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                          <!--  <button type="next-page" class="btn btn-secondary">Save and Preview</button>-->
                          <input name="form" type="submit" value="Overview the form" /><br>
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
</script> 
<?php } ?>