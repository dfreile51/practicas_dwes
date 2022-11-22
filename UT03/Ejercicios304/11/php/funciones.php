<?php
    define("HOST", "localhost");
    define("USER", "foro");
    define("PASS", "foro");
    define("BD", "foro");

    function insertarUser($user, $pass) {
        $insertado = false;
        try {
            $con = mysqli_connect(HOST, PASS, USER, BD);
            $sql = "INSERT INTO usuarios(user, pass, permisos) VALUES ('".$user."', '".$pass."', 'usuario')";
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

    function insertarNoticia($id, $titulo, $noticia, $fecha) {
        $insertado = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "INSERT INTO noticias(id_usuario, titulo, noticia, fecha) VALUES ('".$id."', '".$titulo."', '".$noticia."', '".$fecha."')";
            $result = mysqli_query($con, $sql);
            if($result && mysqli_affected_rows($con)) {
                $insertado = true;
            }
            mysqli_close($con);
        } catch(mysqli_sql_exception $e) {
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

    function validarUserUsuario($user, $pass) {
        $usuario = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "SELECT * FROM usuarios WHERE user='$user' AND pass='$pass' AND permisos='usuario'";
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

    function validarUserEditor($user, $pass) {
        $usuario = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "SELECT * FROM usuarios WHERE user='$user' AND pass='$pass' AND permisos='editor'";
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

    function obtenerIdUsuario($usuario) {
        $idUsuario = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "SELECT id_usuario FROM usuarios WHERE user='$usuario'";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                while($reg = mysqli_fetch_row($result)) {
                    $idUsuario = $reg[0];
                }
            }
        } catch(mysqli_sql_exception $e) {
            $idUsuario = false;
        }
        return $idUsuario;
    }

    function obtenerNoticias() {
        $noticias = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "SELECT usuarios.user, noticias.titulo, noticias.noticia, noticias.fecha FROM usuarios, noticias WHERE usuarios.id_usuario = noticias.id_usuario";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $noticias = array();
                while($reg = mysqli_fetch_assoc($result)) {
                    $noticias[] = $reg;
                }
            }
        } catch(mysqli_sql_exception $e) {
            $noticias = false;
        }
        return $noticias;
    }
?>