<?php

//////////////////////// Writing to a file in PHP

// $fptr = fopen("testfile2.txt", "w");
// fwrite($fptr, "every game is a chance. every possession is like gold. 2 out of the the next 3 with this group very much a possibility. never write this Celtics team off. \n");

// // this will check if there is content already present in the first place. if not present, it will print the text. if we edit and refresh the browser page again, it will overwrite the content.

// fwrite($fptr, "this is another content.");
// fclose($fptr);

//////////////////////// Appending to a file in PHP
// evertime you refresh, it will append (add) to the content

$fptr = fopen("testfile2.txt", "a");
fwrite($fptr, "this is being appended to the file.");
fclose($fptr);

?>