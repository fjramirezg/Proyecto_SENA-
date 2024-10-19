<?php
require_once 'config/database.php';
require_once 'controllers/OrderController.php';
require_once 'controllers/UserController.php';

$controller = new OrderController($pdo);
$userController = new UserController($pdo);

$action = isset($_GET['action']) ? $_GET['action'] : 'login';

switch ($action) {
    case 'add':
        $controller->add();
        break;
    case 'edit':
        $id = $_GET['id'];
        $controller->edit($id);
        break;
    case 'delete':
        $id = $_GET['id'];
        $controller->delete($id);
        break;
    case 'list':
        $controller->list();
        break;
    case 'login':
        $userController->login();
        break;
    case 'logout':
        $userController->logout();
        break;
    case 'home':
        $userController->home();
    }
?>;