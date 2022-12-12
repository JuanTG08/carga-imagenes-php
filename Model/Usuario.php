<?php

class UsuarioModel {
    private $table = 'usuarios';
    private $db;
    private $name;
    private $email;
    private $password;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setPass($pass) {
        $this->password = $pass;
    }

    public function getPass() {
        return $this->password;
    }

    public function __construct() {
        $this->db = Conexion::DB();
    }

    public function login() {
        $response = false;
        $sql = "SELECT * FROM {$this->table} WHERE mail='{$this->getEmail()}' && password='{$this->getPass()}'";
        $query = $this->db->query($sql);
        if ($query->num_rows > 0) {
            $response = $query->fetch_all();
        }
        return $response;
    }

    public function CrearCuenta() {
        $response = false;
        $sql = "INSERT INTO {$this->table} VALUES (NULL, '{$this->getName()}', '{$this->getEmail()}', '{$this->getPass()}')";
        $query = $this->db->query($sql);
        if ($query) {
            $response = true;
        }
        return $response;
    }
}