<?php
    if(isset($_REQUEST['registrarse'])) {
        require_once('funciones.php');
        $user = $_REQUEST['user'];
        $pass = $_REQUEST['pass'];

        $passCifrada = hash("sha512", $pass);

        if(insertarUser($user, $passCifrada)) {
            header('Location: registro.php');
        } else {
            header('Location: error-registro.php');
        }
    } else {
        header('Location: ../index.php');
    }
?>