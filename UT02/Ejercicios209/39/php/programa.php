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
    <title>Ejercicio 2.39</title>
</head>
<body>
    <?php
        $texto = $_REQUEST['texto'];

        echo "<h2>Antes: </h2>";
        echo "<p>$texto</p>";

        echo "<h2>Después: </h2>";

        $palabras = explode(" ", $texto);
        echo "<pre>";
        print_r($palabras);
        echo "</pre>";
        $i = 0;
        
        /* $palabra = strtok($texto, " ");
        while ($palabra != "") {
            echo $palabra."<br/>";
            $palabra = strtok(" ");
        } */
        /* $vowels = array("a","e","i","o","u");

        $resultado = str_replace($vowels, "ay", $texto);

        echo "<p>$resultado</p>"; */
    ?>
</body>
</html>