<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
use app\clases\articulo;

require_once '../layout/header.php';
require_once '../clases/articulo.php';
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
<table>
    <thead>
        <tr>
            <th>#id_producto</th>
            <th>Descripción</th>
            <th>Tipo</th>
            <th>Cantidad</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listarArticulos as $articulo) {
            ?>
            <tr>
                <td><?= $articulo->get_id(); ?></td>
                <td><?= $articulo->get_descripcion(); ?></td>
                <td><?= $articulo->get_tipo(); ?></td>
                <td><?= $articulo->get_cantidad(); ?></td>
            </tr>
        <?php } ?>    
    </tbody>
</table>
<?php
require_once '../layout/footer.php';
?>
