<?php
    if(!isset($_REQUEST['enviar'])) {
        header("Location: ../index.php");
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.30</title>
</head>
<body>
    <?php
        $nombreArticulo = $_REQUEST["articulo"];
        $precioArticulo = $_REQUEST["precio"];
        $ordenar = $_REQUEST["ordenar"];
        $orden = $_REQUEST["orden"];

        $producto = array (
            $nombreArticulo
        )

    ?>
    
</body>
</html>