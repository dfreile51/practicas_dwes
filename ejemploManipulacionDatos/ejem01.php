<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulacion de cadenas</title>
    <style>
        table, td {
            border: 1px solid black;
        }


    </style>
</head>
<body>
    <?php
        /* $nombre = "  fdasfsfsa  .....";
        echo "<h2>Antes del trim</h2>";
        echo "<p>#$nombre#</p>";
        echo "<h2>Después del trim</h2>";
        $nombre = trim(trim($nombre,"."));
        echo "<p>#$nombre#</p>";

        echo "<p>--------------</p>";
        $texto = "Una linea\nY otra linea";
        echo "<p>$texto</p>";
        echo "<p>--------------</p>"; */

        /* $precios = array(7,2.67,55.49,16.5);
        echo "<table>";

        foreach($precios as $precio) {

            printf("<tr><td class='precio'>Precio: %5.2f</td></tr>",$precio);
        }

        echo "</table>"; */

        $nombre = "diego";
        $nombreMayus = strtoupper($nombre);
        if(strtoupper($nombre) == "diego") {
            echo "Login correcto $nombreMayus";
        } else {
            echo "Usuario incorrecto";
        }

        // echo "<p>$nombreMayus</p>";

    ?>
</body>
</html>