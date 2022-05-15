<?php

// More on https://www.php.net/manual/en/index.php

$name = "abhishek";
echo $name;
echo "<br>";

echo strlen($name);
echo "<br>";
echo "the length of my string is " . strlen($name);
echo "<br>";

echo "the number of words in my string is " . str_word_count($name);
echo "<br>";

echo strrev($name); // reversed the string
echo "<br>";

echo strpos($name, "k");
echo "<br>";

echo str_replace("abhishek", "rio", $name); // replaced the string with the new string
echo "<br>";

echo str_repeat($name, 5);
echo "<br>";

echo rtrim("<pre>   this is a good boy");
echo "<br>";

echo ltrim("<pre>   this is a good boy");
echo "<br>";

?>