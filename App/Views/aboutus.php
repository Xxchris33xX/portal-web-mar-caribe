<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="<?= PATH_ASSETS.'splide-4.0.1/dist/css/splide.min.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'splide-4.0.1/dist/css/themes/splide-default.min.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/styles.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/ubicacion.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/info-styles.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/animations.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.min.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/transformations.css'?>" rel="stylesheet" type="text/css">
</head>
<body>
    <section class="page">
        <section>
            <?php require 'partials/header.php' ?>
            <main>
                <div class="container-informacion">
                    <div class="item1-informacion">
                        <div>
                            <h3>Sobre Nosotros</h3>
                        </div>
                    </div>
                    <div class="sliderContainer">
                        <h3>Nuestra Misión</h3>
                        <div class="sesgoabajo">
                        </div>
                    </div>
                    <div class="text-info">
                        <p>Ser el mejor proveedor de víveres para los ciudadanos de la ciudad de Carúpano y ofrecer productos de la más alta calidad</p>
                    </div>
                    <div class="sliderContainer">
                        <div class="sesgoarriba"></div>
                    </div>
                    <section class="ubicacion">
                        <div class="ubicacion-informacion">
                            <h1>Encuéntranos en:</h1>
                            <h3>Dirección</h3>
                            <p><?= $contactos ["ubicacion"];?></p>
                            <h3>Horario de Atención</h3>
                            <p>Lunes - Domingo 10 am a 7 pm</p>
                            <h3>Teléfono</h3>
                            <p><?= $contactos ["telefono"];?></p>
                        </div>
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Mar%20Caribe%20Center&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>
                            <a href="https://putlocker-is.org"></a>
                            <br>
                            <style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style>
                            <a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
                        </div>
                    </section>
                    <!--image slider end-->
                    <!-- ACERCA DE NUESTROS PRODUCTOS -->
                    <div class="container-productos">
                        <div class="title-content">
                            <span class="main-title" >Información sobre nuestro local</span>
                            <span class="second-title"></span>
                        </div>
                        <?php for($i=0;$i<sizeof($datos);$i++){ $i; } ?>
                        <div class="containerProductInfo">
                            <div>
                                <p class="containerProductInfo-Parrafo">PRODUCTOS</p>
                                <p class="containerProductInfo-Secondtitle">Productos totales:</p>
                                <span class="containerProductInfo-title">#<?= "$i";?></span>
                            </div>
                            <div>
                                <p class="containerProductInfo-Secondtitle">MEDIOS DE PAGO</p>
                                <p class="containerProductInfo-Parrafo2">Punto de venta <i class='bx bxs-credit-card'></i> </p>
                                <p class="containerProductInfo-Parrafo2">Pago Movil<i class='bx bxs-phone-call' ></i></p>
                                <p class="containerProductInfo-Parrafo2">Divisas<i class='bx bx-money' ></i></p>
                            </div>
                            <div>
                                <p class="containerProductInfo-Secondtitle">REDES SOCIALES</p>
                                <p class="containerProductInfo-Parrafo2"><a class="Redes">@MarCaribeCenter<i class='bx bxl-facebook-square'></i></a></p>
                                <p class="containerProductInfo-Parrafo2"><a class="Redes">@MarCaribeCenter<i class='bx bxl-instagram'></i></a></p>
                                <p class="containerProductInfo-Parrafo2"><a class="Redes">@MarCaribeCenter<i class='bx bxl-twitter' ></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </section>
        <?php require 'partials/shoppingCart.php' ?>
    </section>
    
    <?php require 'partials/footer.php' ?>

<script src="<?= PATH_ASSETS.'splide-auto-scroll/dist/js/splide-extension-auto-scroll.js'?>"></script>
<script src="<?= PATH_ASSETS.'splide-4.0.1/dist/js/splide.min.js'?>"></script>
<script src="<?= PATH_ASSETS.'splide-4.0.1/dist/js/splide.js'?>"></script>
<script src="<?= PATH_ASSETS.'slide/slide.js'?>"></script>
<script src="<?= PATH_ASSETS.'slide/shop.js'?>"></script>
<script src="<?= PATH_ASSETS.'slide/items.js'?>"></script>
<script src="<?= PATH_ASSETS.'slide/search.js'?>"></script>

</body>
</html>