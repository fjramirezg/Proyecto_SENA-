<!DOCTYPE html>
<html>

<head>
  <!-- Título de la página que se mostrará en la pestaña del navegador -->
  <title>Login</title>
  <!-- vinculo a bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Enlace a la hoja de estilos CSS para el formulario de inicio de sesión -->
  <link rel="stylesheet" href="../css/styles_login.css">
</head>

<body>

  <!-- Se verifica si existe un mensaje de error y se muestra si es así -->
  <?php if (isset($error)): ?>
    <p style="color: red;"><?= htmlspecialchars($error) ?></p> <!-- Mensaje de error en rojo, protegido contra XSS -->
  <?php endif; ?>

  <div id="Contenedor">
    <div class="Icon">
      <!--Icono de usuario-->
      <img src="img/login-logo.png" alt="login-logo">
    </div>
    <div>
      <h3 class="title_papel">Papeleria Benneton</h3>
    </div>
    <div class="ContentForm">
      <form action="" method="POST" name="index.php?action=login">
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="sizing-addon1"><i
              class="glyphicon glyphicon-envelope"></i></span>
          <input type="email" class="form-control" name="email" placeholder="Correo"  id="correo"
            aria-describedby="sizing-addon1" required>
        </div>
        <br>
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" id="contrasena" name="password" class="form-control" placeholder="******"
            aria-describedby="sizing-addon1" required>
        </div>
        <br>
        <button name="ingresar" class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog"
          type="submit">Entrar</button>
        <div class="opcioncontra"><a href="">Olvidaste tu contraseña?</a></div>
      </form>
    </div>
  </div>

  <!-- vinculando a libreria Jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Libreria java scritp de bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>