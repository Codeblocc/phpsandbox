<?php

// Use foreach loop when you want to iterate an array. Or if you want to iterate an Object.

$arr = array("oranges", "apples", "milk", "biscuits");

// for ($i=0; $i < count($arr) ; $i++) { 
//     echo "$arr[$i]";
//     echo "<br>";
// }

// Better way to do this - foreach loops


foreach ($arr as $value) {
    echo "$value <br>";
}


?>