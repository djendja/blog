<?php 

function connect_db() {
    $dbServerName="localhost";
$dbUsername="user1";
$dbPassword="123";
$dbName="baza";

$conn=new mysqli($dbServerName,$dbUsername,$dbPassword,$dbName);
// return $conn;
};

?>