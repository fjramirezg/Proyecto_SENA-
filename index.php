<?php
// Se incluye el archivo de configuración de la base de datos
require_once 'config/database.php';

// Se incluye el controlador de órdenes que manejará las operaciones relacionadas con pedidos
require_once 'controllers/OrderController.php';

// Se incluye el controlador de usuarios para manejar las operaciones relacionadas con los usuarios
require_once 'controllers/UserController.php';

// Se crea una nueva instancia del controlador de órdenes, pasando la conexión a la base de datos como parámetro
$controller = new OrderController($pdo);

// Se crea una nueva instancia del controlador de usuarios, también pasando la conexión a la base de datos
$userController = new UserController($pdo);

// Se determina la acción a realizar, tomando el valor del parámetro 'action' en la URL o estableciendo 'login' como predeterminado
$action = isset($_GET['action']) ? $_GET['action'] : 'login';

// Se utiliza un switch para manejar diferentes acciones basadas en el valor de $action
switch ($action) {
    case 'add':
        // Llama al método add del controlador de órdenes para agregar un nuevo pedido
        $controller->add();
        break;
    case 'edit':
        // Obtiene el ID del pedido a editar desde los parámetros de la URL y llama al método edit
        $id = $_GET['id'];
        $controller->edit($id);
        break;
    case 'delete':
        // Obtiene el ID del pedido a eliminar desde los parámetros de la URL y llama al método delete
        $id = $_GET['id'];
        $controller->delete($id);
        break;
    case 'list':
        // Llama al método list del controlador de órdenes para mostrar todos los pedidos
        $controller->list();
        break;
    case 'login':
        // Llama al método login del controlador de usuarios para iniciar sesión
        $userController->login();
        break;
    case 'logout':
        // Llama al método logout del controlador de usuarios para cerrar sesión
        $userController->logout();
        break;
    case 'home':
        // Llama al método home del controlador de usuarios para mostrar la página principal después de iniciar sesión
        $userController->home();
}
?>;