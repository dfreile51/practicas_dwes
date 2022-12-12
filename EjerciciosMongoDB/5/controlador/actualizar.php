<?php
    require_once '/xampp/htdocs/dwes/EjerciciosMongoDB/5/php/funciones.php';

    $id = $_REQUEST['id'];

    if(!isset($_REQUEST['btnActualizar'])) {
        header('Location: ../index.php?mensaje=invalido');
        exit();
    }
    if(!isset($id)) {
        header('Location: ../index.php?mensaje=invalido');
        exit();
    }
    $producto = array(
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
    if(actualizar($id, $producto)) {
        header('Location: ../index.php?mensaje=updateExito');
        exit();
    } else {
        header('Location: ../index.php?mensaje=updateError');
        exit();
    }
?>