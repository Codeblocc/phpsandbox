<?php

// operators in PHP
// Arithmetic operators
// Assignment operators
// Comparison operators
// Increment/Decrement operators
// Logical operators


// Arithmetic operators

$variable1 = 5;
$variable2 = 2;

echo "<h1> Arithmetic operators </h1>";

echo "the value of variable1 + variable2 is ";
echo $variable1 + $variable2;
echo "<br>";
echo "the value of variable1 - variable2 is ";
echo $variable1 - $variable2;
echo "<br>";
echo "the value of variable1 * variable2 is ";
echo $variable1 * $variable2;
echo "<br>";
echo "the value of variable1 / variable2 is ";
echo $variable1 / $variable2;
echo "<br>";
echo "the value of variable1 % variable2 is ";
echo $variable1 % $variable2;
echo "<br>";

// Assignment operators

echo "<h1> Assignment operators </h1>";
$newVar = $variable1;
$newVar += 1;
echo "The value of new variable is ";
echo $newVar;
echo "<br>";

$newVar = $variable1;
$newVar -= 1;
echo "The value of new variable is ";
echo $newVar;
echo "<br>";

$newVar = $variable1;
$newVar *= 2;
echo "The value of new variable is ";
echo $newVar;
echo "<br>";

$newVar = $variable1;
$newVar /= 2;
echo "The value of new variable is ";
echo $newVar;
echo "<br>";

// Comparison operators. Used mainly in If/Else statements

echo "<h1> Comparison operators </h1>";
echo "<br>";

echo "The value of 1==4 is ";
echo var_dump(1==4);
echo "<br>";

echo "The value of 1!=4 is ";
echo var_dump(1!=4);
echo "<br>";

echo "The value of 1>=4 is ";
echo var_dump(1>=4);
echo "<br>";

echo "The value of 1<=4 is ";
echo var_dump(1<=4);
echo "<br>";

// Increment/Decrement operators

echo "<h1> Increment/Decrement operators </h1>";

echo $variable1++; //5. the value of the variable will be increased by 1.
echo "<br>";
echo $variable1--;
echo "<br>";
echo ++$variable1;
echo "<br>";
echo --$variable1;
echo "<br>";

echo "<h1> Logical operators </h1>";

// and (&&)
// or(||)
// xor 
// ! //this is NOT

$myVar = true and (true);
echo var_dump($myVar);
echo "<br>";

$myVar = false and (true);
echo var_dump($myVar);
echo "<br>";

$myVar = false and (false);
echo var_dump($myVar);
echo "<br>";

$myVar = true and (false);
echo var_dump($myVar);
echo "<br>";

// XOR is exclusive OR. 
$myVar = (true xor true);
echo var_dump($myVar);
echo "<br>";