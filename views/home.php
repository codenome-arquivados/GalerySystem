
<!--Envia as Fotos para o servidor-->
<fieldset>
    <legend>Adicionar uma foto</legend>
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-1">Título:</div>
            <div class="col-md-7"><input class="form-control" type="text" name="titulo"/><br></div>
        </div>
        <div class="row">
            <div class="col-md-1">Foto:</div>
            <div class="col-md-5"><input class="btn btn-default" type="file" name="arquivo"/><br></div>
        </div>
        <div class="row">
            <div class="col-md-8"><input class="btn btn-primary" type="submit" value="Enviar arquivo"></div>
        </div>
    </form>
</fieldset>
<hr>

<!--Lista todas as fotos do servidor-->
<div class="row">
    <?php foreach ($fotos as $foto): ?>
        <div class="col-md-4">
            <div class="row">
                <img class="img-rounded img-responsive" src="assets/images/galeria/<?php echo $foto['url']; ?>"
                     alt="Card image cap">
            </div>
            <div class="row">
                <?php echo $foto['titulo']; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

