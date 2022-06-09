<?php

// https://www.youtube.com/watch?v=iZmBYO6tfxE&list=PLu0W_9lII9aikXkRE0WxDt1vozo3hnmtR&index=36&ab_channel=CodeWithHarry

$fptr = fopen("testfile.txt", "r");
// echo fgets($fptr); // first line
// echo fgets($fptr); // 2nd line

// while($a=fgets($fptr)){
//     echo $a;
// }
// echo "end of the file has been reached";

// Reading a file character by character

// while($a=fgetc($fptr)){
//     echo $a;
// }

// Write a program which reads the content of a file until a fullstop (.) has been encountered.
while($a = fgetc($fptr)){
    echo $a;
    if($a == ".");
        break;
}
fclose($fptr);

?>