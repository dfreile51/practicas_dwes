<?php
    if(isset($_REQUEST['enviar'])) {
        require_once('funciones.php');
        $id = $_REQUEST['id'];
        $titulo = $_REQUEST['titulo'];
        $noticia = $_REQUEST['noticia'];
        $fecha = $_REQUEST['fecha'];

        if(insertarNoticia($id, $titulo, $noticia, $fecha)) {
            header('Location: ../index.php');
        } else {
            echo "<p>Error al insertar la noticia</p>";
        }
    } else {
        header('Location: ../index.php');
    }
?>