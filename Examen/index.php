<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        margin: 0 auto;
        border-collapse: collapse;
    }
</style>
<body>
    <?php
        /* require_once("funciones.php");
        $alumnos = obtenerAlumnos();
        echo "<pre>";
            foreach($alumnos as $alumno) {
                print_r($alumno);
            }
        echo "</pre>"; */

        /* $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        foreach($age as $x => $val) {
            echo "$x = $val<br>";
        } */

        /* require_once('funciones.php');
        $alumnos = obtenerAlumnos(); */

         
        
    ?>

    <table>
        <tr>
            <td> <a href="consultar.php">Consultar</a> </td>
            <td><a href="insertar.php">Insertar</a></td>
            <td><a href="modificarEliminar.php">Modificar o Eliminar</a></td>
        </tr>
    </table>
</body>
</html>