<?php

session_start();

if (isset($_GET['delId'])) {
    $id_articulo = $_GET['delId'];
    foreach ($_SESSION['carrito'] as $indice => $articulo) {
        if ($articulo['id_articulo'] == $id_articulo) {
            unset($_SESSION['carrito'][$indice]);
            $_SESSION['mensaje'] = 'El elemento fue borrado';
            header('Location: ../paginas/mostrar_carrito.php');
            exit();
        }
    }
} else {
    $_SESSION['mensaje'] = 'Error al borrar el elemento';
    header('Location: ../paginas/mostrar_carrito.php');
}


