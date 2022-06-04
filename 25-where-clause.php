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


// Usage of WHERE clause to fetch data from the database
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

// Usage of WHERE clause to update data

$sql = "UPDATE `phptrip` SET `name` = 'HorfordUpdated' WHERE `phptrip`.`sno` = 4";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br> Number of affected rows: $aff <br>";
if($result){
    echo "We updated the record successfully!!!";
}else{
    echo "We could not update the record successfully.";
}

?>
