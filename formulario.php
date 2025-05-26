
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/prestamo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <title>Prestamo</title>
 <script >
		function solonumeros(e){
            key=e.keyCode || e.which;
            teclado=String.fromCharCode(key);
            numeros="0123456789";
            especiales="8";
            teclado_especial=false;

            for(var i in especiales){
                if(key==especiales[i]){
                    teclado_especial=true;
                }
            }
            if(numeros.indexOf(teclado)==-1 && !teclado_especial){
                return false;

            }
        }
		</script>
</head>
<body>

<style>
    a {
  outline: none;
  text-decoration: none;
  display: inline-block;
  width: 8%;
  border-radius: 1px;
  text-align: center;
  line-height: 3;
  color: white;

}



a:link, a:visited, a:focus {
  background: black;
  
}

a:hover {
  background: red;
  
}

a:active {
  background: red;
  color: white;
}
</style>
<a  href="libros.php" >Volver</a>



    <form action="conexion-prestamo.php" method="POST" class="formulario_P">
        <br><br>
        <h1>Realizar prestamo</h1>
        <div class="contenedor">
        <?php include('conexion-libros.php');
        
		$resultado = $conexion ->query("SELECT nombre FROM libros WHERE id=".$_GET['id'])or die($conexion -> error);
		$fila = mysqli_fetch_array($resultado)


    	?>
            <div class="input-contenedor">
                <i class="fas fa-id-card icon"></i>
                <input type="text" maxlength="10" id="DOCUMENTO_IDENTIDAD" name="DOCUMENTO_IDENTIDAD" onkeypress="return solonumeros(event)"  oninput="maxlengthNumber(this);" placeholder="Ingrese su identificación" required>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-user-edit icon"></i>
                <input type="text" id="NOMBRE_COMPLETO" name="NOMBRE_COMPLETO" placeholder="Nombre completo" required>

            </div>

            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="email" id="CORREO" name="CORREO" placeholder="Ingrese su correo" required>
                
            </div>

            <div class="input-contenedor">
                <i class="fas fa-phone icon"></i>
                <input type="text" maxlength="10" id="TELEFONO" name="TELEFONO" onkeypress="return solonumeros(event)"  oninput="maxlengthNumber(this);" placeholder="Ingrese su número" required>
                
               
            </div>
            
            <div class="input-contenedor">
            <i class="fas fa-book-open icon"></i>
            <input type="text" id="NOMBRE_LIBRO" name="NOMBRE_LIBRO" class="form-control" value="<?php echo $fila['nombre']; ?>" required="true" >
                </div>

            <label for="prestamo">Fecha del prestamo:</label>
            <div class="input-contenedor">
                <i class="far fa-calendar-alt icon"></i>
                <input type="date" id="DIA_PRESTAMO_L" name="DIA_PRESTAMO_L" placeholder="Fecha del prestamo" value="<?php echo date("Y-m-d");?>" readonly>
                
            </div>

            <label for="prestamo">Fecha para devolver:</label>
            <div class="input-contenedor">
                <i class="far fa-calendar-alt icon"></i>
                <input type="date" id="DIA_DEVOLVER_L" name="DIA_DEVOLVER_L" placeholder="Fecha para devolver" required>
                
            </div>
            
           
            <br>

            <center><input type="submit" name="add" value="Prestar"><a href="libros.php"></a></center>
        </div>
    </form>
    <script>
    function maxlengthNumber (obj){
        if(obj.value.length > obj.maxLength){
            obj.value = obj.value.slice(0, obj.maxLength);
        }
    }

    </script>

<br><br><br>

<!-- Agrega este script antes del cierre del body -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.formulario_P');
    const fechaDevolucion = document.getElementById('DIA_DEVOLVER_L');
    
    // Validar fecha al enviar el formulario
    form.addEventListener('submit', function(e) {
        const fechaPrestamo = new Date(document.getElementById('DIA_PRESTAMO_L').value);
        const fechaMaxima = new Date(fechaPrestamo);
        fechaMaxima.setDate(fechaMaxima.getDate() + 15);
        
        const fechaSeleccionada = new Date(fechaDevolucion.value);
        
        if(fechaSeleccionada > fechaMaxima) {
            e.preventDefault();
            alert('La fecha de devolución no puede exceder los 15 días del préstamo');
            fechaDevolucion.focus();
            return false;
        }
    });
    
    // Validar fecha al cambiar
    fechaDevolucion.addEventListener('change', function() {
        const fechaPrestamo = new Date(document.getElementById('DIA_PRESTAMO_L').value);
        const fechaMaxima = new Date(fechaPrestamo);
        fechaMaxima.setDate(fechaMaxima.getDate() + 15);
        
        const fechaSeleccionada = new Date(this.value);
        
        if(fechaSeleccionada > fechaMaxima) {
            alert('La fecha de devolución no puede exceder los 15 días del préstamo');
            this.value = '';
        }
    });
});
</script>
</body>
</html>