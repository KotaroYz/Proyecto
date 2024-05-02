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
                 <li><a href="index.php">Volver</a></li>
                    </ul>
                </li>
                <li><a href="#"><img src="images/servicio_cliente.png" alt=""></a>
                    <ul>
                        <li><a href="#">¿Qué podemos hacer por ti?</a></li>
                    </ul>
                </li>
                <li><a href="#" class="carrito"><img src="images/carrito_compras.png" alt=""></a>
                    <ul>
                        <li><a href="#"><script src="script.js"></script>
                    </a></li>
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
            <h2>Ropa deportiva</h2>
            
            <div class="categorias-imagenes">
                <style>
                .containerimages {
                    position: relative;
                    overflow: hidden;
                }
                
                .img-container {
                    display: flex;
                    overflow-x: hidden;
                    overflow-y: hidden;
                    padding-bottom: 10px;
                    scroll-behavior: smooth;
                    /* Transición suave */
                    border: 1px solid;
                    background-color: rgb(255, 255, 255);
                    
                }
                
                .img-container img {
                    width: 100%;
                    height: auto;
                    margin-right: 3%;
                    padding: 10px;
                }
                
                .img-container a {
                    flex: 0 0 calc(25% - 10px);
                    color: black;
                    display: inline-block;
                    margin-right: 3%;
                    text-decoration: none; 
                }
                
                .nav-btn {
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    background: rgba(0, 0, 0, 0.5);
                    border: none;
                    padding: 5px;
                    cursor: pointer;
                    z-index: 1;
                    width: 5%;
                    height: 10%;
                }
                
                .prev-btn {
                    left: 0;
                }
                
                .next-btn {
                    right: 0;
                }
                </style>
                    <div class="containerimages">
                        <button class="nav-btn prev-btn">&#10094;</button>
                        <div class="img-container">

                            <a href="#" id="producto1"><img src="images/ropa_deportiva.jpg" alt="">Ropa deportiva 50.000$</a>
                            <a href="#" id="producto2"><img src="images/ropa_deportiva.jpg" alt="">Ropa deportiva 50.000$</a>
                            <a href="#" id="producto3"><img src="https://img.freepik.com/vector-gratis/equipo-verde-fitness-hombre_23-2147535918.jpg?size=626&ext=jpg&ga=GA1.1.296721127.1714633718&semt=ais" alt="">Ropa deportiva 50.000$</a>
                            <a href="#" id="producto4"> <img src="images/ropa_deportiva.jpg" alt="">Ropa deportiva 50.000$</a>
                            <a href="#" id="producto5"><img src="images/ropa_deportiva.jpg" alt=""></a>
                            <a href="#" id="producto6"><img src="https://img.freepik.com/vector-gratis/equipo-verde-fitness-hombre_23-2147535918.jpg?size=626&ext=jpg&ga=GA1.1.296721127.1714633718&semt=ais" alt="">Ropa deportiva 50.000$</a>
                            <a href="#" id="producto7"> <img src="images/ropa_deportiva.jpg" alt="">Ropa deportiva 50.000$</a>
                            <a href="#" id="producto8"><img src="images/ropa_deportiva.jpg" alt="">Ropa deportiva 50.000$</a>
                        </div>
                
                        <button class="nav-btn next-btn">&#10095;</button>
                    </div>
                    <script>
                        const imgContainer = document.querySelector('.img-container');
                        const prevBtn = document.querySelector('.prev-btn');
                        const nextBtn = document.querySelector('.next-btn');
                    
                        prevBtn.addEventListener('click', () => {
                            imgContainer.scrollLeft -= imgContainer.offsetWidth || imgContainer.scrollWidth;
                        });
                    
                        nextBtn.addEventListener('click', () => {
                            imgContainer.scrollLeft += imgContainer.offsetWidth || imgContainer.scrollWidth;
                        });
                    </script>
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
 