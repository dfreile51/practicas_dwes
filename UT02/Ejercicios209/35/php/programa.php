<?php
    if(!isset($_REQUEST['enviar'])) {
        header("Location: ../index.html");
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <title>Ejercicio 2.35</title>
</head>
<body>
    <?php
        $nombres = $_REQUEST['nombre'];
        $apellidos = $_REQUEST['apellido'];
        $cursos = $_REQUEST['curso'];
        $edades = $_REQUEST['edad'];
        $localidades = $_REQUEST['localidad'];

        $alumnos = array();
        // Recorremos el array y guardamos cada input como array
        for($i=0;$i<count($nombres);$i++) {
            $alumnos[] = array(
                "nombre"=>$nombres[$i],
                "apellido"=>$apellidos[$i],
                "curso"=>$cursos[$i],
                "edad"=>$edades[$i],
                "localidad"=>$localidades[$i]
            );
        }

        echo "<h2>De final a principio</h2>";
        $alumno = end($alumnos);
        while($alumno) {
            echo "<pre>";
            print_r($alumno);
            echo "</pre>";
            $alumno = prev($alumnos);
        }

        echo "<h2>De principio a final</h2>";
        $alumno = reset($alumnos);
        while($alumno) {
            echo "<pre>";
            print_r($alumno);
            echo "</pre>";
            $alumno = next($alumnos);
        }

        /*array_multisort($cursos, $apellidos, $nombres, $alumnos);
        
        echo "<h2>Ordenado Ascendente</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido</th>";
        echo "<th>Curso</th>";
        echo "<th>Edad</th>";
        echo "<th>Localidad</th>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>".pos($nombres)."</td>";
        echo "<td>".pos($apellidos)."</td>";
        echo "<td>".pos($cursos)."</td>";
        echo "<td>".pos($edades)."</td>";
        echo "<td>".pos($localidades)."</td>";
        echo "</tr>";

        for($i=0;$i<count($nombres);$i++) {
            echo "<tr>";
            echo "<td>".next($nombres)."</td>";
            echo "<td>".next($apellidos)."</td>";
            echo "<td>".next($cursos)."</td>";
            echo "<td>".next($edades)."</td>";
            echo "<td>".next($localidades)."</td>";
            echo "</tr>";
        }
        
        echo "</table>";

        $alumno = end($alumnos);
        echo "<h2>Ordenado Descente</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido</th>";
        echo "<th>Curso</th>";
        echo "<th>Edad</th>";
        echo "<th>Localidad</th>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>".end($nombres)."</td>";
        echo "<td>".end($apellidos)."</td>";
        echo "<td>".end($cursos)."</td>";
        echo "<td>".end($edades)."</td>";
        echo "<td>".end($localidades)."</td>";
        echo "</tr>";

        for($i=0;$i<count($nombres);$i++) {
            echo "<tr>";
            echo "<td>".prev($nombres)."</td>";
            echo "<td>".prev($apellidos)."</td>";
            echo "<td>".prev($cursos)."</td>";
            echo "<td>".prev($edades)."</td>";
            echo "<td>".prev($localidades)."</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        */
        /*
        echo "<h2>Ordenado</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido</th>";
        echo "<th>Curso</th>";
        echo "<th>Edad</th>";
        echo "<th>Localidad</th>";
        echo "</tr>";
        foreach($alumnos as $alumno) {

            echo "<tr>";
                foreach ($alumno as $valor) {
                    echo "<td>$valor</td>";
                }
            echo "</tr>";

        }
        
        echo "</table>";

        
        echo "<pre>";
            print_r($alumnos);
        echo "</pre>";
        */
    ?>
</body>
</html>