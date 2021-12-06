<?php include 'functions/get_data.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
<a href="get.php">GET</a>
<a href="post.php">POST</a>
<?php $array=get_data($sql_layout); ?>
<h1><?php echo $array; ?></h1>
<h2>cao</h2>
</body>
</html>