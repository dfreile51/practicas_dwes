<?php
    if(isset($_REQUEST['modificar2'])) {
        require_once('funciones.php');

        $id = $_REQUEST['id_alumno'];
        $dni = $_REQUEST['dni'];
        $nombre = $_REQUEST['nombre'];
        $apellidos = $_REQUEST['apellidos'];
        $fechaNac = $_REQUEST['fechaNac'];
        $direccion = $_REQUEST['direccion'];
        $localidad = $_REQUEST['localidad'];
        $tlfn = $_REQUEST['tlfn'];

        if(modificarUnAlumno($id, $dni, $nombre, $apellidos, $fechaNac, $direccion, $localidad, $tlfn)) {
            echo "<p>Modificado Correctamente</p>";
        } else{
            echo "<p>No modificado</p>";
        }
    }
?>