<!--ventana modal para editar los usuarios en el sitio web y la base de datos--->
<div class="modal fade" id="editChildresn<?php echo $fila['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background: linear-gradient(90deg, #FEAE32, #FA3B20);">
        <h6 class="modal-title" style="color: black; text-align: center; font-weight:bold;">
            Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

            <div class="modal-body" id="cont_modal">

            <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Documento:</label>
                  <input type="number" name="documento_u" class="form-control" value="<?php echo $fila['documento_u']; ?>" required="true" >
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre:</label>
                  <input type="text" name="nombre" class="form-control" value="<?php echo $fila['nombre']; ?>" required="true" >
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Apellido:</label>
                  <input type="text" name="apellido" class="form-control" value="<?php echo $fila['apellido']; ?>" required="true">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Correo:</label>
                  <input type="email" name="correo" class="form-control" value="<?php echo $fila['correo']; ?>" required="true">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Telefono:</label>
                  <input type="number" name="telefono" class="form-control" value="<?php echo $fila['telefono']; ?>" required="true">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Usuario:</label>
                  <input type="text" name="usuario" class="form-control" value="<?php echo $fila['usuario']; ?>" required="true">
                </div>

                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background: #FA3B20; border:#FA3B20">Cerrar</button>
              <button type="submit" class="btn btn-primary" style="background: #FEAE32; border:#FEAE32">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana editar --->