<?php
$username = "root";
$password = "";
$hostname = "localhost"; 

$dbhandle = mysql_connect($hostname, $username, $password) 
 or die(mysql_error());

$db = "sea_side";
$selected = mysql_select_db($db,$dbhandle) 
  or die(mysql_error());
?>