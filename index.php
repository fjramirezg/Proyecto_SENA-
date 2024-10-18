<?php
require_once 'config/database.php';
require_once 'controllers/OrderController.php';

$controller = new OrderController($pdo);

$action = isset($_GET['action']) ? $_GET['action'] : 'list';

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
    default:
        $controller->list();
        break;
}
?>;