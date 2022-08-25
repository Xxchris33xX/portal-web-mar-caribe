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
              <strong>¡La entrada ha sido registrada exitosamente!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            break;
        }
    }
    ?>