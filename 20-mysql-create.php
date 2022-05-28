<?php

// Connecting to the database

$servername = "localhost";
$username = "root";
$password = "";

// Create a connection

$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry, we failed to connect: ". mysqli_connect_error());
}
echo "Connection was successful";

// Create a database

$sql = "CREATE DATABASE dbabhishek2";
$result = mysqli_query($conn, $sql);

// check for the database creation success
if($result){
    echo "the database was created successfully!";
}
else {
    echo "the database was not created successfully becase of this error ---> ". mysqli_error($conn);
}


?>