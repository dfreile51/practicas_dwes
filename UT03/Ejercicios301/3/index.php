<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3.03</title>
</head>
<body>
    <h2>Obtener los mejores jugadores por temporada según la estadística:</h2>
    
    <?php
        require_once("php/funciones.php");
        $temporadas = obtenerTemporadas();

        echo "<form action='php/programa.php' method='post'>";
        echo "<label for='estadisticas'>Seleccione la estadística: </label>";
        echo "<br/>";
        echo "<select name='estadisticas' id='estadisticas'>";
            echo "<option>Puntos</option>";
            echo "<option>Rebotes</option>";
            echo "<option>Asistencias</option>";
            echo "<option>Tapones</option>";
        echo "</select>";
        echo "<br/><br/>";
        echo "<label for='temporadas'>Seleccione la temporada: </label>";
        echo "<br/>";
        echo "<select name='temporadas' id='temporadas'>";
        foreach($temporadas as $temporada) {
            /* if(str_starts_with($temporada, 0)) {
                $temporadaMostrar = "20".$temporada;
            } else {
                $temporadaMostrar = "19".$temporada;
            } */
            echo "<option>$temporada</option>";
        }
        echo "</select>";
        echo "<br/><br/>";
        echo "<label for='numJugadores'>Indique el número de jugadores a mostrar: </label>";
        echo "<br/>";
        echo "<input type='number' name='numJugadores' id='numJugadores' min='1' />";
        echo "<br/><br/>";
        echo "<input type='submit' value='Enviar' name='enviar' id='enviar' />";
        echo "</form>";
    ?>
</body>
</html>