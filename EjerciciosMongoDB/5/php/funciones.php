<?php
    require '/xampp/htdocs/dwes/EjerciciosMongoDB/vendor/autoload.php';

    function obtenerProducto($id) {
        $mongo = new MongoDB\Client("mongodb://localhost:27017");

        $colProductos = $mongo->northwind->products;

        $producto = $colProductos->findOne(
            array(
                '_id' => new MongoDB\BSON\ObjectId($id)
            )
        );
        return $producto;
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
                "id" => $producto->_id,
                "idProducto" => $producto->ProductID,
                "nombreProducto" => $producto->ProductName,
                "nombreCategoria" => $arraynuevo[$producto->CategoryID],
                "nombreProvee" => $arraynuevo2[$producto->SupplierID],
                "precio" => $producto->UnitPrice
            );
        }

        return $arrayProductos;
    }

    function eliminar($id) {
        $mongo = new MongoDB\Client("mongodb://localhost:27017");
        $colProductos = $mongo->northwind->products;
        $res = $colProductos->deleteOne(
            array(
                '_id' => new MongoDB\BSON\ObjectId($id)
            )
        );
        return $res->getDeletedCount();
    }

    function actualizar($id, $array) {
        $mongo = new MongoDB\Client("mongodb://localhost:27017");
        $colProductos = $mongo->northwind->products;
        $res = $colProductos->updateOne(
            ['_id' => new MongoDB\BSON\ObjectId($id)],
            ['$set' => $array]
        );
        return $res->getModifiedCount();
    }

    function insertar($array) {
        $mongo = new MongoDB\Client("mongodb://localhost:27017");
        $colProductos = $mongo->northwind->products;
        $res = $colProductos->insertOne($array);
        return $res->getInsertedCount();
    }

    function alerta($tipo, $mensaje) {
        echo "
        <div class='alert $tipo alert-dismissible fade show' role='alert'>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
            <strong>$mensaje</strong>
        </div>
        ";
    }
?>