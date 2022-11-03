<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos funciones</title>
</head>
<body>
    <?php
        /* function incrementar (&$num1, $inc = 1) {
            $num1 = $num1 + $inc;
            return $num1;
        }

        $num1 = 1;
        $inc = 5;

        $res = incrementar($num1, 10);
        echo "<p>num1: $num1</p>";
        echo "<p>resultado: $res</p>"; */

        /* function reverse_r($cad) {
            if (strlen($cad)>0) {
                reverse_r (substr($cad,1));
            }
            echo substr ($cad, 0, 1);
            return;
        }

        $cad1 = "hola";
        reverse_r($cad1); */
        include("plantillas/header.inc");

        include("php/funciones.php");
        $num1 = 10;
        $suma = sumar(2,4);
        
        echo "<p>suma: $suma</p>";
        echo "<p>num1 (antes): $num1</p>";
        $valor = incrementar($num1, 100);
        echo "<p>num1 (despues): $valor</p>";
        include("plantillas/header.inc");
    ?>
</body>
</html>