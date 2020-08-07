<!DOCTYPE html>
<?php
require'../includes/common.php';
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
    if (isset($_POST)) {
        
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = MD5(mysqli_real_escape_string($con, $_POST['password']));
    }
    $getting_from_db="select id,email,password from users where email='$email' and password='$password'";
    $getting_from_db_result = mysqli_query($con, $getting_from_db)or die(mysqli_error($con));
    $number_of_rows = mysqli_num_rows($getting_from_db_result);

    if($number_of_rows==0){
        echo"there is no user for which  email and password entered entered are matched .";

    }
    
    else{
        $row = mysqli_fetch_array($getting_from_db_result, MYSQLI_BOTH);
        //intializing session variables

        // these statements are commented because we are already matching credentials in our query

        // if($email==$row['email']){
        //     if($password!=$row['password']){
        //         echo"Password doesn't match,please enter correct password";

        //     }
        // }
        // if($email!=$row['email']){
        //     echo"email didn't match,please enter correct email";
        // }
        // if($email==$row['email']){
        //     if($password==$row['password']){
        //         $_SESSION['email'] = $email;
        //         $_SESSION['id'] = $row['id'];
        //         header('location: home.php');

        //     }
        // }
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $row['id'];
        header('location: home.php');
        
        
    }
    ?>
    
</body>
</html>