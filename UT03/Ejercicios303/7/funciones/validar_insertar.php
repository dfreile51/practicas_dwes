<?php
    if(!isset($_REQUEST['insertar'])) {
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
        require_once('../funciones/funciones.php');

        $alumno = array(
            "dni" => $_REQUEST['dni'],
            "nombre" => $_REQUEST['nombre'],
            "apellidos" => $_REQUEST['apellidos'],
            "fechaNacimiento" => $_REQUEST['fecha'],
            "direccion" => $_REQUEST['direccion'],
            "localidad" => $_REQUEST['localidad'],
            "telefono" => $_REQUEST['telefono']
        );

        $insertado = insertar("escuela", "alumnos", $alumno);

        if($insertado) {
            echo "<h2>ALUMNO INSERTADO CORRECTAMENTE</h2>";
            echo "<p><a href='../index.html'>Volver a inicio</a></p>";
        } else{
            echo "<h2>ERROR, ALUMNO NO INSERTADO</h2>";
            echo "<p><a href='../index.html'>Volver a inicio</a></p>";
        }
    ?>
</body>
</html>