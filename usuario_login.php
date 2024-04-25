<?php
session_start();

include 'conexión.php';

$nombre_de_usuario = $_POST['nombre_de_usuario'];
$contraseña = $_POST['contraseña'];
$contraseña = hash('sha512', $contraseña);

$verificar_login = mysqli_query($conexión, "SELECT * FROM usuarios WHERE nombre_de_usuario= '$nombre_de_usuario' and contraseña= '$contraseña' ");

if(mysqli_num_rows($verificar_login) > 0){
    $_SESSION['nombre_de_usuario'] = $nombre_de_usuario;
    header("location: index.php");
    exit;
}else{
    echo'
    <script>
    alert("Usuario no existe, por favor verifique los datos introducidos")
    window.location = "index_login.php"
    </script>
    ';
    exit;
}
?>