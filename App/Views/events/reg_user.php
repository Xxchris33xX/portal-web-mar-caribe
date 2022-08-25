<?php
    if(isset($_GET["m"])){
        switch($_GET["m"]){
            case '5';
            ?>
            <div class="alert alert-danger text-center fade show" role="alert">
              <strong>¡El nombre que introdujo ya existe!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            break;
            case '6';
            ?>
            <div class="alert alert-danger text-center fade show" role="alert">
              <strong>¡La cédula que introdujo ya existe!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            break;
            case '7';
            ?>
            <div class="alert alert-danger text-center fade show" role="alert">
              <strong>¡Introduzca la dirección de correo electrónico de manera correcta!<br>Ejemplo: MarcaribeCenter@gmail.com</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            break;
        }
    }
    ?>