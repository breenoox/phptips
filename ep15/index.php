<?php

require "vendor/autoload.php";
require "src/Config.php";
require "src/controllers/Web.php";

$router = new \CoffeeCode\Router\Router(ROOT);
$router->namespace("src\controllers");

$router->group(null);
$router->get("/", "Web:home", "web.home");
$router->get("/carrinho", "Web:order", "web.order");

$router->group("/cart");
$router->post("/", "WebCart:cart", "cart.cart");
$router->post("/add/{id}", "WebCArt:add", "cart.add");
$router->post("/remove/{id}", "WebCart:remove", "cart.remove");
$router->post("/clear", "WebCart:clear", "cart.clear");

$router->dispatch();
if($error = $router->error()) {
    var_dump($error);
}
