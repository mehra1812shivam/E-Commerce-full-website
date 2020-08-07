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
    $id = $_GET['id'];
    $user_id=$_SESSION['id'];
    $queryy="INSERT INTO users_products(user_id, product_id, status) VALUES('$user_id', '$id', 'Added to cart') ";
    $query_result = mysqli_query($con, $queryy)or die(mysqli_error($con));
    header('location:home.php');
    ?>
    
</body>
</html>