<?php

/**
 * CSS
 */
$homeCss = new MatthiasMullie\Minify\CSS();
$homeCss->add(dirname(__DIR__, 1) . "/public/css/style.css");
$homeCss->minify(dirname(__DIR__, 1) . "/public/css/style.min.css");

/**
 * 404
 */
$errorCss = new MatthiasMullie\Minify\CSS();
$errorCss->add(dirname(__DIR__, 1) . "/public/css/style-error.css");
$errorCss->minify(dirname(__DIR__, 1) . "/public/css/style-error.min.css");

/**
 * HOME
 */
$homeJs = new MatthiasMullie\Minify\JS();
$homeJs->add(dirname(__DIR__, 1) . "/views/assets/js/vendors/jquery.js");
//$homeJs->add(dirname(__DIR__, 1) . "/views/assets/js/theme/functions/sticky.js");
$homeJs->add(dirname(__DIR__, 1) . "/views/assets/js/theme/functions/menu.js");
$homeJs->add(dirname(__DIR__, 1) . "/views/assets/js/theme/functions/scroll.js");
$homeJs->add(dirname(__DIR__, 1) . "/views/assets/js/theme/functions/gallery.js");
$homeJs->add(dirname(__DIR__, 1) . "/views/assets/js/vendors/jquery.magnific-popup.js");
$homeJs->minify(dirname(__DIR__, 1) . "/public/js/script-home.min.js");

/**
 * Error
 */
$errorJs = new MatthiasMullie\Minify\JS();
//$errorJs->add(dirname(__DIR__, 1) . "/views/assets/js/vendors/jquery.js");
//$errorJs->add(dirname(__DIR__, 1) . "/views/assets/js/theme/functions/menu.js");
//$errorJs->add(dirname(__DIR__, 1) . "/views/assets/js/theme/functions/sticky.js");
//$errorJs->minify(dirname(__DIR__, 1) . "/public/js/script-error.min.js");