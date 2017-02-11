<?php

$db = new mysqli('127.0.0.1:3306', 'root', '', 'pizza');

//Don't use this if you want to use the if method of error reporting.
//echo $db->connect_errno;

if ($db->connect_errno) {
	die("Sorry, we're having some problems.");
} else {
	echo ("Its working. <br><br>");
}

/* This method puts the error in English.

if ($db->connect_errno); {
	echo $db->connect_error;
} */

?>
