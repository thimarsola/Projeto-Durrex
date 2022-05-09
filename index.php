<?php

use CoffeeCode\Router\Router;

ob_start();
session_start();

require __DIR__ . "/vendor/autoload.php";

$router = new Router(site());
$router->namespace("Source\Controllers");

/**
 * Web
 */
$router->group(null);
$router->get("/", "Web:home", "web.home");

/**
 * Errors
 */
$router->group("oops");
$router->get("/{errcode}", "Web:error", "web.error");

/**
 * Route process
 */
$router->dispatch();

/**
 * Errors process
 */
if($router->error()){
    $router->redirect("web.error", ["errcode" => $router->error()]);
}


ob_end_flush();
