<?php

use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/src/Config.php";
require __DIR__ . "/src/controllers/Form.php";
require __DIR__ . "/src/models/User.php";


$router = new Router(ROOT);
$router->namespace("src\controllers");

$router->group(null);
$router->get("/", "Form:home", "form.home");
$router->post("/create", "Form:create", "form.create");
$router->post("/delete", "Form:delete", "form.delete");

$router->dispatch();

if ($router->error()) {
    var_dump($router->error());
} 