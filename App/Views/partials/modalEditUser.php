<div class="modal fade" id="modalEditUser">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="Registrar-usuario">
          <form action="<?= FOLDER_PATH.'/con_user/grabar'?>" id="formularioEditarUsuario" class="form" method="POST">
            <div class="form-content">
              <span style="text-align: left;">(<span style="color:red;">*</span>) Campo obligatorio</span>
              <p class="formulario__input-error" id="grupo__name">
                El nombre tiene que contener más de 2 dígitos y solo puede contener letras.
              </p>
              <p class="formulario__input-error-name" id="grupo__sname">
                El apellido tiene que contener más de 2 dígitos y solo puede contener letras.
              </p>
              <p class="formulario__input-error-name" id="grupo__user">
                El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.
              </p>
              <p class="formulario__input-error-name" id="grupo__cedula">
                La cédula únicamente puede contener carácteres numéricos.
              </p>
              <div class="form-group-contact Modal">
                <!-- INPUT NOMBRE -->
                <div class="form-div">
                  <input type="text" class="form-input Nombre" placeholder="" value="" name="Nombre" id="Nombre"
                    required>
                  <label for="" class="form-label Modal" type="text">Nombre:<span style="color:red;">*</span></label>
                </div>
                <!-- INPUT APELLIDO -->
                <div class="form-div">
                  <input type="text" class="form-input Apellido" placeholder=" " value="" name="Apellido" id="Apellido"
                    required>
                  <label for="" class="form-label Modal" type="text">Apellido:<span style="color:red;">*</span></label>
                </div>
              </div>
              <div class="form-group-contact Modal">
                <!-- INPUT NOMBRE USUARIO -->
                <div class="form-div">
                  <input type="text" class="form-input Usuario" placeholder=" " value="" name="Nom_usuario"
                    id="Username" required>
                  <label for="" class="form-label Modal" type="text">Usuario:<span style="color:red;">*</span></label>
                </div>
                <!-- INPUT CÉDULA -->
                <div class="form-div">
                  <input type=number class="form-input Cedula" name="Cedula" value="" placeholder=" " id="Cedula"
                    required>
                  <label for="" class="form-label Modal" type="text">Cédula:<span style="color:red;">*</span></label>
                </div>
              </div>
              <div class="form-group" id="grupo__pass1">
                <!-- INPUT CONTRASEÑA -->
                <input type="password" class="form-input Contrasena" placeholder=" " id="pass1" name="Contrasenia"
                  required>
                <label for="" class="form-label Modal" type="text">Contraseña:<span style="color:red;">*</span></label>
                <i class='bx bx-low-vision' id="toggPass"></i>
                <p class="formulario__input-error">Utiliza ocho caracteres como mínimo con una combinación de letras y
                  números.</p>
              </div>
              <div class="form-group" id="grupo__pass2">
                <!-- INPUT CONTRASEÑA2 -->
                <input type="password" class="form-input Contrasena2" placeholder=" " id="pass2" name="Contrasenia2"
                  required>
                <label for="" class="form-label Modal" type="text">Repetir Contraseña:<span
                    style="color:red;">*</span></label>
                <i class='bx bx-low-vision' id="toggPass2"></i>
                <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
              </div>
              <div class="form-group" id="grupo__direccion">
                <!-- INPUT DIRECCIÓN -->
                <input type="text" class="form-input" placeholder=" " name="Direccion" id="Direccion2">
                <label for="" class="form-label Modal" type="text">Dirección</label>
                <p class="formulario__input-error">La direccion tiene que tener más de 4 dígitos.</p>
              </div>
              <div class="form-group-contact Modal">
                <!-- INPUT TELÉFONO -->
                <div class="form-div">
                  <input type="number" class="form-input" placeholder="" name="Telefono" id="Telefono2">
                  <label for="" class="form-label Modal" type="text">Teléfono</label>
                </div>
                <!-- INPUT CORREO -->
                <div class="form-div">
                  <input type="email" class="form-input" placeholder=" " name="Correo" id="Correo2">
                  <label for="" class="form-label Modal" type="text">Correo</label>
                </div>
              </div>
              <input type="hidden" name="id" value="" id="id_user">
              <input type="hidden" name="id_p" value="" id="id_personal">
              <input type="hidden" id="mensaje" name="Mensaje" value="Se editó un usuario">
              <input type="hidden" id="grabar" name="grabar" value="true">
              <button class="form-btn" data-toggle="modal" data-target="#confirmEdit" type="button">
                Editar Usuario
              </button>
              <p class="formulario__input-error" id="grupo__correo">
                Ingresar una dirección de correo válida. Ejemplo: Marcaribe@center.com
              </p>
              <p class="formulario__input-error" id="grupo__telefono">
                El número telefónico únicamente debe tener carácteres numéricos. Colocar un número telefónico válido.
                Ejemplo: 04121234567.
              </p>
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
        </div>
      </div>
    </div>
  </div>