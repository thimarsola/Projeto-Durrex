<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?= $head; ?>

    <!-- styles -->
    <?= $v->section("styles"); ?>
    <!-- end of styles -->

    <?php if(SITE['gtm'] != null): ?>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','<?= SITE['gtm']; ?>');</script>
        <!-- End Google Tag Manager -->

    <?php endif; ?>
</head>
<body>
<?php if(SITE['gtm'] != null): ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=<?= SITE['gtm']; ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
<?php endif; ?>

<!-- main -->
<main>
    <?= $v->section("content"); ?>
</main>
<!-- end of main -->

<!-- scripts -->
<?= $v->section("scripts"); ?>
<!-- end of scripts -->
</body>
</html>