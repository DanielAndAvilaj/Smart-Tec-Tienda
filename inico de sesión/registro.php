<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrarse</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="registroEstilo.css">
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      function validarContrasena(contrasena) {
        var regex = /(?=.*[A-Z])(?=.*[0-9])/;
        return regex.test(contrasena);
      }
    
      function registrarUsuario(event) {
        event.preventDefault();
    
        var nombre = document.getElementById('nombre').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
    
        if (!validarContrasena(password)) {
          alert('La contraseña debe contener al menos una letra mayúscula y un número.');
          return;
        }
    
        alert('Registrado correctamente!');
        window.location.href = '../Views/index.php'; // Redirige al usuario a la página de inicio
      }
    
      document.getElementById('registro-form').addEventListener('submit', registrarUsuario);
    });
    </script>
</head>
<body>
  <div class="form-container">
    <div>
      <a href="../Views/index.php"><img class="logo-container" src="../images/main-logo.png" alt=""></a>
      <h2>Registro de Usuario</h2>
    </div>

    <form id="registro-form" class="form" method="post" action="procesar_registro.php">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" class="form-control" name="nombre" required>
      </div>
      <div class="form-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" class="form-control" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" class="form-control" name="password" required>
      </div>
      <button type="submit" class="form-submit-btn">Registrarse</button>
    </form>

    <p class="signup-link">
      ¿Ya tienes una cuenta?
      <a href="../inicio de sesión/iniciar_sesion.php" class="link">Iniciar sesión</a>
    </p>
  </div>
  
  <script src="script.js"></script>
</body>
</html>
