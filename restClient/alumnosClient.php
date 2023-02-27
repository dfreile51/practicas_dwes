<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de alumnos</h1>
    <hr>

    <form action="#" method="POST">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="apellidos">Apellidos: </label>
        <input type="text" name="apellidos" id="apellidos"><br>
        <label for="curso">Curso: </label>
        <input type="text" name="curso" id="curso">
        <br>
        <input type="submit" value="Buscar" name="buscar" id="buscar">
    </form>
    <?php
        $uriAlumnos = "http://localhost/dwes/laescuela/alumnos/";

        if(isset($_REQUEST['buscar'])) {
            $nombre = $_REQUEST['nombre'];
            $apellidos = $_REQUEST['apellidos'];
            $curso = $_REQUEST['curso'];

            if($nombre != '' || $apellidos != '' || $curso != '') {
                $uriAlumnos .= "?";
            }

            if($curso != '') {
                $uriAlumnos .= "curso={$curso}";
            }

            if($nombre != '' && $apellidos != '') {
                $uriAlumnos .= "&nombre={$nombre}&apellidos={$apellidos}";
            }
        }

        $alumnosJSON = file_get_contents($uriAlumnos);
        $alumnos = json_decode($alumnosJSON);

        echo "<pre>";
        print_r($alumnos);
        echo "</pre>";
    ?>
</body>
</html>