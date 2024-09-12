<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../src/Models/User.php";
require __DIR__ . "/../src/Models/Address.php";
require __DIR__ . "/../src/Config.php";

use src\Models\User;

$user = (new User())->findById(8);
$user->first_name = "Pedro";
$user->save();

var_dump($user);