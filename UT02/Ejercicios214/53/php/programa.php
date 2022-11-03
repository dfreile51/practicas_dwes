<?php 
if (!isset($_COOKIE['cant'])){
    setcookie("cant","1");
    header ("Location: $PHP_SELF?COOKIE_SET=1");
    
}

if (!isset($_COOKIE['win'])){
    setcookie("win","1");
    header ("Location: $PHP_SELF?COOKIE_SET=0");
    
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

    echo "<h2>cartas</h2>";
    $carta1=0;
    if (isset($_REQUEST['enviar'])){
        setcookie('cant', $_COOKIE[ 'cant' ]+1);
        $mensaje = 'Numero de visitas: '.$_COOKIE['cant'];
        $carta = $_REQUEST['carta'];
        $carta1 = rand(1,3);

        echo "<table>
                <tr>
                    <td><img src='../$carta1.jpg'/></td>
                </tr>
            </table>";

            switch ($carta) {

                case '1':
                    if($carta1 == 1 ){
                        echo"ganaste <br>";
                        setcookie('win', $_COOKIE[ 'win' ]+1);
                        $mensaje1 = 'Veces ganado '.$_COOKIE['win'];
                    }else{
                        echo"perdiste <br>";
                        setcookie('win', $_COOKIE[ 'win' ]+0);
                        $mensaje1 = 'Veces ganado: '.$_COOKIE['win'];
                    }
                    break;
                case '2':
                    if($carta1 == 2 ){
                        echo"ganaste <br>";
                        setcookie('win', $_COOKIE[ 'win' ]+1);
                        $mensaje1 = 'Veces ganado '.$_COOKIE['win'];
                    }else{
                        echo"perdiste <br>";
                        setcookie('win', $_COOKIE[ 'win' ]+0);
                        $mensaje1 = 'Veces ganado '.$_COOKIE['win'];
                    }
                    break;
                case '3':
                    if($carta1 == 3 ){
                        echo"ganaste <br>";
                        setcookie('win', $_COOKIE[ 'win' ]+1);
                        $mensaje1 = 'Veces ganado '.$_COOKIE['win'];
                    }else{
                        echo"perdiste  <br>";
                        setcookie('win', $_COOKIE[ 'win' ]+0);
                        $mensaje1 = 'Veces ganado '.$_COOKIE['win'];
                    }
                    break;  
                default:
                    $txt= "Perdiste <br>";
                    $op=null;
                    break;
    
            }

            echo "$mensaje <br>";
            echo " $mensaje1 <br>";
    } else{
        echo"<h3> No se han recibido datos del usuario</h3>";
    }
    ?>
    <a href="php/index.php"><h3>Jugar de nuevo</h3></a>
    <a href="html/index1.html"><h3>Salir del juego</h3></a>
</body>
</html>