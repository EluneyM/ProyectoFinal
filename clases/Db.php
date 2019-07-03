<?php

namespace app\clases;

use \PDO;

class Db {

    private static $conexion;

    /**
     * Implementación del método en el patrón Singleton, este método se encarga de devolver
     * una instancia ya creada de conexión a la BD, y si no existe la crea, la guarda para los siguientes
     * pedidos, y lo devuelve.
     * 
     */
    public static function getConexion(): PDO {
        if (isset(self::$conexion)) {
            return self::$conexion;
        } else {
            $conexion = self::nuevaConexion();
            self::$conexion = $conexion;
            return self::$conexion;
        }
    }

    private static function nuevaConexion(): PDO {
        $db = new PDO("mysql:host=localhost;dbname=electronicaground;", 'root', 'he8narco2829');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }

}
