<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3.04</title>
</head>
<body>
    <h2>Base de Datos</h2>
    <?php
        echo "<form action='php/paso2.php' method='post'>";
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
    ?>
</body>
</html>