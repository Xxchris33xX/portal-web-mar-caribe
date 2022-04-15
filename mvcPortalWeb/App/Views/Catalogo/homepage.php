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
        <?php require 'partials/header.php' ?>
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
                            
                            <article><span>Teléfono</span><br><?php echo $contactos ["telefono_tienda"];?><br></article>
                        </div>
                        <div class="informacion-item2">
                            <h3>Horas de Trabajo</h3><br>
                            <article>MON – FRI: 7AM – 7PM<br>
                                SAT – SUN: 5PM – 2AM<br>
                            </article>
                        </div>
                        <div class="informacion-item3">
                            <h3>Ubicación</h3>
                            <article><?php echo $contactos ["ubicacion_tienda"];?></article>
                        </div>
                    </div>
                </div>
                <div class="container-grid">
                    <div>
                        <h2>Bienvenido</h2>
                        <p>En el abasto Mar Caribe Center ofrecemos los productos de mas alta calidad para sus fantasticos clientes, desde todo tipo de alimentos hasta productos de limpieza necesarios para el hogar  ¡compra fácil y rápido con Mar Caribe Center! <br> <br> Puede encontrar mas información sobre Mar Caribe Center visite el apartado "Sobre Nosotros"</p>
                    </div>
                    <div class="vertical-center">
                        <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Background/BG-03.jpg">
                    </div>
                </div>    
            </main>
        </section>
        <?php require 'partials/shoppingCart.php' ?>
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
</body>
</html>