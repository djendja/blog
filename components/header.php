<?php include 'data.php'; ?>


<html>

<body>
    <header class="nav">
        <?php if(sizeof($logo)>0): ?>
        <div class="nav__logo">
            <?php if($logo["logoimg"]): ?>
                 <img src="<?php echo $logo["logoimg"]; ?>" alt="<?php echo $logo["logoalt"]?>">
            <?php else: ?>
                 <span><?php echo $logo["logoalt"]; ?></span>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </header>
</body>

</html>