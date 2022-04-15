<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/styles.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/shop.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/filterCatalog.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/animations.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.min.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/transformations.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- PÁGINA -->
    <section class="page">
        <section>
        <?php require 'partials/header.php' ?>
            <main>
                <div class="shop-header">
                    <div class="shop-header-item1"><h3><a href="../../Controllers/catalogo/homepageController.php">Inicio</a><span> / Catálogo</span></h3></div>
                    <div class="shop-header-item2"><h1>Catálogo</h1></div>
                    <div class="shop-header-item3"><p>Mostrando todos los resultados</p></div>
                </div>
                <div class="catalogo">
                <div class="filterCatalog">
                        <div class="filterTitle">
                            <h2>Buscar producto</h2>
                        </div>
                        <div class="filterSearch">
                            <div  class="ctn-bars-search" id="ctn-bars-search">
                                <input type="text" id="inputBar" placeholder="¿Qué desea buscar?">
                            </div>
                            <!-- DECIDIR SI MOSTRAR EL RESULTADO DE BUSQUEDA EN OTRO DIV CON PRODUCTOS O
                            REFRESCARLOS EN LA PANTALLA CON AJAX -->
                        </div>
                        <div class="filterCategory">
                            <div class="filterTitle">
                                <h2>Filtrar productos por categoría</h2>
                            </div>
                            <div class="category">
                                <div class="containerSelectProduct">
                                      <div class="select-box">
                                        <div class="options-container">
                                          <div class="option">
                                            <input 
                                            type="radio"
                                            id=""
                                            class="radio"
                                            name=""
                                            />
                                            <label for="">Categoria</label>
                                          </div>
                                          <div class="option">
                                            <input 
                                            type="radio"
                                            id=""
                                            class="radio"
                                            name=""
                                            />
                                          <label for="">Categoria</label>
                                          </div>
                                        </div>
                                        <div class="selected">
                                          Seleccionar una categoría <i class='bx bx-chevron-down'></i>
                                        </div>
                                        <div class="search-box">
                                          <input type="text" placeholder="Criterio de busqueda">
                                        </div>
                                      </div>
                                    </div>
                                </div>
                        </div>
                        <div class="filterCategory openFilter">
                            <div class="filterTitle">
                                <h2>Filtrar productos por marca</h2>
                            </div>
                            <div class="category">
                                <div class="containerSelectProduct">
                                      <div class="select-box">
                                        <div class="options-container Mark">
                                          <div class="option Mark">
                                            <input 
                                            type="radio"
                                            id=""
                                            class="radio"
                                            name=""
                                            />
                                            <label for="">Producto</label>
                                          </div>
                                          <div class="option">
                                            <input 
                                            type="radio"
                                            id=""
                                            class="radio"
                                            name=""
                                            />
                                          <label for="">Producto</label>
                                          </div>
                                        </div>
                                        <div class="selected Mark">
                                          Seleccionar un marca <i class='bx bx-chevron-down'></i>
                                        </div>
                                        <div class="search-box Mark">
                                          <input type="text" placeholder="Criterio de busqueda">
                                        </div>
                                      </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <i class='bx bxs-right-arrow'></i>
                    <div class="catalogo-product">
                    <?php for($i=0;$i<sizeof($datos);$i++){ ?>
                        <div class="product">
                            <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Productos/<?php echo $datos [$i] ["imagen"];?>" alt="" class="product__img">
                            <h3><a class="product__title" href="../../Controllers/catalogo/productController.php?id=<?php echo $datos [$i] ["id_producto"];?>"><?php echo $datos [$i] ["nombre"];?></a></h3>
                            <p class="producto__price"><span>$</span><?php echo $datos [$i] ["precio"];?></p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </div>
                        <?php } ?>
                        <div class="product">
                            <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Productos/Harina Pan.jpg" alt="" class="product__img">
                            <h3><a class="product__title" href="../../Controllers/catalogo/productController.php?id=<?php echo $datos [$i] ["id_producto"];?>">Harina pan</a></h3>
                            <p class="producto__price"><span>$</span>1.00</p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </div>
                        <div class="product">
                            <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Productos/Harina Pan.jpg" alt="" class="product__img">
                            <h3><a class="product__title" href="../../Controllers/catalogo/productController.php?id=<?php echo $datos [$i] ["id_producto"];?>">Harina pan</a></h3>
                            <p class="producto__price"><span>$</span>1.00</p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </div>
                        <div class="product">
                            <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Productos/Harina Pan.jpg" alt="" class="product__img">
                            <h3><a class="product__title" href="../../Controllers/catalogo/productController.php?id=<?php echo $datos [$i] ["id_producto"];?>">Harina pan</a></h3>
                            <p class="producto__price"><span>$</span>1.00</p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </div>
                        <div class="product">
                            <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Productos/Harina Pan.jpg" alt="" class="product__img">
                            <h3><a class="product__title" href="../../Controllers/catalogo/productController.php?id=<?php echo $datos [$i] ["id_producto"];?>">Harina pan</a></h3>
                            <p class="producto__price"><span>$</span>1.00</p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </div>
                        <div class="product">
                            <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Productos/Harina Pan.jpg" alt="" class="product__img">
                            <h3><a class="product__title" href="../../Controllers/catalogo/productController.php?id=<?php echo $datos [$i] ["id_producto"];?>">Harina pan</a></h3>
                            <p class="producto__price"><span>$</span>1.00</p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </div>
                    </div>    
                </div>
            </main>
        </section>    
        <?php require 'partials/shoppingCart.php' ?>
                </section>
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
                    <h3><a href="../../Controllers/catalogo/aboutusController.php">Sobre Nosotros</a></h3>
                    <p>Ubicación: <?php echo $contactos ["ubicacion_tienda"];?></p>
                    <p>Teléfono: <?php echo $contactos ["telefono_tienda"];?></p>
            </div>
            <div class="footer">
                <p>© MarCaribe 2022</p>
            </div>
        </div>
    </footer>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/shop.js"></script>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/items.js"></script>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/search.js"></script>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/selectBox.js"></script> 
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/filterProducts.js"></script> 
</body>
</html>