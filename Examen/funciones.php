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
?>