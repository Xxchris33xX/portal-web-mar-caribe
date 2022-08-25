<div class="modal fade" id="deleteProduct">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>¿Está seguro que desea desactivar el siguiente producto: <span id="proName"></span>?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form action="<?= FOLDER_PATH.'/con_pro/eliminar/?'?>">
            <input type="hidden" name="Nom_producto" value="" id="productName">
            <input type="hidden" name="Mensaje" value="" id="deleteMessage">
            <input type="hidden" name="id" value="" id="id_productToDelete">
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>
      </div>
    </div>
  </div>
</div>