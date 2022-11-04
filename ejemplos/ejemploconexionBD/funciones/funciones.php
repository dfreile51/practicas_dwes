<?php
    // Parametros BD

    define("HOST", "localhost");
    define("USER", "nba");
    define("PASS", "nba");
    define("BD", "nba");

    // obtener las temporadas

    function obtenerTemporadas() {
        $temporadas = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "SELECT DISTINCT temporada FROM estadisticas";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $temporadas = array();
                while($reg = mysqli_fetch_row($result)) {
                    $temporadas[] = $reg[0];
                }
            }
        } catch(mysqli_sql_exception $e) {
            $temporadas = false;
        }
        return $temporadas;
    }
?>