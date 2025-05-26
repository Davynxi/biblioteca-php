<!--ventana modal para editar los libros en el sitio web y en la base de datos--->
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


      <form method="POST" action="recib_UpdateLibro.php">
        <input type="hidden" name="id" value="<?php echo $f['id']; ?>">

            <div class="modal-body" id="cont_modal">

            <div class="form-group">
                  <label for="recipient-name" class="col-form-label">ISBN:</label>
                  <input type="text" name="ISBN" class="form-control" value="<?php echo $f['ISBN']; ?>">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre:</label>
                  <input type="text" name="nombre" class="form-control" value="<?php echo $f['nombre']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Autor:</label>
                  <input type="text" name="autor" class="form-control" value="<?php echo $f['autor']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Descripción:</label>
                  <input type="text" name="descripcion" class="form-control" value="<?php echo $f['descripcion']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Imagen:</label>
                  <input type="file" name="imagen" class="form-control" value="<?php echo $f['imagen']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Disponible:</label>
                  <input type="text" name="disponible" class="form-control" value="<?php echo $f['disponible']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Categoria:</label>
                  <select name="id_categoria" id="id_categoria" class="form-control"required>
          <?php 
          $res= $conexion->query("select * from categorias");
          while($f=mysqli_fetch_array($res)){
            echo '<option value="'.$f['id'].'">'.$f ['nombre'].'</option>';
          }

          ?>
          </select>
                
                
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