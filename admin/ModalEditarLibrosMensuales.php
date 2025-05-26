<!--ventana modal para editar los libros mensuales en el sitio web y en la base de datos--->
<div class="modal fade" id="editChildresn<?php echo $f['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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


      <form method="POST" action="recib_UpdateLibro-mensual.php">
        <input type="hidden" name="id" value="<?php echo $f['id']; ?>">

            <div class="modal-body" id="cont_modal">

            <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Titulo:</label>
                  <input type="text" name="titulo" class="form-control" value="<?php echo $f['titulo']; ?>">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Descripción:</label>
                  <input type="text" name="descripcion" class="form-control" value="<?php echo $f['descripcion']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Imagen:</label>
                  <input type="file" name="imagen" class="form-control" value="<?php echo $f['imagen']; ?>" required="true">
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background: #FA3B20; border:#FA3B20">Cerrar</button>
              <button type="submit" class="btn btn-primary" style="background: #FEAE32; border:#FEAE32">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->