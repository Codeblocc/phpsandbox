<?php

// https://www.youtube.com/watch?v=rCsAqa1N0kc&list=PLu0W_9lII9aikXkRE0WxDt1vozo3hnmtR&index=17&ab_channel=CodeWithHarry

// https://www.w3schools.com/php/func_date_date.asp

// https://www.php.net/manual/en/datetime.format.php

$d = date("dS F Y, g:i A");
echo "today's date is $d <br>";

$date = new DateTime('2000-01-01');
echo $date->format('Y-m-d H:i:s');

$year = date("Y");
echo "<br>";
echo "Copyright $year | All rights reserved";

?>