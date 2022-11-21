<?php
    session_start();
    if(!isset($_SESSION['usuario']) || $_SESSION['usuario'] == "invitado") {
        header('Location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3.11</title>
</head>
<body>
    <?php
        $usuario = $_SESSION['usuario'];
        echo "<h1>Bienvenido, $usuario</h1>";
        echo "<a href='cerrar-sesion.php'>Cerrar Sesión</a>";
    ?>
</body>
</html>