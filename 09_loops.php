<?php

// The while loop - Loops through a block of code as long as the specified condition is true.


// $i = 0;
// while($i<5){
//     echo $i;
//     echo "<br>";
//     $i++;
// }

// $i = 0;
// while($i<5){
//     echo $i;
//     echo "<br>";
//     $i+=2; // increment by 2
// }

$i = 0;
$x = 9;
while($i<5000 && $x<60){
    echo $i+1;
    echo "<br>";
    $i+=3;
    $x+=4;
}

?>