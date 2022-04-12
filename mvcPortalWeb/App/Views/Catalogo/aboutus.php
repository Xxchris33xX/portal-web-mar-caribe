<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/styles.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/info-styles.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/animations.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.min.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/transformations.css" rel="stylesheet" type="text/css">
</head>
<body>
    <section class="page">
        <section>
            <header class="header-nav">
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
                            <li><a href=""><i class='bx bx-search-alt'></i>Test</a></li>
                        </ul>
                    </div>
                </div>
                <div id="cover-ctn-search" class="cover-ctn-search"></div>
            </header>
            <main>
                <div class="container-informacion">
                    <div class="item1-informacion">
                        <h3>Sobre Nosotros</h3>
                    </div>
                    <!-- Carrusel-->
                    <!--<div class="item4-informacion">
                        <div class="item4-contenedor">
                            <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Botones/bxs-chevron-left.svg" class="boton" id="before">
                            <section class="slyde-body slyde-body--show" data-id="1">
                                <div>
                                    <h2>Ubicación</h2>
                                    <p class="review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, voluptatum. Modi corporis alias vero deserunt est dolorem, nam voluptas quam!</p>
                                </div>
                                <figure>
                                    <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Person/laindia.jpg" class="slyde-img"> 
                                </figure>
                            </section>
                            <section class="slyde-body" data-id="2">
                                <div>
                                    <h2>Personal</h2>
                                    <p class="review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, voluptatum. Modi corporis alias vero deserunt est dolorem, nam voluptas quam!</p>
                                </div>
                                <figure>
                                    <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Person/lacatira.jpg" class="slyde-img"> 
                                </figure>
                            </section>
                            <section class="slyde-body" data-id="3">
                                <div>
                                    <h2>Products</h2>
                                    <p class="review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, voluptatum. Modi corporis alias vero deserunt est dolorem, nam voluptas quam!</p>
                                </div>
                                <figure>
                                    <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Person/lanegra.jpg" class="slyde-img"> 
                                </figure>
                            </section>
                            <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Botones/bxs-chevron-right.svg" class="boton" id="next">
                        </div>
                    </div>-->
                    <!--image slider start-->
                    <div class="sliderContainer">
                        <div class="slider">
                          <div class="slides">
                            <!--radio buttons start-->
                            <input type="radio" name="radio-btn" id="radio1">
                            <input type="radio" name="radio-btn" id="radio2">
                            <input type="radio" name="radio-btn" id="radio3">
                            <input type="radio" name="radio-btn" id="radio4">
                            <!--radio buttons end-->
                            <!--slide images start-->
                            <div class="slide first">
                              <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Sobre Nosotros/1.png" alt="">
                            </div>
                            <div class="slide">
                              <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Sobre Nosotros/2.png" alt="">
                            </div>
                            <div class="slide">
                              <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Sobre Nosotros/3.png" alt="">
                            </div>
                            <!--slide images end-->
                            <!--automatic navigation start-->
                            <div class="navigation-auto">
                              <div class="auto-btn1"></div>
                              <div class="auto-btn2"></div>
                              <div class="auto-btn3"></div>
                            </div>
                            <!--automatic navigation end-->
                        </div>
                    </div>
                      <!--manual navigation start-->
                      <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                      </div>
                      <!--manual navigation end-->
                    </div>
                    <!--image slider end-->
                    <!-- ACERCA DE NUESTROS PRODUCTOS -->
                    <div class="container-productos">
                        <div class="title-content">
                            <span class="main-title" >Información</span>
                            <span class="second-title">Para conocer más acerca de nuestro local:</span>
                        </div>
                        <div class="containerProductInfo">
                            <div>
                                <p class="containerProductInfo-Parrafo">Nuestro catálogo ofrece gran variedad de productos</p>
                                <p class="containerProductInfo-Secondtitle">Total productos</p>
                                <span class="containerProductInfo-title">#000</span>
                            </div>
                            <div>
                                <p class="containerProductInfo-Secondtitle">Contamos con los siguentes métodos de pago</p>
                                <p class="containerProductInfo-Parrafo2">Punto de venta <i class='bx bxs-credit-card'></i> </p>
                                <p class="containerProductInfo-Parrafo2">Pago Movil<i class='bx bxs-phone-call' ></i></p>
                                <p class="containerProductInfo-Parrafo2">Divisas<i class='bx bx-money' ></i></p>
                            </div>
                            <div>
                                <p class="containerProductInfo-Secondtitle">Para más información, no dude en contactarnos a través de nuestras redes:</p>
                                <p class="containerProductInfo-Parrafo2"><a class="Redes">@MarCaribeCenter<i class='bx bxl-facebook-square'></i></a></p>
                                <p class="containerProductInfo-Parrafo2"><a class="Redes">@MarCaribeCenter<i class='bx bxl-instagram'></i></a></p>
                                <p class="containerProductInfo-Parrafo2"><a class="Redes">@MarCaribeCenter<i class='bx bxl-twitter' ></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </section>
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
    <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
          document.getElementById('radio' + counter).checked = true;
          counter++;
          if(counter > 3){
            counter = 1;
          }
        }, 5000);
        </script>
<script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/slide.js"></script>
<script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/shop.js"></script>
<script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/items.js"></script>
<script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/search.js"></script>
</body>
</html>