<?php
    if(isset($_GET["m"])){
        switch($_GET["m"]){
            case '1';
            ?>

            <?php
            break;
            case '2';
            ?>
            
            <div class="alert alert-primary text-center fade show" role="alert">
              <strong>¡El usuario ha sido creado exitosamente!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            break;
            case '3';
            ?>
            <div class="alert alert-primary text-center fade show" role="alert">
              <strong>¡El usuario ha sido editado exitosamente!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            break;
            case '4';
            ?>
            <div class="alert alert-primary text-center fade show" role="alert">
              <strong>¡El usuario ha sido eliminado exitosamente!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php 
            break;
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
            <div class="alert alert-success text-center fade show" role="alert">
              <strong>¡El usuario fue activado satisfactoriamente!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            break;
            case '8';
            ?>
            <div class="alert alert-danger text-center fade show" role="alert">
              <strong>¡No se pueden desactivar usuarios administradores!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            break;
        }
    }
    ?>