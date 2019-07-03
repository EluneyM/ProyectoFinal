<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require_once '../clases/usuario.php';

use app\clases\usuario;

$usuario = new usuario();
// si quitan los comentarios, se registra en el sistem el usuario jose/jose
// Nota: Recuerden que hay un índice único para el campo usuario
if (isset($_POST['registrobtn']) && $usuario->registrarUsuario($_POST['username'], $_POST['pass'])) {
    $_SESSION['mensaje'] = 'usuario registrado con exito';
} else {
    if (isset($_POST['registrobtn'])) {
        $_SESSION['mensaje'] = 'error al registrar usuario';
    }
}
require_once '../layout/header.php';
?>
        <div class="container-fluid main-content">
            <div class="">
                <div class="login-content">

                    <div class="text-center">
                        <h2>Registro de Usuario</h2>

                        <div class="alert">
                            <div><?php
                            if(isset($_SESSION['mensaje'])){
                                echo $_SESSION['mensaje'];
                                unset($_SESSION['mensaje']);
                            }
                            ?></div>
                        </div>
                    </div>
                    <div >
                        <div >
                            <form class="form-horizontal" method="post">
                                <div class="control-group">
                                    <label class="control-label" for="username">Usuario:</label>
                                    <div class="controls">
                                        <input id="username" name="username" type="text" required/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="password">Password:</label>
                                    <div class="controls">
                                        <input id="password" name="pass" type="password" required/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <input value="Registrarse" name="registrobtn" class="btn btn-primary" type="submit">
                                        <a id="registerLink" href="login.php">Ir al Login</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
