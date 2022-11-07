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

    function obtenerJugadores($estadistica, $temporadas,  $numJugadores = 10) {
        $jugadores = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "SELECT jugadores.nombre, jugadores.nombre_equipo, $estadistica
                FROM jugadores, estadisticas
                WHERE jugadores.codigo = estadisticas.jugador AND estadisticas.temporada = '$temporadas'
                ORDER BY $estadistica DESC
                LIMIT 0, $numJugadores";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if($result && mysqli_num_rows($result)>0) {
                $jugadores = array();
                while($jugador = mysqli_fetch_assoc($result)) {
                    $jugadores[] = $jugador;
                }
            }
        } catch(mysqli_sql_exception $e) {
            $jugadores = false;
        }
        return $jugadores; 
    }

    // $temporadas = obtenerTemporadas();

    // Obtener puntos por temporada

    /* function obtenerPuntos() {
        global $temporadas;
        $puntos = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "SELECT puntos_por_partido FROM estadisticas";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $puntos = array();
                while($reg = mysqli_fetch_row($result)) {
                    $puntos[] = $reg[0];
                }
            }
        } catch(mysqli_sql_exception $e) {
            $puntos = false;
        }
        return $puntos;
    } */

    // Obtener rebotes por temporada

    /* function obtenerRebotes() {
        $rebotes = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "SELECT rebotes_por_partido FROM estadisticas";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $rebotes = array();
                while($reg = mysqli_fetch_row($result)) {
                    $rebotes[] = $reg[0];
                }
            }
        } catch(mysqli_sql_exception $e) {
            $rebotes = false;
        }
        return $rebotes;
    } */

    // Obtener asistencias por temporada

    /* function obtenerAsistencias() {
        $asistencias = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "SELECT asistencias_por_partido FROM estadisticas";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $asistencias = array();
                while($reg = mysqli_fetch_row($result)) {
                    $asistencias[] = $reg[0];
                }
            }
        } catch(mysqli_sql_exception $e) {
            $asistencias = false;
        }
        return $asistencias;
    } */

    // Obtener tapones por temporada

    /* function obtenerTapones() {
        $tapones = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "SELECT tapones_por_partido FROM estadisticas";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $tapones = array();
                while($reg = mysqli_fetch_row($result)) {
                    $tapones[] = $reg[0];
                }
            }
        } catch(mysqli_sql_exception $e) {
            $tapones = false;
        }
        return $tapones;
    } */

    // Obtener los equipos

    /* function obtenerEquipos() {
        $equipos = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "SELECT nombre FROM equipos";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $equipos = array();
                while($reg = mysqli_fetch_row($result)) {
                    $equipos[] = $reg[0];
                }
            }
        } catch(mysqli_sql_exception $e) {
            $tapones = false;
        }
        return $equipos;
    } */

    /* $equipos = obtenerEquipos(); */

    // Obtener jugadores por equipo

    /* function obtenerJugadoresPorEquipo() {
        global $equipos;
        $jugadores = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "SELECT nombre FROM jugadores WHERE nombre_equipo = '$equipos'";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $jugadores = array();
                while($reg = mysqli_fetch_row($result)) {
                    $jugadores[] = $reg[0];
                }
            }
        } catch(mysqli_sql_exception $e) {
            $jugadores = false;
        }
        return $jugadores;
    } */
?>