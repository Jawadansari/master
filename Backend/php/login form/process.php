<?php

// // Create connection with Server
// $conn = new mysqli("localhost", "root", "");

// // Checking conection
// if ($conn->connect_error) {
//     die("Connection failed" . $conn->connect_error);
// }

// // Creating database And Named
// $jawad = "create database qwerty";

// if ($conn->query($jawad) === True) {
//     echo "succesfully Created";
// } else {
//     echo "Failed to create database" . $conn->error;
// }

$conn = new mysqli("localhost", "root", "", "qwerty");

// $sqltable = "CREATE TABLE MYUsers(
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     msg VARCHAR(500)
// )";

$sqldata = "INSERT INTO MYUsers(firstname, lastname, msg)
VALUES ('JAD', 'ANSARI', 'I am Pakistani')";

$sqldata = "INSERT INTO MYUsers(firstname, lastname, msg)
VALUES ('AA', 'KHAN', 'I am AFGHANI')";

$sqldataa = "INSERT INTO MYUsers(firstname, lastname, msg)
VALUES ('AG', 'KHAN', 'I am AFGHANI')";

// checking tables created
if($conn->query($sqldataa) === TRUE){
    echo "Successfully created";
} else {
    echo " failed to create" . $conn-error; 
}

$conn->close();



// // Create connection with Server
// $con = mysqli_connect("Localhost", "root", "");
// if (!$con) {
//     die("Connection Failed: " . mysqli_connect_error());
// }

// // Create database
// $jawad  = "create database Registration";
// if (mysqli_query($con, $jawad)) {
//     echo "Succesfully Database Created";
// } else {
//     echo "Failed to create database" . mysqli_error($con);
// }

// mysqli_close($con);



?>