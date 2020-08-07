<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['email']))
 {   header('location: index.php'); } 
 else{
    session_destroy();
    header('location:index.php');
 }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>