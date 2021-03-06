<!DOCTYPE html>
<?php
require'../includes/common.php';
if (isset($_SESSION['email']))
 {   header('location: home.php'); }          //if session exists it is redirected to home.php
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <script src="../bootstrap-3.4.1-dist/js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    


    <div class="modal fade" id="pz" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">LOG IN</h4>
                </div>
                <div class="modal-body">
                    <h5>Don't have an account?<a href="signup.php" style="color: rgb(88, 61, 243);">Register</a></h5>
                    <form method="post" action="login_script.php">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <button class="btn btn-primary" type="submit" value="submit"  name="button">Login</button>
                        
                    </form>
                    <h5><a href="forgot_password.php" style="color:rgb(88,61,243);">Forgot Password?</a></h5>
                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
            
        </div>
    </div> 
    <div class="container-fluid">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">E-Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a  data-toggle="modal" data-target="#pz" ><span class = "glyphicon glyphicon-log-in"></span> Login </a></li>
                        <li><a href="about_us.php"><span class="glyphicon glyphicon-list"></span> About us</a></li>
                        <li><a href="contact_us.php"><span class="glyphicon glyphicon-phone"></span> Contact us</a></li>
                    </ul>
                </div>
            </div>
        </nav> 
    
    
        <div class="container" style="margin-bottom: 100px">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">Mobile 1</div>
                            <div class="panel-body">
                        <!--put mobile phone pics and its specifications in this box in all pannels. -->
                                <center><img  class="img-responsive"  src="../images/oneplus5t.jpg">
                                <b> One Plus 5T <br></b>Price:32,999/-</center>
                                <button class="btn btn-primary form-control" type="button" value="Submit"  name="btn">Order Now!</button>
    
    
                            </div>
                    </div>
             </div>
            <div class=" col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Mobile 2</div>
                    <div class="panel-body">
                        <!--put mobile phone pics and its specifications in this box in all pannels. -->
                        <center><img  class="img-responsive" src="../images/iphonex.jpg">
                        <b> Apple Iphone X <br></b>Price:78,459/-</center>
                        <button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" >Order Now!</button>
    
    
                    </div>
                </div>
            </div>
            <div class=" col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Mobile 3</div>
                    <div class="panel-body" >
                        <!--put mobile phone pics and its specifications in this box in all pannels. -->
                        <center><img  class="img-responsive" src="../images/samsungs8.jpg">
                        <b> Samsung S8 <br></b>Price:44,500/-</center>
                        <button class="btn btn-primary form-control" type="button" value="Submit" >Order Now!</button>
    
    
                    </div>
                </div>
            </div>	
         </div>
         
         <div class="row">
            <div class=" col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Mobile 4</div>
                    <div class="panel-body" >
                        <!--put mobile phone pics and its specifications in this box in all pannels. -->
                        <center><img  class="img-responsive" src="../images/iphone7s.jpg">
                        <b> Apple Iphone 7S <br></b>Price:56,000/-</center>
                        <button class="btn btn-primary form-control" type="button" value="Submit"  name="btn">Order Now!</button>
    
    
                    </div>
                </div>
            </div>
            <div class=" col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Mobile 5</div>
                    <div class="panel-body" >
                        <!--put mobile phone pics and its specifications in this box in all pannels. -->
                        <center><img  class="img-responsive" src="../images/oneplus3t.jpg">
                        <b> One Plus 3T <br></b>Price:25,999/-</center>
                        <button class="btn btn-primary form-control" type="button" value="Submit"  name="btn">Order Now!</button>
    
    
                    </div>
                </div>
            </div>
            <div class=" col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Mobile 6</div>
                    <div class="panel-body">
                        <!--put mobile phone pics and its specifications in this box in all pannels. -->
                        <center><img  class="img-responsive" src="../images/oppoa57.jpg">
                        <b> Oppo A57 <br></b>Price:22,500/-</center>
                        <button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" >Order Now!</button>
    
    
                    </div>
                </div>
            </div>			
         </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row" >
                <div class=" col-md-4 col-xs-12" >
                    <h3>Information</h3>
                    <p><a id="rem" href="about_us.php">About us</a><br><a id="rem" href="contact_us.php">Contact Us</a></p>
                    <!-- <ul style="list-style-type: none">
                        <li><a id="rem" href="about_us.html">About us</a></li>
                        <li><a id="rem" href="contact_us.html">Contact Us</a></li>
                    </ul> -->
                </div>
    
                <div class=" col-md-4  col-xs-12">
                    <h3>My Account</h3>
                    <p><a id="rem" data-toggle="modal" data-target="#pz">Login</a><br><a id="rem" href="signup.php">Sign Up</a></p>
                   
                </div>
    
                <div class=" col-md-4  col-xs-12">
                    <h3>Contact Us</h3>
                    <p>+91-735-0000000</p>
                    
                </div>
            </div>
        </div>
    </footer>
    
    
</body>
</html>