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
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST)){
        $old= MD5(mysqli_real_escape_string($con, $_POST['old']));
        $new= MD5(mysqli_real_escape_string($con, $_POST['new']));
        $re = MD5(mysqli_real_escape_string($con, $_POST['re']));
        $query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
        $result = mysqli_query($con, $query)or die($mysqli_error($con));
        $row = mysqli_fetch_array($result);
        $orig_pass = $row['password'];

        if ($new != $re) {
            header('location: settings.php?error=The two passwords don\'t match.');
        } else {
            if ($old == $orig_pass) {
                $query = "UPDATE  users SET password = '" . $new. "' WHERE email = '" . $_SESSION['email'] . "'";
                mysqli_query($con, $query) or die($mysqli_error($con));
                header('location: settings.php?error=Password Updated Successfully');
            } else
                header('location: settings.php?error=Wrong Old Password.');
        }

    }
    ?>
    
</body>
</html>