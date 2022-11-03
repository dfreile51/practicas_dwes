<?php
    session_start();
    if(!isset($_SESSION['alumnos'])) {
        // $_SESSION['user'] = "Invitado";
        $alumnos = array(
            array(
                "nombre" => "Juan",
                "apellidos" => "Garcia",
                "curso" => "DAW"
            ),
            array(
                "nombre" => "Diego",
                "apellidos" => "Freile",
                "curso" => "DAW"
            ),
            array(
                "nombre" => "Samuel",
                "apellidos" => "Martinez",
                "curso" => "ASIR"
            )
        );
        $_SESSION['alumnos'] = $alumnos;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Sesiones</title>
</head>
<body>
<h1>Index</h1>
        <!-- if(isset($_SESSION['user'])) {
            echo "<p>Usuario: {$_SESSION['user']}</p>";
        }else {
            echo "<p>Sesion no iniciada</p>";
        } -->
    <a href="pagina2.php">Mostrar alumnos</a>
    <a href="pagina3.php">Añadir alumno</a>
</body>
</html>