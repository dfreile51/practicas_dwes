<?php
    if(!isset($_REQUEST['buscarEliminar'])) {
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
        $busqueda = $_REQUEST['busqueda'];
        $campo = "apellidos";

        require_once('funciones.php');

        $alumnoBuscado = obtenerAlumnos($campo, $busqueda);

        if(is_array($alumnoBuscado) && count($alumnoBuscado)>0) {
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
                echo "<th>Operación</th>";
            echo "</tr>";
            foreach($alumnoBuscado as $alumno) {
                echo "<tr>";
                    echo "<td>{$alumno['id_alumno']}</td>";
                    echo "<td>{$alumno['DNI']}</td>";
                    echo "<td>{$alumno['nombre']}</td>";
                    echo "<td>{$alumno['apellidos']}</td>";
                    echo "<td>{$alumno['fechaNacimiento']}</td>";
                    echo "<td>{$alumno['direccion']}</td>";
                    echo "<td>{$alumno['localidad']}</td>";
                    echo "<td>{$alumno['telefono']}</td>";
                    echo "<td>
                            <form action='../funciones/validar_eliminar.php' method='post'>
                                <input type='hidden' name='id' id='id' value='{$alumno['id_alumno']}'/>
                                <input type='submit' value='Eliminar' name='eliminar' id='eliminar' />
                            </form>
                        </td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<br/>";
            echo "<p><a href='../formularios/eliminar.php'>Buscar otro alumno</a></p>";
        } else {
            echo "<h2>NO SE HAN ENCONTRADO ALUMNOS</h2>";
            echo "<p><a href='../index.html'>Volver a inicio</a></p>";
        }
    ?>
</body>
</html>