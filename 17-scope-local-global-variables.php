<?php

echo "Scope, Local & Global Variables in Php <br>";

$a = 98; // Global variable
$b = 5;
function printValue(){
    // $a = 97; // local variable

    global $a, $b; // Global keyword this will give access to the global variable, which is outside of the function
    $a = 100;
    $b = 1000; // by doing this, you can change the value of the global variable
    
    echo "<br> the value of your variable a is $a and b is $b";
}

echo $a;
printValue();
echo "<br> the value of your variable a is $a and b is $b";
echo "<br>";
// echo var_dump($GLOBALS); // prints all the global variables
echo var_dump($GLOBALS["a"]); 
echo var_dump($GLOBALS["b"]);
?>