<?php
session_start();
require_once '../layout/header.php';
?>
<form id="mail_to" action="" method="">
    <div class="imgcontainer">
        <img height="100px" src="../imagenes/Decoracion/contacto.png" alt="MailTo" class="mail">
    </div>
    <div class="text-center">
        <h4>Enviar mensaje</h4>
    </div>
    <div class="container">
        <label for="nombre"><b>Nombre:</b></label>
        <input class="form-control" type="text" placeholder="Ingrese Nombre" name="nombre" id="nombre" required>
        <label for="apellido"><b>Apellido:</b></label>
        <input class="form-control" type="text" placeholder="Igrese Apellido" name="apellido" id="apellido" required>
        <label for="correo"><b>Correo:</b></label>
        <input class="form-control" type="text" placeholder="Ingrese correo electrónico" name="correo" id="correo" required>
        <label for="descripcion">Descripción:</label>
        <textarea class="form-control" name="descripcion" id="" cols="30" rows="10" required></textarea>
        <div class="botones">
            <button name="loginbtn" class="acepbtn" type="submit">Enviar</button>
        </div>
        <label>
            <input type="checkbox" checked="checked" name="acep_terminos"> Acepto los terminos
        </label>
    </div>
</form>
</div>
<?php require_once '../layout/footer.php'; ?>