<?php include 'data.php'; ?>
<?php include 'db_connection.php'; ?>
<?php include 'test/get.php'; ?>
<html>
<?php include 'components/head.php'; ?>

<body>
    <!-- nav bar -->
   <?php include 'components/header.php'; ?>

    <section class="blog">
    
    <!-- naslov -->

    <div class="blog__heading">
    <span> <?php echo $layoutData['subtitle']; ?></span>

            <h1><?php echo $layoutData['title']; ?></h1>
        </div>

    <!-- nav filter -->

   
    <div class="blog__nav">
        <?php if(sizeof($lists)>0): ?>
            <ul>
            <?php foreach($lists as $list) :?>
                <li>
                 <input type="<?php echo $list["type"]?>" name="<?php echo $list["name"]?>">
                    <span><?php echo $list["text"] ?></span>
                </li>
            <?php endforeach; ?>
            <ul>
            <button class="a-button">Filter</button>
        <?php endif; ?>
    </div>

    

    <!-- blog kontejner -->

    <?php if(sizeof($posts)>0): ?>
     <div class="blog__container">
            <?php foreach($posts as $post): ?>

                <div class="blog__box">
                        <div class="blog__box-img">
                            <a href="<?php echo $post["link-href"]?>" title="<?php echo $post["link-title"]?>">
                            <img src="<?php echo $post["img-src"]?>" alt="<?php echo $post["img-alt"]?>">
                            </a>
                        </div>
                        <div class="blog__box-text">
                            <h2><?php echo $post["title"]?></h2>
                            <a href="<?php echo $post["link-title"]?>" target="<?php echo $post["link-target"]?>" title="<?php echo $post["link-title"] ?>"><?php echo $post["link-text"]?></a>
                        </div>
                </div>
                    <?php endforeach; ?>

      </div>
    <?php endif; ?>

    </section>
    
</body>

</html>

