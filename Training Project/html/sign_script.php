<!DOCTYPE html>
<?php
require '../includes/common.php';
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
        $name=mysqli_real_escape_string($con, $_POST['name']);
        $email=mysqli_real_escape_string($con, $_POST['email']);
        $password=mysqli_real_escape_string($con, $_POST['password']);
        $contact=mysqli_real_escape_string($con, $_POST['contact']);
        $city=mysqli_real_escape_string($con, $_POST['city']);
        $address=mysqli_real_escape_string($con, $_POST['address']);
        $pass=md5($password);
    }
        $email_pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";
        $query="select * from users where email = '$email'";
		$result=mysqli_query($con, $query) or die(mysqli_error($con));
		// $row1=mysqli_fetch_array($result1);

        $total_s=mysqli_num_rows($result);
        
        if($total_s == 0)
        {
		$user_reg="insert into users(name,email,password,contact,city,address) values('$name','$email','$pass','$contact','$city','$address')";

		$result1=mysqli_query($con, $user_reg) or die(mysqli_error($con));

		$_SESSION['email']=$email;
		$_SESSION['name']=$name;
		$_SESSION['password']=$pass;
		$_SESSION['contact']=$contact;
		//$_SESSION['message']="you are successfully signed in";
		$_SESSION['id']=mysqli_insert_id($con);
		header("location:home.php");
	}else{
        echo "<center>Account Already Exists</center><br>";
    }
    
    
    ?>
    <div align="center">
			<a href="signup.php" class="btn btn-primary" type="submit" name="button">Try Signing Up again</a>						
		</div>
    
</body>
</html>