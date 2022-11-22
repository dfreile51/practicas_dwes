<?php
    session_start();
    $_SESSION['usuario'] = array();
    $_SESSION['permiso'] = array();
    session_destroy();
    header('Location: ../index.php');
?>