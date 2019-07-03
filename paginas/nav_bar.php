<div class="container-fluid">
    <div class="col-md-12">
        <nav class="navbar navbar-toggleable-sm bg-dark navbar-dark">
            <div class="col-md-4">

                <button class="navbar-toggler" type="buton" data-toggle="collapse" data-target="#uno">
                    <span class="navbar-toggler-icon">Menu</span>                        
                </button>

                <div class="collapse navbar-collapse" id="uno">
                    <ul class="nav">
                        <li class="nav-item"><a href="index.php" class="navbar-brand"><img id="logo" src="<?= $configuracion['urlBase'] ?>/imagenes/Logos/LogoAzul.png" alt="LOGO"></a></li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" >Productos</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="listar_articulos.php">Kits</a>
                                <a class="dropdown-item" href="listar_articulos.php">Componentes</a>
                                <a class="dropdown-item" href="listar_articulos.php">Trafos</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="<?= $configuracion['urlBase'] ?>/paginas/empresa.php" class="nav-link">Empresa</a></li>
                        <li class="nav-item"><a href="<?= $configuracion['urlBase'] ?>/paginas/contacto.php" class="nav-link">Contacto</a></li>
                    </ul>
                </div>
            </div>           
            <div id="buscar" class="col-md-4">

                <form class="form-inline" action="listar_articulos.php">
                    <input id="buscar" name="busqueda_rapida" value="<?= $_GET['busqueda_rapida'] ?? '' ?>" class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button id="boton-buscar" name="buscar_articulo_btn" class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
            <div id="nav-login" class="col-md-2">
                <img id="img-login" src="<?= $configuracion['urlBase'] ?>/imagenes/Iconos/user.png" alt="">
                <?php if (isset($_SESSION['username'])) { ?>
                    <a href="login.php" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" ><?= $_SESSION['username'] ?? 'Login' ?></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="agregar_articulo.php">Agregar articulo</a>
                        <a class="dropdown-item" href="logout.php">Salir</a>
                    </div>
                    <?php
                } else {
                    ?>
                    <a href="login.php" class="nav-link"><?= $_SESSION['username'] ?? 'Entrar' ?></a>
                <?php }
                ?>
                </a>
                <img src="" alt="Carrito">
            </div>
        </nav>
    </div>