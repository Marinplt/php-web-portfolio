<?php
$page = isset($_GET['page']) ? $_GET['page'] : 0;

$data = require('data/gallery.php');

require('includes/functions.php');

$img_select = findPaged(6, 0);
?>
<!doctype html>
<html lang="fr">
<?php require('includes/head.php'); ?>

<body id="gallery">
    <?php require('includes/header.php'); ?>
    <main>
        <div id="hero">
            <h1>My greatest shots</h1>
        </div>
        <div class="container">
            <div id="pictures">
                <?php foreach ($img_select as $img_selects) { ?>
                    <a href="detail.php?id=<?php echo $img_selects['id']; ?>" title="Picture 1">
                        <?php $src = 'images/medium/' . $img_selects['slug']; ?>
                        <img src="<?php echo $src; ?>" alt="Picture 1">
                        <br><?php echo $img_selects['title']; ?>
                    </a>
                <?php } ?>
            </div>
            <p id="pager">
                <?php if ($page == 0) { ?>
                    <a href="javascript:void(0)" class="btn disabled">
                        Previous page
                    </a>
                <?php } else { ?>
                    <a href="gallery.php?id=<?php echo $img_selects['id']; ?>" class="btn">
                        Previous page
                    </a>
                <?php } ?>
                <?php if ($page == 2) { ?>
                    <a href="gallery.html" class="btn disabled">
                        Next page
                    </a>
                <?php } else { ?>
                    <a href="gallery.php?id=<?php echo $img_selects['id']; ?>" class="btn">
                        Next page
                    </a>
                <?php } ?>
            </p>
        </div>
    </main>
    <?php require('includes/footer.php'); ?>
</body>

</html>