<h1>Home</h1>
<a href="<?= URL.'/?Path=CreateImages' ?>" class="btn btn-info form-control">Agregar Nueva Imagen</a>

<div class="form-control mt-3">
    <div class="row">
        <?php if($Imagenes): ?>
            <?php foreach($Imagenes as $imagen): ?>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= URL.'/Images/'.$imagen[2] ?>" style="min-height: 18rem;max-height: 18rem;object-fit: fill;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $imagen[1] ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <h1>No tienes Ninguna Imagen, por favor suba una nueva!</h1>
        <?php endif; ?>
    </div>
</div>



<a href="<?= URL.'/?Path=LogOut' ?>" class="btn btn-danger form-control mt-3">Cerrar Sesion</a>