<?php

// creation contion to db
$host = "localhost";
$username = "root";
$password = "";
$db = "product_uploader";

// sending query to server
$con = new mysqli($host,$username,$password,$db);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>