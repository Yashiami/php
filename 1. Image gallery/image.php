<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';


?>
<?php include './views/header.php'; ?>

<?php if (!empty($_GET['image']) && !empty($imageTitles[$_GET['image']])): ?>
    <?php $image = $_GET['image']; ?>
    <div class="image-display-container">
        <h2><?php echo e($imageTitles[$image]); ?></h2>
        <img class="image-display" src="./images/<?php echo rawurlencode($image); ?>" alt="<?php echo e($imageTitles[$image]); ?>" />
        <p><?php echo str_replace("\n", "<br />", e($imageDescriptions[$image])); ?></p>
    </div>
<?php else: ?>
    <div class="notice">
        This image could not be found.
    </div>
<?php endif; ?>

<a class="back-link" href="gallery.php">Back to gallery</a>
<br /><br /><br /><br /><br />


<?php include './views/footer.php'; ?>
