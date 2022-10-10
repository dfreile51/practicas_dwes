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
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <title>Ejercicio 2.30</title>
</head>
<body>
    <?php
        $articulos = $_REQUEST['articulo'];
        $precios = $_REQUEST['precio'];
        $ordenar = $_REQUEST['ordenar'];
        $orden = $_REQUEST['orden'];

        $productos = array(
            "nombre" => $articulos,
            "precio" => $precios
        );

        switch($ordenar) {
            case 'Nombre':
                sort($articulos);
                break;
            case 'Precio':
                sort($precios);
                break;
        }

        echo "<table>";
        
        foreach($productos as $producto) {
            echo "<tr>";
            foreach($producto as $valor) {
                echo "<td>$valor</td>";
            }
            echo "</tr>";
        }
        
        echo "</table>";
        
        /*
        echo "<pre>";
        print_r($productos);
        echo "</pre>";

        */
    ?>
    
</body>
</html>