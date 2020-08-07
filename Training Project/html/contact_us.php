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
    <link rel="stylesheet" href="../css/style2.css">
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


    <!-- <div class="modal fade" id="pz" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">LOG IN</h4>
                </div>
                <div class="modal-body">
                    <h5>Don't have an account?<a href="signup.html" style="color: rgb(88, 61, 243);">Register</a></h5>
                    <form method="post" action="logi.php">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <button class="btn btn-primary" type="submit" value="submit"  name="button">Login</button>
                        
                    </form>
                    <h5><a href="#" style="color:rgb(88,61,243);">Forgot Password?</a></h5>
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
                        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a  data-toggle="modal" data-target="#pz" ><span class = "glyphicon glyphicon-log-in"></span> Login </a></li>
                        <li><a href="about_us.html"><span class="glyphicon glyphicon-list"></span> About us</a></li>
                        <li><a href="contact_us.html"><span class="glyphicon glyphicon-phone"></span> Contact us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div> -->
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-xs-12">
                <h2>LIVE SUPPORT</h2>
			<h3>24 hours | 7 days a week | 365 days in a year Live Technical Support</h3>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variants of passaages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
			</div>
			<div class="col-sm-3 col-xs-12">
			<!-- contact us pic-->
			<img src="../images/livesupport.png" class="img-responsive">

			</div>

        </div>

        <div class="row">
            <div class="col-sm-6 col-xs-12" >
                <h3>CONTACT US</h3>
                <form method="post"  action="cont.php">
                    <div class="form-group">
                        Name:<input type="text" class="form-control" name="name" >
                    </div>
    
                    <div class="form-group">
                        Email Id:<input type="email" class="form-control" name="email" >
                    </div>
    
                    <div class="form-group">
                        Message:<textarea rows="4"  class="form-control" name="message"></textarea>
                    </div>
    
                        <button class="btn btn-primary" type="submit" value="Submit"  name="button">Submit</button>						
                            </button>
    
                </form>
                
                </div>
                <div class="col-sm-offset-1 col-sm-5 col-xs-12" style="border-left: 2px solid #ccc; border-bottom: 2px solid #ccc;">
                <h3>Company Information:</h3>
                <p>500, Lorem Ipsum Dolor Sit,<br>22-56-2-9 Sit Amet, Lorem,<br>USA<br>Phone:(00)22-666-444<br>Fax: (000) 22-444-111<br>Email:info@mycompany.com<br>Follow on:Facebook, Twitter<br></p>
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
                </div>
    
                <div class=" col-md-4  col-xs-12">
                <h3>My Account</h3>
                    <p><a id="rem" data-toggle="modal" data-target="#pz">Login</a><br><a id="rem" href="signup.php">Sign Up</a></p>
                </div>
    
                <div class=" col-md-4  col-xs-12">
                <h3>Contact Us</h3>
                    <p>Contact:+91-735-0000000</p>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>