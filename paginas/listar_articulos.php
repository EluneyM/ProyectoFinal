<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

use app\clases\articulo;

require_once '../clases/articulo.php';
require_once '../helpers/constantes.php';
require_once 'carrito.php';
require_once '../layout/header.php';
if (isset($_GET['buscar_articulo_btn'])) {
    $parametroInputBusqueda = $_GET['busqueda_rapida'] ?? '';
    $parametrosBusqueda = [
        'descripcion' => $parametroInputBusqueda,
        'tipo' => $parametroInputBusqueda
    ];
    $listarArticulos = articulo::busqueda_rapida($parametrosBusqueda);
} else {
    $listarArticulos = articulo::busqueda_rapida();
}
?>

<div class="container">
    <br>
    <div class="alert alert-success">
        <?= $mensaje ?? ''; ?>
        <?php
        if (isset($_SESSION['mensaje'])) {
            echo $_SESSION['mensaje'];
            unset($_SESSION['mensaje']);
        }
        ?>
        <a href="mostrar_carrito.php" class="badge badge-success">Ver carrito</a>
    </div>
    <div class="row">
        <?php
        foreach ($listarArticulos as $articulo) {
            ?>

            <div class="col-3">
                <div class="card">
                    <img title="Titulo producto"
                         alt="Imagen del Articulo"
                         class="card-img-top img-thumbnail" src="https://i.imgur.com/XMEhzm9.jpg" height="200px">
                    <div class="card-body">
                        <span><?= $articulo->get_descripcion(); ?></span>
                        <h5 class="card-title">$<?= $articulo->get_precio(); ?></h5>
                        <p class="card-text"><?= $articulo->get_tipo(); ?></p>
                        <form action="" method="post">
                            <input type="hidden" name="id_articulo" id="id_articulo" value="<?= openssl_encrypt($articulo->get_id(), COD, KEY) ?>">
                            <input type="hidden" name="tipo" id="tipo" value="<?= openssl_encrypt($articulo->get_tipo(), COD, KEY); ?>">
                            <input type="hidden" name="descripcion" id="descripcion" value="<?= openssl_encrypt($articulo->get_descripcion(), COD, KEY); ?>">
                            <input type="hidden" name="precio" id="precio" value="<?= openssl_encrypt($articulo->get_precio(), COD, KEY); ?>">
                            <input type="hidden" name="cantidad" id="cantidad" value="<?= openssl_encrypt(1, COD, KEY); ?>">
                            <button class="btn btn-primary" name="btn_accion" type="submit" value="agregar">
                                Agregar al carrito
                            </button>
                        </form>
                        <?php
                        if (isset($_SESSION['admin']) && ($_SESSION['admin'] == true)) {
                            ?>
                            <button class="btn btn-warning"><a href="../operaciones/eliminar_articulo.php?delId=<?= $articulo->get_id(); ?>">Eliminar</a></button>
                        <?php } ?>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</div>


<?php
require_once '../layout/footer.php';
?>