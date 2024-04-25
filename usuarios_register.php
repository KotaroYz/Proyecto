<?php
include 'conexión.php';

$correo = $_POST['correo'];
$nombre_de_usuario = $_POST['nombre_de_usuario'];
$contraseña = $_POST['contraseña'];
$contraseña = hash('sha512', $contraseña);

$query = "INSERT INTO usuarios(correo, nombre_de_usuario, contraseña) 
          VALUES('$correo', '$nombre_de_usuario', '$contraseña')";

$verificar_correo = mysqli_query($conexión, "SELECT * FROM usuarios WHERE correo= '$correo' ");

if(mysqli_num_rows($verificar_correo) > 0){
  echo '
    <script>
      alert("Este correo ya está registrado, inenta con otro diferente");
      window.location = "index_register.php"
    </script>
  ';
  exit();
}

$ejecutar = mysqli_query($conexión, $query);
if($ejecutar){
    echo '
    <script>
      alert("Usuario almacenado correctamente");
      window.location = "index_login.php";
      </script>
    ';
}else{
    echo '
    <script>
      alert("Usuario no almacenado, intentelo de nuevo");
      window.location = "index_login.php";
      </script>
    ';
}
mysqli_close($conexión);
?>