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
else {
    echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `phptrip` WHERE `dest`='LA'";
$result = mysqli_query($conn, $sql);


// Usage of Where clause to fetch data from the database
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database<br>";
$no = 1;
echo "<br>";

// Display the rows returned by the sql query. This fetches records ONE BY ONE. Associative array.
if($num > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $no . ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
        echo "<br>";
        $no = $no + 1;
    }
}
?>