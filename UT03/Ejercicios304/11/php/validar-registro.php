<?php
    if(isset($_REQUEST['registrarse'])) {
        $user = $_REQUEST['user'];
        $pass = $_REQUEST['pass'];

        $passCifrada = hash("shah512", $pass);

        
    }
?>