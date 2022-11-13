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
    <h2>Consulta</h2>
    <?php

        $baseDatos = $_REQUEST['bd'];
        $tabla = $_REQUEST['tabla'];
        $campo = $_REQUEST['campo'];
        $criterio = $_REQUEST['criterio'];
        $valor = $_REQUEST['valor'];

        if($criterio == "Igual a") {
           $consulta = "SELECT $campo FROM $tabla WHERE $campo='$valor'";
        } else if($criterio == "Contiene") {
            $consulta = "SELECT $campo FROM $tabla WHERE $campo LIKE '$valor'";
        } else if ($criterio == "Empieza por") {
            $consulta = "SELECT $campo FROM $tabla WHERE $campo LIKE '$valor%'";
        } else {
            $consulta = "SELECT $campo FROM $tabla WHERE $campo LIKE '%$valor'";
        }

        echo "<p>La consulta resultante es: $consulta</p>";

        echo "<br/>";

        echo "<form action='paso6.php' method='post'>";
            echo "<label for='bd'>Base de datos seleccionada: </label>";
            echo "<input type='text' name='bd' id='bd' value='$baseDatos' readonly/>";
            echo "<br/><br/>";
            echo "<label for='tabla'>Tabla seleccionada: </label>";
            echo "<input type='text' name='tabla' id='tabla' value='$tabla' readonly/>";
            echo "<br/><br/>";
            echo "<label for='campo'>Campo seleccionado: </label>";
            echo "<input type='text' name='campo' id='campo' value='$campo' readonly/>";
            echo "<br/><br/>";
            echo "<label for='criterio'>Criterio establecido: </label>";
            echo "<input type='text' name='criterio' id='criterio' value='$criterio' readonly/>";
            echo "<br/><br/>";
            echo "<label for='valor'>Valor: </label>";
            echo "<input type='text' name='valor' id='valor' value='$valor' readonly/>";
            echo "<br/><br/>";
            echo "<input type='submit' value='Enviar' id='enviar' name='enviar' />";
        echo "</form>";
    ?>
    <p><a href="paso4.php">Volver al paso de atrás</a></p>
</body>
</html>