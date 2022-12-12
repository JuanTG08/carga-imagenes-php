<?php

session_start();

require_once './Config/Conexion.php';
require_once './Config/Parameters.php';

require_once './Controller/UserController.php';
require_once './Controller/HomeController.php';
require_once './Controller/ImagesController.php';

require_once './Views/Partials/Header.php';

$Path = null;

if ($_GET['Path']) {
    $Path = $_GET['Path'];
}else {
    header('Location: '.URL.'/?Path=Login');
}

$User = new UsuarioController();
$Home = new HomeController();
$Images = new ImagesController();

switch ($Path) {
    case 'Login':
        $User->Login();
        break;
    case 'Register':
        $User->Register();
        break;
    case 'Ingresar':
        $User->Ingresar();
        break;
    case 'CrearCuenta':
        $User->CrearCuenta();
        break;

    case 'Home':
        $Home->Index();
        break;
    
    case 'CreateImages':
        $Images->formularioCreateImages();
        break;
    
    case 'UploadImages':
        $Images->uploadImages();
        break;

    case 'LogOut':
        $User->LogOut();
        break;
    default:
        $User->Login();
        break;
}

require_once './Views/Partials/Footer.php';