<?php

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/src/Config.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->namespace("src\app");

$router->group(null);
$router->get("/", "Web:home");

$router->group("ooops");
$router->get("/{errcode}", "Web:error");

$router->dispatch();

if($router->error()) {
    $router->redirect("/ooops/{$router->error()}");
}
























/*
$router->group(null);

$router->get("/", function ($data) {
    echo"<h1>OI</h1>";
    var_dump($data);
});

$router->get("/contato", function ($data) {
    echo"<h1>Contato</h1>";
    var_dump($data);
});

$router->group("ops");
$router->get("/{errcode}", function ($data){
    echo "<h1>Erro {$data['errcode']}</h1>";
    var_dump($data);
});

$router->dispatch();

if($router->error()){
    $router->redirect("/ops/{$router->error()}");
}
    */