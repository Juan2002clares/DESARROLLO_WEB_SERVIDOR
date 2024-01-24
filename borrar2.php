<?php
require_once("funciones.php");

if($_SERVER["REQUEST_METHOD"] == "POST" ){
    $listaids = recogelista("listaids");
}
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
    cabecera("Listar", MENU_VOLVER);
    ?>
    <main>

    <?php
    
    $pdo = conectaDb();
    $consulta = "DELETE FROM $cfg[nombretabla] WHERE id = :id";
    $resultado = $pdo->prepare($consulta);
    foreach ($listaids as $id) {
        if(!$resultado){
            print "<p class=\"aviso\">Error en la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
        }elseif(!$resultado->execute([":id" => $id])){
            print "<p class=\"aviso\">Error en la consulta. SQLSTATE[{$resultado->errorCode()}</p>\n";
        }else{
            print "<p class=\"aviso\">Registro eliminado correctamente</p>\n";
            $pdo=null;
        }
    }

    ?>

    </main>
</body>
</html>