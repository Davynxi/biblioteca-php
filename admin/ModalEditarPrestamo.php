<!--ventana modal para editar los prestamos en el sitio web y en la base de datos--->
<div class="modal fade" id="editPrestamo<?php echo $fila['ID_PRESTAMO']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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


      <form method="POST" action="recib_UpdatePrestamo.php">
        <input type="hidden" name="ID_PRESTAMO" value="<?php echo $fila['ID_PRESTAMO']; ?>">

            <div class="modal-body" id="cont_modal">

            <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Documento:</label>
                  <input type="number" name="DOCUMENTO_IDENTIDAD" class="form-control" value="<?php echo $fila['DOCUMENTO_IDENTIDAD']; ?>" required="true">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre completo:</label>
                  <input type="text" name="NOMBRE_COMPLETO" class="form-control" value="<?php echo $fila['NOMBRE_COMPLETO']; ?>" required="true">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Correo:</label>
                  <input type="email" name="CORREO" class="form-control" value="<?php echo $fila['CORREO']; ?>" required="true">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Telefono:</label>
                  <input type="number" name="TELEFONO" class="form-control" value="<?php echo $fila['TELEFONO']; ?>" required="true">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre libro:</label>
                  <input type="text" name="NOMBRE_LIBRO" class="form-control" value="<?php echo $fila['NOMBRE_LIBRO']; ?>" required="true">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Día prestamo:</label>
                  <input type="date" name="DIA_PRESTAMO_L" class="form-control" value="<?php echo $fila['DIA_PRESTAMO_L']; ?>" required="true">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Día devolver:</label>
                  <input type="date" name="DIA_DEVOLVER_L" class="form-control" value="<?php echo $fila['DIA_DEVOLVER_L']; ?>" required="true">
                </div>


          
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"  style="background: #FA3B20; border:#FA3B20">Cerrar</button>
              <button type="submit" class="btn btn-primary" style="background: #FEAE32; border:#FEAE32">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana modal editar prestamo --->