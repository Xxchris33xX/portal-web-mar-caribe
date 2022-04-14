<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/styles.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/animations.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.min.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/transformations.css" rel="stylesheet" type="text/css">
    <title>Home</title>
</head>
<body>
    <section class="page">
        <section>
            <header class="header-nav margin-top">
                <!-- MENÚ DE PÁGINA -->
                <nav class="menu">
                    <ul> 
                        <li class="menu-item1"><a href="../../Controllers/catalogo/homepageController.php"><img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Logo/Logo.png"></a></li>
                        <li class="menu-item2"><a href="../../Controllers/catalogo/homepageController.php">Inicio</a></li>
                        <li class="menu-item3"><a href="../../Controllers/catalogo/aboutusController.php">Sobre Nosotros</a></li>
                        <li class="menu-item4"><a href="../../Controllers/catalogo/shopController.php">Catálogo</a></li>
                        <li class="menu-item5"><a><i class='bx bx-search' ></i></a></li>
                        <li class="menu-item6"><a><i class='bx bxs-cart'></i></a></li>
                        <li class="menu-item7"><a><i class='bx bxs-chevron-down'></i></a></li>
                        <li class="menu-item8"><a href="../../Controllers/Sistema/dashboardController.php"><i class='bx bxs-user'></i></a></li>
                    </ul>
                    <ul class="nav-responsive">
                        <li class="res-menu-item2"><a href="../../Controllers/catalogo/homepageController.php">Inicio</a></li>
                        <li class="res-menu-item3"><a href="../../Controllers/catalogo/aboutusController.php">Sobre Nosotros</a></li>
                        <li class="res-menu-item4"><a href="../../Controllers/catalogo/shopController.php">Catálogo</a></li>
                    </ul>
                </nav>
                <div class="search-bar" id="search-bar">
                    <div  class="ctn-bars-search" id="ctn-bars-search">
                        <input type="text" id="inputBar" placeholder="¿Qué desea buscar?">
                    </div>
                    <div class="ctn-bars-result" id="ctn-bars-result">
                        <ul id="box-search">
                            <li><a href="../../Controllers/catalogo/homepageController.php"><i class='bx bx-search-alt'></i>Inicio</a></li>
                            <li><a href="../../Controllers/catalogo/aboutusController.php"><i class='bx bx-search-alt'></i>Sobre Nosotros</a></li>
                            <li><a href="../../Controllers/catalogo/shopController.php"><i class='bx bx-search-alt'></i>Catálogo</a></li>
                        </ul>
                    </div>
                </div>
                <div id="cover-ctn-search" class="cover-ctn-search"></div>
            </header>
            <main>
                <div class="carrosel">
                    <div class="centered-element">
                        <h2>Mar Caribe Center</h2>
                        <br>
                        <h3>"Tu comodidad es nuestra prioridad"</h3>
                        <br><br><br><br><br>
                        <div>
                            <a href="../../Controllers/catalogo/shopController.php"><span class="boton">IR A CATÁLOGO</span></a>
                        </div>  
                    </div>
                </div>
                <div class="informacion">
                    <div>
                        <div class="informacion-item1">
                            <h3>Contactos</h3>
                            
                            <article><span>Teléfono</span><br>(414)1684532 <br></article>
                        </div>
                        <div class="informacion-item2">
                            <h3>Horas de Trabajo</h3><br>
                            <article>MON – FRI: 7AM – 7PM<br>
                                SAT – SUN: 5PM – 2AM<br>
                            </article>
                        </div>
                        <div class="informacion-item3">
                            <h3>Ubicación</h3>
                            <article>50 Yonge Street<br>
                                Toronto, ON MIW ZH3</article>
                        </div>
                    </div>
                </div>
                <div class="container-grid">
                    <div>
                        <h2>Bienvenido</h2>
                        <p>En el abasto Mar Caribe Center ofrecemos los mejores productos para los mejores de los clientes, desde los víveres mas básicos del hogar hasta productos para tu disfrute ¡compra fácil y rápido con Mar Caribe Center.</p>
                    </div>
                    <div class="vertical-center">
                        <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Background/BG-03.jpg">
                    </div>
                </div>    
            </main>
        </section>
        <!-- SHOPPING CART -->
        <section class="shop closeShop" id="Btn-cart">
            <div class="shop-items close">
            <section class="header">
                <div class="btn-close"><i class='bx bx-x'></i></div>
            </section>
            <section class="Container-product">
                <div class="Product-Info">
                    <h5>Imagen</h5>
                    <h5>Precio</h5>
                    <h5>Cantidad</h5>
                </div>
                <section class="product-container">
                        <div class="cartcontainerempty">
                            <h5>El carrito se encuentra vacio.<br>Si desea agregar productos diríjase al <a href="../../Controllers/catalogo/shopController.php">catálogo</a>.</h5>
                        </div>
                </section>
            </section>
            <section class="shop-resumen">
                <p>Productos: <span class="totalProductscart"></span></p>
                <p>Total: <span class="totalShopcart"></span></p>
            </section>
            </div>
        </section>
    </section>
    <footer>
        <div class="container-footer">
            <div class="R-Sociales">
                <h3>Redes sociales</h3>
                <div class="Redes-sociales">
                    <a><i class='bx bxl-facebook-square'></i></a>
                    <a><i class='bx bxl-instagram'></i></a>
                    <a><i class='bx bxl-twitter' ></i></a>
                </div>
            </div>
            <div class="footer-About-Us">
                    <h3><a href="../../Controllers/catalogo/aboutusController.php">Sobre Nosotros</a></h3>
                    <p>Ubicación:</p>
                    <p>Teléfono:</p>
            </div>
            <div class="footer">
                <p>© MarCaribe 2022</p>
            </div>
        </div>
    </footer>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/shop.js"></script>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/items.js"></script>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/search.js"></script>
</body>
</html>