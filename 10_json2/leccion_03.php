<?php
$lista_persona = [];
$persona = array(
    "nombre" => "Juan",
    "email" => "holacontact@gmail.com",
    "direccion" => "Calle fulanico"
);
array_push($persona);

$json_Persona = json_encode($persona, JSON_PRETTY_PRINT);

print_r($json_Persona);

$file = 'bbdd/datos1.json';

file_put_contents($file,$json_Persona);
?>