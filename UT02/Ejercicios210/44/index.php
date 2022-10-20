<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.44</title>
</head>
<body>
    
    <?php

        $cadIp = "#[1-254]{1,3}\.[1-254]{1,3}\.[1-254]{1,3}\.[1-254]{1,3}#";
        $ip = "255.1.1.1";
        /* $cadFecha = "#(0[1-9]|[12][0-9]|3[01])(-|\/)(0[1-9]|1[012])(-|\/)((19|20)[0-9]{2})#";
        $fecha = "17/09/1999"; */
        /* $cadArchi = "#^[a-z,A-Z]{1,8}\.[(php)|(html)|(css)|(htm)]#";
        $archivo = "holadaw.php"; */
        /* $cadtlfn =  "#[0-9]{9}#";
        $telefono = "987123123"; */
        /* $caddni = "#[0-9]{7,8}[a-z,A-Z]#";
        $dni = "71480248C"; */
        $encontrado = preg_match($cadIp, $ip);

        if($encontrado) {
            echo "<p>Encontrado</p>";
        } else {
            echo "<p>No encontrado</p>";
        }

        /* $patron = "/[0-9]{4}\-[A-Z]{3}/";
        $texto = "1234-SBJ dfkljfñlakjsfñlj 2345-BGF dfadag gagdgsa gadsdgdga";
        $matricula = preg_split($patron, $texto, -1, PREG_SPLIT_NO_EMPTY);
        
        echo "<pre>";
        print_r($matricula);
        echo "</pre>"; */
        
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