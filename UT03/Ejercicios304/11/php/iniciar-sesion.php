<?php 
    session_start();
    if(!isset($_SESSION['usuario'])) {
        header('Location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Ejercicio 3.11</title>
</head>
<body>
    <?php 
        include('../layout/headerResto.php');
    ?>
    <h1>Inicio de sesión</h1>
    <form action="validar-sesion.php" method="post">
        <table>
            <tr>
                <td colspan="2">
                    <label for="user">Nombre de usuario:</label>
                    <br />
                    <input type="text" name="user" id="user" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="pass">Contraseña:</label>
                    <br />
                    <input type="password" name="pass" id="pass" />
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Iniciar Sesión" id="iniciar-sesion" name="iniciar-sesion" /></td>
                <td><a href="registro.php">Registro</a></td>
            </tr>
        </table>
    </form>
</body>
</html>