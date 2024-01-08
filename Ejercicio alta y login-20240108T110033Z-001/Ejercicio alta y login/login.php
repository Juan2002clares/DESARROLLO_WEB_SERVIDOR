<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style_login.css">
</head>
<body>
    <header>Inicio de Sesion</header>
    <fieldset>
    <form method="POST" action="procesar_login.php">
    <p>Usuario: <br><input type="email" name="userlogin"></p>
    <p>Contraseña:<br><input type="password" name="passwordlogin"></p>
    <button type="submit" value="login">Iniciar Sesión</button>
    <?php
    session_start();
    if(isset($_SESSION["error"])){
        print $_SESSION["error"];
    }
    ?>
    <?php require_once('footer.html')?>
    </form>
</fieldset>
    
</body>
</html>