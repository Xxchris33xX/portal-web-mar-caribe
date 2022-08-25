<div class="modal fade" id="activeUser">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Activar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>¿Está seguro que desea activar al siguiente siguiente usuario: <span id="userNameActive"></span>?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form action="<?= FOLDER_PATH.'/con_user/activar/?'?>">
            <input type="hidden" name="Nom_usuario" value="" id="userNameToActive">
            <input type="hidden" name="Mensaje" value="" id="activeMessage">
            <input type="hidden" name="id" value="" id="id_UserToActive">
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>
      </div>
    </div>
  </div>
</div>