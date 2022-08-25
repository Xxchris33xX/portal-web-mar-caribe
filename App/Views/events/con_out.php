<?php
    if(isset($_GET["m"])){
        switch($_GET["m"]){
            case '1';
            ?>
            <div class="alert alert-primary text-center fade show" role="alert">
              <strong>¡Debe ingresar una cantidad!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <?php
            break;
            case '2';
            ?>
            
            <div class="alert alert-primary text-center fade show" role="alert">
              <strong>¡La salida ha sido registrada exitosamente!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            break;
            case '3';
            ?>
            <div class="alert alert-danger text-center fade show" role="alert">
              <strong>¡La cantidad que se ingreso es invalida!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <?php
            break;
        }
    }
    ?>