<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
</head>

<body>
    <h1>Welcome, <?= $_SESSION['user_name'] ?></h1>
    <h2>Opciones</h2>
    <ul>
        <li><a href="index.php?action=list">Inventario</a></li>
        <li><a href="index.php?action=billing">Facturación</a></li>
        <li><a href="index.php?action=sales">Ventas</a></li>
        <li><a href="index.php?action=logout">Cerrar Sesión</a></li>
    </ul>
    <h2>Configuración</h2>
    <ul>
        <li><a href="index.php?action=change_password">Cambiar Contraseña</a></li>
        <li><a href="index.php?action=edit_user">Editar Usuario</a></li>
    </ul>
</body>

</html>