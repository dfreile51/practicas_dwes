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

        $productos = array();

        for($i=0;$i<count($articulos);$i++) {
            $nomArti = $articulos[$i];
            $precioArt = $precios[$i];
            $productos[$nomArti] = $precioArt;
        }

        switch($ordenar) {
            case 'Nombre':
                if($orden == "Ascendente") {
                    ksort($productos);
                } else {
                    krsort($productos);
                }
                break;
            case 'Precio':
                if($orden == "Ascendente") {
                    asort($productos);
                } else {
                    arsort($productos);
                }
                break;
        }

        echo "<table>";
        echo "<tr>";
        echo "<th>Nombre articulo</th>";
        echo "<th>Precio</th>";
        echo "</tr>";
        
        foreach($productos as $articulo=>$precio) {
            echo "<tr>";
            echo "<td>$articulo</td>";
            echo "<td>$precio</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        
    ?>
    
</body>
</html>