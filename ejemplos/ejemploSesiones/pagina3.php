<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Sesion</title>
</head>
<body>
    <h1>Pagina 3</h1>
    <?php
        if(isset($_SESSION['alumnos'])) {
            $alumno = array(
                "nombre" => "Sergio",
                "apellidos" => "Freile",
                "curso" => "OPO"
            );
            $_SESSION['alumnos'][] = $alumno;
            echo "<pre>";
            print_r($_SESSION['alumnos']);
            echo "</pre>";
        }else {
            echo "<p>no hay alumnos</p>";
        }
    ?>
    <a href="index.php">Ir a index</a>
</body>
</html>