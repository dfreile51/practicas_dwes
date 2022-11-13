<?php
    session_start();
    if(!isset($_SESSION['paso'])) { 
        $_SESSION['paso'] = 1;
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3.05</title>
</head>
<body>
    <?php
        require_once('php/funciones.php');

        if (isset($_REQUEST['enviar'])) {
            $_SESSION['paso']++;
        }  
        if (isset($_REQUEST['volver'])) {
            $_SESSION['paso']--; 
        }

        switch($_SESSION['paso']) {
            case 1:
                echo "<form action='#' method='post'>";
                    echo "<label for='bd'>Seleccione la base de datos: </label>";
                    echo "<br/><br/>";
                    echo "<select name='bd' id='bd'>";
                        echo "<option value='decine'>Decine</option>";
                        echo "<option value='jardineria'>Jardinería</option>";
                        echo "<option value='nba'>Nba</option>";
                        echo "<option value='world'>World</option>";
                    echo "</select>";
                    echo "<br/><br/>";
                    echo "<input type='submit' value='Enviar' id='enviar' name='enviar' />";
                echo "</form>";
                break;
            case 2:
                if(isset($_REQUEST['bd'])) {
                    $bd = $_REQUEST['bd'];
                    $_SESSION['bd'] = $bd;
                } else {
                    $bd =$_SESSION['bd'];
                }

                $tablas = obtenerTablas($bd, $bd, $bd);

                echo "<form action='#' method='post'>";
                    echo "<label for='tabla'>Seleccione la tabla: </label>";
                    echo "<br/><br/>";
                    echo "<select name='tabla' id='tabla'>";
                    foreach($tablas as $tabla) {
                        echo "<option>$tabla</option>";
                    }
                    echo "</select>";
                    echo "<br/><br/>";
                    echo "<input type='submit' value='Enviar' id='enviar' name='enviar' />";
                    echo "<input type='submit' value='volver' id='volver' name='volver' />";
                echo "</form>";
                break;
            case 3:
                $bd = $_SESSION['bd'];
                if(isset($_REQUEST['tabla'])) {
                    $tabla = $_REQUEST['tabla'];
                    $_SESSION['tabla'] = $tabla;
                } else {
                    $tabla = $_SESSION['tabla'];
                }

                $campos = obtenerCampos($bd, $bd, $bd, $tabla);

                echo "<form action='#' method='post'>";
                    echo "<label for='campo'>Seleccione el campo: </label>";
                    echo "<br/><br/>";
                    echo "<select name='campo' id='campo'>";
                    foreach($campos as $campo) {
                        echo "<option>$campo</option>";
                    }
                    echo "</select>";
                    echo "<br/><br/>";
                    echo "<input type='submit' value='Enviar' id='enviar' name='enviar' />";
                    echo "<input type='submit' value='volver' id='volver' name='volver' />";
                 echo "</form>";
                 break;
            case 4:
                $bd = $_SESSION['bd'];
                $tabla = $_SESSION['tabla'];
                if(isset($_REQUEST['campo'])) {
                    $campo = $_REQUEST['campo'];
                    $_SESSION['campo'] = $campo;
                } else {
                    $tabla = $_SESSION['campo'];
                }

                echo "<form action='#' method='post'>";
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
                    echo "<input type='submit' value='volver' id='volver' name='volver' />";
                echo "</form>";
                break;
            case 5:
                $bd = $_SESSION['bd'];
                $tabla = $_SESSION['tabla'];
                $campo = $_SESSION['campo'];

                if(isset($_REQUEST['criterio']) && isset($_REQUEST['valor'])) {
                    $criterio = $_REQUEST['criterio'];
                    $valor = $_REQUEST['valor'];
                    $_SESSION['criterio'] = $criterio;
                    $_SESSION['valor'] = $valor;
                } else {
                    $criterio = $_SESSION['criterio'];
                    $valor = $_SESSION['valor'];
                }

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

                 echo "<form action='#' method='post'>";
                    echo "<label for='enviar'>Pulsar para ver el resultado: </label>";
                    echo "<input type='submit' value='Enviar' id='enviar' name='enviar' />";
                    echo "<input type='submit' value='volver' id='volver' name='volver' />";
                echo "</form>";
                break;
            case 6:
                $bd = $_SESSION['bd'];
                $tabla = $_SESSION['tabla'];
                $campo = $_SESSION['campo'];
                $criterio = $_SESSION['criterio'];
                $valor = $_SESSION['valor'];

                if($criterio == "Igual a") {
                    $consultas = igualA($bd, $bd, $bd, $tabla, $campo, $valor);
                 } else if($criterio == "Contiene") {
                     $consultas = contiene($bd, $bd, $bd, $tabla, $campo, $valor);
                 } else if ($criterio == "Empieza por") {
                     $consultas = empiezaPor($bd, $bd, $bd, $tabla, $campo, $valor);
                 } else {
                     $consultas = terminaPor($bd, $bd, $bd, $tabla, $campo, $valor);
                 }

                 if(is_array($consultas) && count($consultas)>0) {
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
                } else {
                    echo "<p>Resultado no disponible</p>";
                }

                break;
        }
    ?>
</body>
</html>