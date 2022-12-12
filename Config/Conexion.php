<?php

class Conexion {
    public static function DB() {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $database = 'carga_imagenes';

        $conn = new mysqli($host, $user, $pass, $database);
        $conn->query("SET NAMES 'utf8'");

        return $conn;
    }
}