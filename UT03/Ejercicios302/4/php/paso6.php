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
<style>
    h1, h2, p {
        text-align: center;
    }

    table {
        margin: 0 auto;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid black;
        padding: 4px;
    }
</style>
<body>
    <h2>Resultado</h2>
    <?php
        require_once('funciones.php');

        $baseDatos = $_REQUEST['bd'];
        $tabla = $_REQUEST['tabla'];
        $campo = $_REQUEST['campo'];
        $criterio = $_REQUEST['criterio'];
        $valor = $_REQUEST['valor'];

        if($criterio == "Igual a") {
           $consultas = igualA($baseDatos, $baseDatos, $baseDatos, $tabla, $campo, $valor);
        } else if($criterio == "Contiene") {
            $consultas = contiene($baseDatos, $baseDatos, $baseDatos, $tabla, $campo, $valor);
        } else if ($criterio == "Empieza por") {
            $consultas = empiezaPor($baseDatos, $baseDatos, $baseDatos, $tabla, $campo, $valor);
        } else {
            $consultas = terminaPor($baseDatos, $baseDatos, $baseDatos, $tabla, $campo, $valor);
        }

        /* if(is_array($consultas) && count($consultas)>0) { */
            echo "<table>";
            echo "<tr>";
            echo "<th>$campo</th>";
            echo "</tr>";
            foreach($consultas as $consulta) {
                echo "<tr>";
                    echo "<td>$consulta</td>";
                echo "</tr>";
            }
            echo "</table>";
        /* } else { */
            /* echo "<p>Error</p>"; */
        /* } */
        
        


        /* echo "<p>La consulta resultante es: $consulta</p>";

        echo "<br/>"; */

        /* echo "<form action='paso6.php' method='post'>";
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
        echo "</form>"; */
    ?>
</body>
</html>