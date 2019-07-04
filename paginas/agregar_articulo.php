<?php
session_start();
require_once '../helpers/configuracion.php';
require_once '../layout/header.php';
if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin'] == false) {
        header('Location: index.php');
        exit();
    }
}
?>
<div class="container">
    <div class="alert alert-success"><?php
        if (isset($_SESSION['mensaje'])) {
            echo $_SESSION['mensaje'];
            unset($_SESSION['mensaje']);
        }
        ?></div>
    <form class="" action="../operaciones/crear_articulo.php" method="post">
        <div class="">
            <h3>Ingresar Artículo</h3>
        </div>
        <label for="descripcion" class="text-center"><h5>Descripcion</h5></label>
        <input class="form-control" name="descripcion" maxlength="100" placeholder="Ingrese el nombre del articulo" required="required" type="text">
        <label for="tipo" class="text-center"><h5>Tipo</h5></label>
        <input class="form-control mr-sm-6" name="tipo" maxlength="100" placeholder="Ingrese la categoria del articulo" required="required" type="text">


        <label for="cantidad" class="text-center"><h5>Cantidad</h5></label> 
        <input class="form-control" name="cantidad" maxlength="100" placeholder="Ingrese cantidad de articulos" required="required" type="text">


        <label for="precio" class="text-center"><h5>Precio</h5></label> 
        <input class="form-control" name="precio" maxlength="100" placeholder="Ingrese el precio del articulo, use punto para decimales" required="required" type="text">

        <div class="">
            <div class="col-md-12">
                <button class="btn btn-success btn-lg pull-right" type="submit" name="agregar_articulo_btn">Enviar</button>
            </div>
        </div>
    </form>
    <?php
    require_once '../layout/footer.php';
    ?>

