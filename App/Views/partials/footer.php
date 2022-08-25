<footer>
        <div class="container-footer">
            <div class="R-Sociales">
                <h3>Redes sociales</h3>
                <div class="Redes-sociales">
                    <a><i class='bx bxl-facebook-square'></i></a>
                    <a><i class='bx bxl-instagram'></i></a>
                    <a><i class='bx bxl-twitter' ></i></a>
                    <a href="<?= FOLDER_PATH.'/login'?>"><i class='bx bx-log-in'></i></a>
                </div>
            </div>
            <div class="footer-About-Us">
                    <h3><a href="<?= FOLDER_PATH.'/aboutus'?>">Sobre Nosotros</a></h3>
                    <p>Ubicación: <?= $contactos ["ubicacion"];?></p>
                    <p>Teléfono: <?= $contactos ["telefono"];?></p>
            </div>
            <div class="footer">
                <p>© MarCaribe 2022</p>
            </div>
        </div>
    </footer>