<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link href="<?= PATH_ASSETS.'styles/productSlider.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'splide-4.0.1/dist/css/splide.min.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'splide-4.0.1/dist/css/themes/splide-default.min.css'?>" rel="stylesheet"
        type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/animations.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.min.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/transformations.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/styles.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/producto.css'?>" rel="stylesheet" type="text/css">
</head>

<body>
    <section class="page">
        <section>
            <?php require 'partials/header.php' ?>
            <main>
                <div class="Producto">
                    <div class="producto-info">
                        <div class="product-header-item1">
                            <h3><a href="<?= FOLDER_PATH.'/'?>">Inicio</a><span> / </span> <a
                                    href="<?= FOLDER_PATH.'/shop'?>">Catálogo</a>
                                <span><?='/'. $datos ["nom_categoria"];?></span></h3>
                        </div>
                        <img src="<?= PATH_ASSETS . "img/Productos/" . $datos ['imagen']; ?>" alt=""
                            class="product__img">
                    </div>
                    <div class="product">
                        <input type="hidden" data-stock="<?= $datos["cantidad"]?>" class="stock_product">
                        <input type="hidden" data-id="<?=$_GET['id']?>" class="id_product">
                        <img src="<?= PATH_ASSETS . "img/Productos/" . $datos ['imagen']; ?>" alt=""
                            class="product__img notShow">
                        <div class="product__title">
                            <h2><?= $datos["nom_producto"];?></h2>
                        </div>
                        <div class="producto__price">
                            <p><span>$</span><?= $datos["precio"];?></p>
                        </div>
                        <div class="producto-dsp">
                            <p><?= $datos ["descripcion"];?></p>
                        </div>
                        <form class="product-form" action="#">
                            <h2 class="product-stock">Cantidad disponible: <?= $datos["cantidad"]?></h2>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </form>
                        <p class="product-category">Categoría: <span><a><?= $datos ["nom_categoria"];?></a></span>
                        </p>
                    </div>
                </div>
                <?php if(sizeof($similar)>0){ ?>
                <div class="descripcion">
                    <h3>Productos similares</h3>
                    <section class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php for($i=0;$i<sizeof($similar);$i++){ ?>
                                <li class="splide__slide">
                                    <div class="product">
                                        <input type="hidden" data-stock="<?= $similar [$i] ["cantidad"]?>" class="stock_product">
                                        <input type="hidden" data-id="<?= $similar [$i] ["id_producto"]?>" class="id_product">
                                        <h2 class="product__title"><?= $similar [$i] ["nom_producto"];?></h2>
                                        <img src="<?= PATH_ASSETS.'img/Productos/'. $similar [$i] ['imagen']; ?>?>"
                                            alt="" class="product__img product__img_slider">
                                        <p class="producto__price"><span>$</span><?= $similar [$i] ["precio"];?></p>
                                        <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </section>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            const splide = new Splide('.splide', {
                                type: 'loop',
                                drag: 'free',
                                focus: 'center',
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
                                    }
                                },
                                autoScroll: {
                                    speed: 1.5,
                                },
                            }).mount(window.splide.Extensions);;

                            splide.mount();
                        });
                    </script>
                </div>
                <?php } ?>
            </main>
        </section>
        <?php require 'partials/shoppingCart.php' ?>
    </section>
    </div>
    </section>
    </section>

    <?php require 'partials/footer.php' ?>

    <script src="<?= PATH_ASSETS.'slide/shop.js'?>"></script>
    <script src="<?= PATH_ASSETS.'slide/items.js'?>"></script>
    <script src="<?= PATH_ASSETS.'slide/search.js'?>"></script>
    <script src="<?= PATH_ASSETS.'splide-auto-scroll/dist/js/splide-extension-auto-scroll.js'?>"></script>
    <script src="<?= PATH_ASSETS.'splide-4.0.1/dist/js/splide.min.js'?>"></script>
    <script src="<?= PATH_ASSETS.'splide-4.0.1/dist/js/splide.js'?>"></script>
    <script src="<?= PATH_ASSETS.'slide/productSlider.js'?>"></script>
</body>

</html>