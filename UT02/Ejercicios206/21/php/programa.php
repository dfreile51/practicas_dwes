<?php
    if(!isset($_REQUEST['calcular'])) {
        header("Location: ../index.html");
    }    
?>
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
        /*
        $i=1;
        $var="num$i";
        while (isset($_REQUEST[$var])) {
            $$var = $_REQUEST[$var];
            $i++;
            $var="num$i";
        }
        */

        $numValores = $_REQUEST['numValores'];
        $funcion = $_REQUEST['funcion'];
        for($i=1;$i<=$numValores;$i++) {
            $var="num$i";
            $$var = $_REQUEST[$var];
            echo "<p>$var: ".$$var."</p>";
        }

        switch($funcion) {

            case 'minimo':
                $i = 0;
                $j = 0;
                while($i<=$numValores) {
                    if($numValores>$j) {
                        $j = $numValores;
                    }
                    $i++;
                }
                echo $j;
                break;

        }

    ?>
</body>
</html>