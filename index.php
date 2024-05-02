<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Ropa Egan Moda</title>
    <link rel="stylesheet" href="css/Style1.css">
</head>
<body>
    <header class="header">

      <div class="menu container">  
      <a href="#footer" class="llamanos">LLamanos</a>
      <a href="#footer" class="llamanos-1"><img src="images/telefono.png" alt=""></a>
        <input type="checkbox"  id="menu" />
        <label for="menu">
            <img src="image/menu.png" class="menu-icono" alt="">
        </label>
        <nav class="navbar">
            <ul>
                <li><a href="#"><img src="images/inicio_sesion.png" alt=""></a>
                    <ul>
                        <li><a href="index_login.php"> 
                <?php if(isset($_SESSION['nombre_de_usuario'])){
                    echo $_SESSION['nombre_de_usuario'];
                }else{
                    echo'Iniciar sesión| Registrarse';
                }
                ?>
                </a></li>
                <li><a href="boton_cerrar_sesion.php">
                    <?php if(isset($_SESSION['nombre_de_usuario'])){
                    echo 'Cerrar sesión';
                }
                ?></a></li>
                    </ul>
                </li>
                <li><a href="#"><img src="images/servicio_cliente.png" alt=""></a>
                    <ul>
                        <li><a href="#">¿Qué podemos hacer por ti?</a></li>
                    </ul>
                </li>
                <li><a href="#" class="carrito"><img src="images/carrito_compras.png" alt=""></a>
                    <ul>
                        <li><a href="#">Ver productos añadidos</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
      </div>
      <div class="header-content container">
      <h1>Egan Moda</h1>
      <p>
        Ropa y accesorios a tu talla 
      </p>
      <a href="#categorias" class="btn-1">Explorar</a>
      </div>
    </header>

    <section id=categorias class="categorias">
        <img class="categorias-img" src="images/Logo.png" alt="">

        <div class="categorias-content container">
            <h2>Categorias</h2>
            
            <div class="categorias-group">

                <div class="categorias-1">
                    <img src="images/ropa_deportiva.jpg" alt="">
                    <h3>Ropa deportiva</h3>
                    <p>
                    Ropa para hacer ejercicio y actividades físicas.
                    </p>
                    <a href="index_ropa_deportiva.php" class="btn-1">Ver más</a>
                </div>
                <div class="categorias-1">
                    <img src="images/ropa_formal.jpg" alt="">
                    <h3>Ropa formal</h3>
                    <p>
                    Ropa para hacer ejercicio y actividades físicas.
                    </p>
                    <a href="index_ropa_formal.php" class="btn-1">Ver más</a>
                </div>
                <div class="categorias-1">
                    <img src="images/ropa_casual.jpg" alt="">
                    <h3>Ropa casual</h3>
                    <p>
                    Ropa para hacer ejercicio y actividades físicas.
                    </p>
                    <a href="index_ropa_casual.php" class="btn-1">Ver más</a>
                </div>
                <div class="categorias-1">
                    <img src="images/ropa_playa.jpg" alt="">
                    <h3>Ropa de playa</h3>
                    <p>
                    Ropa para hacer ejercicio y actividades físicas.
                    </p>
                    <a href="index_ropa_playa.php" class="btn-1">Ver más</a>
                </div>
                <div class="categorias-1">
                    <img src="images/ropa_dormir.jpg" alt="">
                    <h3>Ropa de dormir</h3>
                    <p>
                    Ropa para hacer ejercicio y actividades físicas.
                    </p>
                    <a href="index_ropa_dormir.php" class="btn-1">Ver más</a>
                </div>
                <div class="categorias-1">
                    <img src="images/accesorios.jpg" alt="">
                    <h3>Accesorios</h3>
                    <p>
                    Ropa para hacer ejercicio y actividades físicas.
                    </p>
                    <a href="accesorios.php" class="btn-1">Ver más</a>
                </div>
            </div>
        </div>

    </section>

    <main class="services">
        <div class="services-content container">
            <h2>Formas de pago</h2>

            <div class="services-group">

                <div class="services-1">
                    <img src="images/pago1.png" alt="">
                    <h3>Crédito o débito</h3>
                </div>
                <div class="services-1">
                    <img src="images/pago2.png" alt="">
                    <h3>Transferencias bancarias</h3>
                </div>
                <div class="services-1">
                    <img src="images/pago3.png" alt="">
                    <h3>Monederos electrónicos</h3>
                </div>

            </div>
            <p>
                La mejor forma de pago en línea para usted dependerá de sus necesidades y preferencias.
            </p>
        </div>

    </main>

    <section id="footer">
    <footer class="footer">

        <div class="footer-content container">

            <div class="link">

                <h3>© 2024 Todos los derechos reservados</h3>
                <ul>
                    <li><a href="#">Twitter</a></li>
                </ul>

            </div>
            <div class="link">

                <h3>+57 312 2389566 </h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                </ul>

            </div>
            <div class="link">

                <h3>---</h3>
                <ul>
                    <li><a href="#">Instagram</a></li>
                </ul>

            </div>
            <div class="link">

                <h3>Gracias por visitarnos</h3>
                <ul>
                    <li><a href="#">TikTok</a></li>
                </ul>

            </div>

        </div>

    </footer>
    </section>

</body>
</html>