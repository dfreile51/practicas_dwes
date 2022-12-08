<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Ejercicio 3 mongo</title>
</head>
<body>
    <?php
        require_once 'funciones.php';
        $idProductos = obtenerIdProductos();
        $idCategorias = obtenerCategorias();
        $idProveedores = obtenerProveedores();

        $ultimoId = intval(array_pop($idProductos));

 /*        $ultId = intval($ultimoId); */

        $ultimoId += 1;
    ?>
    <div class="contenedor">
        <table>
            <form action="programa.php" method="post">
                <tr>
                    <td>
                        <label for="idProducto">Id del producto:</label>
                        <br/><br/>
                        <input type="text" name="idProducto" id="idProducto" value="<?php echo $ultimoId?>" readonly/>
                    </td>
                    <td>
                        <label for="nombre">Nombre del producto:</label>
                        <br/><br/>
                        <input type="text" name="nombre" id="nombre" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="idProveedor">Id del proveedor:</label>
                        <br/><br/>
                        <select name="idProveedor" id="idProveedor">
                            <?php
                                foreach($idProveedores as $key => $idProveedor) {
                                    echo "<option value='$key'>{$idProveedor}</option>";
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <label for="idCategoria">Id de la categoria:</label>
                        <br/><br/>
                        <select name="idCategoria" id="idCategoria">
                            <?php
                                foreach($idCategorias as $key => $idCategoria) {
                                    echo "<option value='{$key}'>{$idCategoria}</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cantidad">Cantidad por Unidad:</label>
                        <br/><br/>
                        <input type="text" name="cantidad" id="cantidad" />
                    </td>
                    <td>
                        <label for="unidadesStock">Unidades en stock:</label>
                        <br/><br/>
                        <input type="text" name="unidadesStock" id="unidadesStock" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="unidadesOrder">Unidades en orden:</label>
                        <br/><br/>
                        <input type="text" name="unidadesOrder" id="unidadesOrder" />
                    </td>
                    <td>
                        <label for="reorderLevel">Reorder Level:</label>
                        <br/><br/>
                        <input type="text" name="reorderLevel" id="reorderLevel" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="discontinued">Discontinued:</label>
                        <br/><br/>
                        <input type="text" name="discontinued" id="discontinued" />
                    </td>
                    <td>
                        <label for="precio">Precio por unidad:</label>
                        <br/><br/>
                        <input type="text" name="precio" id="precio" />
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td colspan="2"><input type="submit" value="Enviar" id="enviar" name="enviar" /></td>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>