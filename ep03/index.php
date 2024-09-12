<?php

//echo 'oi1';

echo __DIR__ ."/vendor/autoload.php";
require __DIR__ ."/vendor/autoload.php";


use Source\Support\Email;

echo 'eeee';
$email = new Email();


$email->add(
    subject: "Esse éo meu primeiro email",
    body: "<h1>Teste</h1>",
    recipient_name: "Breno",
    recipient_email: "breno.barbosa@auditto.online"
)-> send();

echo 'oi1';

if(!$email->error()) {
    var_dump(true);
} else {
    echo $email->error()->getMessage();
}

echo 'oi';