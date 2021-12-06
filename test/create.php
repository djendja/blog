<?php  
    require '../db_connection.php';
    //global $conn;
    //var_dump($conn);
    $title=$_POST['title'];
    $weekDate=$_POST['week-date'];
    $content=$_POST['content'];
    $image=$_POST['image'];


    // INSERT INTO UPIT
    $sql="INSERT INTO single_page(postDate,title,content,image) values('$weekDate','$title','$content','$image');";
   var_dump($sql);
    mysqli_query($conn,$sql); //treba samo da runujemo kod, zato nam ne treba varijabla za ovu funkciju
   
    //header("Location: post.php?create=success")
   
   ?>