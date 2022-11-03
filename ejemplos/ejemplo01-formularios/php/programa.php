<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2>DATOS RECOGIDOS</h2>";
        if (isset($_REQUEST['enviar'])) {
            $nombre = $_REQUEST['nombre'];
            $apellidos = $_REQUEST['apellidos'];
            echo "<h3>Nombre: $nombre</h3>";
            echo "<h3>Apellidos: $apellidos</h3>";
            echo "<h3>Intereses: ";
            if (isset($_REQUEST['tecno'])) {
                echo " Tecnología";
            }
            if (isset($_REQUEST['depor'])) {
                echo " Deportes";
            }
            if (isset($_REQUEST['ciencia'])) {
                echo " Ciencia";
            }
            echo "</h3>";
        } else {
            echo "<h3>No se han recibido los datos del usuario</h3>";
        }
        
    ?>
    <a href="../index.html"><h3>Volver</h3></a>
</body>
</html>