<form action="<?= URL.'/?Path=CrearCuenta' ?>" method="post" class="form-control mt-3">
    <h1 class="text-center text-success">Registrar Nueva Cuenta</h1>

    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" placeholder="Nombre" class="form-control">

    <label for="email">Correo Electronico</label>
    <input type="text" name="email" id="email" placeholder="Correo Electronico" class="form-control">

    <label for="pass">Contraseña</label>
    <input type="password" name="pass" id="pass" placeholder="Contraseña" class="form-control">

    <input type="submit" value="Crear Cuenta" class="btn btn-success form-control mt-2">
    <a href="<?= URL.'/?Path=Login' ?>">Ingresar</a>
</form>