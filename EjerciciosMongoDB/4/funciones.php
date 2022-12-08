<?php
    require '../vendor/autoload.php';

    function obtenerCategorias() {
        $mongo = new MongoDB\Client("mongodb://localhost:27017");

        $colCategorias = $mongo->northwind->categories;

        $categorias = $colCategorias->find()->toArray();
        $idCategorias = array();

        foreach($categorias as $categoria) {
            $idCategorias[$categoria->CategoryID] = $categoria->CategoryName;
        }

        return $idCategorias;
    }

    function obtenerProveedores() {
        $mongo = new MongoDB\Client("mongodb://localhost:27017");

        $colProveedores = $mongo->northwind->suppliers;

        $proveedores = $colProveedores->find()->toArray();
        $idProveedores = array();

        foreach($proveedores as $proveedor) {
            $idProveedores[$proveedor->SupplierID] = $proveedor->CompanyName;
        }

        return $idProveedores;
    }

    function obtenerProductos($categoria, $proveedor) {
        $mongo = new MongoDB\Client("mongodb://localhost:27017");

        $man = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        if($categoria == 0 && $proveedor == 0) {
            $filter = [];
        } 

        if($categoria != 0 && $proveedor == 0) {
            $filter = ['CategoryID' => strval($categoria)];
        }

        if($categoria == 0 && $proveedor != 0) {
            $filter = ['SupplierID' => strval($proveedor)];
        }

        if($categoria != 0 && $proveedor != 0) {
            $filter = ['CategoryID' => strval($categoria), 'SupplierID' => strval($proveedor)];
        }

        $options = ['sort' => ['ProductName'=>1]];
        $query = new MongoDB\Driver\Query($filter, $options);
        $productos = $man->executeQuery('northwind.products', $query);

        $colProveedores = $mongo->northwind->suppliers;
        $colCategorias = $mongo->northwind->categories;

        $categorias = $colCategorias->find()->toArray();
        $proveedores = $colProveedores->find()->toArray();

        $arrayCategorias = array();
        $arrayProveedores = array();

        foreach($categorias as $categoria) {
            $arrayCategorias[$categoria->CategoryID] = $categoria->CategoryName;
        }

        foreach($proveedores as $proveedor) {
            $arrayProveedores[$proveedor->SupplierID] = $proveedor->CompanyName;
        }

        $arrayProductos = array();

        foreach($productos as $producto) {
            $arrayProductos[] = array(
                "idProducto" => $producto->ProductID,
                "nombreProducto" => $producto->ProductName,
                "nombreCategoria" => $arrayCategorias[$producto->CategoryID],
                "nombreProvee" => $arrayProveedores[$producto->SupplierID],
                "precio" => $producto->UnitPrice
            );
        }

        return $arrayProductos;
    }

    function mostrarProductos($productos) {
        echo "<table class='productos'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Productos</th>";
        echo "<th>Categoria</th>";
        echo "<th>Proveedor</th>";
        echo "<th>Precio</th>";
        echo "</tr>";
        foreach($productos as $producto) {
            echo "<tr>";
            echo "<td>{$producto['idProducto']}</td>";
            echo "<td>{$producto['nombreProducto']}</td>";
            echo "<td>{$producto['nombreCategoria']}</td>";
            echo "<td>{$producto['nombreProvee']}</td>";
            echo "<td>{$producto['precio']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
?>