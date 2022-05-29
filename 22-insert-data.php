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

// variables to be inserted into the table
$name = "Marcus";
$destination = "France";

// Sql query to be executed. 
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql); // The duplicate will still be executed because there's no Sr No in the query. Sr No is automatic incremental in the database

// add a new trip to the trip table in the database
if($result){
    echo "record has been inserted successfully";
}
else{
    echo "record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}

?>