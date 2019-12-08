<?php

$user = //database username;
$password = //database password;
$database = //name of database;
$host = "localhost";//Leave this as is;
($GLOBALS["___mysqli_ston"] = mysqli_connect($host,$user,$password,$database));
mysqli_select_db($GLOBALS["___mysqli_ston"], $database) or die ("Unable to select database");
?>
