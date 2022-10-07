<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.27</title>
</head>
<body>
    <form action="php/programa.php" method="post">
        <label for="origen">Origen: </label>
        <select name="origen" id="origen">
            <option value="Barcelona">Barcelona</option>
            <option value="Coruña">Coruña</option>
            <option value="Madrid">Madrid</option>
            <option value="Sevilla">Sevilla</option>
        </select>
        <br/><br/>
        <label for="destino">Destino: </label>
        <select name="destino" id="destino">
            <option value="Barcelona">Barcelona</option>
            <option value="Coruña">Coruña</option>
            <option value="Madrid">Madrid</option>
            <option value="Sevilla">Sevilla</option>
        </select>
        <br/><br/>

        <input type="submit" value="Obtener distancia" name="enviar" id="enviar"/>
    </form>
</body>
</html>