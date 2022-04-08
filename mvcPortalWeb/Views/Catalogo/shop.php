<?php
include_once ("../../Controllers/ProductController.php");
    $pro = new producto();
    
        $datos = $pro ->get_producto();
        $categoria = $pro ->get_categoria();
        ?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="../../Helpers/styles/styles.css" rel="stylesheet" type="text/css">
    <link href="../../Helpers/styles/shop.css" rel="stylesheet" type="text/css">
    <link href="../../Helpers/boxicons-2.1.1/css/animations.css" rel="stylesheet" type="text/css">
    <link href="../../Helpers/boxicons-2.1.1/css/boxicons.css" rel="stylesheet" type="text/css">
    <link href="../../Helpers/boxicons-2.1.1/css/boxicons.min.css" rel="stylesheet" type="text/css">
    <link href="../../Helpers/boxicons-2.1.1/css/transformations.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- PÁGINA -->
    <section class="page">
        <section>
            <header class="header-nav">
                <!-- MENÚ DE PÁGINA -->
                <nav class="menu">
                    <ul> 
                        <li class="menu-item1"><a href="index.html"><img src="../../Helpers/img/Logo/Logo.png"></a></li>
                        <li class="menu-item2"><a href="index.html">Inicio</a></li>
                        <li class="menu-item3"><a href="aboutus.html">Sobre Nosotros</a></li>
                        <li class="menu-item4"><a href="shop.html">Catálogo</a></li>
                        <li class="menu-item5"><a><i class='bx bx-search' ></i></a></li>
                        <li class="menu-item6"><a><i class='bx bxs-cart'></i></a></li>
                        <li class="menu-item7"><a><i class='bx bxs-chevron-down'></i></a></li>
                    </ul>
                    <ul class="nav-responsive">
                        <li class="res-menu-item2"><a href="index.html">Inicio</a></li>
                        <li class="res-menu-item3"><a href="aboutus.html">Sobre Nosotros</a></li>
                        <li class="res-menu-item4"><a href="shop.html">Catálogo</a></li>
                    </ul>
                </nav>
                <div class="search-bar" id="search-bar">
                    <div  class="ctn-bars-search" id="ctn-bars-search">
                        <input type="text" id="inputBar" placeholder="¿Qué desea buscar?">
                    </div>
                    <div class="ctn-bars-result">
                        <ul id="box-search">
                            <li><a href="index.html"><i class='bx bx-search-alt'></i>Inicio</a></li>
                            <li><a href="aboutus.html"><i class='bx bx-search-alt'></i>Sobre Nosotros</a></li>
                            <li><a href="shop.html"><i class='bx bx-search-alt'></i>Catálogo</a></li>
                        </ul>
                    </div>
                </div>
                <div id="cover-ctn-search" class="cover-ctn-search"></div>
                <!-- NAV RESPONSIVE -->
            </header>
            <main>
                <div class="shop-header">
                    <div class="shop-header-item1"><h3><a href="index.html">Inicio</a><span> / Catálogo</span></h3></div>
                    <div class="shop-header-item2"><h1>Catálogo</h1></div>
                    <div class="shop-header-item3"><p>Mostrando todos los resultados</p></div>
                    <label class="shop-header-item4" for="Ordernar">
                    <select id="Ordernar">
                        <option value="Popularidad">Categoría 1</option>
                        <option value="saab">Categoría 2</option>
                        <option value="opel">Categoría 3</option>
                        <option value="audi">Categoría 4</option>
                    </select>
                    </label> 
                </div>
                <div class="catalogo">
                    <div class="catalogo-product">
                    <?php for($i=0;$i<sizeof($datos);$i++){ ?>
                        <div class="product">
                            <img src="../../Helpers/img/Productos/<?php echo $datos [$i] ["imagen"];?>" alt="" class="product__img">
                            <h3><a class="product__title" href="product.html"><?php echo $datos [$i] ["nombre"];?></a></h3>
                            <p class="producto__price"><span>$</span><?php echo $datos [$i] ["precio"];?></p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </div>
                        <?php } ?>
                        <div class="product">
                            <img src="../../Helpers/img/Productos/Harina Pan.jpg" alt="" class="product__img">
                            <h3><a class="product__title" href="product.html">Harina pan</a></h3>
                            <p class="producto__price"><span>$</span>1.00</p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </div>
                        <div class="product">
                            <img src="../../Helpers/img/Productos/Harina Pan.jpg" alt="" class="product__img">
                            <h3><a class="product__title" href="product.html">Harina pan</a></h3>
                            <p class="producto__price"><span>$</span>1.00</p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </div>
                        <div class="product">
                            <img src="../../Helpers/img/Productos/Harina Pan.jpg" alt="" class="product__img">
                            <h3><a class="product__title" href="product.html">Harina pan</a></h3>
                            <p class="producto__price"><span>$</span>1.00</p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </div>
                        <div class="product">
                            <img src="../../Helpers/img/Productos/Harina Pan.jpg" alt="" class="product__img">
                            <h3><a class="product__title" href="product.html">Harina pan</a></h3>
                            <p class="producto__price"><span>$</span>1.00</p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </div>
                        <div class="product">
                            <img src="../../Helpers/img/Productos/Harina Pan.jpg" alt="" class="product__img">
                            <h3><a class="product__title" href="product.html">Harina pan</a></h3>
                            <p class="producto__price"><span>$</span>1.00</p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
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
                            <h5>El carrito se encuentra vacio.<br>Si desea agregar productos diríjase al <a href="shop.html">catálogo</a>.</h5>
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
    <!-- FIN PÁGINA -->
    <!-- FOOTER -->
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
                    <h3><a href="aboutus.html">Sobre Nosotros</a></h3>
                    <p>Ubicación:</p>
                    <p>Teléfono:</p>
            </div>
            <div class="footer">
                <p>© MarCaribe 2022</p>
            </div>
        </div>
    </footer>
    <script src="../slide/shop.js"></script>
    <script src="../slide/items.js"></script>
    <script src="../slide/search.js"></script>
</body>
</html>