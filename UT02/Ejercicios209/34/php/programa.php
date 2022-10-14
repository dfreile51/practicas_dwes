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
    <title>Ejercicio 2.34</title>
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
        
        echo "<h2>Sin ordenar</h2>";
        echo "<pre>";
        print_r($alumnos);
        echo "</pre>";

        array_multisort($cursos, $apellidos, $nombres, $alumnos);

        echo "<h2>Ordenado</h2>";
        echo "<pre>";
        print_r($alumnos);
        echo "</pre>";
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