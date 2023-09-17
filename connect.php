<?php
$hostname  = 'database-train.clqu7xkbggwd.eu-north-1.rds.amazonaws.com'; 
$username = 'admin';
$password = 'cloudtrainticket';
$dbname = 'database-train'; 

$connect = mysqli_connect($hostname, $username, $password, $dbname) or die("Error Connecting");
?>