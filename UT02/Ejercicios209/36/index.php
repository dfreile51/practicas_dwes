<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.36</title>
</head>
<body>
    <form action="php/programa.php" method="post">
    <?php
    $j = 1;
    for($i=0;$i<5;$i++) {
        echo "<label for='numero[$i]'>Número ".$j+$i.": </label>";
        echo "<br/><br/>";
        echo "<input type='number' name='numero[$i]' id='numero$i' min='1' max='100'/>";
        echo "<br/><br/>"; 
    }
    ?>
    <input type="submit" value="Enviar" name="enviar" id="enviar"/>
    </form>
</body>
</html>