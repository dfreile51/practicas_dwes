<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Fichero JSON</title>
</head>
<style>
    table {
        margin: 0 auto;
    }
    td, th {
        border: 1px solid black;
        padding: 4px 8px;
    }
</style>
<body>
    <?php
        $categoriesJSON = file_get_contents("data/categories.json");
        $suppliersJSON = file_get_contents("data/suppliers.json");

        $arrayCategorias = array();
        $arraySuppliers = array();

        $categorias = json_decode($categoriesJSON);
        foreach($categorias as $categoria) {
            $arrayCategorias[$categoria->CategoryID] = $categoria->CategoryName;
        }

        $proveedores = json_decode($suppliersJSON);
        foreach($proveedores as $proveedor) {
            $arraySuppliers[$proveedor->SupplierID] = $proveedor->CompanyName;
        }

        $productsJSON = file_get_contents("data/products.json");
        if($productsJSON) {
            $productos = json_decode($productsJSON);
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
                echo "<td>{$arrayCategorias[$producto->CategoryID]}</td>";
                echo "<td>{$arraySuppliers[$producto->SupplierID]}</td>";
                echo "<td>{$producto->UnitPrice}</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Archivo inaccesible</p>";
        }
    ?>
</body>
</html>