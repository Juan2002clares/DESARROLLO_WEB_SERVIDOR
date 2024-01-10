<?php
session_start();
require_once("funciones.php");

$rutaArchivoJSON = "usuarios.json";
$contenidoJSON = file_get_contents($rutaArchivoJSON);

// Decodificar el contenido JSON en un array
$usuarios = json_decode($contenidoJSON, true);

// Datos del usuario a comparar
$nombreUsuario = recoge("userlogin");
$contraseñaUsuario = recoge("passwordlogin");

if($nombreUsuario == null or $contraseñaUsuario==null){
    $_SESSION["errorlogin"] = "Falta usuario o contraseña";
}

// Realizar la comparación
foreach ($usuarios as $usuario) {
    if ($usuario["correo"] === $nombreUsuario && $usuario["password"] === $contraseñaUsuario) {
        $usuarioEncontrado = $usuario;
        break;
    }
}

// Verificar si se encontró un usuario

if ($usuarioEncontrado != null) {
    // Devolver el objeto que coincide
    $data = json_encode($usuarioEncontrado);
    header("location:correcto.html");
} else {
    // No se encontró ningún usuario
    $_SESSION["error"] = "Usuario no válido";
    header("location:login.php");
}

?>