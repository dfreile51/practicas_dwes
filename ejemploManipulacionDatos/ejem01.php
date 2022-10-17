<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulacion de cadenas</title>
    <style>
        table, td {
            border: 1px solid black;
        }


    </style>
</head>
<body>
    <?php
        /* $nombre = "  fdasfsfsa  .....";
        echo "<h2>Antes del trim</h2>";
        echo "<p>#$nombre#</p>";
        echo "<h2>Después del trim</h2>";
        $nombre = trim(trim($nombre,"."));
        echo "<p>#$nombre#</p>";

        echo "<p>--------------</p>";
        $texto = "Una linea\nY otra linea";
        echo "<p>$texto</p>";
        echo "<p>--------------</p>"; */

        /* $precios = array(7,2.67,55.49,16.5);
        echo "<table>";

        foreach($precios as $precio) {

            printf("<tr><td class='precio'>Precio: %5.2f</td></tr>",$precio);
        }

        echo "</table>"; */

        /* $nombre = "diego";
        $nombreMayus = strtoupper($nombre);
        if(strtoupper($nombre) == "diego") {
            echo "Login correcto $nombreMayus";
        } else {
            echo "Usuario incorrecto";
        } */

        // echo "<p>$nombreMayus</p>";

        /* $texto = "este es el texto que voy a dividir en subcadenas";

        $cad1= "hello";
        $cad2 = "hello";

        $compara = strcmp($cad1, $cad2);
        echo "<p>$compara</p>";
        if (!strcasecmp($cad1, $cad2)) {
            echo "<p>Iguales</p>";
        } else {
            echo "<p>Diferentes</p>";
        } */
        /* $pal = substr($texto, -10, -2);
        $cars = strlen($texto);
        echo "<p>$pal</p>"; */
        
        /* if (in_array($buscar, $palabra)) { */
            
        /* } else {
            echo "<p>$buscar <b>NO</b> aparece en el texto</p>";
        } */

        /* while ($palabra != "" && $palabra != "que") {
            echo $palabra."<br/>";
            $palabra = strtok(" ");
        } */


        /* echo "<pre>";
        print_r($palabras);
        echo "</pre>";

        $texto2 = implode(" ", $palabras );
        echo "<p>Texto: $texto</p>";
        echo "<p>Texto2: $texto2</p>"; */


        $var = 'ABCDEFGH:/MNRPQR/';
        echo "Original: $var<hr />\n";

        /* These two examples replace all of $var with 'bob'. */
        echo substr_replace($var, 'bob', 0) . "<br />\n";
        echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n";

        /* Insert 'bob' right at the beginning of $var. */
        echo substr_replace($var, 'bob', 0, 0) . "<br />\n";

        /* These next two replace 'MNRPQR' in $var with 'bob'. */
        echo substr_replace($var, 'bob', 10, -1) . "<br />\n";
        echo substr_replace($var, 'bob', -7, -1) . "<br />\n";

        /* Delete 'MNRPQR' from $var. */
        echo substr_replace($var, '', 10, -1) . "<br />\n";

    ?>
</body>
</html>