<?php $v->layout("_theme"); ?>

<?= $v->start("styles"); ?>
<link rel="stylesheet" href="<?= asset("css/style.min.css"); ?>" />
<?= $v->end; ?>

<!-- hero -->
<?= $v->insert('partials/home/hero') ?>
<!-- end of hero -->

<!-- about   -->
<?= $v->insert('partials/home/about') ?>
<!-- end of about -->

<!-- products   -->
<?= $v->insert('partials/home/products') ?>
<!-- end of products -->

<!-- gallery   -->
<?= $v->insert('partials/home/gallery') ?>
<!-- end of gallery -->

<!-- contact   -->
<?= $v->insert('partials/home/contact') ?>
<!-- end of contact -->


<?= $v->start("scripts"); ?>
<script src="<?= asset("js/script-home.min.js"); ?>"></script>
<?= $v->end; ?>

