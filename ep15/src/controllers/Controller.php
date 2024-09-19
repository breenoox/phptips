<?php

namespace src\controllers;

use CoffeeCode\Router\Router;
use League\Plates\Engine;

abstract class Controllers
{
    protected $view;
    protected $router;

    public function __construct($router, $dir = null, $globals = [])
    {
        $dir = $dir ?? dirname(__DIR__, 2). "/theme/";
        $this->view = new Engine($dir, "php");
        $this->router = $router;

        $this->view->addData(["router" => $this->router]);
        if($globals) {
            $this->view->addData($globals);
        }
    }

    public function ajaxMessage(string $message, string $type): string
    {
        return json_encode(["message" => "<div class=\"message {$type}\">{$message}</div>"]);
    }
}