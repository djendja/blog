<?php

$dbServerName="localhost";
$dbUsername="user1";
$dbPassword="123";
$dbName="baza";

$conn=new mysqli($dbServerName,$dbUsername,$dbPassword,$dbName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 }
 echo "Connected successfully";
 
 
 ?>

