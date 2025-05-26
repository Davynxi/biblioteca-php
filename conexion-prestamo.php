<?php
$conexion = mysqli_connect('localhost','root','','biblioteca') or die ('Error en la conexion del servidor');

// Función para verificar y obtener datos completos del usuario
function verificarUsuario($conexion, $documento, $nombre, $correo, $telefono) {
    $query = "SELECT * FROM usuarios WHERE documento_u = '$documento'";
    $result = mysqli_query($conexion, $query);
    
    if(mysqli_num_rows($result) == 0) {
        return ['error' => 'El documento no está registrado'];
    }
    
    $usuario = mysqli_fetch_assoc($result);
    
    // Verificar coincidencia de datos
    $errores = [];
    if(strtolower(trim($usuario['nombre'])) != strtolower(trim($nombre))) {
        $errores[] = 'El nombre no coincide con el documento';
    }
    if(strtolower(trim($usuario['correo'])) != strtolower(trim($correo))) {
        $errores[] = 'El correo no coincide con el documento';
    }
    if(trim($usuario['telefono']) != trim($telefono)) {
        $errores[] = 'El teléfono no coincide con el documento';
    }
    
    if(!empty($errores)) {
        return ['error' => implode(', ', $errores)];
    }
    
    return ['usuario' => $usuario];

    // Validar fecha
if (!fechaValida($fechaPrestamo, $fechaDevolucion)) {
    mysqli_close($conexion);
    echo "<script>alert('El préstamo no puede exceder los 15 días'); window.history.back();</script>";
    exit();
}

}

// Obtener y limpiar datos del POST
$documento = mysqli_real_escape_string($conexion, $_POST["DOCUMENTO_IDENTIDAD"]);
$nombre = mysqli_real_escape_string($conexion, $_POST["NOMBRE_COMPLETO"]);
$correo = mysqli_real_escape_string($conexion, $_POST["CORREO"]);
$telefono = mysqli_real_escape_string($conexion, $_POST["TELEFONO"]);
$libro = mysqli_real_escape_string($conexion, $_POST["NOMBRE_LIBRO"]);
$fechaPrestamo = mysqli_real_escape_string($conexion, $_POST["DIA_PRESTAMO_L"]);
$fechaDevolucion = mysqli_real_escape_string($conexion, $_POST["DIA_DEVOLVER_L"]);

// Validar usuario completo
$verificacion = verificarUsuario($conexion, $documento, $nombre, $correo, $telefono);

if(isset($verificacion['error'])) {
    mysqli_close($conexion);
    echo "<script>alert('Error: {$verificacion['error']}'); window.history.back();</script>";
    exit();
}

// Verificar disponibilidad del libro
$query_libro = "SELECT disponible FROM libros WHERE nombre = '$libro'";
$result_libro = mysqli_query($conexion, $query_libro);
$disponible = mysqli_fetch_assoc($result_libro)['disponible'];

if($disponible < 1) {
    mysqli_close($conexion);
    echo "<script>alert('El libro no está disponible actualmente'); window.location='libros.php';</script>";
    exit();
}

// Registrar el préstamo
$sql = "INSERT INTO prestamo (
        DOCUMENTO_IDENTIDAD, 
        NOMBRE_COMPLETO, 
        CORREO, 
        TELEFONO, 
        NOMBRE_LIBRO, 
        DIA_PRESTAMO_L, 
        DIA_DEVOLVER_L
    ) VALUES (
        '$documento',
        '$nombre',
        '$correo',
        '$telefono',
        '$libro',
        '$fechaPrestamo',
        '$fechaDevolucion'
    )";

// Actualizar disponibilidad del libro
$sql_update = "UPDATE libros SET disponible = disponible - 1 WHERE nombre = '$libro'";

// Transacción para asegurar integridad
mysqli_begin_transaction($conexion);

try {
    $resultado = mysqli_query($conexion, $sql);
    $resultado_update = mysqli_query($conexion, $sql_update);
    
    if($resultado && $resultado_update) {
        mysqli_commit($conexion);
        echo "<script>alert('Préstamo registrado correctamente'); window.location='libros.php';</script>";
    } else {
        throw new Exception('Error al registrar el préstamo');
    }
} catch (Exception $e) {
    mysqli_rollback($conexion);
    echo "<script>alert('{$e->getMessage()}'); window.history.back();</script>";
}

mysqli_close($conexion);
?>


