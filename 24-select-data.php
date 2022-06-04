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

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);


// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database<br>";
echo "<br>";

// Display the rows returned by the sql query. This fetches records ONE BY ONE. Associative array.
if($num > 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // WE CAN FETCH IN A BETTER WAY USING THE WHILE LOOP

    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['sno'] . ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
        echo "<br>";
    }




}

?>