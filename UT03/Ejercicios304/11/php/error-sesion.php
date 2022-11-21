<?php
    session_start();
    if(!isset($_SESSION['usuario'])) {
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
    <h1>Usuario o contraseña incorrectos</h1>
    <a href="../index.php">Volver a intentarlo</a>
</body>
</html>