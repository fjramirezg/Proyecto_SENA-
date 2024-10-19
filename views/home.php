<!DOCTYPE html>
<html>

<head>
    <!-- Título de la página que se mostrará en la pestaña del navegador -->
    <title>Home</title>
</head>

<body>
    <!-- Mensaje de bienvenida que incluye el nombre del usuario almacenado en la sesión -->
    <h1>Welcome, <?= $_SESSION['user_name'] ?></h1>

    <!-- Sección de opciones disponibles para el usuario -->
    <h2>Opciones</h2>
    <ul>
        <!-- Enlace para acceder a la sección de inventario -->
        <li><a href="index.php?action=list">Inventario</a></li>
        <!-- Enlace para acceder a la sección de facturación -->
        <li><a href="index.php?action=billing">Facturación</a></li>
        <!-- Enlace para acceder a la sección de ventas -->
        <li><a href="index.php?action=sales">Ventas</a></li>
        <!-- Enlace para cerrar sesión -->
        <li><a href="index.php?action=logout">Cerrar Sesión</a></li>
    </ul>

    <!-- Sección de configuración del usuario -->
    <h2>Configuración</h2>
    <ul>
        <!-- Enlace para cambiar la contraseña del usuario -->
        <li><a href="index.php?action=change_password">Cambiar Contraseña</a></li>
        <!-- Enlace para editar la información del usuario -->
        <li><a href="index.php?action=edit_user">Editar Usuario</a></li>
    </ul>
</body>

</html>