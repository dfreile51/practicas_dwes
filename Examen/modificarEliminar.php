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
            echo "<th>Operacion</th>";
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
                echo "<td><form action='modificarEliminar.php' method='post'>
                            <input type='hidden' name='id_alumno' id='id_alumno' value='{$alumno['id_alumno']}' />
                            <input type='submit' value='Modificar' name='modificar' id='modificar' />
                          </form>
                          <form action='modificarEliminar.php' method='post'>
                            <input type='hidden' name='id_alumno' id='id_alumno' value='{$alumno['id_alumno']}' />
                            <input type='submit' value='Eliminar' name='eliminar' id='eliminar' />
                          </form>
                      </td>";
                echo "</tr>"; 
            }
            echo "</table>";
        } else {
            echo "<p>No hay alumnos</p>";
        }

        if(isset($_REQUEST['modificar'])) {
            $id = $_REQUEST['id_alumno'];
            $alumnos_modificar = obtenerAlumnosPorId($id);

            if(is_array($alumnos_modificar) && count($alumnos_modificar)>0) {
                foreach($alumnos_modificar as $alumno_modificar) {
                    echo "
                    <br/>
                    <form action='validar_modificar.php' method='post'>
                        <input type='hidden' name='id_alumno' id='id_alumno' value='{$alumno_modificar['id_alumno']}' /></td>
                        <table>
                            <tr>
                                <td><label for='dni'>DNI:</label></td>
                                <td><input type='text' name='dni' id='dni' value='{$alumno_modificar['DNI']}' /></td>
                            </tr>
                            <tr>
                                <td><label for='nombre'>Nombre:</label></td>
                                <td><input type='text' name='nombre' id='nombre' value='{$alumno_modificar['nombre']}' /></td>
                            </tr>
                            <tr>
                                <td><label for='apellidos'>Apellidos:</label></td>
                                <td><input type='text' name='apellidos' id='apellidos' value='{$alumno_modificar['apellidos']}' /></td>
                            </tr>
                            <tr>
                                <td><label for='fechaNac'>Fecha de nacimiento:</label></td>
                                <td><input type='date' name='fechaNac' id='fechaNac' value='{$alumno_modificar['fechaNacimiento']}' /></td>
                            </tr>
                            <tr>
                                <td><label for='direccion'>Dirección:</label></td>
                                <td><input type='text' name='direccion' id='direccion' value='{$alumno_modificar['direccion']}' /></td>
                            </tr>
                            <tr>
                                <td><label for='localidad'>Localidad:</label></td>
                                <td><input type='text' name='localidad' id='localidad' value='{$alumno_modificar['localidad']}' /></td>
                            </tr>
                            <tr>
                                <td><label for='tlfn'>Teléfono:</label></td>
                                <td><input type='number' name='tlfn' id='tlfn' value='{$alumno_modificar['telefono']}' /></td>
                            </tr>
                            <tr>
                                <td colspan='2' style='text-align: center;'><input type='submit' value='Modificar' name='modificar2' id='modificar2' /></td>
                            </tr>
                        </table>
                    </form>
                    ";
                }
            } else {
                echo "<p>No hay alumnos</p>";
            }
        } elseif(isset($_REQUEST['eliminar'])) {
            $id = $_REQUEST['id_alumno'];
             if(eliminarAlumno($id)) {
                echo "Alumno eliminado correctamente";
             } else {
                echo "Alumno no eliminado";
             }
        }
    ?>