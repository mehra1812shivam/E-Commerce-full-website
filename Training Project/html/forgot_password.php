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
    <link rel="stylesheet" href="../css/forgot.css">
    <title>Document</title>
</head>
<body>
<?php
    include'../includes/header.php';
    ?>

    <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
        <div class="panel panel-primary">
        <div class="panel-heading">Get your Password</div>
        <div class="panel-body">
            <form method="POST" action="forgot_script.php">
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <button class="btn btn-primary" type="submit" value="submit"  name="button">Get Password</button>
            </form>
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