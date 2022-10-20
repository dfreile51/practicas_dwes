<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.45</title>
</head>
<body>
    <?php
        $info = $_SERVER;
        $cadEmail = "#^[a-zA-Z0-9\.]+@[a-zA-Z]+#";
        // $cadRuta = "#^[a-zA-Z]:/([a-zA-Z/])+#";
        $sustiEmail = "&lt;&lt;EMAIL&gt;&gt;";
        // $sustiRuta= "&lt;&lt;RUTA&gt;&gt;";

        $nuevaInfo = preg_replace($cad, $susti, $info);

        echo "<pre>";
        print_r($nuevaInfo);
        echo "</pre>";
    ?>
</body>
</html>