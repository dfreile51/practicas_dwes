<?php
    define("HOST", "localhost");
    define("USER", "escuela");
    define("PASS", "escuela");
    define("BD", "escuela");

    function obtenerAlumnos() {
        $alumnos = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "SELECT * FROM alumnos";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $alumnos = array();
                while($reg = mysqli_fetch_assoc($result)) {
                    $alumnos[] = $reg;
                }
            }
        } catch(mysqli_sql_exception $e) {
            $alumnos = false;
        }
        return $alumnos;
    }

    function obtenerAlumnosPorId($id) {
        $alumnos = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "SELECT * FROM alumnos WHERE id_alumno='$id'";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $alumnos = array();
                while($reg = mysqli_fetch_assoc($result)) {
                    $alumnos[] = $reg;
                }
            }
        } catch(mysqli_sql_exception $e) {
            $alumnos = false;
        }
        return $alumnos;
    }

    function insertarAlumno($dni, $nombre, $apellidos, $fecha, $direccion, $localidad, $tlfn) {
        $insertado = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "INSERT INTO alumnos(DNI, nombre, apellidos, fechaNacimiento, direccion, localidad, telefono) VALUES ('".$dni."', '".$nombre."', '".$apellidos."', '".$fecha."', '".$direccion."', '".$localidad."', '".$tlfn."')";
            $result = mysqli_query($con, $sql);
            if($result && mysqli_affected_rows($con)==1) {
                $insertado = true;
            }
            mysqli_close($con);
        } catch(mysqli_sql_exception $e) {
            $insertado = false;
        }
        return $insertado;
    }

    function modificarUnAlumno($id, $dni, $nombre, $apellidos, $fecha, $direccion, $localidad, $tlfn) {
        $modificado = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "UPDATE alumnos SET DNI='$dni', nombre='$nombre', apellidos='$apellidos', fechaNacimiento='$fecha', direccion='$direccion', localidad='$localidad', telefono='$tlfn' WHERE id_alumno='$id'";
            $result = mysqli_query($con, $sql);
            if($result && mysqli_affected_rows($con)==1) {
                $modificado = true;
            }
            mysqli_close($con);
        } catch(mysqli_sql_exception $e) {
            $modificado = false;
        }
        return $modificado;
    }

    function eliminarAlumno($id) {
        $modificado = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "DELETE FROM alumnos WHERE id_alumno='$id'";
            $result = mysqli_query($con, $sql);
            if($result && mysqli_affected_rows($con)==1) {
                $modificado = true;
            }
            mysqli_close($con);
        } catch(mysqli_sql_exception $e) {
            $modificado = false;
        }
        return $modificado;
    }
?>