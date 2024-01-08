<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style_alta.css">
</head>

<body>
    <br>
    <header><b>Hola Bienvenido a nuestro formulario de Alta</b></header>
    <br>
    <div>
        <form action="procesar_alta.php" method="post">
            <table>
                <tr>
                    <td>Nombre:<br><input type="text" name="name"></td>
                    <td>Apellido: <br><input type="text" name="apellidos"></td>
                </tr>
                <tr>
                    <td>Telefono: <br><input type="text" name="telefono"></td>
                    <td>Correo: <br><input type="email" name="correo" required></td>
                </tr>
                <tr>
                    <td>Contraseña: <br><input type="password" name="password" required></td>
                    <td>Repite Contraseña:  <br><input type="password" name="password2" required></td>
                </tr>
                <tr>
                    <td>Seleccione archivo de imagen<input type="file" name="file"></td>
                </tr>
            </table>
            <button type="submit" value="boton">Darse de Alta</button>
        </form>
        </div>
        <?php
        if (isset($_SESSION["errorNombre"])) {
            print "<p>" . $_SESSION["errorNombre"] . "</p>";
            unset($_SESSION["errorNombre"]);
        }
        if (isset($_SESSION["errorApellidos"])) {
            print "<p>" . $_SESSION["errorApellidos"] . "</p>";
            unset($_SESSION["errorApellidos"]);
        }
        if (isset($_SESSION["errorTelefono"])) {
            print "<p>" . $_SESSION["errorTelefono"] . "</p>";
            unset($_SESSION["errorTelefono"]);
        }
        if (isset($_SESSION["contraseñas"])) {
            print "<p>" . $_SESSION["contraseñas"] . "</p>";
            unset($_SESSION["contraseñas"]);
        }
        ?>
</body>

</html>