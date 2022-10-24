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
    <title>Ejercicio 2.46</title>
</head>
<body>
    <?php
        $texto = $_REQUEST['texto'];
        echo "<h2>Texto Anterior</h2>";
        echo "<p>$texto</p>";

        $cadEmail = "#[a-zA-Z0-9\.]+@[a-zA-Z]+\.(com)|(org)|(es)$#";
        $cadFecha = "#(0[1-9]|[12][0-9]|3[01])(\-|/)(0[1-9]|1[0-2])(\-|/)([0-9]{1,4})#";
        $cadDni = "#[0-9]{7,8}[a-z,A-Z]#";
        $cadTlfn =  "#[6-9][0-9]{8}#";

        $sustiEmail = "&lt&ltEMAIL&gt&gt";
        $sustiFecha = "&lt&ltFECHA&gt&gt";
        $sustiDni = "&lt&ltDNI&gt&gt";
        $sustiTlfn = "&lt&ltTLFN&gt&gt";

        $patrones = array($cadDni, $cadEmail, $cadFecha, $cadTlfn);
        $sustituciones = array($sustiDni, $sustiEmail, $sustiFecha, $sustiTlfn);

        $textoPosterior = preg_replace($patrones, $sustituciones, $texto);
        echo "<h2>Texto Posterior</h2>";
        echo "<p>$$textoPosterior</p>";
    ?>
</body>
</html>