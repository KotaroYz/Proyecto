<?php
session_start();

if(isset($_SESSION['nombre_de_usuario'])){
  header("location: index.php");

}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Egan Moda</title>
    <link rel="stylesheet" href="css/Login.css">
  </head>
  <body>

    <div class="login-box">
      <img src="image/Logo.jpg" class="avatar" alt="Avatar Image">
      <h1>Bienvenido</h1>
      <form action= "usuario_login.php" method= "POST">
        
        <input type="text" placeholder="Nombre de Usuario" name= "nombre_de_usuario">

        <input type="password" placeholder="Contraseña" name= "contraseña">

        <input type="submit" value="Iniciar sesión">
        <a href="index_contraseña.php">¿Perdiste tu contraseña?</a>
        <a href="index_register.php">¿Crear cuenta nueva?</a>
      </form>
    </div>
  </body>
</html>