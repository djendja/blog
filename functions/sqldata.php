<?php include 'db_connection.php'; ?>
<?php 

$sql_layout= "SELECT * FROM layout;";
$sql_single="SELECT * FROM single_page";

$dataArray=[];
function fetch_data($sql_query) {
    $result=mysqli_query($conn,$sql_query);
    while($row=mysqli_fetch_array($result)) {
        $dataArray=$row[0];
    }
    return $dataArray;
}
?>