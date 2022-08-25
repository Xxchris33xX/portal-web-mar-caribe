<?php
    if(isset($_GET["m"])){
        switch($_GET["m"]){
          case '1';
            ?>
            <div class="alert alert-danger text-center fade show" role="alert">
              <strong>¡Aseguresé de completar los campos obligatorios!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            break;
            case '2';
            ?>
            <div class="alert alert-success text-center fade show" role="alert">
              <strong>¡Los datos fueron modificados exitosamente!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            break;
            case '3';
            ?>
            <div class="alert alert-danger text-center fade show" role="alert">
              <strong>¡La contraseña actual que introdujo es incorrecta!</strong>
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
            <div class="alert alert-danger text-center fade show" role="alert">
              <strong>¡La contraseña que introdujo no cumple con los requerimientos!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            break;
        }
    }
    ?>