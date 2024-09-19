<?php

namespace src\controllers;

use src\facades\Cart;
use src\models\Product;

class WebCart extends Controllers
{

    private $cart;

    public function __construct($router)
    {
        parent:: __construct($router);
        $this->cart = new Cart();
    }

    public function cart(array $data): void
    {
        echo json_encode($this->cart->cart());
    }

    public function add(array $data)
    {
        $id = filter_var($data["id"], FILTER_VALIDATE_INT);
        $product = (new Product())->findById($id);
        if (!$id || !$product) {
            echo $this->ajaxMessage("Erro ao adicionar produto ", "error");
            return;
        }

        $this->cart->add($product);
        echo json_encode($this->cart->cart());
    }

    public function remove(array $data)
    {

    }

    public function clear(array $data)
    {

    }
}