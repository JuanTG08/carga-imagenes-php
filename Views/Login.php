<form action="<?= URL.'/?Path=Ingresar' ?>" method="post" class="form-control mt-3">
    <h1 class="text-center text-primary">Iniciar Sesion</h1>
    <label for="email">Correo Electronico</label>
    <input type="text" name="email" id="email" placeholder="Correo Electronico" class="form-control">
    <label for="pass">Contraseña</label>
    <input type="password" name="pass" id="pass" placeholder="Contraseña" class="form-control">

    <input type="submit" value="Ingresar" class="btn btn-primary form-control mt-2">

    <a href="<?= URL.'/?Path=Register' ?>">Crear Cuenta</a>
</form>