<?php
    if(!isset($_REQUEST['enviar'])) {
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3.04</title>
</head>
<body>
    <h2>Tabla</h2>
    <?php
        require_once('funciones.php');
        $baseDatos = $_REQUEST['bd'];

        $tablas = obtenerTablas($baseDatos, $baseDatos, $baseDatos);

        echo "<form action='paso3.php' method='post'>";
            echo "<label for='bd'>Base de datos seleccionada: </label>";
            echo "<input type='text' name='bd' id='bd' value='$baseDatos' readonly/>";
            echo "<br/><br/>";
            echo "<label for='tabla'>Seleccione la tabla: </label>";
            echo "<br/><br/>";
            echo "<select name='tabla' id='tabla'>";
            foreach($tablas as $tabla) {
                echo "<option>$tabla</option>";
            }
            echo "</select>";
            echo "<br/><br/>";
            echo "<input type='submit' value='Enviar' id='enviar' name='enviar' />";
        echo "</form>";
    ?>
    <p><a href="../index.php">Volver al paso de atrás</a></p>
</body>
</html>