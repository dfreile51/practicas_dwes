<?php 
    $fechaActual = date('d-m-Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.42</title>
</head>
<body>
    <form action="php/programa.php" method="post">
        <label for="nombre">Nombre del usuario: </label>
        <br/>
        <input type="text" name="nombre" id="nombre"/>
        <br/><br/>
        <label for="apellidos">Apellidos del usuario: </label>
        <br/>
        <input type="text" name="apellidos" id="apellidos"/>
        <br/><br/>
        <label for="email">Correo del usuario: </label>
        <br/>
        <input type="text" name="email" id="email"/>
        <br/><br/>
        <label for="depar">Departamento: </label>
        <br/>
        <select name="depar" id="depar">
            <option value="facturacion">Facturación</option>
            <option value="ventas">Ventas</option>
            <option value="servicio">Servicio Técnico</option>
        </select>
        <br/><br/>
        <label for="tema">Tema: </label>
        <br/>
        <input type="text" name="tema" id="tema"/>
        <br/><br/>
        <label for="mensaje">Mensaje: </label>
        <br/>
        <?php echo $fechaActual;?>
        <textarea name="mensaje" id="mensaje" cols="100" rows="10"></textarea>
        <br/><br/>
        <input type="submit" value="Enviar" name="enviar" id="enviar"/>
    </form>
</body>
</html>