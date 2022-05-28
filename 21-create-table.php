<?php

// Connecting to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbabhishek";

// Create a connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry, we failed to connect: ". mysqli_connect_error());
}
echo "Connection was successful";

// Create a table in the database

$sql = "CREATE TABLE `phptrip` ( `sr no` INT(6) NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(12) NOT NULL ,  `destination` VARCHAR(12) NOT NULL ,    PRIMARY KEY  (`sr no`))";

$result = mysqli_query($conn, $sql);

// check for the table creation success
if($result){
    echo "the table was created successfully!";
}
else {
    echo "the table was not created successfully becase of this error ---> ". mysqli_error($conn);
}

?>