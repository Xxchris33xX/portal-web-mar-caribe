<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link href="<?php echo PATH_ASSETS.'styles/productSlider.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo PATH_ASSETS.'splide-4.0.1/dist/css/splide.min.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo PATH_ASSETS.'splide-4.0.1/dist/css/themes/splide-default.min.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo PATH_ASSETS.'boxicons-2.1.1/css/animations.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo PATH_ASSETS.'boxicons-2.1.1/css/boxicons.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo PATH_ASSETS.'boxicons-2.1.1/css/boxicons.min.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo PATH_ASSETS.'boxicons-2.1.1/css/transformations.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo PATH_ASSETS.'styles/styles.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo PATH_ASSETS.'styles/producto.css'?>" rel="stylesheet" type="text/css">
</head>
<body>
<section class="page">
    <section>
    <?php require 'partials/header.php' ?>
        <main>
        <div class="Producto">
                <div class="producto-info">
                    <div class="product-header-item1">
                        <h3><a href="<?php echo FOLDER_PATH.'/catalogo/homepage'?>">Inicio</a><span> / </span> <a href="<?php echo FOLDER_PATH.'/catalogo/shop'?>">Catálogo</a> <span> / Producto </span></h3>
                    </div>
                    <img src="<?php echo PATH_ASSETS . "img/Productos/" . $datos [0] ['imagen']; ?>" alt="" class="product__img">
                </div>
                <div class="product-interact">
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
                    <p class="product-category">Categoría:  <span><a><?php echo $datos [0] ["nom_categoria"];?></a></span></p>
                </div>
        </div>
            <div class="descripcion">
            <h3>Productos similares</h3>
            <section class="splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide">
                        <div>
                            <h2>Harina Pan</h2>
                            <img src="<?php echo PATH_ASSETS.'img/Productos/Harina Pan.jpg'?>" alt="" class="product__img_slider">
                            <p class="producto__price"><span>$</span>1.00</p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div>
                            <h2>Harina Pan</h2>
                            <img src="<?php echo PATH_ASSETS.'img/Productos/Harina Pan.jpg'?>" alt="" class="product__img_slider">
                            <p class="producto__price"><span>$</span>1.00</p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div>
                            <h2>Harina Pan</h2>
                            <img src="<?php echo PATH_ASSETS.'img/Productos/Harina Pan.jpg'?>" alt="" class="product__img_slider">
                            <p class="producto__price"><span>$</span>1.00</p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div>
                            <h2>Harina Pan</h2>
                            <img src="<?php echo PATH_ASSETS.'img/Productos/Harina Pan.jpg'?>" alt="" class="product__img_slider">
                            <p class="producto__price"><span>$</span>1.00</p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div>
                            <h2>Harina Pan</h2>
                            <img src="<?php echo PATH_ASSETS.'img/Productos/Harina Pan.jpg'?>" alt="" class="product__img_slider">
                            <p class="producto__price"><span>$</span>1.00</p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div>
                            <h2>Harina Pan</h2>
                            <img src="<?php echo PATH_ASSETS.'img/Productos/Harina Pan.jpg'?>" alt="" class="product__img_slider">
                            <p class="producto__price"><span>$</span>1.00</p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </div>
                    </li>
                  </ul>
                </div>
            </section>
            <script>
                document.addEventListener( 'DOMContentLoaded', function() {
                  const splide = new Splide( '.splide', {
                  type   : 'loop',
                  drag   : 'free',
                  focus  : 'center',
                  width: '100vh',
                  perPage: 6, 
                  autoWidth: true,
                  breakpoints: {
                  900: {
                      perPage: 4,
                      gap: '0%',
		          },
                  800: {
                      perPage: 3,
                      width: '100vh',
                      gap: '0%',
                      pagination: boolean = false,
                  },
                  700: {
                      perPage: 3,
                      width: '70vh',
                      gap: '0%',
                      pagination: boolean = false,
		          },
		          600: {
                      perPage: 2,
                      width: '60vh',
                      gap: '1%',
		          },
		          500: {
                      perPage: 2,
                      width: '50vh',
                      gap: '1%',
                  },
                  400: {
                      perPage: 2,
                      width: '40vh',
                      gap: '1%',
		          },
		          300: {
                      perPage: 1,
                      width: '30vh',
                      gap: '1%',
		          }},
                  autoScroll: {
                    speed: 1.5,
                  },
                } ).mount( window.splide.Extensions );;
                
                splide.mount();
                } );
            </script>
        </div>
        </main>
    </section>
    <?php require 'partials/shoppingCart.php' ?>
        </section>
        </div>
    </section>
</section>

<?php require 'partials/footer.php' ?>

    <script src="<?php echo PATH_ASSETS.'slide/shop.js'?>"></script>
    <script src="<?php echo PATH_ASSETS.'slide/items.js'?>"></script>
    <script src="<?php echo PATH_ASSETS.'slide/search.js'?>"></script>
    <script src="<?php echo PATH_ASSETS.'splide-auto-scroll/dist/js/splide-extension-auto-scroll.js'?>"></script>
    <script src="<?php echo PATH_ASSETS.'splide-4.0.1/dist/js/splide.min.js'?>"></script>
    <script src="<?php echo PATH_ASSETS.'splide-4.0.1/dist/js/splide.js'?>"></script>
    <script src="<?php echo PATH_ASSETS.'slide/productSlider.js'?>"></script>
</body>
</html>