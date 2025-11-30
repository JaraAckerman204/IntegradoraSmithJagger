<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmithJaggerGames - Tu Tienda Gamer Definitiva</title>
    <meta name="description" content="Compra los mejores videojuegos para Nintendo, PlayStation y Xbox con envío gratis">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <!-- CSS Principal -->
    <link rel="stylesheet" href="src/css/style.css">
    
    <!-- Hover Effects -->
    <link rel="stylesheet" href="src/Hover-master/css/hover.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
</head>

<body onload="showPopupOnLoad()">

    <!-- ===================================
         POPUP DE SUSCRIPCIÓN
    =================================== -->
    <div id="overlay" class="overlay" onclick="closePopup()"></div>
    <div id="popup" class="popup">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <h2>🎮 ¡Únete a la comunidad gamer!</h2>
        <form onsubmit="submitForm(event)">
            <label for="email">Recibe ofertas exclusivas y novedades:</label>
            <input type="email" id="email" name="email" placeholder="tu@email.com" required>
            <input type="submit" value="Unirse y Enviar por WhatsApp">
        </form>
    </div>

    <!-- ===================================
         HEADER MEJORADO
    =================================== -->
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="src/img/Recurso 1.png" alt="SmithJaggerGames Logo" id="logotipo">
            </a>
        </div>

        <div class="search-container">
            <input type="text" id="searchInput" placeholder="🔍 Buscar juego...">
            <button id="searchButton" class="hvr-push">Buscar</button>
        </div>

        <!-- ===================================
             CARRITO - PERFECTO, NO TOCAR
        =================================== -->
        <div id="cart-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-cart">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
            </svg>
            <div class="count-products">
                <span id="contador-productos">0</span>
            </div>

            <!-- CONTENEDOR DEL CARRITO -->
            <div class="container-cart-products hidden-cart">
                <!-- Header del carrito -->
                <div class="cart-header">
                    <h2>🛒 Mi Carrito</h2>
                </div>

                <!-- Lista de productos -->
                <div class="cart-products" id="cart-products-list">
                    <!-- Los productos se insertan aquí dinámicamente -->
                </div>

                <!-- Total y botón de compra -->
                <div class="cart-total">
                    <div class="cart-total-row">
                        <h3>Total:</h3>
                        <span class="total-pagar">$<span id="cart-total-amount">0.00</span></span>
                    </div>
                    <button id="checkout-button">
                        <i class="fab fa-whatsapp"></i> Enviar Pedido por WhatsApp
                    </button>
                </div>

                <!-- Mensaje de carrito vacío -->
                <div class="cart-empty hidden" id="cart-empty-message">
                    <p>Tu carrito está vacío</p>
                    <p style="font-size: 14px; opacity: 0.7;">¡Agrega algunos juegos increíbles!</p>
                </div>
            </div>
        </div>
    </header>

    <!-- ===================================
         BANNER PRINCIPAL HERO
    =================================== -->
    <div class="container-fluid banner">
        <div class="content-wrapper">
            <div class="content-desc">
                <h1>Videojuegos</h1>
                <p>Compra algunos juegos en <span>oferta</span> en la mejor página, somos expertos en añadir diversión a tu vida</p>
                <p>La mayoría de tus amigos compran sus juegos aquí mismo. Al igual que ellos, adorna tu vida con las ofertas de SmithJaggerGames. Presiona el botón para ver algunas ofertas increíbles.</p>
                <button id="btn2" type="button" class="hvr-buzz-out">
                    <a class="enlace" href="#banner2">🔥 Ofertas por inauguración</a>
                </button>
            </div>

            <div class="divmario">
                <img src="src/img/Mario2.gif" alt="Mario Animado">
            </div>
        </div>
    </div>

    <!-- ===================================
         SECCIÓN NINTENDO
    =================================== -->
    <div class="section-JR">
        <h1>🎮 Nintendo Switch</h1>
    </div>

    <div class="container-fluid section-1">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 caroucel">
                <div class="carousel">
                    <div class="slide active">
                        <img src="https://i.3djuegos.com/juegos/8298/fortnite/fotos/ficha/fortnite-5154590.jpg" alt="Fortnite">
                    </div>
                    <div class="slide">
                        <img src="https://assets.nintendo.com/image/upload/c_fill,w_1200/q_auto:best/f_auto/dpr_2.0/ncom/software/switch/70010000000964/811461b8d1cacf1f2da791b478dccfe2a55457780364c3d5a95fbfcdd4c3086f" alt="Mario Kart">
                    </div>
                    <div class="slide">
                        <img src="https://image.api.playstation.com/vulcan/ap/rnd/202106/0117/I558OkMNBieAq24dzWwjjE4K.png" alt="Ratchet & Clank">
                    </div>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                <?php
                include('./src/php/connection.php');

                $responseMySql = mysqli_query($connection, 'select * from products where categoria = "Nintendo" limit 6');

                if (!$responseMySql) {
                    die(mysqli_error($connection));
                }
                
                echo '<div class="row container-items p-5">';

                if (mysqli_num_rows($responseMySql) > 0) {
                    while ($rowData = mysqli_fetch_array($responseMySql)) {
                        $price = floatval($rowData['precio']);
                        if (!is_numeric($price)) {
                            $price = 0;
                        }

                        echo '<div class="col-4 card juego">' .
                            '<img style="width: 111%;height: 250px;border-radius: 1%;" src="' . htmlspecialchars($rowData['imagen']) . '" alt="' . htmlspecialchars($rowData['nombre']) . '">' .
                            '<div class="content">' .
                            '<h2 class="nom">' . htmlspecialchars($rowData['nombre']) . '</h2>' .
                            '<p class="price">$' . number_format($price, 2) . '</p>' .
                            '<button class="btn-add-cart">🛒 Comprar</button>' .
                            '</div>' .
                            '</div>';
                    }
                }
                
                echo '</div>';

                mysqli_close($connection);
                ?>
            </div>
        </div>
    </div>

    <!-- ===================================
         SECCIÓN PLAYSTATION
    =================================== -->
    <div class="section-JR">
        <h1>🎮 PlayStation</h1>
    </div>

    <div class="container-fluid section-1">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 caroucel">
                <div class="carousel">
                    <div class="slide active">
                        <img src="https://i.3djuegos.com/juegos/8298/fortnite/fotos/ficha/fortnite-5154590.jpg" alt="Fortnite">
                    </div>
                    <div class="slide">
                        <img src="https://assets.nintendo.com/image/upload/c_fill,w_1200/q_auto:best/f_auto/dpr_2.0/ncom/software/switch/70010000000964/811461b8d1cacf1f2da791b478dccfe2a55457780364c3d5a95fbfcdd4c3086f" alt="Mario Kart">
                    </div>
                    <div class="slide">
                        <img src="https://image.api.playstation.com/vulcan/ap/rnd/202106/0117/I558OkMNBieAq24dzWwjjE4K.png" alt="Ratchet & Clank">
                    </div>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                <?php
                include('./src/php/connection.php');

                $responseMySql = mysqli_query($connection, 'select * from products where categoria = "Play" limit 6');

                if (!$responseMySql) {
                    die(mysqli_error($connection));
                }
                
                echo '<div class="row container-items p-5">';

                if (mysqli_num_rows($responseMySql) > 0) {
                    while ($rowData = mysqli_fetch_array($responseMySql)) {
                        $price = floatval($rowData['precio']);
                        if (!is_numeric($price)) {
                            $price = 0;
                        }

                        echo '<div class="col-4 card juego">' .
                            '<img style="width: 111%;height: 250px;border-radius: 2%;" src="' . htmlspecialchars($rowData['imagen']) . '" alt="' . htmlspecialchars($rowData['nombre']) . '">' .
                            '<div class="content">' .
                            '<h2 class="nom">' . htmlspecialchars($rowData['nombre']) . '</h2>' .
                            '<p class="price">$' . number_format($price, 2) . '</p>' .
                            '<button class="btn-add-cart">🛒 Comprar</button>' .
                            '</div>' .
                            '</div>';
                    }
                }
                
                echo '</div>';

                mysqli_close($connection);
                ?>
            </div>
        </div>
    </div>

    <!-- ===================================
         SECCIÓN XBOX
    =================================== -->
    <div class="section-JR">
        <h1>🎮 Xbox Series</h1>
    </div>

    <div class="container-fluid section-1">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 caroucel">
                <div class="carousel">
                    <div class="slide active">
                        <img src="https://i.3djuegos.com/juegos/8298/fortnite/fotos/ficha/fortnite-5154590.jpg" alt="Fortnite">
                    </div>
                    <div class="slide">
                        <img src="https://assets.nintendo.com/image/upload/c_fill,w_1200/q_auto:best/f_auto/dpr_2.0/ncom/software/switch/70010000000964/811461b8d1cacf1f2da791b478dccfe2a55457780364c3d5a95fbfcdd4c3086f" alt="Mario Kart">
                    </div>
                    <div class="slide">
                        <img src="https://image.api.playstation.com/vulcan/ap/rnd/202106/0117/I558OkMNBieAq24dzWwjjE4K.png" alt="Ratchet & Clank">
                    </div>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                <?php
                include('./src/php/connection.php');

                $responseMySql = mysqli_query($connection, 'select * from products where categoria = "Xbox" limit 6');

                if (!$responseMySql) {
                    die(mysqli_error($connection));
                }
                
                echo '<div class="row container-items p-5">';

                if (mysqli_num_rows($responseMySql) > 0) {
                    while ($rowData = mysqli_fetch_array($responseMySql)) {
                        $price = floatval($rowData['precio']);
                        if (!is_numeric($price)) {
                            $price = 0;
                        }

                        echo '<div class="col-4 card juego">' .
                            '<img style="width: 111%;height: 250px; border-radius: 2%;" src="' . htmlspecialchars($rowData['imagen']) . '" alt="' . htmlspecialchars($rowData['nombre']) . '">' .
                            '<div class="content">' .
                            '<h2 class="nom">' . htmlspecialchars($rowData['nombre']) . '</h2>' .
                            '<p class="price">$' . number_format($price, 2) . '</p>' .
                            '<button class="btn-add-cart">🛒 Comprar</button>' .
                            '</div>' .
                            '</div>';
                    }
                }
                
                echo '</div>';

                mysqli_close($connection);
                ?>
            </div>
        </div>
    </div>

    <!-- ===================================
         SECCIÓN DE OFERTA DEL MES
    =================================== -->
    <div class="section-OF">
        <h1>💥 Oferta del Mes</h1>
    </div>

    <div class="banner2" id="banner2"> 
        <div class="title">🚀 ¡Envío gratis en tu primera compra en agosto!</div>
        <div class="description">Explora nuestra increíble colección de videojuegos y obtén envío gratuito</div>
        <div class="description">en tu primer compra durante todo el mes de agosto. ¡No te lo pierdas!</div>
        
        <div class="gifenvio"> 
            <img class="envio-gratis" src="https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExNW9zcXE2N29idHh1N2QzYmJwYmowYjc0OXAxeXBqMHVsd3MxaTBobyZlcD12MV9naWZzX3NlYXJjaCZjdD1n/8UHSOLXnZ8Om0kM1Ix/giphy.gif" alt="Envío gratis animado">
        </div>
        
        <a href="#" class="cta-button">¡Explora Ahora!</a>
    </div>

    <!-- ===================================
         FOOTER MEJORADO
    =================================== -->
    <footer>
        <div class="footer-body">
            <img class="mario-bye" src="src/img/Mario3.gif" alt="Mario despidiéndose">
            
            <ul class="angel">
               <a href="nosotros.html" style="text-decoration: none;">
                   <h3>ℹ️ Acerca de nosotros</h3>
               </a> 
            </ul>
            
            <ul class="angel2">
                <h3>📱 Contáctanos</h3>
                <li><a href="https://www.facebook.com/profile.php?id=100094551206794" target="_blank"><i class="fab fa-facebook"></i>Facebook</a></li>
                <li><a href="https://instagram.com/smithjaggergames?igshid=NGExMmI2YTkyZg==" target="_blank"><i class="fab fa-instagram"></i>Instagram</a></li>
                <li><a href="https://twitter.com/jagger_games" target="_blank"><i class="fab fa-twitter"></i>Twitter</a></li>
                <li><a href="https://wa.me/528711646010" target="_blank"><i class="fab fa-whatsapp"></i>WhatsApp</a></li>
            </ul>
        </div>
    </footer>
    
    <div class="footer-bottom">
        <p>Copyright © 2023 SmithJaggerGames | <span>Desarrolladores</span> | Todos los derechos reservados</p>
    </div>

    <!-- ===================================
         SCRIPTS
    =================================== -->
    <script src="src/js/barra.js"></script>
    <script src="src/js/prueba.js"></script>
</body>

</html>