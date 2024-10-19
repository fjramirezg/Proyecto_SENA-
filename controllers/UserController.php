<?php
require_once 'models/User.php';

class UserController
{
    private $userModel;

    public function __construct($pdo)
    {
        $this->userModel = new User($pdo);
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->userModel->getUserByEmail($email);

            if ($user && password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user_id'] = $user['ID_Usuario'];
                $_SESSION['user_name'] = $user['usuario'];
                header('Location: index.php?action=home');
                exit; // Asegúrate de incluir esto para evitar la ejecución del resto del script
            } else {
                $error = "Invalid email or password";
                include 'views/login.php';
            }
        } else {
            include 'views/login.php';
        }
    }


    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: index.php?action=login');
    }

    public function home()
    {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: index.php?action=login');
            exit;
        }
        include 'views/home.php';
    }

    public function changePassword()
    {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $newPassword = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
            $this->userModel->changePassword($_SESSION['user_id'], $newPassword);
            header('Location: index.php?action=home');
        } else {
            include 'views/change_password.php';
        }
    }

    public function editUser()
    {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'usuario' => $_POST['usuario'],
                'email' => $_POST['email'],
                'rol' => $_POST['rol'],
            ];
            $this->userModel->updateUser($_SESSION['user_id'], $data);
            header('Location: index.php?action=home');
        } else {
            $user = $this->userModel->getUserByEmail($_SESSION['user_name']);
            include 'views/edit_user.php';
        }
    }
}
?>;
