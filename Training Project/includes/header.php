<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <form method="POST" action="login_script.php">
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

<div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">
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
    </div>                 
</body>
</html>