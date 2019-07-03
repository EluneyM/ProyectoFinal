<?php

declare(strict_types=1);

namespace app\clases;

require_once 'Db.php';

use \PDO;

class articulo {

    protected $id;
    protected $descripcion;
    protected $tipo;
    protected $cantidad;

    public function __construct(int $id = null, string $descripcion, string $tipo, int $cantidad) {
        $this->descripcion = $descripcion;
        $this->id = $id;
        $this->tipo = $tipo;
        $this->cantidad = $cantidad;
    }

    public function get_id(): int {
        return $this->id;
    }

    public function set_id(int $id): void {
        $this->id = $id;
    }

    public function set_descripcion(string $descripcion): void {
        $this->descripcion = $descripcion;
    }

    public function get_descripcion(): string {
        return $this->descripcion;
    }

    public function get_tipo(): string {
        return $this->tipo;
    }

    public function set_tipo(int $tipo): void {
        $this->tipo = $tipo;
    }

    public function get_cantidad(): int {
        return $this->cantidad;
    }

    public function set_cantidad(int $cantidad): void {
        $this->cantidad = $cantidad;
    }

    public function buscar_por_id(int $id): array {
        $base = Db::getConexion();
        $sql = "SELECT * FROM articulos WHERE id_articulo = :id";
        $stmt = $base->prepare($sql);
        $stmt->bindValue(':id', $parametro['id_articulo']);
        $stmt->execute();
        $resultado = $stmt->fetch();
        $array_articulos = [];
        foreach ($resultado as $articulo) {
            $array_articulos[] = self::crear_desde_parametros($articulo);
        }
        return $array_articulos;
    }

    public function borrar(int $id): bool {
        $sql = "DELETE FROM articulos WHERE id = :id_articulo";
        // obtener conexión
        $base = Db::getConexion();
        // preparar la sentencia 
        $stmt = $base->prepare($sql);
        // hacer el bindValue correspondiente
        $stmt->bindValue(':id_articulo', $this->id);
        // ejecutar
        $stmt->execute();
        if ($stmt->rowCount() <> 1) {
            return false;
        } else {
            return true;
        }
    }

    public function actualizar() {
        
    }

    public function insertar(): bool {
        $conexion = Db::getConexion();
        $stmt = $conexion->prepare("INSERT INTO articulos(descripcion, tipo, cantidad) values(:descripcion, :tipo, :cantidad)");
        $stmt->bindValue(':descripcion', $this->descripcion);
        $stmt->bindValue(':tipo', $this->tipo);
        $stmt->bindValue(':cantidad', $this->cantidad);
        $stmt->execute();
        if ($stmt->rowCount() <> 1) {
            return false;
        } else {
            $id_articulo = $conexion->lastInsertId();
            $this->id = $id_articulo;
            return true;
        }
    }
    
    public static function busqueda_rapida(array $parametro = null): array {
        $base = Db::getConexion();
        $sql = "SELECT * FROM articulos WHERE(descripcion like :descripcion) OR
                    (tipo like :tipo)";
        $stmt = $base->prepare($sql);
        $stmt->bindValue(':descripcion', '%' . $parametro['descripcion'] . '%');
        $stmt->bindValue(':tipo', '%' . $parametro['tipo'] . '%');
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        $array_articulos = [];
        foreach ($resultado as $articulo) {
            $array_articulos[] = self::crear_desde_parametros($articulo);
        }
        return $array_articulos;
    }

    public static function crear_desde_parametros(array $parametros): self {
        $id = isset($parametros['id_articulo']) ? (int) $parametros['id_articulo'] : null;
        $descripcion = $parametros['descripcion'] ?? null;
        $tipo = $parametros['tipo'] ?? null;
        $cantidad = isset($parametros['cantidad']) ?(int)$parametros['cantidad']:  null;
        $articulo = new articulo($id, $descripcion, $tipo, $cantidad);
        return $articulo;
    }

}

?>
