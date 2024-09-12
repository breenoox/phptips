<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../src/Models/User.php";
require __DIR__ . "/../src/Models/Address.php";
require __DIR__ . "/../src/Config.php";

use src\Models\User;
use src\Models\Address;

$user = new User();
$user->first_name = "Breno";
$user->last_name = "Barbosa";
$user->genre = "M";
$user->save();

//$addr = new Address();
//$addr->add($user, street: "Rua Ascencional", number: 12);
//$addr->save();

var_dump($addr);