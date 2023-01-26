<?php
    function leerCsv($ruta) {
        $alumnos = array();
        @$file = fopen("$ruta", "r");
        if($file) {
            while(!feof($file)) {
                $alumno = fgetcsv($file, 0, ";");
                if($alumno) {
                    $alumnos[] = $alumno;
                }
            }
            fclose($file);
        } else {
            echo "<p>Archivo inaccesible</p>";
        }
        return $alumnos;
    }

    function mostrarAlumnos($alumnos) {
        echo "<table>";
            echo "<tr>";
            echo "<th>Nombre</th>";
            echo "<th>Fecha</th>";
            echo "<th>Curso</th>";
            echo "<th>Email</th>";
            echo "</tr>";
            foreach($alumnos as $alumno) {
                echo "<tr>";
                echo "<td>{$alumno[0]}</td>";
                echo "<td>{$alumno[1]}</td>";
                echo "<td>{$alumno[2]}</td>";
                echo "<td>{$alumno[3]}</td>";
                echo "</tr>";
            }
        echo "</table>";
    }
?>