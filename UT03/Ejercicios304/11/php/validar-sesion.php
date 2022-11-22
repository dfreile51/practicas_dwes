<?php
    if(isset($_REQUEST['iniciar-sesion'])) {
        require_once('funciones.php');

        session_start();
        $user = $_REQUEST['user'];
        $pass = $_REQUEST['pass'];

        $passCifrada = hash("sha512", $pass);

        if(validarUser($user, $passCifrada)) {
            if(validarUserUsuario($user, $passCifrada)) {
                $_SESSION['usuario'] = $user;
                $_SESSION['permiso'] = "usuario";
                header('Location: ../index.php');
            } else if(validarUserEditor($user, $passCifrada)) {
                $_SESSION['usuario'] = $user;
                $_SESSION['permiso'] = "editor";
                header('Location: ../index.php');
            } else {
                $_SESSION['usuario'] = $user;
                $_SESSION['permiso'] = "editor";
                header('Location: ../index.php');
            }
        } else {
            header('Location: error-sesion.php');
        }
    } else {
        header('Location: ../index.php');
    }
?>