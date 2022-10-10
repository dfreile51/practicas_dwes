<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.30</title>
</head>
<body>
    <form action="php/programa.php" method="post">
        <?php
            for($i=1;$i<=10;$i++) {
                echo "
                        <label for='articulo$i'>Artículo $i: </label><br/>
                        <input type='text' name='articulo' id='articulo' placeholder='Nombre del artículo'/><br/>
                        <input type='number' name='precio' id='precio' placeholder='Precio del artículo'/><br/>
                    ";
            }
        ?>
        <br/>
        <label for="ordenar">Ordenar por: </label>
        <select name="ordenar" id="ordenar">
            <option>Nombre</option>
            <option>Precio</option>
        </select>
        <br/><br/>
        <label for="orden">Orden: </label>
        <select name="orden" id="orden">
            <option>Ascendente</option>
            <option>Descendente</option>
        </select>
        <br/><br/>
        <input type="submit" value="Enviar" name="enviar" id="enviar"/>
    </form>
</body>
</html>