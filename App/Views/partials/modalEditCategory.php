<div class="modal fade" id="editCategory">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-contenedor">
                <div class="Registrar-Entrada">
                    <form action="<?= FOLDER_PATH.'/con_cat/grabar'?>" class="form" method="POST"
                        id="formularioEditarUsuario">
                        <div class="form-content">
                            <!-- INPUT NOMBRE-->
                            <div class="form-group" id="grupo__nombrecategoria">
                                <input type="hidden" name="entidad" value="" id="nameCategory">
                                <input type="hidden" name="Mensaje" value="" id="editMessage">
                                <input type="hidden" name="id" value="" id="idCategoryEdit">
                                <input type="text" class="form-input NombreCategory" placeholder=" " id="Nom_categoria"
                                    name="Edit_categoria">
                                <label for="" class="form-label" type="text">Nombre:</label>
                                <span class="form-line"></span>
                                <p class="formulario__input-error">
                                    El nombre solo puede contener letras.</p>
                            </div>
                            <input type="hidden" id="editMessageAction" name="Mensaje" value="">
                            <input type="hidden" id="grabar" name="grabar" value="editar">
                            <button type="submit" class="form-btn">
                                Confirmar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>