<?php

$lista_personas = [];

$persona = array(
    "nombre" => "Juan",
    "email" => "holacontact@gmail.com",
    "direccion" => "Calle fulanico"
);

//Se le pasa una array y el objeto o variable a introducir en ese array
array_push($lista_personas,$persona);

//Creamos el json
//coje la lista y con el JSON le hace un formateo bonito
$json_lista_personas = json_encode($lista_personas,JSON_PRETTY_PRINT);

//Imprime el array
print "<pre>";
print_r($json_lista_personas);
print"<hr>";
print "</pre>";

//Creamos el fichero en el que recoger los datos
$file = "bbdd/datos2.json";
//Primero se le pasa el fichero y luego la variable con el encode 
file_put_contents($file,$json_lista_personas);
//file_get_contents le pasas el fichero en el siguiente formato
//"./{$file}"// y su parametro de use include path incluye esa ruta
$jsonData = file_get_contents("./{$file}",FILE_USE_INCLUDE_PATH);
//Descifra el los $jsonData
$lista_persona = json_decode($jsonData);

$persona = array(
    "Nombre" => "Alicia",
    "Edad" => "19",
    "dirección" => "Calle cruz"
);

array_push($lista_personas,$persona);

$json_lista_personas = json_encode($lista_personas,JSON_PRETTY_PRINT);
print "<pre>";
print_r($json_lista_personas);
print"<hr>";
print "</pre>";

file_put_contents($file,$json_lista_personas);

?>