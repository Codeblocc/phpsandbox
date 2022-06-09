<?php

// https://www.youtube.com/watch?v=GBp810rwN-c&list=PLu0W_9lII9aikXkRE0WxDt1vozo3hnmtR&index=35&t=26s&ab_channel=CodeWithHarry

// https://www.php.net/manual/en/function.fopen.php

$fptr = fopen("testfile.txt", "r");
echo $fptr;

if(!$fptr){
    die("Unable to open this file. Please enter a valid file name");
}
$content = fread($fptr, filesize("testfile.txt"));
echo $content;
fclose($fptr); // Closes an open file pointer

?>