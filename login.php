<!DOCTYPE html>
<html>

<head>
    <!-- Título de la página que se mostrará en la pestaña del navegador -->
    <title>Login</title>
</head>

<body>
    <!-- Encabezado principal de la página -->
    <h1>Login</h1>

    <!-- Se verifica si existe un mensaje de error y se muestra si es así -->
    <?php if (isset($error)) : ?>
        <p style="color:red;"><?= $error; ?></p> <!-- Mensaje de error en rojo -->
    <?php endif; ?>

    <!-- Formulario de inicio de sesión -->
    <form method="POST" action="">
        <!-- Campo para ingresar el correo electrónico, requerido para el envío del formulario -->
        <input type="email" name="email" placeholder="Email" required>

        <!-- Campo para ingresar la contraseña, también requerido -->
        <input type="password" name="password" placeholder="Password" required>

        <!-- Botón para enviar el formulario -->
        <button type="submit">Login</button>
    </form>
</body>

</html>