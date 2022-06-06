<?php

// include '_db_connect.php'; // connection was successful.
require '_db_connect.php'; // connection was successful.

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database<br>";
echo "<br>";

// Iteration
while($row = mysqli_fetch_assoc($result)){
    echo $row['sno'] . ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
    echo "<br>";
}

?>