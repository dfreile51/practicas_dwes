<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Ejercicio 3.07</title>
</head>
<body>

    <h2>QUE OPERACION QUIERES REALIZAR</h2>
    <br/>

    <form action="#" method="post">
        <table>
            <tr>
                <td><input type="submit" value="Crear alumno" name="crear" id="crear" /></td>
                <td><input type="submit" value="Modificar alumno" name="modificar" id="modificar" /></button></td>
                <td><input type="submit" value="Eliminar alumno" name="eliminar" id="eliminar" /></td>
                <td><input type="submit" value="Consultar" name="consultar" id="consultar" /></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_REQUEST['crear'])) {
            header('Location: formularios/insertar.php');
        } else if(isset($_REQUEST['modificar'])) {
            header('Location: formularios/modificar.php');
        } else if(isset($_REQUEST['eliminar'])) {
            header('Location: formularios/eliminar.php');
        } else if(isset($_REQUEST['consultar'])) {
            header('Location: formularios/consultar.php');
        }
    ?>

</body>
</html>