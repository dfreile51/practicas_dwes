<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3.02</title>
</head>
<body>
    <h2>Elige un equipo para mostrar a los jugadores</h2>
    
    <?php
        try {
            $con = mysqli_connect("localhost", "nba", "nba", "nba");
            $sql = "SELECT nombre FROM equipos";
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result)>0) {
                echo "<form action='php/programa.php' method='post'>";
                echo "<label for='equipos'>Equipos: </label>";
                echo "<select name='equipos' id='equipos'>";
                while($equipo = mysqli_fetch_row($result)) {
                    foreach($equipo as $valor) {
                        echo "<option>$valor</option>";
                    }
                }
                echo "</select>";
                echo "<br/><br/>";
                echo "<input type='submit' value='Enviar' name='enviar' id='enviar'/>";
                echo "</form>";
            } else {
                echo "<p>No hay ningún equipo</p>";
            }
        } catch(mysqli_sql_exception $e) {
            echo "<p>Error de conexión: ".$e->getMessage()."</p>";
        }
    ?>
</body>
</html>