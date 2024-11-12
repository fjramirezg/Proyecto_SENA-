<?php
// Se incluye el archivo de configuración de la base de datos
require_once 'config/database.php';

// Se incluyen los controladores necesarios
require_once 'controllers/OrderController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/SupplierController.php';
require_once 'controllers/ProductController.php';

// Se crean instancias de los controladores, pasando la conexión a la base de datos
$orderController = new OrderController($pdo);
$userController = new UserController($pdo);
$homeController = new HomeController($pdo);
$supplierController = new SupplierController($pdo);
$productController = new ProductController($pdo);

// Se determina la acción a realizar
$action = isset($_GET['action']) ? $_GET['action'] : 'login';

// Se utiliza un switch para manejar diferentes acciones basadas en el valor de $action
switch ($action) {
    case 'add':
        // Llama al método add del controlador de órdenes
        $orderController->add();
        break;
    case 'edit':
        // Obtiene el ID del pedido a editar
        $id = $_GET['id'];
        $orderController->edit($id);
        break;
    case 'delete':
        // Obtiene el ID del pedido a eliminar
        $id = $_GET['id'];
        $orderController->delete($id);
        break;
    case 'list':
        // Llama al método list del controlador de órdenes
        $orderController->list();
        break;
    case 'login':
        // Llama al método login del controlador de usuarios
        $userController->login();
        break;
    case 'logout':
        // Llama al método logout del controlador de usuarios
        $userController->logout();
        break;
    case 'home':
        // Llama al método index del controlador de la página principal
        $homeController->index();
        break;
    case 'add_supplier':
        // Llama al método add del controlador de proveedores
        $supplierController->add();
        break;
    case 'edit_supplier':
        // Asegúrate de que la acción esté bien definida en los enlaces
        // Obtiene el ID del proveedor a editar
        $id = $_GET['id'];
        $supplierController->edit($id); // Llama al método de edición de proveedores
        break;
    case 'delete_supplier':
        // Obtiene el ID del proveedor a eliminar
        $id = $_GET['id'];
        $supplierController->delete($id);
        break;
    case 'list_suppliers':
        // Llama al método list del controlador de proveedores
        $supplierController->list();
        break;

    case 'add_product':
        // Llama al método add del controlador de productos
        $productController->add();
        break;
    case 'edit_product':
        // Asegúrate de que la acción esté bien definida en los enlaces
        // Obtiene el ID del producto a editar
        $id = $_GET['id'];
        $productController->edit($id); // Llama al método de edición de productos
        break;
    case 'delete_product':
        // Obtiene el ID del producto a eliminar
        $id = $_GET['id'];
        $productController->delete($id);
        break;
    case 'list_products':
        // Llama al método list del controlador de proveedores
        $productController->list();
        break;
    default:
        // Redirige a la página de login por defecto
        $userController->login();
        break;
}
