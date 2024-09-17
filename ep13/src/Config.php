<?php

define("ROOT", "https://localhost/phptips/ep13");

define("SITE", "PHPTips");

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "phptips",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

function url(string $uri = null): string 
{
    if ($uri) {
        return ROOT . "/{$uri}";
    }

    return ROOT;
}

function message(string $message, string $type)
{
    return "<div class=\"message {$type}\">{$message}</div>";
}