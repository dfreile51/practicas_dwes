<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
</head>
<style>
    table {
        margin: 0 auto;
        border-collapse: collapse;
    }

    td, th {
        padding: 6px;
        border: 1px solid black;
    }
</style>
<body>
    <?php
        require_once("funciones.php");

        $alumnos = obtenerAlumnos();

        if(is_array($alumnos) && count($alumnos)>0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>#</th>";
            echo "<th>DNI</th>";
            echo "<th>Nombre</th>";
            echo "<th>Apellidos</th>";
            echo "<th>Fecha de nacimiento</th>";
            echo "<th>Direccion</th>";
            echo "<th>Localidad</th>";
            echo "<th>Telefono</th>";
            echo "</tr>";
            foreach($alumnos as $alumno) {
                echo "<tr>";
                echo "<td>{$alumno['id_alumno']}</td>";
                echo "<td>{$alumno['DNI']}</td>";
                echo "<td>{$alumno['nombre']}</td>";
                echo "<td>{$alumno['apellidos']}</td>";
                echo "<td>{$alumno['fechaNacimiento']}</td>";
                echo "<td>{$alumno['direccion']}</td>";
                echo "<td>{$alumno['localidad']}</td>";
                echo "<td>{$alumno['telefono']}</td>";
                echo "</tr>"; 
            }
            echo "</table>";
        } else {
            echo "<p>No hay alumnos</p>";
        }
    ?>
</body>
</html>