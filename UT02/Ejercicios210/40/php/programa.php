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
    <title>Ejercicio 2.40</title>
</head>
<body>
    <?php
        $texto = $_REQUEST['texto'];

        echo"<h1>Texto Normal</h1>";
        echo "$texto";
        echo"<h1>Texto Modificado</h1>";
        $texto = str_replace("adios","a2",$texto);
        $texto = str_replace("besos","bs",$texto);
        $texto = str_replace("donde","dnd",$texto);
        $texto = str_replace("fin de semana","finde",$texto);
        $texto = str_replace("instituto","ies",$texto);
        $texto = str_replace("mensaje","msj",$texto);
        $texto = str_replace("por favor","pls",$texto);
        $texto = str_replace("porque","pq",$texto);
        $texto = str_replace("que","q",$texto);
        $texto = str_replace("tambien","tb",$texto);
        $texto = str_replace("por","x",$texto);
        $texto = str_replace("para","xa",$texto);
        echo "<p>$texto</p>";
        
    ?>
</body>
</html>