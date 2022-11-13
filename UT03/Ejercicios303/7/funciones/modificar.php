<?php
    if(!isset($_REQUEST['modificar'])) {
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
    <?php
        $id = $_REQUEST['id'];

        require_once('funciones.php');
        $alumnos = obtenerAlumnosPorId($id, "escuela");
        if(is_array($alumnos) && count($alumnos)==1) {
            foreach($alumnos as $alumno) {
    ?>
        <h1>MODIFICANDO ALUMNO</h1>
        <form action="../funciones/validar_modificar.php" method="post">
            <input type="hidden" id="id" name="id" value="<?php echo "{$alumno['id_alumno']}" ?>" />
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo "{$alumno['nombre']}" ?>" />
            <br/><br/>

            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos" value="<?php echo "{$alumno['apellidos']}" ?>" />
            <br/><br/>

            <label for="direccion">Direccion:</label>
            <input type="text" name="direccion" id="direccion" value="<?php echo "{$alumno['direccion']}" ?>" />
            <br/><br/>

            <label for="dni">DNI:</label>
            <input type="text" name="dni" id="dni" value="<?php echo "{$alumno['DNI']}" ?>" />
            <br/><br/>

            <label for="fecha">Fecha de Nacimiento:</label>
            <input type="date" name="fecha" id="fecha" min="1980-01-01" value="<?php echo "{$alumno['fechaNacimiento']}" ?>" />
            <br/><br/>

            <label for="localidad">Localidad:</label>
            <input type="text" name="localidad" id="localidad" value="<?php echo "{$alumno['localidad']}" ?>" />
            <br/><br/>

            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" value="<?php echo "{$alumno['telefono']}" ?>" />
            <br/><br/>
            
            <input type="submit" value="Modificar" name="modificar2" id="modificar2" />
        </form>
    <?php
            }
        }
    ?>
</body>
</html>