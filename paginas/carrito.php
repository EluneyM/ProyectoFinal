<?php

$mensaje = "";
if (isset($_POST['btn_accion'])) {
    switch ($_POST['btn_accion']) {
        case 'agregar':
            if (is_string(openssl_decrypt($_POST['id_articulo'], COD, KEY))) {
                $id_articulo = openssl_decrypt($_POST['id_articulo'], COD, KEY);
                $mensaje .= 'Ok ID correcto ' . $id_articulo . "</br>";
            } else {
                $mensaje = 'Error ID incorrecto' . "</br>";
                break;
            }
            if (is_string(openssl_decrypt($_POST['descripcion'], COD, KEY))) {
                $descripcion = openssl_decrypt($_POST['descripcion'], COD, KEY);
                $mensaje .= 'Ok Descripción correcta ' . $descripcion . "</br>";
            } else {
                $mensaje = 'Error descripción incorrecta' . "</br>";
                break;
            }
            if (is_string(openssl_decrypt($_POST['tipo'], COD, KEY))) {
                $tipo = openssl_decrypt($_POST['tipo'], COD, KEY);
                $mensaje .= 'Ok Tipo correcto ' . $tipo . "</br>";
            } else {
                $mensaje = 'Error en el Tipo' . "</br>";
                break;
            }
            if (is_string(openssl_decrypt($_POST['cantidad'], COD, KEY))) {
                $cantidad = openssl_decrypt($_POST['cantidad'], COD, KEY);
                $mensaje .= 'Ok Cantidad correcta ' . $cantidad . "</br>";
            } else {
                $mensaje = 'Error Cantidad incorrecta' . "</br>";
                break;
            }
            if (is_numeric(openssl_decrypt($_POST['precio'], COD, KEY))) {
                $precio = openssl_decrypt($_POST['precio'], COD, KEY);
                $mensaje .= 'Ok Cantidad correcta ' . $precio . "</br>";
            } else {
                $mensaje = 'Error Precio incorrecto' . "</br>";
                break;
            }
            if (!isset($_SESSION['carrito'])) {
                $articulo = array(
                    'id_articulo' => $id_articulo,
                    'descripcion' => $descripcion,
                    'tipo' => $tipo,
                    'cantidad' => $cantidad,
                    'precio' => $precio
                );
                $_SESSION['carrito'][0] = $articulo;
                $mensaje = 'Producto agregado al carrito';
            } else {
                $array_id_articulos = array_column($_SESSION['carrito'], 'id_articulo');
                if (in_array($id_articulo, $array_id_articulos)) {
                    $mensaje = 'El articulo ya ha sido ingresado al carrito!';
                } else {
                    $numero_articulos = count($_SESSION['carrito']);
                    $articulo = array(
                        'id_articulo' => $id_articulo,
                        'descripcion' => $descripcion,
                        'tipo' => $tipo,
                        'cantidad' => $cantidad,
                        'precio' => $precio
                    );
                    $_SESSION['carrito'][$numero_articulos] = $articulo;
                    $mensaje = 'Producto agregado al carrito';
                }
            }
            break;

        default:
            break;
    }
}