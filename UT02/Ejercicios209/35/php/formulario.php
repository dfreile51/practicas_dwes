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
    <title>Ejercicio 2.35</title>
</head>
<body>
    <?php
        $numAlum = intval($_REQUEST['numAlum']);
    ?>
    <form action="programa.php" method="post">
    <?php
        $j=1;
        for($i=0;$i<$numAlum;$i++) {
            echo "<label for='alumno$i'>Alumno ".$j+$i."</label>";
            echo "<br/><br/>";
            echo "<input type='text' name='nombre[$i]' id='nombre$i' placeholder='Nombre del alumno'/>";
            echo "<br/><br/>";
            echo "<input type='text' name='apellido[$i]' id='apellido$i' placeholder='Apellido del alumno'/>";
            echo "<br/><br/>";
            echo "<input type='text' name='curso[$i]' id='curso$i' placeholder='Curso del alumno'/>";
            echo "<br/><br/>";
            echo "<input type='number' name='edad[$i]' id='edad$i' placeholder='Edad del alumno'/>";
            echo "<br/><br/>";
            echo "<input type='text' name='localidad[$i]' id='localidad$i' placeholder='Localidad del alumno'/>";
            echo "<br/><br/>";
        }
    ?>
    <input type="submit" value="Enviar" name="enviar" id="enviar"/>

    </form>
</body>
</html>