<?php

class ImagesModel {
    private $db;
    private $table = 'imagenes';
    private $nameImage;
    private $pathImage;

    public function setNameImages($name) {
        $this->nameImage = $name;
    }

    public function getNameImages() {
        return $this->nameImage;
    }

    public function setPathImages($path) {
        $this->pathImage = $path;
    }

    public function getPathImages() {
        return $this->pathImage;
    }

    public function __construct() {
        $this->db = Conexion::DB();
    }

    public function saveImage() {
        $response = false;
        $sql = "INSERT INTO {$this->table} VALUES (NULL, '{$this->getNameImages()}', '{$this->getPathImages()}')";
        $query = $this->db->query($sql);
        if ($query) {
            $response = true;
        }
        return $response;
    }
    
    public function getAllImages() {
        $response = false;
        $sql = "SELECT * FROM {$this->table}";
        $query = $this->db->query($sql);
        if ($query->num_rows > 0) {
            $response = $query->fetch_all();
        }
        return $response;
    }
}