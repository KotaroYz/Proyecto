<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Egan Moda</title>
    <link rel="stylesheet" href="css/register.css">
  </head>
  <body>

    <div class="login-box">
      <img src="image/Logo.jpg" class="avatar" alt="Avatar Image">
      <h1>Bienvenido</h1>
      <form action= "usuarios_register.php" method= "POST">
        <input type="text" placeholder="Correo Electronico" name = "correo">
        
        <input type="text" placeholder="Nombre de Usuario" name = "nombre_de_usuario">

        <input type="password" placeholder="Contraseña" name = "contraseña"> 

        <input type="submit" value="Crear cuenta">
        <a href="index_contraseña.php">¿Perdiste tu contraseña?</a>
        <a href="index_login.php">¿Ya tienes cuenta?</a>
      </form>
    </div>
  </body>
</html>