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
        require '../vendor/autoload.php';
        $mongo = new MongoDB\Client("mongodb://localhost:27017");

        $colProductos = $mongo->northwind->products;
        $colCategorias = $mongo->northwind->categories;
        $colProveedores = $mongo->northwind->suppliers;

        $categorias = $colCategorias->find()->toArray();
        $productos = $colProductos->find()->toArray();
        $proveedores = $colProveedores->find()->toArray();

        $arraynuevo = array();
        $arraynuevo2 = array();

        foreach($categorias as $categoria) {
            $arraynuevo[$categoria->CategoryID] = $categoria->CategoryName;
        }

        foreach($proveedores as $proveedor) {
            $arraynuevo2[$proveedor->SupplierID] = $proveedor->CompanyName;
        }

        echo "<table>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Productos</th>";
        echo "<th>Categoria</th>";
        echo "<th>Proveedor</th>";
        echo "<th>Precio</th>";
        echo "</tr>";
        foreach($productos as $producto) {
            echo "<tr>";
            echo "<td>{$producto->ProductID}</td>";
            echo "<td>{$producto->ProductName}</td>";
            echo "<td>{$arraynuevo[$producto->CategoryID]}</td>";
            echo "<td>{$arraynuevo2[$producto->SupplierID]}</td>";
            echo "<td>{$producto->UnitPrice}</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>