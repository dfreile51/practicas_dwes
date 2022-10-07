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
    <link rel="stylesheet" href="css/estilos.css">
    <title>Erjercicio 2.27</title>
</head>
<body>
    <?php
        $origen = $_REQUEST['origen'];
        $destino = $_REQUEST['destino'];
        /*
        $ciudades = array();

        $ciudades[] = array(
            "barcelona" => 0,
            "coruña" => 1188,
            "madrid" => 621,
            "sevilla" => 1046,
        );
        $ciudades[] = array(
            "barcelona" => 1188,
            "coruña" => 0,
            "madrid" => 609,
            "sevilla" => 947,
        );
        $ciudades[] = array(
            "barcelona" => 621,
            "coruña" => 609,
            "madrid" => 0,
            "sevilla" => 538,
        );
        $ciudades[] = array(
            "barcelona" => 1046,
            "coruña" => 947,
            "madrid" => 538,
            "sevilla" => 0,
        );
        */
        $barcelona = array(
            "Barcelona" => 0,
            "Coruña" => 1188,
            "Madrid" => 621,
            "Sevilla" => 1046
        );
        $coruña = array(
            "Barcelona" => 1188,
            "Coruña" => 0,
            "Madrid" => 609,
            "Sevilla" => 947
        );
        $madrid = array(
            "Barcelona" => 621,
            "Coruña" => 609,
            "Madrid" => 0,
            "Sevilla" => 538
        );
        $sevilla = array(
            "Barcelona" => 1046,
            "Coruña" => 947,
            "Madrid" => 538,
            "Sevilla" => 0
        );

        $distancia = array(
            "Barcelona" => $barcelona,
            "Coruña" => $coruña,
            "Madrid" => $madrid,
            "Sevilla" => $sevilla
        );

        $dis = $distancia[$origen][$destino];
        echo "<p>La distancia entre $origen y $destino es $dis</p>";
  
    ?>
</body>
</html>