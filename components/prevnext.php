
<?php include 'data.php'; ?>

<html>

    <div class="blog-page__bn-container">
            <div class="blog-page__back">
                <a href="<?php echo $prev["previous"]?>"><?php echo $prev["text"]?></a>
            </div>
            <div class="blog-page__next">
            <a href="<?php echo $next["next"]?>"><?php echo $next["text"]?></a>       
             </div>
    </div>

</html>