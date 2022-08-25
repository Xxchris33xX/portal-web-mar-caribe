<div class="modal fade" id="editProduct">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="Registrar-producto">
        <form action="<?= FOLDER_PATH.'/con_pro/grabar'?>" class="form" id="formulario" method="POST" enctype="multipart/form-data">
          <div class="form-content">
            <!-- NOMBRE PRODUCTO -->
            <span style="text-align: left;">(<span style="color:red;">*</span>) Campo obligatorio</span>
            <div class="form-group" id="grupo__producto">
              <input type="text" class="form-input" id="Nom_producto" value="" name="Nom_producto" required>
              <label for="" class="form-label" type="text">Nombre:<span style="color:red;">*</span></label>
              <span class="form-line"></span>
              <p class="formulario__input-error">El nombre del producto excede los 50 caracteres.</p>
            </div>
            <!-- CATEGORIAS -->
            <div class="form-group category">
                    <label for="" class="form-label categoria edit" type="text">Categoría:</label>
                      <select id="categorias" class="form-control input-group-btn" name="Categoria" data-live-search="true">
                      </select>
                    <span class="form-line"></span>
                  </div>
            <!-- PRECIO -->
            <div class="form-group" id="grupo__precio">
              <input type="text" class="form-input" id="Precio" placeholder=" " value="" name="Precio" required>
              <label for="" class="form-label" type="text">Precio<span style="color:red;">*</span></label>
              <span class="form-line"></span>
              <p class="formulario__input-error">Ingresar únicamente dígitos.</p>
            </div>
            <!-- DESCRIPCIÓN -->
            <div class="form-group">
              <p type="text">Descripción <a id="btnEditTextArea" data-toggle="tooltip" data-placement="top" title="Editar Descripción"><i class='btbtn-success bx bxs-edit-alt'></i></a></p>
              <textarea class="productDescript" id="textDescripcionProduct" name="Descripcion" id="" cols="30" rows="5" maxlength="255" disabled></textarea>
              <div><span id="counterText"></span>/255</div>
            </div>
            <!-- IMAGEN -->
            <div class="form-group">
              <input type="file" class="form-input" id="Imagen" placeholder="" value="" name="Imagen"> 
              <label for="" class="form-label" type="text">Imagen<span style="color:red;">*</span></label>
              <span class="form-line"></span>
            </div>
            <div class="form-group" >
              <input type="text" class="form-input" placeholder=" " value="" id="estado" disabled>
              <label for="" class="form-label" type="text">Estado</label>
              <span class="form-line"></span>
            </div>
            <input type="hidden" name="id" id="id" value="">
            <input type="hidden" id="Mensaje" name="Mensaje" value="Se editó un producto">
            <input type="button" class="form-btn" value="Editar Producto" data-toggle="modal" data-target="#confirmEdit" >
          </div>
          <div class="modal fade" id="confirmEdit" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Advertencia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <h2>¡Atención! ¿Desea confirmar los cambios realizados?</h2>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                  </div>
                </div>
              </div>
            </div> 
        </form>
        <div class="img-container">
            <span class="container-title">Imagen actual del producto</span>
            <img class="edtProductImg" id="edtProductImg" src="">
        </div>
      </div>
    </div>
  </div>
</div>