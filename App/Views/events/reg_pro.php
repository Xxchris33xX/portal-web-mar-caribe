<?php
    if(isset($_GET["m"])){
        switch($_GET["m"]){
            case '1';
            ?>
            <div class="alert alert-danger text-center fade show" role="alert">
              <strong>¡Complete todos los campos marcados como obligatorios!</strong>
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
        }
    }
    ?>