<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lista = array(5, 8.5, "Juan");
        /*
        $lista[0] = 5;
        $lista[1] = 8.5;
        $lista[2] = "Juan";
        */
        /*
        for($i=0;$i<count($lista);$i++) {
            echo "<p>valor $i: {$lista[$i]}</p>";
        }
        */
        foreach($lista as $i=>$valor) {
            echo "<p>valor $i: ".$valor."</p>";
        }
        echo "<p>--------------</p>";
        $lista[] ="Álvarez";
        foreach($lista as $i=>$valor) {
            echo "<p>valor $i: ".$valor."</p>";
        }
        echo "<p>--------------</p>";
        $lista[] = array(13, 7.8, "Diego");
        foreach($lista as $i=>$valor) {
            //echo "<p>valor $i: ".$valor."</p>";
            if(is_array($valor)) {
                foreach($valor as $j=>$var) {
                    echo "<p>valor $j: {$var}</p>";
                }
            } else {
                echo "<p>valor $i: $valor</p>";
            }
            
        }
    ?>
</body>
</html>