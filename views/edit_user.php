<!DOCTYPE html>
<html>

<head>
    <!-- Título de la página que se mostrará en la pestaña del navegador -->
    <title>Editar Usuario</title>
</head>

<body>
    <!-- Encabezado principal de la página -->
    <h1>Editar Usuario</h1>

    <!-- Formulario para editar la información del usuario -->
    <form method="POST" action="">
        <!-- Campo para ingresar el nombre de usuario, precargado con el valor actual -->
        <input type="text" name="usuario" value="<?= $user['usuario'] ?>" required>

        <!-- Campo para ingresar el correo electrónico, precargado con el valor actual -->
        <input type="email" name="email" value="<?= $user['email'] ?>" required>

        <!-- Campo para ingresar el rol del usuario, precargado con el valor actual -->
        <input type="text" name="rol" value="<?= $user['rol'] ?>" required>

        <!-- Botón para enviar el formulario y actualizar la información del usuario -->
        <button type="submit">Actualizar Usuario</button>
    </form>
</body>

</html>