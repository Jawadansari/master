<?php
// create connection
$con = mysqli_connect("localhost","root","");

if($con->connect_error) {
    die("connection failed");
} else {
    echo "connected";
}

//
if(isset($_POST['user'], $_POST['pass'])) {
    $email = $_POST['user'];
    $password = $_POST['pass'];
    $sql = "INSERT INTO `qwerty` . `users`(`username`, `password`) VALUES ('$email','$password');";
}

if($con->query($sql) == true) {
    echo "inserted";
} else {
    echo "error";
}

$con->close()



?>