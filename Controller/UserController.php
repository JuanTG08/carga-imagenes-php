<?php
require_once './Model/Usuario.php';

class UsuarioController {
    public function Login() {
        include './Views/Login.php';
    }

    public function Register() {
        include './Views/Register.php';
    }

    public function Ingresar() {
        if (!empty($_POST['email']) && !empty($_POST['pass'])) {
            $mail = $_POST['email'];
            $pass = $_POST['pass'];

            $User = new UsuarioModel();
            $User->setEmail($mail);
            $User->setPass($pass);

            $userLogin = $User->login();

            if ($userLogin) {
                $_SESSION['User'] = $userLogin;
            }
        }
        header('Location:'.URL.'?Path=Home');
    }

    public function CrearCuenta() {
        if (!empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['name'])) {
            $name = $_POST['name'];
            $mail = $_POST['email'];
            $pass = $_POST['pass'];

            $User = new UsuarioModel();
            $User->setName($name);
            $User->setEmail($mail);
            $User->setPass($pass);

            $userCreateAccount = $User->CrearCuenta();

            if ($userCreateAccount) {
                echo '<script>alert("Cuenta Creada");</script>';
            }
        }
        header('Location:'.URL.'?Path=Register');
    }

    public function LogOut() {
        unset($_SESSION['User']);
        header('Location:'.URL.'/?Path=Login');
    }
}