
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/styles.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/producto.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/styles.css" rel="stylesheet" type="text/css">
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
                    </ul>
                </div>
            </div>
            <div id="cover-ctn-search" class="cover-ctn-search"></div>
        </header>
        <main>
            <div class="Producto">
                <div class="product-header-item1">
                    <h3><a href="../../Controllers/catalogo/homepageController.php">Inicio</a><span> / </span> <a href="../../Controllers/catalogo/shopController.php">Catálogo</a> <span> / Producto </span></h3>
                </div>
                <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Productos/<?php echo $datos [0] ["imagen"];?>" alt="" class="product__img">
                <div class="product-name">
                    <h2><?php echo $datos [0] ["nombre"];?></h2>
                </div>
                <div class="producto-price">
                    <p><span>$</span><?php echo $datos [0] ["precio"];?></p>
                </div>
                <div class="producto-dsp">
                    <p><?php echo $datos [0] ["descripcion"];?></p>
                </div>
                <form class="product-form" action="#">
                    <input type="number" id="quantity" name="quantity" value="1" min="1">
                    <input type="submit" value="Add to cart">
                </form>
                <p class="product-category">Categoría: <span><a><?php echo $datos [0] ["nom_categoria"];?></a></span></p>
            </div>
            <div class="descripcion">
                <h3>Productos similares</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis necessitatibus, vero veritatis dignissimos ex impedit ipsum blanditiis. Aliquid, et quisquam.</p>
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
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/shop.js"></script>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/items.js"></script>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/search.js"></script>
</body>
</html>