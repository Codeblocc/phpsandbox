<?php

// This is how it works: First we have a single expression n (most often a variable), that is evaluated once. The value of the expression is then compared with the values for each case in the structure. If there is a match, the block of code associated with that case is executed. Use break to prevent the code from running into the next case automatically. The default statement is used if no match is found.

$age = 12;

switch($age){
    case 12:
        echo "You are 12 yrs old <br>";
        break;
    
    case 45:
        echo "You are 45 yrs old <br>";
        break;

    case 56:
        echo "You are 56 yrs old <br>";
        break;

    default:
        echo "Your age is weird <br>";
        break;
    }

?>