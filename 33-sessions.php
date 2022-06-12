<?php
// Session is used to manage information across different pages

// Verify the user login info
session_start(); // This is very important to start the session. Need to be above the HTML code
$_SESSION['username'] = 'Rio';
$_SESSION['favCat'] = 'Animals';
echo "We have saved your session";

?>