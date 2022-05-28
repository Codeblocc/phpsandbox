<?php

echo "mysql php <br>";

// Ways to connect the mysql database

// 1. MySQLi (i - improved) extension - can be used in 2 ways. Procedural way and object oriented way
// 2. PDO (PHP Data Objects)

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

?>