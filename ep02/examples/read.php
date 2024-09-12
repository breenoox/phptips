<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../src/Config.php";
require __DIR__ . "/../src/Models/User.php";
require __DIR__ . "/../src/Models/Address.php";

use CoffeeCode\DataLayer\Connect;
use src\Models\User;

$conn = Connect::getInstance();
$error = Connect::getError();

if($error) {
    echo $error->getMessage();
    die();
}
/*
$query = $conn->query("SELECT * FROM users");
var_dump($query->fetchAll());
*/

$user = new User();
$list = $user->find()->fetch(true);

foreach($list as $userItem) {
    var_dump($userItem->data());
    foreach ($userItem->addresses() as $address) {
        var_dump($address->data());
    }
}