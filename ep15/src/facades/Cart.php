<?php

namespace src\facades;

use src\models\Product;

class Cart 
{
    public function __construct()
    {
        if(!session_id()) {
            session_start();
        }

        $_SESSION["cart"] = (!empty($_SESSION["cart"]) ? $_SESSION["cart"] : []);
    }

    public function cart(): ?array
    {
        return $_SESSION["cart"] ?? null;
    }

    public function add(Product $product)
    {
        $_SESSION["cart"]["total"] = ($_SESSION["cart"]["total"]) ?? 0;
        $_SESSION["cart"]["total"] += $product->price;
        $_SESSION["cart"]["amount"] = ($_SESSION["cart"]["total"] ?? 0);
        $_SESSION["cart"]["amount"] += 1;

        if(empty($_SESSION["cart"]["items"][$product->id])) {
            $_SESSION["cart"]["items"][$product->id] = [
                "id" => $product->id,
                "product" => $product->product,
                "price" => $product->price,
                "total" => $product->price,
                "amount" => 1
            ];

            return $this;
        }
        $_SESSION["cart"]["items"][$product->id]["amount"] =+ 1;
        $_SESSION["cart"]["items"][$product->id]["total"] =+ $product->price;
        return $this;
    }

    public function remove(Product $product)
    {

    }

    public function clear()
    {

    }
}