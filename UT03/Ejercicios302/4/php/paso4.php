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
    <h2>Criterio</h2>
    <?php
        require_once('funciones.php');
        $baseDatos = $_REQUEST['bd'];
        $tabla = $_REQUEST['tabla'];
        $campo = $_REQUEST['campo'];

        echo "<form action='paso5.php' method='post'>";
            echo "<label for='bd'>Base de datos seleccionada: </label>";
            echo "<input type='text' name='bd' id='bd' value='$baseDatos' readonly/>";
            echo "<br/><br/>";
            echo "<label for='tabla'>Tabla seleccionada: </label>";
            echo "<input type='text' name='tabla' id='tabla' value='$tabla' readonly/>";
            echo "<br/><br/>";
            echo "<label for='campo'>Campo seleccionado: </label>";
            echo "<input type='text' name='campo' id='campo' value='$campo' readonly/>";
            echo "<br/><br/>";
            echo "<label for='criterio'>Seleccione el criterio para la consulta: </label>";
            echo "<br/><br/>";
            echo "<select name='criterio' id='criterio'>";
                echo "<option>Igual a</option>";
                echo "<option>Contiene</option>";
                echo "<option>Empieza por</option>";
                echo "<option>Termina por</option>";
            echo "</select>";
            echo "<br/><br/>";
            echo "<label for='valor'>Valor a buscar: </label>";
            echo "<input type='text' name='valor' id='valor' />";
            echo "<br/><br/>";
            echo "<input type='submit' value='Enviar' id='enviar' name='enviar' />";
        echo "</form>";
    ?>
</body>
</html>