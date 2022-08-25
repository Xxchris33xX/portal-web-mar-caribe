<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= PATH_ASSETS.'styles/styles.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/animations.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.min.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/transformations.css'?>" rel="stylesheet" type="text/css">
    <title>Home</title>
</head>
<body>
    <section class="page">
        <section>
        <?php require 'partials/header.php' ?>
            <main>
                <div class="carrosel">
                    <div class="centered-element">
                        <h2>Mar Caribe Center</h2>
                        <br>
                        <h3>"Tu comodidad es nuestra prioridad"</h3>
                        <br><br><br><br><br>
                        <div>
                            <a href="<?= FOLDER_PATH.'/shop'?>"><span class="boton">IR A CATÁLOGO</span></a>
                        </div>  
                    </div>
                </div>
                <div class="informacion">
                    <div>
                        <div class="informacion-item1">
                            <h3>Contactos</h3>
                            
                            <article><span>Teléfono</span><br><?= $contactos ['telefono'];?><br></article>
                        </div>
                        <div class="informacion-item2">
                            <h3>Horas de Trabajo</h3><br>
                            <article> LUNES – VIERNES: 7AM – 7PM<br>
                                SABADO – DOMINGO: 5PM – 2AM<br>
                            </article>
                        </div>
                        <div class="informacion-item3">
                            <h3>Ubicación</h3>
                            <article><?= $contactos ['ubicacion'];?></article>
                        </div>
                    </div>
                </div>
                <div class="container-grid">
                    <div>
                        <h2>Bienvenido</h2>
                        <p>En el abasto Mar Caribe Center ofrecemos los productos de más alta calidad para sus clientes, desde todo tipo de alimentos hasta productos de limpieza necesarios para el hogar  ¡compra fácil y rápido con Mar Caribe Center!</p>
                    </div>
                    <div class="vertical-center">
                        <img src="<?= PATH_ASSETS.'img/Background/BG-03.jpg'?>">
                    </div>
                </div>    
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
</body>
</html>