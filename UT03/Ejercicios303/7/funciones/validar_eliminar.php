<?php
    if(!isset($_REQUEST['eliminar'])) {
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
        $id = $_REQUEST['id'];

        require_once('funciones.php');

        if(eliminar($id, "escuela")) {
            echo "<h2>ALUMNO ELIMINADO CORRECTAMENTE</h2>";
            echo "<p><a href='../index.html'>Volver a inicio</a></p>";
        } else {
            echo "<h2>ALUMNO NO ELIMINADO</h2>";
            echo "<p><a href='../index.html'>Volver a inicio</a></p>";
        }
    ?>
</body>
</html>