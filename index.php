<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bootstrap 4, from LayoutIt!</title>

        <meta name="description" content="Source code generated using layoutit.com">
        <meta name="author" content="LayoutIt!">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

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
                                <li class="nav-item"><a href="" class="navbar-brand"><img id="logo" src="imagenes/Logos/LogoAzul.png" alt="LOGO"></a></li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" >Productos</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Kits</a>
                                        <a class="dropdown-item" href="#">Componentes</a>
                                        <a class="dropdown-item" href="#">Trafos</a>
                                    </div>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link">Empresa</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>
                            </ul>
                        </div>
                    </div>           
                    <div id="buscar" class="col-md-4">

                        <form class="form-inline" action="/action_page.php">
                            <input id="buscar" class="form-control mr-sm-2" type="text" placeholder="Search">
                            <button id="boton-buscar" class="btn btn-success" type="submit">Search</button>
                        </form>
                    </div>
                    <div id="nav-login" class="col-md-2"><img id="img-login" src="imagenes/Iconos/user.png" alt="">
                        <ul class="nav">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" >Login</a>
                                <div class="dropdown-menu">
                                    <form class="form-inline" action="/action_page.php">
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
            <div class="row">
                <div id="demo" class="col-md-8 carousel slide" data-ride="carousel">
                    <!-- Indicadores -->
                    <ul class="carousel-indicators">
                        <li data-target="demo" data-slide-to="0" class="active"></li>
                        <li data-target="demo" data-slide-to="1" class=""></li>
                        <li data-target="demo" data-slide-to="2" class=""></li>
                    </ul>               
                    <!-- Imagenes-->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imagenes/slider/arduinoUno.jpg" class="img-fluid rounded" alt="primero">
                            <div class="carousel-caption">
                                <h3>Primer articulo</h3>
                                <p>Descripción del articulo</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="imagenes/slider/rasberryPi.jpg" class="img-fluid rounded" alt="segundo">
                            <div class="carousel-caption">
                                <h3>Segundo articulo</h3>
                                <p>Descripción del articulo</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="imagenes/slider/proyecto.jpg" class="img-fluid rounded" alt="tercero">
                            <div class="carousel-caption">
                                <h3>Tercer articulo</h3>
                                <p>Descripción del articulo</p>
                            </div>
                        </div>
                    </div>


                    <!-- CONTROLES DE IZQUIERDA Y DERECHA -->
                    <a href="#demo" class="carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                    <a href="#demo" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon"></span></a>
                </div>

                <div class="col-4">
                    <img id="twitter" src="imagenes/twitter/twitter2.jpg" alt="">
                </div>
                <div class="row">
                    <div class="col-md-4"><img id="publicacion" src="imagenes/publicacion/1.jpg" alt="foto"><h4>Titulo</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, reiciendis, soluta, incidunt nobis beatae fugit quibusdam </p></div>
                    <div class="col-md-4"><img id="publicacion" src="imagenes/publicacion/2.jpg" alt="foto"><h4>Titulo</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, quis iste fugiat saepe ipsa. Quisquam, vel recusandae sequi </p></div>
                    <div class="col-md-4"><img id="publicacion" src="imagenes/publicacion/3.jpg" alt="foto"><h4>Titulo</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, nisi, quo obcaecati quia consequatur sequi amet repellat! A</p></div>
                </div>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>