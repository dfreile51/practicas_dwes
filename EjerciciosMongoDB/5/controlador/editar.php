<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
    <?php 
        include '../vista/header.php';
        require '/xampp/htdocs/dwes/EjerciciosMongoDB/5/php/funciones.php';
    ?>

    <div class="container mt-1 mb-3">
        <div class="d-flex justify-content-center col-12">
            <div class="card" style="width: 50%;">
                <div class="card-header">
                    <h4 class="text-secondary">Editar Producto</h4>
                </div>
                <?php
                    $id = $_REQUEST['id'];
                    $producto = obtenerProducto($id);
                    $categorias = obtenerCategorias();
                    $proveedores = obtenerProveedores();
                ?>
                <form class="p-4" action="actualizar.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="mb-3">
                        <label class="form-label">Id Producto</label>
                        <input type="text" class="form-control" name="idProducto" value="<?php echo $producto->ProductID; ?>" readonly/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo $producto->ProductName; ?>"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoría</label>
                        <select class="form-control" name="categoria">
                            <?php
                                foreach($categorias as $key => $categoria) {
                            ?>
                                <option value='<?php echo $key; ?>' <?php if($key == $producto->CategoryID) {echo "selected";} ?>><?php echo $categoria; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Proveedor</label>
                        <select class="form-control" name="proveedor">
                            <?php
                                foreach($proveedores as $key => $proveedor) {
                            ?>
                                <option value='<?php echo $key; ?>' <?php if($key == $producto->SupplierID) {echo "selected";} ?>><?php echo $proveedor; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio</label>
                        <input type="text" class="form-control" name="precio" value="<?php echo $producto->UnitPrice; ?>"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cantidad por unidad</label>
                        <input type="text" class="form-control" name="cantidad" value="<?php echo $producto->QuantityPerUnit; ?>"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Unidades en Stock</label>
                        <input type="text" class="form-control" name="unidadesStock" value="<?php echo $producto->UnitsInStock; ?>"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Unidades en orden</label>
                        <input type="text" class="form-control" name="unidadesOrder" value="<?php echo $producto->UnitsOnOrder; ?>"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Reorder Level</label>
                        <input type="text" class="form-control" name="reorder" value="<?php echo $producto->ReorderLevel; ?>"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Discontinued</label>
                        <input type="number" class="form-control" name="discon" min="0" max="1" value="<?php echo $producto->Discontinued; ?>"/>
                    </div>
                    
                    <input type="submit" class="btn btn-success" style="width: 49%;" name="btnActualizar" value="Guardar"/>
                    <a href="../index.php" class="btn btn-danger" style="width: 49%;">Cancelar</a>
                </form>
            </div>  
        </div>
    </div>

    <?php include '../vista/footer.php' ?>
     <!-- Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>