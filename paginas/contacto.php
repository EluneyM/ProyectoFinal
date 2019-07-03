<?php
session_start();
require_once '../layout/header.php';
?>
<div id="form-contacto">
    <form action="/action_page.php" class="was-validated">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese Nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" placeholder="Ingrese Apellido" name="apellido" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="mail" class="form-control" id="correo" placeholder="Ingrese Correo" name="correo" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="" cols="30" rows="10" required=""></textarea>
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" required> Acepto los terminos.
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</div>
<?php require_once '../layout/footer.php'; ?>