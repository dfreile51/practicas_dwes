<?php
    $cartas = array(1,2,3);
    shuffle($cartas);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.31</title>
</head>
<body>
    
    <?php
        $carta1 = "<img class='' src='' />";
        $carta2 = "<img class='' src='' />";
        $carta3 = "<img class='' src='' />";

        $cartas = array();

        $cartas[0] = $carta1;
        $cartas[1] = $carta2;
        $cartas[2] = $carta3;

        if(!isset($_REQUEST['barajar'])) {
            echo "<h1>TRILLEROS</h1>";

            shuffle($cartas);

            foreach($cartas as $carta) {
                echo "<img src='../img/$carta.jpg' />";
            }

            echo "<table>";
            echo "<form>";
            echo "</form action=# method=post>";
            echo "<tr>";
            echo "<input type='submit' value='Barajar' name='barajar' id='barajar'/>";
            echo "</tr>";
            echo "<th><input type='submit' value='1' name='pos' id='carta1'/></th>";
            echo "<th><input type='submit' value='2' name='pos' id='carta1'/></th>";
            echo "<th><input type='submit' value='3' name='pos' id='carta1'/></th>";
            echo "</table>";
        }

        if(isset($_REQUEST[$barajar])) {
            echo "<h1>¿Donde está el AS?</h1>";

            shuffle($reves);

            for($i=0;$i<3;$i++) {
                echo "<img src='../img/$carta.jpg' />";
            }
        } else {
            $pos = $_REQUEST['pos'];
            if($cartas[$pos] == 1) {
                echo "<h2>Has ganado</h2>";
            } else {
                echo "<h2>Has perdido</h2>";
            }
        }

    ?>
    
</body>
</html>