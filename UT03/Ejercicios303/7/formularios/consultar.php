<?php
    if(!isset($_REQUEST['consultar'])) {
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

        $alumnos = obtenerAlumnos();

        if(is_array($alumnos) && count($alumnos)>0){
            echo "<h2>LISTADO DE TODOS LOS ALUMNOS</h2>";
            echo "<table>";
            echo "<tr>";
                echo "<th>#</th>";
                echo "<th>DNI</th>";
                echo "<th>Nombre</th>";
                echo "<th>Apellidos</th>";
                echo "<th>Fecha de nacimiento</th>";
                echo "<th>Dirección</th>";
                echo "<th>Localidad</th>";
                echo "<th>Teléfono</th>";
            echo "</tr>";
            foreach($alumnos as $alumno) {
                echo "<tr>";
                    /* echo "<td>{$alumno['id_alumno']}</td>";
                    echo "<td>{$alumno['DNI']}</td>";
                    echo "<td>{$alumno['nombre']}</td>";
                    echo "<td>{$alumno['apellidos']}</td>";
                    echo "<td>{$alumno['fechaNacimiento']}</td>";
                    echo "<td>{$alumno['direccion']}</td>";
                    echo "<td>{$alumno['localidad']}</td>";
                    echo "<td>{$alumno['telefono']}</td>"; */
                    foreach($alumno as $valor) {

                        echo "<td>$valor</td>";
                    }
                echo "</tr>";
            }
            echo "</table>";
            echo "<br/>";
            echo "<p><a href='../index.html'>Volver a inicio</a></p>";
        } else {
            echo "<h2>NO HAY ALUMNOS</h2>";
            echo "<p><a href='../index.html'>Volver a inicio</a></p>";
        }
    ?>
</body>
</html>