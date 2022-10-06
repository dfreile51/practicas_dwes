<?php
    $jugada = 0;
    $sumaCaras = 0;
    if(!isset($_REQUEST['enviar'])) {
        header("Location: ../index.html");
    } else {
        $nombre = $_REQUEST['nombre'];
        $jugada = $_REQUEST['jugada'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        img {
            width: 77.8px;
            height: 100px;
        }
    </style>
    <title>Ejercicio 2.22</title>
</head>
<body>
    <p>Suerte, <?php echo $nombre; ?></p>
    <?php
        echo "<p>Jugada: $jugada</p>";

        $caraDado1 = rand(1,6);
        $caraDado2 = rand(1,6);

        echo "<table>
                <tr>
                    <td><img src='../imgs/$caraDado1.jpg' alt='$caraDado1'/></td>
                    <td><img src='../imgs/$caraDado2.jpg' alt='$caraDado2'/></td>
                </tr>
            </table>";

        $sumaCaras = $caraDado1 + $caraDado2;
        if($jugada==$sumaCaras) {
            echo "<p>¡¡¡ Enhorabuena $nombre, ha ganado !!!</p>";
        } else {
            echo "<p>La banca ha ganado, lo siento mucho.</p>";
        }
    ?>
</body>
</html>