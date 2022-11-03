<?php
    if(isset($_COOKIE['visitas'])) {
        $visitas = intval($_COOKIE['visitas'])+1;
        setcookie("visitas", $visitas /* ,time()-1 */);
        $mensaje = "Número de visitas: ".$_COOKIE['visitas'];
    } else {
        setcookie( 'visitas', "1", time()+3600);
        header ("Location: $PHP_SELF?COOKIE_SET=1");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.50</title>
</head>
<body>
    <p><?php echo $mensaje; ?></p>
    <?php
        if(isset($_COOKIE['visitas'])) {
            $imagen = rand(1,6);
            echo "<img src='imgs/$imagen.jpg'; alt='$imagen'>";
        }
    ?>
</body>
</html>