<?php
    require_once '/xampp/htdocs/dwes/EjerciciosMongoDB/5/php/funciones.php';

    $id = $_REQUEST['id'];

    if(!isset($id)) {
        header('Location: ../index.php?mensaje=invalido');
        exit();
    }
    if(eliminar($id)) {
        header('Location: ../index.php?mensaje=deleteExito');
        exit();
    } else {
        header('Location: ../index.php?mensaje=deleteError');
        exit();
    }
?>