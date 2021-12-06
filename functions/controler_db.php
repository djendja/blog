<?php 
function data($conn,$sql_query) {
    $dataArr=[];
    if($conn) {
        $result=mysqli_query($conn,$sql_query);
        while($row=mysqli_fetch_array($result)) {
            $dataArr=$row[0];
        }
    };
    return $dataArr;
};

?>