<?php
 
$dbhost="localhost";  // hostname
$dbuser="id6286513_nodemcu"; // mysql username
$dbpass="nodemcu"; // mysql password
$db="id6286513_nodemcu"; // database you want to use
 
$conn=mysqli_connect( $dbhost, $dbuser, $dbpass, $db ) or die("Could not connect: " .mysqli_error($conn) );
 
//you can also directly write values in mysqli_connect():
 
// $conn=mysqli_connect("localhost", "root", "", "test");
 
?>