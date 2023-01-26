<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio CSV</title>
</head>
<style>
    table {
        margin: 0 auto;
    }
    td, th {
        border: 1px solid black;
        padding: 4px 8px;
    }
</style>
<body>
    <?php
        require_once 'php/funciones.php';
        $ruta = "data/escuela.csv"; 
        $alumnos = leerCsv($ruta);
        mostrarAlumnos($alumnos);
    ?>
    <form action="#" method="post">
        <label for="nombre">Nombre completo: </label>
        <br>
        <input type="text" name="nombre" id="nombre" />
        <br><br>
        <label for="fecha">Fecha de nacimineto: </label>
        <br>
        <input type="date" name="fecha" id="fecha" />
        <br><br>
        <label for="curso">Curso: </label>
        <br>
        <input type="text" name="curso" id="curso" />
        <br><br>
        <label for="email">Email: </label>
        <br>
        <input type="text" name="email" id="email" />
        <br><br>
        <input type="submit" value="Enviar" name="enviar" id="enviar" />
    </form>

    <?php
        if(isset($_REQUEST['enviar'])) {
            $alumno = [
                $_REQUEST['nombre'],
                $_REQUEST['fecha'],
                $_REQUEST['curso'],
                $_REQUEST['email']
            ];

            insertarAlumno($alumno, $ruta);
        }
    ?>
</body>
</html>