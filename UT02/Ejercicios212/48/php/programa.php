<?php
    if(!isset($_REQUEST['jugar'])) {
        header("Location: ../index.html");
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1, p {
            text-align: center;
        }
        table {
            margin: 0 auto;
        }
        img {
            width: 77.8px;
            height: 100px;
        }
    </style>
    <title>Ejercicio 2.48</title>
</head>
<body>
    <h1>Pétalos Alrededor De La Rosa</h1>
    <?php
        $nombre = $_REQUEST['nombre'];
        $petalos = $_REQUEST['petalos'];

        $caras = array(
            rand(1,6),
            rand(1,6),
            rand(1,6),
            rand(1,6),
            rand(1,6)
        );

        /* $caraDado1 = rand(1,6);
        $caraDado2 = rand(1,6);
        $caraDado3 = rand(1,6);
        $caraDado4 = rand(1,6);
        $caraDado5 = rand(1,6); */

        echo "<table>
                <tr>
                    <td><img src='../imgs/{$caras[0]}.jpg' alt='{$caras[0]}'/></td>
                    <td><img src='../imgs/{$caras[1]}.jpg' alt='{$caras[1]}'/></td>
                    <td><img src='../imgs/{$caras[2]}.jpg' alt='{$caras[2]}'/></td>
                    <td><img src='../imgs/{$caras[3]}.jpg' alt='{$caras[3]}'/></td>
                    <td><img src='../imgs/{$caras[4]}.jpg' alt='{$caras[4]}'/></td>
                </tr>
            </table>";
        
        $sumaPetalos = 0;
        for($i=0;$i<count($caras);$i++) {
            if($caras[$i] == 3) {
                $sumaPetalos += 2;
            } else if($caras[$i] == 5) {
                $sumaPetalos += 4;
            }
        }

        include('funciones.php');

        comprobarJugada($petalos, $sumaPetalos, $nombre);
    ?>
</body>
</html>