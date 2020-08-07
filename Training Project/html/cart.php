<!DOCTYPE html>
<?php
require '../includes/common.php';
?>
<?php
if (!isset($_SESSION['email']))
 {   header('location: index.php'); }          //if session exists it is redirected to products.php
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <script src="../bootstrap-3.4.1-dist/js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style6.css">
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
            <div class="col-xs-6 col-xs-offset-3">
                <div class="table-responsive">
                    <table class="table table-bordered">
                    <?php
                    $sum = 0;
                    $user_id = $_SESSION['id'];
                    $query = "SELECT products.price AS Price, products.id, products.name AS Name FROM users_products JOIN products ON users_products.product_id = products.id WHERE users_products.user_id='$user_id' and status='Added to cart'";
                    $result = mysqli_query($con, $query)or die($mysqli_error($con));
                    if (mysqli_num_rows($result) >= 1){
                        ?>
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($result)) {
                                $sum+= $row["Price"];
                                $id="";
                                $id .= $row["id"] . ",";
                                echo "<tr>
                                    <td>" . "#" . $row["id"] . "</td>
                                    <td>" . $row["Name"] . "</td>
                                    <td>Rs " . $row["Price"] . "</td>
                                    <td><a href='cart_remove.php?id={$row['id']}' class='remove_item_link'>X</a></td>
                                    </tr>";
                                }
                                $id = rtrim($id, ",");
                                echo "<tr>
                                        <td></td>
                                        <td>Total</td>
                                        <td>Rs " . $sum . "</td>
                                        <td><a href='success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                                        </tr>";
                                ?>
                            </tbody>
                            <?php
                 }else {
                    echo "<center><h2>Add items to the cart first!</h2></center>";
                }
                ?>
                <?php
                ?>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>