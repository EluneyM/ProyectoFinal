<?php
session_start();
require_once '../clases/articulo.php';
require_once '../clases/Db.php';

use app\clases\Db;
use app\clases\articulo;

if (isset($_POST['agregar_articulo_btn'])) {
    $base = Db::getConexion();
    $articulo = articulo::crear_desde_parametros($_POST);
    $resultado = $articulo->insertar();
    if($resultado = true) {
        $_SESSION['mensaje'] = 'La inserción del artículo fue exitosa';
    } else {
        $_SESSION['mensaje'] = 'La operación no se pudo completar';
    }
    header('Location: /paginas/agregar_articulo.php');
    exit();
}
?>
<?php require_once '../footer.php'; ?>
