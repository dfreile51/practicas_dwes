<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulacion de cadenas(Expresiones regulares)</title>
</head>
<body>
    
    <?php
        $patron = "/[0-9]{4}\-[A-Z]{3}/";
        $texto = "1234-SBJ dfkljfñlakjsfñlj 2345-BGF dfadag gagdgsa gadsdgdga";
        $matricula = preg_split($patron, $texto, -1, PREG_SPLIT_NO_EMPTY);
        
        echo "<pre>";
        print_r($matricula);
        echo "</pre>";
        
        /* $patron = "/[0-9]{4}\-[A-Z]{3}/";
        $sustituto = "XXXXX";
        $texto = "1234-SBJ dfkljfñlakjsfñlj 2345-BGF";
        $coincidencias = array();

        $textoOculto = preg_replace($patron, $sustituto, $texto, -1, $cambios);

        echo "<p>Texto Oculto</p>";
        echo "<pre>";
        print_r($textoOculto);
        echo "</pre>";
        echo "<p>Cambios: $cambios</p>"; */
    ?>

</body>
</html>