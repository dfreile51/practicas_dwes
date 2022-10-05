<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios 206</title>
    <style>
        table, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_REQUEST['enviar'])) {
            $filas = $_REQUEST['filas'];
            $columnas = $_REQUEST['columnas'];
    ?>
    <table>
    <?php
    $num = 0;
        for($i=1;$i<=$filas;$i++) {
            echo "<tr>";

                for ($j=1;$j<$columnas;$j++) {
                    $num++;
                    echo "<td>$num</td>";
                }
            echo "</tr>";
        }
    ?>
    </table>
    <?php
        } else {
            echo "<h3>No se han recibido datos del usuario</h3>";
        }
    ?>
</body>
</html>