<?php

function processMarks($marksArr){ //processMarks is the function 
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr){ //processMarks is the function 
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}


$rio = [56, 58, 20, 99, 74, 48];
$sumMarks = processMarks($rio);
echo "total marks scored by Rio out of 600 is $sumMarks";

$rio = [56, 58, 20, 99, 74, 48];
$sumMarks = avgMarks($rio);
echo "total marks scored by Rio out of 600 is $sumMarks";




?>