<?php
require_once("funciones.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
    cabecera("Insertar",MENU_PRINCIPAL);
    ?>
    <main>
    <form action="insertar-2.php">
        <p>Escribe los datos del nuevo registro</p>
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" size="50" autofocus></td>
            </tr>
            <tr>
                <td>apellidos:</td>
                <td><input type="text" name="apellidos" size="50" autofocus></td>
            </tr>
            <tr>
                <td><input type="submit" value="Insertar"></td>
                <td><input type="reset" value="Reiniciar Formulario"></td>
            </tr>           
        </table>
    </form> 
    </main>
</body>
</html>