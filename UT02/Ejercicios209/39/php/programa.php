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
        $vowels = array("a","e","i","o","u","A","E","I","O","U");

        echo "<h2>Texto en castellano: </h2>";
        echo "<p>$texto</p>";

        
        
        $palabras = explode(" ", $texto);
        /* echo "<pre>";
        print_r($palabras);
        echo "</pre>"; */
        $textoFinal = "";
        for($i=0;$i<count($palabras);$i++) {
            $primerCaracter = substr($palabras[$i], 0, 1);
            if(in_array($primerCaracter, $vowels)) {
                $traducido = substr_replace($palabras[$i],'ay', strlen($palabras[$i]));
            } else {
                $traducido = substr_replace($palabras[$i],'ay', strlen($palabras[$i]));
            }

            $textoFinal .= $traducido." ";
        }
        
        echo "<h2>Texto en ping-latin: </h2>";
        echo "<p>$textoFinal</p>"
        

        // echo "<p>".implode(" ", $textoFinal)."</p>"
        
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