<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        $_SESSION['user'] = "invitado";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.54</title>
    <style>
        h1, form {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        if($_SESSION['user'] == "invitado") {
            echo "<h1>Bienvenido, ".$_SESSION['user']."</h1>";
            echo "<form action='php/login.php' method='post'>
                    <input type='submit' value='Login' name='login' id='login'/>
                </form>";
        } else {
            $usuario = $_REQUEST['usuario'];
            $_SESSION['user'] = $usuario;
            echo "<h1>Bienvenido, ".$_SESSION['user']."</h1>";
        }
    ?>
    
</body>
</html>