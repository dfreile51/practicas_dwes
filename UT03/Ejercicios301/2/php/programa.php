<?php
    if(!isset($_REQUEST['enviar'])) {
        header("Location: ../index.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3.02</title>
</head>
<style>
    h1 {
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
        $equipo = $_REQUEST['equipos'];

        echo "<h1>Los jugadores del equipo: $equipo</h1>";

        $con = mysqli_connect("localhost", "nba", "nba", "nba");
        $sql = "SELECT nombre, nombre_equipo FROM jugadores WHERE nombre_equipo='$equipo'";
        $result = mysqli_query($con, $sql);

        try {
            if(mysqli_num_rows($result)>0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>Nombre</th>";
                echo "<th>Nombre_equipo</th>";
                echo "</tr>";
                while($jugador = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                        echo "<td>{$jugador['nombre']}</td>";
                        echo "<td>{$jugador['nombre_equipo']}</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No hay ningún jugador en los $equipo</p>";
            }
            mysqli_close($con);
        } catch(mysqli_sql_exception $e) {
            echo "<p>Error de conexión: ".$e->getMessage()."</p>";
        }
    ?>
</body>
</html>