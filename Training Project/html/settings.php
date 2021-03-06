<!DOCTYPE html>
<?php
require '../includes/common.php';
if (!isset($_SESSION['email']))
 {   header('location: index.php'); }  
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <script src="../bootstrap-3.4.1-dist/js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style5.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="home.php">E-Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Log out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <h1> Change password</h1>
                <form method="POST" action="settings_script.php">
                    <div class="form-group">
                        
                        <input type="password"  name="old" class="form-control" id="Old" placeholder="Old password" >
                    </div>
                    <div class="form-group">
                        
                        <input type="password" name="new" class="form-control" placeholder="New password" id="New " >
                    </div>
                    <div class="form-group">
                        
                        <input type="password" name="re" class="form-control" placeholder="Re-type New password" id="Re-type" >
                    </div>
                    <button class="btn btn-primary">Change</button>
                </form>
            </div>
        </div>
    </div>   
    
</body>
</html>