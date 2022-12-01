<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        $categoriasPorId = array( 
            
         );

        /* echo "<table>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Productos</th>";
        echo "<th>Categoria</th>";
        echo "<th>Precio</th>";
        echo "</tr>";
        foreach($productos as $producto) {
            echo "<tr>";
            echo "<th>{$producto->ProductID}</th>";
            echo "<td>{$producto->ProductName}</td>";
            echo "<td>{$categoria->CategoryName}</td>";
            echo "<td>{$producto->UnitPrice}</td>";
            echo "</tr>";
        }
        echo "</table>"; */
    ?>
</body>
</html>