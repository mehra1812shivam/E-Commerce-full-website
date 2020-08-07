<!DOCTYPE html>
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
    function check_if_added_to_cart($item_id) {
       //to get user_id from session
    //    include'common.php';
    //    $curr_id=$_SESSION['id'];

    //    $query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$curr_id' and status='Added to cart'";
    //    $query_result = mysqli_query($con, $query)or die(mysqli_error($con));
    //    $no_of_row = mysqli_num_rows($query_result);

    //    if($no_of_row>=1){
    //        return 1;
    //    }else{
    //        return 0;
    //    }
    //   }

      if(!isset($_SESSION)){
        include'../includes/common.php';
        $curr_id=$_SESSION['id'];
 
        $query="SELECT * FROM users_products WHERE product_id='$item_id' AND user_id ='$curr_id' and status='Added to cart'";
        $query_result = mysqli_query($con, $query)or die(mysqli_error($con));
        $no_of_row = mysqli_num_rows($query_result);
 
        if($no_of_row>=1){
            return 1;
        }else{
            return 0;
        }
    }else{
        $con = mysqli_connect("localhost", "root", "", "ecommercefinal","3308") or die(mysqli_error($con));
        $curr_id=$_SESSION['id'];
 
        $query="SELECT * FROM users_products WHERE product_id='$item_id' AND user_id ='$curr_id' and status='Added to cart'";
        $query_result = mysqli_query($con, $query)or die(mysqli_error($con));
        $no_of_row = mysqli_num_rows($query_result);
 
        if($no_of_row>=1){
            return 1;
        }else{
            return 0;
        }

    }
        
  }        
    ?>
    
</body>
</html>