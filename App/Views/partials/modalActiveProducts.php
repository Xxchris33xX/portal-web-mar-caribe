<div class="modal fade" id="activeProduct">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Activar producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>¿Está seguro que desea activar el siguiente producto: <span id="proNameActive"></span>?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form action="<?= FOLDER_PATH.'/con_pro/activar/?'?>">
            <input type="hidden" name="Nom_producto" value="" id="productNametoActive">
            <input type="hidden" name="Mensaje" value="" id="activeMessage">
            <input type="hidden" name="id" value="" id="id_productToActive">
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>
      </div>
    </div>
  </div>
</div>