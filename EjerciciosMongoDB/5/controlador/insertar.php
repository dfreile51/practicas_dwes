<?php
    require_once '/xampp/htdocs/DWES/dwes/EjerciciosMongoDB/5/php/funciones.php';

    if(!isset($_REQUEST['btnInsertar'])) {
        header('Location: ../index.php?mensaje=invalido');
        exit();
    }
    if(empty($_REQUEST['nombre']) || empty($_REQUEST['proveedor']) || empty($_REQUEST['categoria']) || empty($_REQUEST['cantidad']) || empty($_REQUEST['precio']) || 
       empty($_REQUEST['unidadesStock']) || empty($_REQUEST['unidadesOrder']) || empty($_REQUEST['reorder']) || empty($_REQUEST['discon'])) {
        header('Location: ../index.php?mensaje=faltanDatos');
        exit();
    }
    $producto = array(
        'ProductID' => $_REQUEST['idProducto'], 
        'ProductName' => $_REQUEST['nombre'],
        'SupplierID' => $_REQUEST['proveedor'], 
        'CategoryID' => $_REQUEST['categoria'],
        'QuantityPerUnit' => $_REQUEST['cantidad'], 
        'UnitPrice' => $_REQUEST['precio'],
        'UnitsInStock' => $_REQUEST['unidadesStock'], 
        'UnitsOnOrder' => $_REQUEST['unidadesOrder'],
        'ReorderLevel' => $_REQUEST['reorder'], 
        'Discontinued' => $_REQUEST['discon'],
    );
    if(insertar($producto)) {
        header('Location: ../index.php?mensaje=insertExito');
        exit();
    } else {
        header('Location: ../index.php?mensaje=insertError');
        exit();
    }
?>