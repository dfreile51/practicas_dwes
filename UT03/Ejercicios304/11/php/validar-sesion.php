<?php
    if(isset($_REQUEST['iniciar-sesion'])) {
        require_once('funciones.php');

        session_start();
        $user = $_REQUEST['user'];
        $pass = $_REQUEST['pass'];

        $passCifrada = hash("sha512", $pass);

        if(validarUser($user, $passCifrada)) {
            $_SESSION['usuario'] = $user;
            header('Location: programa.php');
        } else {
            header('Location: error-sesion.php');
        }
    } else {
        header('Location: ../index.php');
    }
?>