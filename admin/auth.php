<?php
$username = "root";
$password = "";
$hostname = "localhost"; 

$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
$db = "sea_side";
$selected = mysql_select_db($db,$dbhandle) 
  or die("Could not select database");
?>