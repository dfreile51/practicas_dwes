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
    <h2>Campo</h2>
    <?php
        require_once('funciones.php');
        $baseDatos = $_REQUEST['bd'];
        $tabla = $_REQUEST['tabla'];

        $campos = obtenerCampos($baseDatos, $baseDatos, $baseDatos, $tabla);

        echo "<form action='paso4.php' method='post'>";
            echo "<label for='bd'>Base de datos seleccionada: </label>";
            echo "<input type='text' name='bd' id='bd' value='$baseDatos' readonly/>";
            echo "<br/><br/>";
            echo "<label for='tabla'>Tabla seleccionada: </label>";
            echo "<input type='text' name='tabla' id='tabla' value='$tabla' readonly/>";
            echo "<br/><br/>";
            echo "<label for='campo'>Seleccione el campo: </label>";
            echo "<br/><br/>";
            echo "<select name='campo' id='campo'>";
            foreach($campos as $campo) {
                echo "<option>$campo</option>";
            }
            echo "</select>";
            echo "<br/><br/>";
            echo "<input type='submit' value='Enviar' id='enviar' name='enviar' />";
        echo "</form>";
    ?>
</body>
</html>