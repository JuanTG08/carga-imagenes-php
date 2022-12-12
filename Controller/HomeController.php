<?php
require_once './Model/Images.php';
class HomeController{
    public function Index() {
        if (!empty($_SESSION['User'])) {
            $Imagen = new ImagesModel();

            $Imagenes = $Imagen->getAllImages();

            include './Views/Home.php';
        }
        else {
            header('Location:'.URL.'/?Path=Login');
        }
    }
}