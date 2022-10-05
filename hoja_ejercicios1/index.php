<?php
    $nombre = "Diego";
    $apellidos = "Freile Garcia";
    $direccion = "Marques de montevirgen";
    $codPostal = 24007;
    $localidad = "Leon";
    $provincia = "Leon";
    $tipoNombre = gettype($nombre);
    $tipoApellidos = gettype($apellidos);
    $tipoDireccion = gettype($direccion);
    $tipoCodPostal = gettype($codPostal);
    $tipoLocalidad = gettype($localidad);
    $tipoProvincia = gettype($provincia);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
    <title>Hoja de ejercicios 1</title>
</head>
<body>
    <table>
        <tr>
            <th>Variable</th>
            <th>Valor</th>
            <th>Tipo</th>
        </tr>
        <tr>
            <td><?php echo "nombre"; ?></td>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $tipoNombre; ?></td>
        </tr>
        <tr>
            <td><?php echo "apellidos"; ?></td>
            <td><?php echo $apellidos; ?></td>
            <td><?php echo $tipoApellidos; ?></td>
        </tr>
        <tr>
            <td><?php echo "direccion"; ?></td>
            <td><?php echo $direccion; ?></td>
            <td><?php echo $tipoDireccion; ?></td>
        </tr>
        <tr>
            <td><?php echo "codigoPostal"; ?></td>
            <td><?php echo $codPostal; ?></td>
            <td><?php echo $tipoCodPostal; ?></td>
        </tr>
        <tr>
            <td><?php echo "localidad"; ?></td>
            <td><?php echo $localidad; ?></td>
            <td><?php echo $tipoLocalidad; ?></td>
        </tr>
        <tr>
            <td><?php echo "provincia"; ?></td>
            <td><?php echo $provincia; ?></td>
            <td><?php echo $tipoProvincia; ?></td>
        </tr>

    </table>
</body>
</html>