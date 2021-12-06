<?php  include 'data.php'; ?>
<?php include 'functions/get_post_num.php'; ?>
<?php include 'functions/get_content.php'; ?>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/prva.css">
    <title>ABlog</title>
</head>





<body>
    <?php include 'components/header.php'; ?>
    <div class="blog-page">
        <?php include 'components/single_homepage.php'; ?>
            <?php 
            //    $num=get_post_num();
                // echo "<h1>".$num."</h1>";
                $article_content=get_content(3);
                // echo "<h1>".$article_content["title"]."</h1>";
                //include './viewpost/post1.php'
            ?>
            <div><?php  ?></div>
        <?php include 'components/prevnext.php'; ?>
    </div>
</body>

</html>