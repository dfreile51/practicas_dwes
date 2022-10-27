<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.47</title>
</head>
<body>
    <?php
        $numeros = array( 23,45,5,78,12,34 );
        require_once('php/funciones.php');

        $suma = sumar($numeros);
        $media = media($numeros);
        $maximo = maximo($numeros);
        $minimo = minimo($numeros);
        $recorrido = recorrido($numeros);
        $desviacion = desviacion($numeros);
        // $moda = moda($numeros);

        echo "<p>La suma es: $suma</p>";
        echo "<p>La media es: $media</p>";
        echo "<p>El maximo es: $maximo</p>";
        echo "<p>El minimo es: $minimo</p>";
        echo "<p>El recorrido es: $recorrido</p>";
    ?>
</body>
</html>