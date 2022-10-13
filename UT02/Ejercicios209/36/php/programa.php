<?php
    if(!isset($_REQUEST['enviar'])) {
        header("Location: ../index.php");
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.36</title>
</head>
<body>
    <?php
        $numeros = $_REQUEST['numero'];

        function mitad (&$valor) {
            $valor /= 2;
        }

        echo "<pre>";
        print_r($numeros);
        echo "</pre>";

        array_walk($numeros, "mitad");

        echo "<pre>";
        print_r($numeros);
        echo "</pre>";
    ?>
</body>
</html>