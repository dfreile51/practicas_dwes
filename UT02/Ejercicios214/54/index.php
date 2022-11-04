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
        if(isset($_REQUEST['login2'])) {
            $usuario = $_REQUEST['usuario'];
            $_SESSION['user'] = $usuario;
        }

        if((isset($_SESSION['user'])) && ($_SESSION['user'] != "invitado")) {
            echo "<h1>Bienvenido, ".$_SESSION['user']."</h1>";
            echo "<form action='#' method='post'>
                    <input type='submit' value='Logout' name='logout' id='logout'/>
                  </form>";
        } else {
            echo "<h1>Bienvenido, ".$_SESSION['user']."</h1>";
            echo "<form action='php/login.php' method='post'>
                    <input type='submit' value='Login' name='login' id='login'/>
                  </form>";
        }

        if(isset($_REQUEST['logout'])) {
            $_SESSION[] = array();
            session_destroy();
        }
    ?>
    
</body>
</html>