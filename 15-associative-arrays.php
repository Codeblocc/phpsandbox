<?php

// Associative arrays are arrays that use named keys that you assign to them.

// https://www.youtube.com/watch?v=yJNeEGvskpw&list=PLu0W_9lII9aikXkRE0WxDt1vozo3hnmtR&index=18&ab_channel=CodeWithHarry

// https://www.w3schools.com/php/php_arrays_associative.asp

$arr = array('this', 'that', 'what');
// echo $arr[0];
// echo $arr[1];
// echo $arr[2];
// echo $arr[2];

// Associative arrays

$favCol = array(
    'rio' => 'red',
    'dhar' => 'green',
    'derrick' => 'white'
);

echo $favCol['rio'];

foreach ($favCol as $key => $value) {
    echo "<br>fav colour of $key is $value";
}

// fav colour of rio is red
// fav colour of dhar is green
// fav colour of derrick is white

?>