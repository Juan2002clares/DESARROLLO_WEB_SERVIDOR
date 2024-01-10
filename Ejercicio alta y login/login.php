<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style_login.css">
</head>
<body>
    <?php require_once('menu.php')?>
    <fieldset>
    <form method="POST" action="procesar_login.php">
    <p><strong>Login</strong></p>
    <p class="datos">Usuario: <br><input type="email" name="userlogin"></p>
    <p class="datos">Contraseña:<br><input type="password" name="passwordlogin"></p>
    <button type="submit" value="login">Log in</button>
    <?php
    session_start();
    if(isset($_SESSION["error"])){
        print $_SESSION["error"];
    }
    ?>
    </form>
</fieldset> 
    <?php require_once('footer.php')?>
</body>
</html>