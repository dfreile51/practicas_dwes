<?php
    if(!isset($_REQUEST['enviar'])) {
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Ejercicio 3.06</title>
</head>
<body>
    <?php
        /* require_once('funciones.php');

        $dni = $_REQUEST['dni'];
        $nombre = $_REQUEST['nombre'];
        $apellidos = $_REQUEST['apellidos'];
        $fecha = $_REQUEST['fecha'];
        $direccion = $_REQUEST['direccion'];
        $localidad = $_REQUEST['localidad'];
        $tlfn = $_REQUEST['tlfn'];

        if(insertar($dni, $nombre, $apellidos, $fecha, $direccion, $localidad, $tlfn)) {
            echo "<h3>Información de los datos</h3>";
            echo "<table>";
            echo "<tr>";
                echo "<th>DNI</th>";
                echo "<th>Nombre</th>";
                echo "<th>Apellidos</th>";
                echo "<th>Fecha Nacimiento</th>";
                echo "<th>Dirección</th>";
                echo "<th>Localidad</th>";
                echo "<th>Teléfono</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>$dni</td>";
                echo "<td>$nombre</td>";
                echo "<td>$apellidos</td>";
                echo "<td>$fecha</td>";
                echo "<td>$direccion</td>";
                echo "<td>$localidad</td>";
                echo "<td>$tlfn</td>";
            echo "</tr>";
            echo "</table>";
            echo "<p><a href='../index.php'>Añadir otro alumno</a></p>";
        } else {
            echo "<p>Error al intentar insertar</p>";
        } */

        echo "<h2>DATOS RECOGIDOS</h2>";

        if(isset($_REQUEST['enviar'])){

            require_once("funciones.php");

            $alumno = array(
                "dni" => $_REQUEST['dni'],
                "nombre" => $_REQUEST['nombre'],
                "apellidos" => $_REQUEST['apellidos'],
                "direccion" => $_REQUEST['direccion'],
                "telefono" => $_REQUEST['telefono'],
                "localidad" => $_REQUEST['localidad'],
                "fecha_nac" => $_REQUEST['fecha']
            );

            $insertado = insertar("escuela","alumnos",$alumno);
            if($insertado){
                echo "<h2>ALUMNO INSERTADO CORRECTAMENTE</h2>";
            }else{
                echo "<h2>NO SE HA PODIDO INSERTAR EL USUARIO</h2>";
            }
            

        }
        else{
            echo"<h3> No se han recibido datos del usuario</h3>";
        }
    ?>
</body>
</html>