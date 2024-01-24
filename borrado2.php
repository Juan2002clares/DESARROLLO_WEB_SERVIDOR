<?php
require_once("funciones.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $borrar = recoge("borrar");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <?php
    cabecera("Inicio",MENU_VOLVER);
    ?>
    <main>
        <?php
        if($borrar != "Si"){
            header("location:./index.php");
        }

        $pdo = conectaDb();
        if($pdo != null){
            borraTodo();
        }else{
            print("<p>Error de conexión de en la base de datos</p>");
        }
        ?>
    </main>
</body>
</html>