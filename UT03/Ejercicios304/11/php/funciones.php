<?php
    define("HOST", "localhost");
    define("USER", "foro");
    define("PASS", "foro");
    define("BD", "foro");

    function insertarUser($user, $pass) {
        $insertado = false;
        try {
            $con = mysqli_connect(HOST, PASS, USER, BD);
            $sql = "INSERT INTO usuarios(user, pass) VALUES ('".$user."', '".$pass."')";
            $result = mysqli_query($con, $sql);
            if($result && mysqli_affected_rows($con)==1) {
                $insertado = true;
            }
            mysqli_close($con);
        } catch (mysqli_sql_exception $e) {
            $insertado = false;
        }
        return $insertado;
    }

    function validarUser($user, $pass) {
        $usuario = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "SELECT * FROM usuarios WHERE user='$user' AND pass='$pass'";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $usuario = array();
                while($reg = mysqli_fetch_assoc($result)) {
                    $usuario[] = $reg;
                }
            }
        } catch (mysqli_sql_exception $e) {
            $usuario = false;
        }
        return $usuario;
    }
?>