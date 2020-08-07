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
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST)){
        
        $email=mysqli_real_escape_string($con, $_POST['email']);
        $getting_from_db="select * from users where email='$email'";
       $getting_from_db_result = mysqli_query($con, $getting_from_db)or die(mysqli_error($con));
       $row = mysqli_fetch_array($getting_from_db_result, MYSQLI_BOTH);
       $fetch_user_id=$row['id'];
	   $email_id=$row['email'];
       $password=$row['password'];
       if($email==$email_id) {
           $newpasswordset=rand(999,99999);
           $newpasswordset_hash=md5($newpasswordset);
           $sql="update users set password='$newpasswordset_hash' where email='$email'";
           $result=mysqli_query($con,$sql);



           $to = $email_id;
           $subject = "Password";
           $txt = "Your new password is : $newpasswordset .";
           $headers = "From: donotreply@fmt.com" . "\r\n" .
           "CC: somebodyelse@example.com";
           mail($to,$subject,$txt,$headers);
           
           
    }
        else{
            echo 'invalid userid';
        }
    }
    

    ?>
    <div class="modal fade" id="pz" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">LOG IN</h4>
                </div>
                <div class="modal-body">
                    <h5>Don't have an account?<a href="signup.html" style="color: rgb(88, 61, 243);">Register</a></h5>
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










    <a id="rem" data-toggle="modal" data-target="#pz">check yor email for new password and  <b>Click here</b> to login again</a>
    
</body>
</html>