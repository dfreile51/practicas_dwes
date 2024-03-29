<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.23</title>
</head>
<body>
    <h1>Pedido de la pizza</h1>
    <br/>
    <form action="php/programa.php" method="post">
        <label for="username">Nombre de usuario: </label>
        <input type="text" name="username" id="username" required />
        <br/><br/>
        <label for="tamanoPizza">Tamaño de la pizza: </label>
        <select name="tamanoPizza" id="tamanoPizza">
            <option value="mini">Mini(2,95€)</option>
            <option value="media">Media(4,95€)</option>
            <option value="maxi">Maxi(8,95€)</option>
        </select>
        <br/><br/>
        <label for="basePizza">Base de la pizza: </label>
        <select name="basePizza" id="basePizza">
            <option value="normal">Normal(0€)</option>
            <option value="crujiente">Crujiente(1€)</option>
            <option value="rellena">Rellena(2€)</option>
        </select>
        <br/><br/>
        <label for="salsaPizza">Salsa: </label>
        <br/>
        <input type="radio" name="salsaPizza" id="salsaPizza" value="barbacoa"/>
        <label for="barbacoaPizza">Barbacoa(0,95€)</label>
        <br/>
        <input type="radio" name="salsaPizza" id="salsaPizza" value="carbonara"/>
        <label for="carbonaraPizza">Carbonara(1,45€)</label>
        <br/><br/>
        <label for="ingredientes">Ingredientes: </label>
        <br/>
        <input type="checkbox" name="pollo" id="pollo" value="pollo"/>
        <label for="pollo">Pollo(0,55€)</label>
        <br/>
        <input type="checkbox" name="bacon" id="bacon" value="bacon"/>
        <label for="bacon">Bacon(0,75€)</label>
        <br/>
        <input type="checkbox" name="jamon" id="jamon" value="jamon"/>
        <label for="jamon">Jamón(0,95€)</label>
        <br/>
        <input type="checkbox" name="cebolla" id="cebolla" value="cebolla"/>
        <label for="cebolla">Cebolla(0,45€)</label>
        <br/>
        <input type="checkbox" name="aceitunas" id="aceitunas" value="aceitunas"/>
        <label for="aceitunas">Aceitunas(0,55€)</label>
        <br/>
        <input type="checkbox" name="pimiento" id="pimineto" value="pimiento"/>
        <label for="pimiento">Pimiento(0,65€)</label>
        <br/><br/>
        <input type="submit" value="Enviar" name="enviar" id="enviar"/>
    </form>
</body>
</html>