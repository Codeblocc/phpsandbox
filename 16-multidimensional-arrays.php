<?php

// A multidimensional array is an array containing one or more arrays. PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.

// https://www.youtube.com/watch?v=hV0UZPrl2Hc&list=PLu0W_9lII9aikXkRE0WxDt1vozo3hnmtR&index=19&ab_channel=CodeWithHarry

// https://www.w3schools.com/php/php_arrays_multidimensional.asp


echo "multidimensional arrays <br>";

// creating a 2 dimensional array
$multiDim = array(
    array(2,5,7,8), // as a whole is a value
    array(1,2,3,1),
    array(4,5,0,1));

// echo var_dump($multiDim);

// echo $multiDim[1][2]; // 3

// printing the contents of a 2 dimenstional array
for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j < count($multiDim[$i]); $j++) { 
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}

?>