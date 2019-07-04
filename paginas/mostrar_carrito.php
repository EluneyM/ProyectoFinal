<?php
session_start();
require_once '../helpers/constantes.php';
require_once 'carrito.php';
require_once '../layout/header.php';
?>

<div class="alert alert-success">
    <?php
    if (isset($_SESSION['mensaje'])) {
        echo $_SESSION['mensaje'];
        unset($_SESSION['mensaje']);
    }
    ?>
</div>


<?php
if (!empty($_SESSION['carrito'])) {
    ?>

    <br>
    <h3>Lista del carrito</h3>
    <table class="table table-light table-bordered">
        <tbody>
            <tr>
                <th width="40%">Descripcion</th>
                <th width="15%" class="text-center">Cantidad</th>
                <th width="20%" class="text-center">Precio</th>
                <th width="20%" class="text-center">Total</th>
                <th width="5%">--</th>
            </tr>
            <?php
            $total = 0;
            foreach ($_SESSION['carrito'] as $articulo) {
                ?>
                <tr>
                    <td><?= $articulo['descripcion']; ?></td>
                    <td class="text-center"><?= $articulo['cantidad']; ?></td>
                    <td class="text-center">$<?= $articulo['precio']; ?></td>
                    <td class="text-center">$<?= number_format($articulo['precio'] * $articulo['cantidad'], 2); ?></td>
                    <td>                        
                        <button class="btn btn-danger" type="submit" name="btn_borrar_articulo" value="borrar">
                            <a href="../operaciones/borrar_del_carrito.php?delId=<?= $articulo['id_articulo'] ?>">Eliminar</a>
                        </button>
                        </form>
                    </td>
                </tr>
                <?php
                $total = $total + ($articulo['precio'] * $articulo['cantidad']);
            }
            ?>
            <tr>
                <td colspan="3" align="right"><h3>Total</h3></td>
                <td align="right"><h3>$<?= number_format($total, 2); ?></h3></td>
            </tr>
        </tbody>    
    </table>
<?php } else {
    ?>
    <div class="alert-success">
        No hay artículos en el carrito
    </div>

    <?php
}
?>
<?php
require_once '../layout/footer.php';
?>