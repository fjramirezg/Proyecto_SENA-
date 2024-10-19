<!DOCTYPE html>
<html>

<head>
    <title>Editar Usuario</title>
</head>

<body>
    <h1>Editar Usuario</h1>
    <form method="POST" action="">
        <input type="text" name="usuario" value="<?= $user['usuario'] ?>" required>
        <input type="email" name="email" value="<?= $user['email'] ?>" required>
        <input type="text" name="rol" value="<?= $user['rol'] ?>" required>
        <button type="submit">Actualizar Usuario</button>
    </form>
</body>

</html>