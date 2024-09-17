<?php

namespace src\models;

use CoffeeCode\DataLayer\DataLayer;

class User extends Datalayer
{
    public function __construct()
    {
        parent::__construct("users", ["first_name", "last_name"]);
    }
}