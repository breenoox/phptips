<?php

namespace src\app;

class Web 
{
    public function home($data) {
        echo "<h1>Home</h1>";
        var_dump($data);
    }

    public function contact($data) {
        echo "<h1>COntato</h1>";
        var_dump($data);
    }

    public function error($data) {
        echo "<h1>Erro</h1>";
        var_dump($data);
    }

}