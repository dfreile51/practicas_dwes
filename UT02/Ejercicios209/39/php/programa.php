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
    
        $palabras = explode(" ", $texto);
        
        for($i=0;$i<count($palabras);$i++) {
            $primerCaracter = substr($palabras[$i], 0, 1);
            $vowels = array("a","e","i","o","u");
            $pos = 0;
            while(!in_array(strtolower($primerCaracter),$vowels) && $pos < strlen($palabras[$i])) {
                $palabras[$i] = substr($palabras[$i], 1).$primerCaracter;
                $primerCaracter = substr($palabras[$i], 0, 1);
                $pos++;
            }

            $palabras[$i]=$palabras[$i]."ay";
            /* if(in_array($primerCaracter, $vowels)) {
                $traducido = substr_replace($palabras[$i],'ay', strlen($palabras[$i]));
            } else {
                while() {

                }
                $traducido = substr($palabras[$i], 1).substr($palabras[$i], 0,1)."ay";
            } */

            // $textoFinal .= $traducido." ";
        }
        $piglatin = implode(' ', $palabras);
        echo "<h2>Texto en castellano: </h2>";
        echo "<p>$texto</p>";
        echo "<h2>Texto en pig-latin: </h2>";
        echo "<p>$piglatin</p>";
    ?>
</body>
</html>