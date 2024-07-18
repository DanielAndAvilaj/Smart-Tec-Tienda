<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambia la contraseña</title>
    <link rel="stylesheet" href="contraseñaEstilo.css">
</head>
<body>
    <div class="form-container">
        <div class="logo-container">
          <a href="../Views/index.php"><img src="../images/main-logo.png" alt=""></a>
          <h2>¿Olvidaste tu contraseña?</h2>
        </div>
  
        <form class="form" method="post" action="enviar_codigo_recuperacion.php">
          <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" placeholder="usuario@ejemplo.com" required>
          </div>
  
          <button class="form-submit-btn" type="submit">Enviar código de recuperación</button>
        </form>
  
        <p class="signup-link">
          ¿No tienes una cuenta?
          <a href="./registro.php" class="signup-link link">Crear cuenta</a>
        </p>
      </div>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        function validarCorreo(email) {
          return email !== '';
        }
      
        function enviarCodigoRecuperacion(event) {
          event.preventDefault();
      
          var email = document.getElementById('email').value;
      
          if (!validarCorreo(email)) {
            alert('Por favor, introduce tu correo electrónico.');
            return;
          }
      
          alert('Se ha enviado un enlace de recuperación a tu correo electrónico.');
        }
      
        document.querySelector('.form').addEventListener('submit', enviarCodigoRecuperacion);
      });
    </script>
</body>
</html>
