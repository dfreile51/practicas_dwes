<?php
    if(!isset($_REQUEST['eliminar'])) {
        header('Location: ../index.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3.07</title>
</head>
<body>
    <h1>QUE ALUMNO QUIERES BUSCAR?</h1>
    <form action="../funciones/validar_busqueda_eliminar.php" method="post">

        <label for="busqueda">Introducir nombre o apellidos:</label>
        <br/>
        <input type="search" name="busqueda" id="buqueda" placeholder="Nombre o apellidos"/>
        <br/><br/>
        
        <input type="submit" value="Buscar" name="buscarEliminar" id="buscarEliminar" />
        <input type="reset" value="Borrar" name="borrar" id="borrar" />
    </form>
    <p><a href='../index.html'>Volver a inicio</a></p>
</body>
</html>