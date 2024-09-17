<?php

namespace src\App;

use League\Plates\Engine;
use src\Models\User;

class Web
{

    private $view;

    public function __construct()
    {   
        $this->view = Engine::create(__DIR__ ."/../../theme", "php");
    }

    public function home(): void 
    {
        $users = (new User())->find()->fetch(true);

        
        echo $this->view->render("home", [
            "title" => "Home | ". SITE,
            "users" => $users
        ]);;
    }

    public function contact(): void 
    {
        echo "<h1>Contato</h1>";
    }

    public function error(array $data): void 
    {
        echo $this->view->render("error", [
            "title" => "Error {$data['errcode']} | ". SITE,
            "error" => $data['errcode']
        ]);;
    }
}