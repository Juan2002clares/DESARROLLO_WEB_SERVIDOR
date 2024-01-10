<?php
session_start();
require_once("./funciones.php");
$lista_personas = [];

$nombre = recoge("name");
$apellidos = recoge("apellidos");
$telefono = recoge("telefono");
$correo = recoge("correo");
$contraseña = recoge("password");
$contraseñarepetida = recoge("password2");
$fichero = recoge("file");

$_SESSION["usuario"] = [
    "nombre" => $nombre,
    "apellidos" => $apellidos,
    "telefono" => $telefono,
    "correo" => $correo,
    "password" => $contraseña,
    "repeat_password" => $contraseñarepetida,
    "fichero" => $fichero
];


if (empty($_SESSION["usuario"]["nombre"])) {
    $_SESSION["errorNombre"] = "<p>Falta el nombre</p>";
}
if (empty($_SESSION["usuario"]["apellidos"])) {
    $_SESSION["errorApellidos"] = "<p>Faltan los apellidos</p>";
}

if (empty($_SESSION["usuario"]["telefono"])) {
    $_SESSION["errorTelefono"] = "<p>Falta el telefono</p>";
}
// if(is_numeric($_SESSION["usuario"]["telefono"])){
// $_SESSION["errorTelefono"]="<p>Telefono no es numerico</p>";
// }

if ($_SESSION["usuario"]["password"] === $_SESSION["usuario"]["repeat_password"]) {
    $_SESSION["contraseñas"] = "<p>Inicio de sesión logrado</p>";
} else {
    $_SESSION["contraseñas"] = "<p>Inicio de sesión erroneo</p>";
}

$user = array(
    "nombre" => $nombre,
    "apellidos" => $apellidos,
    "telefono" => $telefono,
    "correo" => $correo,
    "password" => $contraseña,
    "repeat_password" => $contraseñarepetida,
    "fichero" => $fichero
);


$rutaArchivoJSON = "usuarios.json";

// Verifica si el archivo JSON existe
if (file_exists($rutaArchivoJSON)) {
    // Lee el contenido actual del archivo JSON
    $usuarios = json_decode(file_get_contents($rutaArchivoJSON), true);
} else {
    // Si el archivo no existe, crea un array vacío
    $usuarios = [];
}

// Agrega el nuevo usuario al array de usuarios
$usuarios[] = $user;

// Guarda el array de usuarios en el archivo JSON
file_put_contents($rutaArchivoJSON, json_encode($usuarios, JSON_PRETTY_PRINT));

header("location:alta.php");
?>