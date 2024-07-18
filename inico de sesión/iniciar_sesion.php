<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="iniciarEstilo.css">
</head>
<body>
    <div class="form-container">
        <div class="logo-container">
          <a href="../Views/index.php"><img src="../images/main-logo.png" alt=""></a>
          <h2>Iniciar sesión</h2>
        </div>
  
        <div class="line"></div>
        <form class="form" method="post" action="../Controllers/iniciar_sesion.php">
          <div class="form-group">
            <label for="email">Email</label>
            <input required="" placeholder="Ingresa tu Email" name="email" id="email" type="email">
          </div>
  
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input required="" name="password" placeholder="Ingresa tu contraseña" id="password" type="password">
          </div>
  
          <button type="submit" class="form-submit-btn">Iniciar Sesión</button>
        </form>
  
        <a class="forgot-password-link link" href="contraseña.html">Olvidé la contraseña</a>
  
        <p class="signup-link">
          ¿No tienes una cuenta?
          <a class="signup-link link" href="registro.php"> Regístrate ahora</a>
        </p>
      </div>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        function validarCampos(email, password) {
          return email !== '' && password !== '';
        }
      
        function iniciarSesion(event) {
          event.preventDefault();
      
          var email = document.getElementById('email').value;
          var password = document.getElementById('password').value;
      
          if (!validarCampos(email, password)) {
            alert('Por favor, rellena todos los campos.');
            return;
          }
      
          alert('Iniciando sesión...');
          window.location.href = '../Views/index.php'; // Te envía al index.html
        }
      
        document.querySelector('.form').addEventListener('submit', iniciarSesion);
      });
    </script>
</body>
</html>
