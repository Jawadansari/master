<?php
// database connection file
require("premade/db.php");
// Adding header
include("premade/header.php");

if (isset($_POST['submit'])) {
    $barcode = $_POST['barcode'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    
    $sql = "INSERT INTO `products` (`barcode`, `name`, `price`, `qty`, `image`, `description`,) 
    VALUES ('$barcode, '$name', '$price', '$qty', '$image', '$description')";
}




?>