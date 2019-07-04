<?php

session_start();
require_once '../clases/articulo.php';

use app\clases\articulo;

if (isset($_GET['delId'])) {
    $id_articulo = $_GET['delId'];
    $articulo = articulo::buscar_por_id($id_articulo);
    if (!empty($articulo)) {
        $resultado = $articulo[0]->borrar();
        if ($resultado) {
            $_SESSION['mensaje'] = 'Borrado exitoso';
        }
    } else {
        $_SESSION['mensaje'] = 'La operacion no se pudo completar';
        header('Location: ../paginas/listar_articulos.php');
        exit();
    }
} else {
    $_SESSION['mensaje'] = 'No se envió el id';
    header('Location: ../paginas/listar_articulos.php');
    exit();
}
