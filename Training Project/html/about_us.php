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
    <link rel="stylesheet" href="../css/style1.css">
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
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: white;">
                        <h4>WHO WE ARE</h4>
                    </div>
                    <div class="panel-body">
                        <div class="thumbnail">
                            <img src="../images/team_meeting.png" alt="" class="image-responsive">
                        </div>
                        <p class="text-body">Welcome to E Store, your number one source for all things [product, ie: shoes, bags, dog treats]. We're dedicated to giving you the very best of [product], with a focus on [three characteristics, ie: dependability, customer service and uniqueness.]
                            Founded in 2020 by Shivam Mehra, E store has come a long way from its beginnings in a rented room. When store founder first started out, his/her passion for [passion of founder, ie: helping other parents be more eco-friendly, providing the best equipment for his fellow musicians] drove him to [action, ie: do intense research, quit her day job], and gave him the impetus to turn hard work and inspiration into to a booming online store. We now serve customers all over country and are thrilled to be a part of the fair-trade wing of the [industry type, ie: fashion, baked goods, watches] industry.
                            
                            We hope you enjoy our products as much as we enjoy offering them to you.</p>

                       
                        
                    </div>
                    <div class="panel-footer">
                        <p>Yours Sincerely<br> Raunak Sharma <br> Store Executive</p>
                    </div>
                </div>
            </div>
            <div class=" col-md-4 col-sm-6 col-xs-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: white;">
                        <h4>OUR HISTORY</h4>
                    </div>
                    <div class="panel-body">
                        
                        <p class="text-body">
                            <h5 style="color: teal;">January-2020</h5> <br>
                            <p>Shivam Mehra ,founder of our company proposed an idea on which he was already working that is to make one platform for all our need.</p><br>
                            <h5 style="color: teal;">February-2020</h5> <br>
                            <p>This store came in existence but lacked the popularity as it was hosted on a less budgeted server with no advertisement,but still made an impact on customers</p><br>
                            <h5 style="color: teal;">March-2020</h5> <br>
                            <p>Happy Customers advertised it so much that its overall traffic on website increased to 200%</p><br>
                            <h5 style="color: teal;">April-2020</h5> <br>
                            <p>with expansion and promise for unmatchable service this organisation became huge within a span of 4 months</p>
                            
                        </p>

                       
                        
                    </div>
                    <div class="panel-footer">
                        <p>Yours Sincerely <br> Raunak Sharma <br> Executive</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: white;">
                        <h4>OPPORTUNITIES</h4>
                    </div>
                    <div class="panel-body">
                        
                        <h4>Available Roles:</h4>
                        <ol>
                            <li>Jr./Sr. Web Developer [Full Time Role + also available as a 6 month internship]</li><br>
						    <li>Business Apprentice [6 month internship]</li><br>
						    <li>Manager at back-end operations [Full Time Role + also available as a 6 month internship]</li>
					    </ol>

                       
                        
                    </div>
                    <div class="panel-footer">
                        <p>Yours Sincerely<br> Raunak Sharma <br> Store Executive</p>
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