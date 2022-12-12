<form action="<?= URL.'/?Path=UploadImages' ?>" method="post" class="form-control mt-3" enctype="multipart/form-data">
    <h1 class="text-center text-info">Agregar Nueva Imagen</h1>
    <label for="nameImage">Nombre de la Imagen</label>
    <input type="text" name="nameImage" id="nameImage" placeholder="Nombre Imagen" class="form-control">
    <label for="image">Subir Imagen</label>
    <input type="file" name="image" id="image" class="form-control">

    <input type="submit" value="Subir Imagen" class="btn btn-info form-control mt-2">
</form>