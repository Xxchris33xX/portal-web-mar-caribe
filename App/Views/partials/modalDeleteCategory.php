<div class="modal fade" id="deleteCategory">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar categoría</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>¿Está seguro que desea eliminar la categoría: <span id="catName"></span>?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form action="<?= FOLDER_PATH.'/con_cat/eliminar/?'?>">
            <input type="hidden" name="Nom_categoria" value="" id="categoryName">
            <input type="hidden" name="Mensaje" value="" id="deleteMessage">
            <input type="hidden" name="id" value="" id="id_category">
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>
      </div>
    </div>
  </div>
</div>