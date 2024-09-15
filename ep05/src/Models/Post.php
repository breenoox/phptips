<?php

namespace src\Models;

use CoffeeCode\DataLayer\DataLayer;

require __DIR__ . "/../Config.php";

class Post extends DataLayer
{
    public function __construct()
    {
        parent::__construct("posts", ["title", "description"]);
    } 
}