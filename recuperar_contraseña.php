<?php
include 'conexión.php';

$correo = $_POST['correo'];

$sql = "SELECT contraseña FROM usuarios WHERE correo = '$correo'";
$resultado = $conexión->query($sql);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $contraseña = $fila["contraseña"];
    echo '
    <script>
      alert("Mandaremos un enlace a tu correo para que cambies tu contraseña.");
      window.location = "index_login.php"
    </script>
    ';

} else {
    echo'
    <script>
      alert("No se encontró usuario con ese correo electrónico.");
      window.location = "index_register.php"
    </script>
    ';
}

$conexión->close();

?>
