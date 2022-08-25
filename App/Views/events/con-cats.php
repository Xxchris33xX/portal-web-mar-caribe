<?php
    if(isset($_GET["m"])){
        switch($_GET["m"]){
            case '1';
            ?>
            <div class="alert alert-danger text-center fade show" role="alert">
              <strong>¡No se logro editar la categoria. No puede dejar el nombre vacío!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            break;
            case '2';
            ?>
            
            <div class="alert alert-primary text-center fade show" role="alert">
              <strong>¡La categoría ha sido creado exitosamente!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            break;
            case '3';
            ?>
            <div class="alert alert-primary text-center fade show" role="alert">
              <strong>¡La categoría ha sido editada exitosamente!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            break;
            case '4';
            ?>
            <div class="alert alert-primary text-center fade show" role="alert">
              <strong>¡La categoría ha sido eliminada exitosamente!</strong>
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
              <strong>¡No se logro eliminar la categoria. Asegurese que la categoria no posee productos registrados!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            break;
        }
    }
    ?>