<?php
require_once 'config/database.php';
require_once 'controllers/UserController.php';

$controller = new UserController($pdo);
$controller->logout();
?>;
