 <!-- Modal para editar los libros -->
 <div class="modal fade" id="modalEliminar<?php echo $f['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<!-- Formulario para actualizar la información de la tabla libros en el panel administrativo y en la base de datos-->
      <form method="POST" action="recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $f['id']; ?>">

            <div class="modal-body" id="cont_modal">

            <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Documento:</label>
                  <input type="number" name="documento_u" class="form-control" value="<?php echo $f['documento_u']; ?>" required="true" >
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombres:</label>
                  <input type="text" name="nombre" class="form-control" value="<?php echo $f['nombre']; ?>" required="true" >
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Apellidos:</label>
                  <input type="text" name="apellido" class="form-control" value="<?php echo $f['apellido']; ?>" required="true">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Correo:</label>
                  <input type="email" name="correo" class="form-control" value="<?php echo $f['correo']; ?>" required="true">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Telefono:</label>
                  <input type="number" name="telefono" class="form-control" value="<?php echo $f['telefono']; ?>" required="true">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Usuario:</label>
                  <input type="text" name="usuario" class="form-control" value="<?php echo $f['usuario']; ?>" required="true">
                </div>

                
            </div>
            <!-- Botones para guardar la información o cerrar la ventana modal -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>