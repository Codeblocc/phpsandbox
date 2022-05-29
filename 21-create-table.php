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

// create a table in the db
$sql = "CREATE TABLE `phptrip` ( `sno` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `dest` VARCHAR(11) NOT NULL , PRIMARY KEY (`sno`))";

// check for the table creation sucess

$result = mysqli_query($conn, $sql); // this will execute the query

// check for the database creation sucess
if($result){
    echo "the table was created successfully";
}
else{
    echo "the table was not created successfully because of this error ---> ". mysqli_error($conn);
}

?>
