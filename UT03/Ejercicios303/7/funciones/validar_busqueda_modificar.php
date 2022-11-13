<?php
    if(!isset($_REQUEST['buscarModificar'])) {
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
    <title>Document</title>
</head>
<body>
    <?php
        $busqueda = $_REQUEST['busqueda'];

        require_once('funciones.php');

        $alumnoBuscado = alumnosPorNombreOApellidos($busqueda, $busqueda, "escuela");

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
                            <form action='../funciones/modificar.php' method='post'>
                                <input type='hidden' name='id' id='id' value='{$alumno['id_alumno']}'/>
                                <input type='submit' value='Modificar' name='modificar' id='modificar' />
                            </form>
                        </td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<br/>";
            echo "<p><a href='../formularios/modificar.php'>Buscar otro alumno</a></p>";
        } else {
            echo "<h2>NO SE HAN ENCONTRADO ALUMNOS</h2>";
            echo "<p><a href='../index.html'>Volver a inicio</a></p>";
        }
    ?>
</body>
</html>