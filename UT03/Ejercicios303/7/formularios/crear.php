<?php
    if(!isset($_REQUEST['crear'])) {
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
    <h1>QUE ALUMNO QUIERES INSERTAR?</h1>
    <form action="../funciones/validar_insertar.php" method="post">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" />
        <br/><br/>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" />
        <br/><br/>

        <label for="direccion">Direccion:</label>
        <input type="text" name="direccion" id="direccion" />
        <br/><br/>

        <label for="dni">DNI:</label>
        <input type="text" name="dni" id="dni" />
        <br/><br/>

        <label for="fecha">Fecha de Nacimiento:</label>
        <input type="date" name="fecha" id="fecha" min="1980-01-01" />
        <br/><br/>

        <label for="localidad">Localidad:</label>
        <input type="text" name="localidad" id="localidad" />
        <br/><br/>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" />
        <br/><br/>
        
        <input type="submit" value="Insertar" name="insertar" id="insertar" />
        <input type="reset" value="Borrar" name="borrar" id="borrar" />
    </form>
    <p><a href='../index.html'>Volver a inicio</a></p>
</body>
</html>