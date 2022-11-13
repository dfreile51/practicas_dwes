<?php
    if(!isset($_REQUEST['modificar2'])) {
        header('Location: ../index.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Ejercicio 3.07</title>
</head>
<body>
    <?php
        require_once('funciones.php');

        $id = $_REQUEST['id'];
        $dni = $_REQUEST['dni'];
        $nombre = $_REQUEST['nombre'];
        $apellidos = $_REQUEST['apellidos'];
        $fechaNacimiento = $_REQUEST['fecha'];
        $direccion = $_REQUEST['direccion'];
        $localidad = $_REQUEST['localidad'];
        $telefono = $_REQUEST['telefono'];

        if(actualizar($id, "escuela", $dni, $nombre, $apellidos, $fechaNacimiento, $direccion, $localidad, $telefono)) {
            echo "<h2>ALUMNO MODIFCADO CORRECTAMENTE</h2>";
            echo "<p><a href='../index.html'>Volver a inicio</a></p>";
        } else {
            echo "<h2>ALUMNO NO MODIFICADO</h2>";
            echo "<p><a href='../index.html'>Volver a inicio</a></p>";
        }
    ?>
</body>
</html>