<?php
// Se incluye el archivo de configuración de la base de datos
require_once 'config/database.php';

// Se incluye el controlador de usuarios que manejará las operaciones relacionadas con los usuarios
require_once 'controllers/UserController.php';

// Se crea una nueva instancia del controlador de usuarios, pasando la conexión a la base de datos como parámetro
$controller = new UserController($pdo);

// Se llama al método logout del controlador para cerrar la sesión del usuario actual
$controller->logout();
