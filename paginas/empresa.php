<?php 
session_start();
require_once '../layout/header.php';
?>
<div class="row">
    <div class="col-md-3">
        <img src="<?= $configuracion['urlBase'] ?>/imagenes/empresa/empresa.jpg" alt="Imagen">
    </div>
    <div class="col-md-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, 
            epellat perferendis tempore labore blanditiis quod reiciendis omnis 
            dolores adipisci placeat et libero reprehenderit repellendus ducimus 
            maxime pariatur fugiat excepturi cupiditate!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, excepturi, illum, quaerat, accusantium reprehenderit explicabo minus necessitatibus nobis totam quo alias atque laborum recusandae nihil iusto repellat voluptas quae quibusdam corporis quisquam!</p>
    </div>
</div>



<?php require_once '../layout/footer.php'; ?>