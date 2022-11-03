<?php 
    session_start();
    if(!isset($_SESSION)) {

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
    <form action="php/programa.php" method="post">
        <h1>Cartas</h1>
        <table>
            <tr>
                <td><img src="https://media.istockphoto.com/photos/back-side-of-playing-card-picture-id459234653"  width="300" height="500"></td>
                <td><img src="https://media.istockphoto.com/photos/back-side-of-playing-card-picture-id459234653"  width="300" height="500"></td>
                <td><img src="https://media.istockphoto.com/photos/back-side-of-playing-card-picture-id459234653"  width="300" height="500"></td>
            </tr>
        </table>
        <?php 
        $cartas = array();
            $carta[0]="carta1";
            $carta[1]="carta2";
            $carta[2]="carta3";

        ?>

        <p>Donde crees que esta el as??</p>
        <select name='carta'>
            <option value='1'>Primera Carta</option>
            <option value='2'>Segunda Carta</option>
            <option value='3'>Tercera carta</option>
        </select>
        <br/><br/>
        <input type='submit' value='Enviar' name='enviar' id='enviar'>
    </form>
</body>
</html>