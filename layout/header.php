<?php
$configuracion = require '../helpers/configuracion.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bootstrap 4, from LayoutIt!</title>

        <meta name="description" content="Source code generated using layoutit.com">
        <meta name="author" content="LayoutIt!">

        <link href="<?= $configuracion['urlBase'] ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= $configuracion['urlBase'] ?>/css/style.css" rel="stylesheet">

    </head>
    <body>

        <div class="container-fluid">
            <div class="col-md-12">
                <nav class="navbar navbar-toggleable-sm bg-dark navbar-dark">
                    <div class="col-md-4">

                        <button class="navbar-toggler" type="buton" data-toggle="collapse" data-target="#uno">
                            <span class="navbar-toggler-icon">Menu</span>                        
                        </button>

                        <div class="collapse navbar-collapse" id="uno">
                            <ul class="nav">
                                <li class="nav-item"><a href="<?= $configuracion['urlBase'] ?>/layout/index.php" class="navbar-brand"><img id="logo" src="<?= $configuracion['urlBase'] ?>/imagenes/Logos/LogoAzul.png" alt="LOGO"></a></li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" >Productos</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Kits</a>
                                        <a class="dropdown-item" href="#">Componentes</a>
                                        <a class="dropdown-item" href="#">Trafos</a>
                                    </div>
                                </li>
                                <li class="nav-item"><a href="<?= $configuracion['urlBase'] ?>/paginas/empresa.php" class="nav-link">Empresa</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>
                            </ul>
                        </div>
                    </div>           
                    <div id="buscar" class="col-md-4">

                        <form class="form-inline" action="<?= $configuracion['urlBase'] ?>/action_page.php">
                            <input id="buscar" class="form-control mr-sm-2" type="text" placeholder="Search">
                            <button id="boton-buscar" class="btn btn-success" type="submit">Search</button>
                        </form>
                    </div>
                    <div id="nav-login" class="col-md-2"><img id="img-login" src="<?= $configuracion['urlBase'] ?>/imagenes/Iconos/user.png" alt="">
                        <ul class="nav">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" >Login</a>
                                <div class="dropdown-menu">
                                    <form class="form-inline" action="<?= $configuracion['urlBase'] ?>/action_page.php">
                                        <input id="user" name="user" class="form-control mr-sm-2" type="email" placeholder="Usuario">
                                        <input id="password" name="pass" class="form-control mr-sm-2" type="password" placeholder="Contraseña">
                                        <input name="pass-remember" class="form-control mr-sm-2" type="checkbox" > Recordar Contraseña
                                        <button name="entrar" id="boton-buscar" class="btn btn-success" type="submit">Entrar</button>
                                        <a href="">Registrarse</a>
                                    </form>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>

