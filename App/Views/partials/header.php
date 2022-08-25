<header class="header-nav">
                <!-- MENÚ DE PÁGINA -->
                <nav class="menu">
                    <ul>
                        <li class="menu-item1"><a href="<?= FOLDER_PATH.'/'?>"><img src="<?= PATH_ASSETS.'img/Logo/Logo.png'?>"></a></li>
                        <li class="menu-item2"><a href="<?= FOLDER_PATH.'/'?>">Inicio</a></li>
                        <li class="menu-item3"><a href="<?= FOLDER_PATH.'/aboutus'?>">Sobre Nosotros</a></li>
                        <li class="menu-item4"><a href="<?= FOLDER_PATH.'/shop'?>">Catálogo</a></li>
                        <li class="menu-item5"><a><i class='bx bx-search' ></i></a></li> 
                        <li class="menu-item6">
                            <a><i class='bx bxs-cart'><span class="totalProducts hidden"></span></i></a>
                        </li>
                        <li class="menu-item7"><a><i class='bx bxs-chevron-down'></i></a></li>
                    </ul>
                    <ul class="nav-responsive">
                        <li class="res-menu-item2"><a href="<?= FOLDER_PATH.'/'?>">Inicio</a></li>
                        <li class="res-menu-item3"><a href="<?= FOLDER_PATH.'/aboutus'?>">Sobre Nosotros</a></li>
                        <li class="res-menu-item4"><a href="<?= FOLDER_PATH.'/shop'?>">Catálogo</a></li>
                    </ul>
                </nav>
                <div class="search-bar" id="search-bar">
                    <div  class="ctn-bars-search" id="ctn-bars-search">
                    <form action ="<?= FOLDER_PATH.'/shop/filtrar/'?>" method="GET">
                        <input type="text" id="inputBar" name="Nom_producto" placeholder="¿Qué desea buscar?">
                        <input type="hidden" name="Categoria" value="">
                        </form>
                    </div>
                    <div class="ctn-bars-result">
                        <ul id="box-search">
                            <li><a href="<?= FOLDER_PATH.'/'?>"><i class='bx bx-search-alt'></i>Inicio</a></li>
                            <li><a href="<?= FOLDER_PATH.'/aboutus'?>"><i class='bx bx-search-alt'></i>Sobre Nosotros</a></li>
                            <li><a href="<?= FOLDER_PATH.'/shop'?>"><i class='bx bx-search-alt'></i>Catálogo</a></li>
                        </ul>
                    </div>
                </div>
                <div id="cover-ctn-search" class="cover-ctn-search"></div>
                <!-- NAV RESPONSIVE -->
</header>