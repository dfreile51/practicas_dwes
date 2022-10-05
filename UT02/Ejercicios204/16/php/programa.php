<?php
    $style = "hidden";
    $color = "black";
    $tamano = 0;
    $texto = "texto por defecto";
    if(isset($_REQUEST['enviar'])) {
        $texto = $_REQUEST['texto'];
        $tamano = $_REQUEST['tamano'];
        $style = $_REQUEST['style'];
        $color = $_REQUEST['color'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        p {
            border-style: <?php echo $style;?>
            border-color: <?php echo $color;?>
            border-width: <?php echo $tamano;?>
        }
    </style>
    <title>Formatos de Texto</title>
</head>
<body>
    <?php 
        echo "<h1>Texto</h1>";
        echo "<hr/>";  
        echo "<p style='border: $tamano"."px"." $style $color;'>$texto</p>";
    ?>
    <a href="../index.html">Volver</a>
</body>
</html>