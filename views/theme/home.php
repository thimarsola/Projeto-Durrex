<?php $v->layout("_theme"); ?>

<?= $v->start("styles"); ?>
<link rel="stylesheet" href="<?= asset("css/style.min.css"); ?>" />
<?= $v->end; ?>

<!-- home -->
<?= $v->insert('partials/home/hero') ?>
<!-- end of home -->


<?= $v->start("scripts"); ?>
<script src="<?= asset("js/script-home.min.js"); ?>"></script>
<?= $v->end; ?>

