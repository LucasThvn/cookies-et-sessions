<?php
session_start();

if (!isset($_SESSION['loginname'])) {
    header('location:login.php');
}

require 'inc/data/products.php';
require 'inc/head.php';
?>
<section class="cookies container-fluid">
    <div class="row">
    <?php foreach ($catalog as $id => $cookie) :?>
        <?php if (isset($_COOKIE[$id])) : ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                    </figcaption>
                </figure>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
