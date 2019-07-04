<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require_once '../clases/usuario.php';

use app\clases\usuario;

$usuario = new usuario();
if (isset($_POST['loginbtn']) && $usuario->esLoginValido($_POST['username'], $_POST['pass'])) {
    $_SESSION['username'] = $_POST['username'];
    if ($usuario->es_administrador($_POST['username'])) {
        $_SESSION['admin'] = true;
    }
    else{
        $_SESSION['admin'] = false;
    }
    header('Location: index.php');
    exit();
} else {
    if (isset($_POST['loginbtn'])) {
        $_SESSION['mensaje'] = 'Login invalido';
    } elseif (!isset($_SESSION['username'])) {
        $_SESSION['mensaje'] = 'No se le permite el ingreso a este sitio';
    } else {
        $_SESSION['mensaje'] = 'Usted está logeado';
    }
}
require_once '../layout/header.php';
?> 
<form id="login" action="" method="post">
    <div class="imgcontainer">
        <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
    <div class="text-center">
        <h2>Loguear Usuario</h2>

        <div class="alert">
            <div><?php
                if (isset($_SESSION['mensaje'])) {
                    echo $_SESSION['mensaje'];
                    unset($_SESSION['mensaje']);
                }
                ?></div>
        </div>
    </div>
    <div class="container">
        <label for="username"><b>Usuario</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" required>

        <label for="pass"><b>Contraseña</b></label>
        <input type="password" placeholder="Enter Password" name="pass" id="pass" required>
        <div class="botones">
            <button name="loginbtn" class="acepbtn" type="submit">Login</button>
            <button name="registrobtn" class="acepbtn" type="submit"> <a href="registrar_usuario.php">Registrarse</a></button>
        </div>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Recuerdame
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancelar</button>
        <span class="psw">Olvidaste tu <a href="#">contraseña?</a></span>
    </div>
</form>
<?php require_once '../layout/footer.php'; ?>

