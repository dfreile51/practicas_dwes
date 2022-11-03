<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.54</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <?php
        if(isset($_REQUEST['login'])) {
            echo "<form action='../index.php' method='post'>
                    <label for='usuario'>Usuario: </label> <br/>
                    <input type='text' name='usuario' id='usuario'/>
                    <br/><br/>
                    <label for='user'>Contraseña: </label> <br/>
                    <input type='password' name='contrasena' id='contrasena'/> <br/><br/>
                    <input type='submit' value='Login' name='login2' id='login2'/> 
                </form>";
        }
        
    ?>
    <br/>
    <a href="../index.php">Volver a inicio</a>
</body>
</html>