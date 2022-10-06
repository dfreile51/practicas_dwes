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
        if(!isset($_REQUEST['enviar'])) {
    ?>
    <form action="#" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" required=""/>
        <br/><br/>
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido" required=""/>
        <br/><br/>
        <input type="submit" value="Enviar" name="enviar" id="enviar"/>
    </form>
    <?php
        } else {
            $nombre = $_REQUEST['nombre'];
            $apellido = $_REQUEST['apellido'];
            echo "<p>$nombre</p>";
            echo "<p>$apellido</p>";
        }
    ?>
</body>
</html>