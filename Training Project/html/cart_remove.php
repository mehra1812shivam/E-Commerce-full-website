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
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $item_id = $_GET["id"];
        $user_id = $_SESSION['id'];
    
        // Delete the rows from user_items table where item_id and user_id equal to the item_id and user_id we got from the cart page and session
        $query = "DELETE FROM users_products WHERE product_id='$item_id' AND user_id='$user_id' ";
        $res = mysqli_query($con, $query) or die($mysqli_error($con));
        header("location:cart.php");
    }
    ?>
    
</body>
</html>