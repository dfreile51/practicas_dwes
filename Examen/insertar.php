<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
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
    <form action="insertar.php" method="post">
        <table>
            <tr>
                <td><label for="dni">DNI:</label></td>
                <td><input type="text" name="dni" id="dni" /></td>
            </tr>
            <tr>
                <td><label for="nombre">Nombre:</label></td>
                <td><input type="text" name="nombre" id="nombre" /></td>
            </tr>
            <tr>
                <td><label for="apellidos">Apellidos:</label></td>
                <td><input type="text" name="apellidos" id="apellidos" /></td>
            </tr>
            <tr>
                <td><label for="fechaNac">Fecha de nacimiento:</label></td>
                <td><input type="date" name="fechaNac" id="fechaNac" /></td>
            </tr>
            <tr>
                <td><label for="direccion">Dirección:</label></td>
                <td><input type="text" name="direccion" id="direccion" /></td>
            </tr>
            <tr>
                <td><label for="localidad">Localidad:</label></td>
                <td><input type="text" name="localidad" id="localidad" /></td>
            </tr>
            <tr>
                <td><label for="tlfn">Teléfono:</label></td>
                <td><input type="number" name="tlfn" id="tlfn" /></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="Insertar" name="insertar" id="insertar" /></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_REQUEST['insertar'])) {
            require_once("funciones.php");
    
            $dni = $_REQUEST['dni'];
            $nombre = $_REQUEST['nombre'];
            $apellidos = $_REQUEST['apellidos'];
            $fechaNac = $_REQUEST['fechaNac'];
            $direccion = $_REQUEST['direccion'];
            $localidad = $_REQUEST['localidad'];
            $tlfn = $_REQUEST['tlfn'];
    
            if(insertarAlumno($dni, $nombre, $apellidos, $fechaNac, $direccion, $localidad, $tlfn)) {
                echo "<p>Insertado correctamente</p>";
            } else {
                echo "<p>No insertado</p>";
            }
        }
    ?>
</body>
</html>