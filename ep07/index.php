<?php

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/src/Models/User.php";
require __DIR__ . "/src/Config.php";
require __DIR__ . "/src/App/Web.php";

$route = new \CoffeeCode\Router\Router(ROOT);

$route->namespace("src\App");

$route->group(null);
$route->get("/", "Web:home");
$route->get("/contato", "Web:contact");

$route->group("ops");
$route->get("/{errcode}", "Web:error");

$route->dispatch();

if($route->error()) {
    $route->redirect("ops/{$route->error()}");
}