<?php 
include "functions/connect_db.php";
$conn=connect_db();
$sqlQuery='SELECT * from layout;';
$header_data=data($conn,$sqlQuery);

?>