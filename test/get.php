<?php include 'db_connection.php';?>
<?php include 'components/head.php';?>

<?php 

// SELECT UPIT

         $sql= "SELECT * FROM layout;";
        // $result= $conn->query($sql);

        // if($result->num_rows>0) {
        //     while($row=$result->fetch_assoc()) {
        //         echo $row['title'];
        //     }
        // }

         $result=mysqli_query($conn,$sql);
         var_dump($result);
         $resultCheck=mysqli_num_rows($result);

         

         
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/main.css"> -->
    <title>test</title>
</head>
<body>
<?php 

$layoutData;

 if($resultCheck>0) {
    while($layouts=mysqli_fetch_all($result,MYSQLI_ASSOC)) : 
       // echo $layouts['title'] . $layouts['subtitle'] . $layouts['logo'];
    //    array_push($layoutData,$layouts);
    $layoutData=$layouts[0];
?>

<?php  endwhile; 

} ?>
    <?php echo $layoutData; ?>
</body>
</html>
