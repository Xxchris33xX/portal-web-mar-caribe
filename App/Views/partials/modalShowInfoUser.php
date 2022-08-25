<div class="modal fade" id="showInfoUser" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Información de contacto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="Registrar-usuario">
            <form action="" class="form">
              <div class="form-content">
                <div class="form-group">
                   <!-- INPUT DIRECCIÓN -->
                    <input type="text" class="form-input" placeholder=" " id="Direccion" value="" disabled>
                    <label for="" class="form-label" type="text">Dirección</label>
                    <p class="formulario__input-error">La direccion tiene que tener más de 4 dígitos.</p>
                </div>
                <div class="form-group">
                   <!-- INPUT TÉLEFONO-->
                    <input type="number" class="form-input" placeholder=" " id="Telefono" value="No tiene número telefónico" placeholder="No ha registrado un número telefónico" disabled> 
                    <label for="" class="form-label" type="text">Teléfono</label>
                </div>
                <div class="form-group">
                   <!-- INPUT CORREO -->
                    <input type="email" class="form-input" placeholder=" " id="Correo" placeholder="No ha registrado un correo" disabled>
                    <label for="" class="form-label" type="text">Correo</label>
                    <p class="formulario__input-error">
                     Introducir una direccion de correo válida.
                    </p>
                </div>
              </div>  
            </form>
          </div>
          </div>
        </div>
      </div>
</div>