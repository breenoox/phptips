<?php

$mail->SMTPDebug = 2;                   
$mail->isSMTP();                         
$mail->Host       = 'smtp.example.com'; 
$mail->SMTPAuth   = true;               
$mail->Username   = 'user@example.com'; 
$mail->Password   = 'secret';           
$mail->SMTPSecure = 'tls';            
$mail->Port       = 465;  

define("MAIL", [
    "host" => "",
    "port" => "",
    "user" => "",
    "passwd" => "",
    "from_name" => "Breno Mensagem",
    "from_email" => "breno.barbosa@auditto.online"
]);

