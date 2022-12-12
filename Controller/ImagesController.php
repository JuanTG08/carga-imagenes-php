<?php
require_once './Model/Images.php';
class ImagesController {
    public function formularioCreateImages() {
        include './Views/CreteImages.php';
    }

    public function uploadImages() {
        if (!empty($_POST['nameImage']) && isset($_FILES['image'])) {
            $imagen = $_FILES['image'];
            $nameImage = $_POST['nameImage'];

            $extensionImage = pathinfo($imagen['name'], PATHINFO_EXTENSION);
            $pathNewImage = "__IMAGE__".date("YmdHis");

            $fullName = $pathNewImage . '.' . $extensionImage;

            copy($imagen['tmp_name'], './Images/'.$fullName);

            $Images = new ImagesModel();
            $Images->setNameImages($nameImage);
            $Images->setPathImages($fullName);

            $createImages = $Images->saveImage();

            header('Location:'.URL.'?Path=Home');
        }
    }
}