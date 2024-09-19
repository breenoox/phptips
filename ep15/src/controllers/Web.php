<?php

namespace src\controllers;

use src\controllers\Controllers;
use src\models\Product;

require __DIR__ . "/Controller.php";
require __DIR__ . "/../models/Product.php";

class Web extends Controllers
{
    public function __construct($router)
    {
        parent:: __construct($router);
    }

    public function home(array $data) : void
    {
        echo $this->view->render("home", [
            "products" => (new Product())->find()->fetch(true)
        ]);
    }

    public function order(): void
    {
        if(!empty($_SESSION["cart"])){
            var_dump($_SESSION["cart"]);
        } else {
            var_dump(false);
        }
        echo "<a href='" .$this->router->route("web.home") . "'></a>";
    }
}