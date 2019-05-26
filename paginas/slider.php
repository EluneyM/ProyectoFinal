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
                <img src="<?= $configuracion['urlBase'] ?>/imagenes/slider/arduinoUno.jpg" class="img-fluid rounded" alt="primero">
                <div class="carousel-caption">
                    <h3>Primer articulo</h3>
                    <p>Descripción del articulo</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="<?= $configuracion['urlBase'] ?>/imagenes/slider/rasberryPi.jpg" class="img-fluid rounded" alt="segundo">
                <div class="carousel-caption">
                    <h3>Segundo articulo</h3>
                    <p>Descripción del articulo</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="<?= $configuracion['urlBase'] ?>/imagenes/slider/proyecto.jpg" class="img-fluid rounded" alt="tercero">
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