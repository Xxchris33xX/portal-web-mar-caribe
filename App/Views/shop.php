<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="<?= PATH_ASSETS.'styles/styles.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/shop.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/filterCatalog.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/animations.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.min.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/transformations.css'?>" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- PÁGINA -->
    <section class="page">
        <section>
            <?php require 'partials/header.php' ?>
            <main>
                <div class="shop-header">
                    <div class="shop-header-item1">
                        <?php if(isset($_GET['Categoria']) && $_GET['Categoria'] != ''){?>
                        <h3><a href="<?= FOLDER_PATH.'/'?>">Inicio</a><span> / </span> <a
                                href="<?= FOLDER_PATH.'/shop'?>">Catálogo</a>
                            <span><?= '/'. $categoria ["nom_categoria"];?></span></h3>
                        <?php  }else{?>
                        <h3><a href="<?= FOLDER_PATH.'/'?>">Inicio</a><span> / Catálogo</span></h3>
                        <?php  }?>
                    </div>
                    <?php if(isset($_GET['Categoria']) && $_GET['Categoria'] != ''){?>
                    <div class="shop-header-item3">
                        <p>Mostrando productos de la categoria: <?=$categoria ["nom_categoria"]?></p>
                    </div>
                    <?php  }else{?>
                    <div class="shop-header-item3">
                        <p>Mostrando todos los productos</p>
                    </div>
                    <?php  }?>
                </div>
                <div class="catalogo">
                    <div class="filterCatalog">
                        <div class="filterTitle">
                            <h2>Buscar producto</h2>
                        </div>
                        <div class="filterSearch">
                            <form action="<?= FOLDER_PATH.'/shop/filtrar/'?>" method="GET">
                                <div class="ctn-bars-search" id="ctn-bars-search">
                                    <input type="text" name="Nom_producto" id="inputBar"
                                        placeholder="¿Qué desea buscar?">
                                </div>
                                <!-- DECIDIR SI MOSTRAR EL RESULTADO DE BUSQUEDA EN OTRO DIV CON PRODUCTOS O
                            REFRESCARLOS EN LA PANTALLA CON AJAX -->
                        </div>
                        <div class="filterCategory">
                            <div class="filterTitle">
                                <h2>Filtrar productos por categoría</h2>
                            </div>

                            <div class="category">
                                <select name="Categoria" id="cars" autofocus>
                                    <option value="" selected hidden>Seleccionar categoría</option>
                                    <?php 
                                    
                                    for($i=0;$i<sizeof($cat);$i++){ ?>
                                    <option value="<?= $cat [$i] ["id_categoria"];?>"><?= $cat [$i] ["nom_categoria"];?>
                                    </option>
                                    <?php } ?>
                                </select>

                            </div>
                            <input type="submit" class="form-btn btnSearchProduct" value="Buscar">
                            </form>
                        </div>
                    </div>
                    <i class='bx bxs-right-arrow'></i>
                    <div class="catalogo-product">
                        <?php
                        if(sizeof($datos)>0){
                         for($i=0;$i<sizeof($datos);$i++){ ?>
                        <div class="product">
                            <input type="hidden" data-stock="<?= $datos [$i] ["cantidad"]?>" class="stock_product">
                            <input type="hidden" data-id="<?= $datos [$i] ["id_producto"]?>" class="id_product">
                            <img src="<?= PATH_ASSETS.'img/Productos/'.$datos [$i] ["imagen"]?>" alt=""
                                class="product__img">
                            <h3><a class="product__title"
                                    href="<?= FOLDER_PATH.'/product/exec/?id='. $datos [$i] ["id_producto"] . '&cat=' . $datos [$i] ["categoria"];?>"><?= $datos [$i] ["nom_producto"];?></a>
                            </h3>
                            <p class="producto__price"><span>$</span><?= $datos [$i] ["precio"];?></p>
                            <a class="boton-producto">AÑADIR AL CARRITO</i></a>
                        </div>
                        <?php }
                    }else{
                        ?>

                        <h2 class="notFound">No se ha encontrado ningún resultado</h2>

                        <?php
                    } ?>
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

    <?php require 'partials/footer.php' ?>

    <script src="<?= PATH_ASSETS.'slide/shop.js'?>"></script>
    <script src="<?= PATH_ASSETS.'slide/items.js'?>"></script>
    <script src="<?= PATH_ASSETS.'slide/search.js'?>"></script>
    <script src="<?= PATH_ASSETS.'slide/selectBox.js'?>"></script>
    <script src="<?= PATH_ASSETS.'slide/filterProducts.js'?>"></script>
</body>

</html>