<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../src/Models/User.php";
require __DIR__ . "/../src/Models/Address.php";
require __DIR__ . "/../src/Config.php";

use src\Models\User;

$user = (new User())->findById(10);

if($user) {
    $user->destroy();
} else {
    var_dump($user);
}