<?php
// Se incluye el modelo de usuario que contiene la lógica de acceso a datos
require_once 'models/User.php';

// Definición de la clase UserController que maneja las operaciones relacionadas con la autenticación y gestión de usuarios
class UserController
{
    // Propiedad para almacenar la instancia del modelo de usuario
    private $userModel;

    // Constructor que inicializa el modelo de usuario con la conexión PDO
    public function __construct($pdo)
    {
        $this->userModel = new User($pdo);
    }

    // Método para manejar el inicio de sesión del usuario
    public function login()
    {
        // Verifica si la solicitud es un POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            // Recupera el usuario por su correo electrónico
            $user = $this->userModel->getUserByEmail($email);

            // Verifica si el usuario existe y si la contraseña es correcta
            if ($user && password_verify($password, $user['password'])) {
                session_start(); // Inicia la sesión
                $_SESSION['user_id'] = $user['ID_Usuario']; // Almacena el ID del usuario en la sesión
                $_SESSION['user_name'] = $user['usuario']; // Almacena el nombre del usuario en la sesión
                header('Location: index.php?action=home'); // Redirige a la página principal
                exit; // Asegúrate de incluir esto para evitar la ejecución del resto del script
            } else {
                $error = "Invalid email or password"; // Mensaje de error si las credenciales son incorrectas
                include 'views/login.php'; // Muestra la vista de inicio de sesión
            }
        } else {
            include 'views/login.php'; // Muestra la vista de inicio de sesión si no es un POST
        }
    }

    // Método para manejar el cierre de sesión del usuario
    public function logout()
    {
        session_start(); // Inicia la sesión
        session_destroy(); // Destruye la sesión actual
        header('Location: index.php?action=login'); // Redirige a la página de inicio de sesión
    }

    // Método para mostrar la página principal del usuario después del inicio de sesión
    public function home()
    {
        session_start(); // Inicia la sesión
        if (!isset($_SESSION['user_id'])) { // Verifica si el usuario no está autenticado
            header('Location: index.php?action=login'); // Redirige a la página de inicio de sesión si no está autenticado
            exit;
        }
        include 'views/home.php'; // Muestra la vista principal del usuario
    }

    // Método para cambiar la contraseña del usuario
    public function changePassword()
    {
        session_start(); // Inicia la sesión
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $newPassword = password_hash($_POST['new_password'], PASSWORD_DEFAULT); // Hash de la nueva contraseña
            $this->userModel->changePassword($_SESSION['user_id'], $newPassword); // Cambia la contraseña en el modelo
            header('Location: index.php?action=home'); // Redirige a la página principal después de cambiar la contraseña
        } else {
            include 'views/change_password.php'; // Muestra la vista para cambiar contraseña si no es un POST
        }
    }

    // Método para editar información del usuario
    public function editUser()
    {
        session_start(); // Inicia la sesión
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'usuario' => $_POST['usuario'],
                'email' => $_POST['email'],
                'rol' => $_POST['rol'],
            ];
            $this->userModel->updateUser($_SESSION['user_id'], $data); // Actualiza los datos del usuario en el modelo
            header('Location: index.php?action=home'); // Redirige a la página principal después de editar el usuario
        } else {
            $user = $this->userModel->getUserByEmail($_SESSION['user_name']); // Obtiene los datos actuales del usuario para editarlos
            include 'views/edit_user.php'; // Muestra la vista para editar información del usuario
        }
    }
}
