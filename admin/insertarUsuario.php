<?php
include('conexion1.php');

if(isset($_POST['documento_u']) && isset($_POST['nombre']) && isset($_POST['apellido']) && 
   isset($_POST['correo']) && isset($_POST['telefono']) && isset($_POST['usuario']) && 
   isset($_POST['password'])) {

    // Primero verificamos si el documento ya existe
    $documento = $_POST['documento_u'];
    $query_check = "SELECT * FROM usuarios WHERE documento_u = '$documento'";
    $result_check = $conexion->query($query_check);
    
    if($result_check->num_rows > 0) {
        // Si ya existe un usuario con ese documento, mostramos alerta y permanecemos en la página
        echo '<script>alert("El documento ya está registrado"); window.history.back();</script>';
        exit();
    } else {
        // Si no existe, procedemos con el registro
        $query_insert = "INSERT INTO usuarios (documento_u, nombre, apellido, correo, telefono, usuario, password) 
                         VALUES (
                            '".$_POST['documento_u']."',
                            '".$_POST['nombre']."',
                            '".$_POST['apellido']."',
                            '".$_POST['correo']."',
                            '".$_POST['telefono']."',
                            '".$_POST['usuario']."',
                            '".$_POST['password']."'
                         )";
        
        if($conexion->query($query_insert)) {
            // Registro exitoso, redirigimos con mensaje de éxito
            echo '<script>alert("Usuario registrado correctamente"); window.location.href = "UsuariosCrud.php";</script>';
        } else {
            // Error en el registro
            echo '<script>alert("Error al registrar el usuario"); window.history.back();</script>';
        }
    }
} else {
    echo '<script>alert("Todos los campos son requeridos"); window.history.back();</script>';
}
?>