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
    <title>Ejercicio 2.37</title>
</head>
<body>
    <?php
        $cadena = $_REQUEST['cadena'];

        echo "<p>Antes de quitar los espacios: #$cadena#</p>";
        $cadenaSinEspacios = trim($cadena);
        echo "<p>Despues de quitar los espacios: #$cadenaSinEspacios#</p>";
    ?>
</body>
</html>