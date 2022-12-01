<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Ejercicio 1 MongoDB</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php
        require 'vendor/autoload.php';
        $mongo = new MongoDB\Client("mongodb://localhost:27017");

        $colProductos = $mongo->northwind->products;
        $colCategorias = $mongo->northwind->categories;
        $colProveedores = $mongo->northwind->suppliers;

        $categorias = $colCategorias->find()->toArray();
        $productos = $colProductos->find()->toArray();
        $proveedores = $colProveedores->find()->toArray();

        $arraynuevo = array();
        $arraynuevo2 = array();

        foreach($productos as $producto) {
            foreach($categorias as $categoria) {
                if($producto->CategoryID == $categoria->CategoryID) {
                    $arraynuevo[] = array("id" => $producto->CategoryID, "nombre" => $categoria->CategoryName);
                }
            }
        }

        foreach($productos as $producto) {
            foreach($proveedores as $proveedor) {
                if($producto->SupplierID == $proveedor->SupplierID) {
                    $arraynuevo2[] = array("id" => $proveedor->SupplierID, "nombre" => $proveedor->CompanyName);
                }
            }
        }

        /* echo "<pre>";
        print_r($arraynuevo);
        echo "</pre>"; */

        echo "<table>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Productos</th>";
        echo "<th>ID Categoria</th>";
        echo "<th>Categoria</th>";
        echo "<th>Proveedor</th>";
        echo "<th>Precio</th>";
        echo "</tr>";
        foreach($productos as $producto) {
            echo "<tr>";
            echo "<th>{$producto->ProductID}</th>";
            echo "<td>{$producto->ProductName}</td>";
            echo "<td>{$producto->CategoryID}</td>";
            echo "<td>{$arraynuevo['nombre']}</td>";
            echo "<td>{$arraynuevo2['nombre']}</td>";
            echo "<td>{$producto->UnitPrice}</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>