<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Egan Moda</title>
    <link rel="stylesheet" href="css/contraseña.css">
  </head>
  <body>

    <div class="login-box">
      <img src="image/Logo.jpg" class="avatar" alt="Avatar Image">
      <h1>Recupera tu contraseña</h1>
      <form action= "recuperar_contraseña.php" method= "POST">
        <label for="Nombre de usuario">Introduce tu correo electrónico para buscar tu cuenta.</label>
        <input type="text" placeholder="Correo electrónico" name= "correo">

        <input type="submit" value="Buscar">
        <a href="index_login.php" class="regresar">Regresar</a>
      </form> 
    </div>
  </body>
</html>