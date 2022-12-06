<?php
    if(!isset($_REQUEST['enviar'])) {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos2.css">
    <title>Ejercicio 3 mongo</title>
</head>
<body>
    <?php
        require_once 'funciones.php';
        
        $idProducto = $_REQUEST['idProducto'];
        $nombreProducto = $_REQUEST['nombre'];
        $idProveedor = $_REQUEST['idProveedor'];
        $idCategoria = $_REQUEST['idCategoria'];
        $cantidad = $_REQUEST['cantidad'];
        $precio = $_REQUEST['precio'];
        $unidadesStock = $_REQUEST['unidadesStock'];
        $unidadesOrder = $_REQUEST['unidadesOrder'];
        $reorderLevel = $_REQUEST['reorderLevel'];
        $discontinued = $_REQUEST['discontinued'];

        $producto = array(
            'ProductID' => $idProducto, 
            'ProductName' => $nombreProducto,
            'SupplierID' => $idProveedor, 
            'CategoryID' => $idCategoria,
            'QuantityPerUnit' => $cantidad, 
            'UnitPrice' => $precio,
            'UnitsInStock' => $unidadesStock, 
            'UnitsOnOrder' => $unidadesOrder,
            'ReorderLevel' => $reorderLevel, 
            'Discontinued' => $discontinued,
        );

        $insertar = insertar($producto);

        if($insertar) {
            echo "<h1>Insertado correctamente</h1>";
        } else {
            echo "<h1>No se ha insertado</h1>";
        }

        $productos = obtenerProductos();
        mostrarProductos($productos);
    ?>
</body>
</html>