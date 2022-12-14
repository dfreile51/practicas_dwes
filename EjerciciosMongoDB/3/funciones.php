<?php
    require '../vendor/autoload.php';

    function obtenerIdProductos() {
        $mongo = new MongoDB\Client("mongodb://localhost:27017");

        $colProductos = $mongo->northwind->products;

        $productos = $colProductos->find()->toArray();
        $idProductos = array();

        foreach($productos as $producto) {
            $idProductos[] = $producto->ProductID;
        }

        return $idProductos;
    }
    
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

    function obtenerProductos() {
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

        $arrayProductos = array();

        foreach($productos as $producto) {
            $arrayProductos[] = array(
                "idProducto" => $producto->ProductID,
                "nombreProducto" => $producto->ProductName,
                "nombreCategoria" => $arraynuevo[$producto->CategoryID],
                "nombreProvee" => $arraynuevo2[$producto->SupplierID],
                "precio" => $producto->UnitPrice
            );
        }

        return $arrayProductos;
    }

    function mostrarProductos($productos) {
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
            echo "<td>{$producto['idProducto']}</td>";
            echo "<td>{$producto['nombreProducto']}</td>";
            echo "<td>{$producto['nombreCategoria']}</td>";
            echo "<td>{$producto['nombreProvee']}</td>";
            echo "<td>{$producto['precio']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    function insertar($array) {
        $mongo = new MongoDB\Client("mongodb://localhost:27017");
        $colProductos = $mongo->northwind->products;
        $res = $colProductos->insertOne($array);
        return $res->getInsertedCount();
    }
?>