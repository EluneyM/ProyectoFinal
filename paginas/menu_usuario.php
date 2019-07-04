<?php
session_start();
require_once '../layout/header.php';
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>


<div class="wrapper">

    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h4 align="left" >Menu Configuración</h4>
        </div>
        <ul class="list-unstyled components">
            <p>Opciones</p>
            <li class="active">
                <a href="#homeSubmenu" aria-expanded="false">Mis datos</a>               
            </li>
            <li>
                <a href="#">Mis compras</a>
            </li>
            <li>
                <a href="#">Lista de deseos</a>
            </li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">
        Nada por ahora
    </div>

</div>      
<?php require_once '../layout/footer.php';
?>

