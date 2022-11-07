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
    <title>Ejercicio 3.03</title>
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
    
    <?php
        require_once('funciones.php');

        $estadistica = $_REQUEST['estadisticas'];
        $temporada = $_REQUEST['temporadas'];
        $numJugadores = intval($_REQUEST['numJugadores']);
        /* $nombreJugador = "jugadores.nombre";
        $nombreEquipoJugador = "jugadores.nombre_equipo";
        $codJugador = "jugadores.codigo";
        $codEstaJugador = "estadisticas.jugador";
        $estadisticaTempo = "estadisticas.temporada"; */

        
        /* switch($estadisticas) {
            case 'Puntos':
                $estadistica = 'puntos_por_partido';
                break;
            case 'Rebotes':
                $estadistica = 'rebotes_por_partido';
                break;
            case 'Tapones':
                $estadistica = 'tapones_por_partido';
                break;
            case 'Asistencias':
                $estadistica = 'asistencias_por_partido';
                break;
        } */

        echo "<h1>TOP $numJugadores</h1>";
        echo "<h2>$estadistica por partido ($temporada)</h2>";
        $jugadores = obtenerJugadores( $estadistica, $temporada, $numJugadores);
        if(is_array($jugadores) && count($jugadores)>0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Jugador</th>";
            echo "<th>Equipo</th>";
            echo "<th>$estadistica</th>";
            echo "</tr>";
            foreach($jugadores as $jugador) {
                echo "<tr>";
                    echo "<td>{$jugador['nombre']}</td>";
                    echo "<td>{$jugador['nombre_equipo']}</td>";
                    echo "<td>{$jugador[$estadistica]}</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No hay ningún jugador</p>";
        }

        echo "<br/>";
        echo "<p><a href='../index.php'>Hacer otra consulta</a></p>";
    ?>
</body>
</html>