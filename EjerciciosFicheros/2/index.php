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
</body>
</html>