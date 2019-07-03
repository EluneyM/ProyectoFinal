<?php
session_start();
require_once '../helpers/configuracion.php';
require_once '../layout/header.php';
if (isset($_SESSION['admin']) && $_SESSION['admin'] === false) {
    header('Location: index.php');
    exit();
}
?>
<div class="container">
    <div><?php
        if(isset($_SESSION['mensaje'])){
            echo $_SESSION['mensaje'];
            unset($_SESSION['mensaje']);
        }
    ?></div>
    <form class="" action="../operaciones/crear_articulo.php" method="post">
        <div class="">   
            <h3>Ingresar Artículo</h3>
        </div>
        <div class="form-control">
            <div class="form-group">
                <label for="descripcion" class="">Descripcion</label>
                <input class="form-control" name="descripcion" maxlength="100" placeholder="Ingrese el nombre del articulo" required="required" type="text">
            </div>
            <div class="form-group">
                <label for="tipo" class="">Tipo</label>
                <input class="form-control mr-sm-6" name="tipo" maxlength="100" placeholder="Ingrese la categoria del articulo" required="required" type="text">
            </div>
            <div class="form-group">
                <label for="cantidad" class="">Cantidad</label> 
                <input class="form-control" name="cantidad" maxlength="100" placeholder="Ingrese cantidad de articulos" required="required" type="text">
            </div>
            <div class="">
                <div class="col-md-12">
                    <button class="btn btn-success btn-lg pull-right" type="submit" name="agregar_articulo_btn">Enviar</button>
                </div>
            </div>
        </div>
    </form>
    <?php
    require_once '../layout/footer.php';
    ?>

