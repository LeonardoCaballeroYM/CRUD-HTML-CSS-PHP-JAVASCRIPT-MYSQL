<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CRUD</title>
  <link rel="shortcut icon" href="https://github.com/fluidicon.png">
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>

  <div class="container" id="container">

    <div class="form-container sign-up-container">
      <form action="php/registro_usuario.php" method="POST">
        <h1>Crear Cuenta</h1>
        <div class="social-container">
          <a href="https://www.facebook.com/leonardo.moralescaballero.7/" target="_blank" class="social"><i
              class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/YullGore" target="_blank" class="social"><i class="fab fa-twitter"></i></a>
        </div>

        <input type="text" placeholder="Usuario" id="TxtUsuario" name="Usuario_" />
        <input type="email" placeholder="Email" id="TxtEmail" name="Email_" />
        <input type="password" placeholder="Password" id="TxtPassword" name="Password_" />
        <!--<input type="checkbox" id="show_password" onclick="mostrarPassword()" />-->
        <button class="buttonRegistrar">Registrar</button>

      </form>
    </div>

    <div class="form-container sign-in-container">
      <form action="php/login_usuario.php" method="POST">
        <h1>Iniciar Sesión</h1>
        <div class="social-container">
          <a href="https://www.facebook.com/leonardo.moralescaballero.7/" target="_blank" class="social"><i
              class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/YullGore" target="_blank" class="social"><i class="fab fa-twitter"></i></a>
        </div>
        <input type="text" placeholder="Usuario" id="TxtUsuario" name="_Usuario_"/>
        <input type="password" placeholder="Password" id="TxtPassword" name="_Password_"/>
        <a href="https://www.google.com">¿Olvidaste tu contraseña?</a>
        <button>Iniciar Sesión</button>
      </form>
    </div>

    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>BIENVENIDO</h1>
          <p>ADMINISTRA TUS DATOS CON RESPONSABILIDAD</p>
          <button class="ghost" id="signIn">Iniciar Sesión</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>BIENVENIDO</h1>
          <p>INGRESA LOS DATOS CORRESPONDIENTES PARA CREAR TU CUENTA</p>
          <button class="ghost" id="signUp">Registrar</button>
        </div>
      </div>
    </div>

  </div>

</body>
<script src="js/main.js"></script>
<script src="https://kit.fontawesome.com/4a76a21623.js" crossorigin="anonymous"></script>

</html>