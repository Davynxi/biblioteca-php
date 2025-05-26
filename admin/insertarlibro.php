<?php
include('../conexion-libros.php');

if(isset($_POST['ISBN']) && isset($_POST['nombre']) && isset($_POST['categoria']) && 
   isset($_POST['autor']) && isset($_POST['descripcion']) && isset($_POST['disponible'])) {

    // Verificar si el libro ya existe por ISBN o nombre
    $verificar_libro = $conexion->prepare("SELECT id FROM libros WHERE ISBN = ? OR nombre = ?");
    $verificar_libro->bind_param("ss", $_POST['ISBN'], $_POST['nombre']);
    $verificar_libro->execute();
    $verificar_libro->store_result();
    
    if($verificar_libro->num_rows > 0) {
        header("Location: ./libros.php?error=El libro ya existe (mismo ISBN o nombre)");
        exit();
    }

    // Procesar imagen
    $carpeta = "../images/";
    $nombre = $_FILES['imagen']['name'];
    $temp = explode('.', $nombre);
    $extension = strtolower(end($temp));
    $nombrefinal = time().'.'.$extension;

    // Validar extensión de imagen
    $extensiones_validas = ['jpg', 'jpeg', 'png', 'webp'];
    if(!in_array($extension, $extensiones_validas)) {
        header("Location: ./libros.php?error=Formato de imagen no válido. Use JPG, JPEG, PNG o WEBP");
        exit();
    }

    // Mover imagen y registrar libro
    if(move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta.$nombrefinal)) {
        // Usar consulta preparada para evitar inyección SQL
        $insertar = $conexion->prepare("INSERT INTO libros 
            (ISBN, nombre, autor, descripcion, imagen, disponible, id_categoria) 
            VALUES (?, ?, ?, ?, ?, ?, ?)");
        
        $insertar->bind_param(
            "sssssii",
            $_POST['ISBN'],
            $_POST['nombre'],
            $_POST['autor'],
            $_POST['descripcion'],
            $nombrefinal,
            $_POST['disponible'],
            $_POST['categoria']
        );
        
        if($insertar->execute()) {
            header("Location: ./libros.php?success=Libro agregado correctamente");
        } else {
            // Eliminar imagen si falla la inserción
            unlink($carpeta.$nombrefinal);
            header("Location: ./libros.php?error=Error al guardar el libro: ".$conexion->error);
        }
    } else {
        header("Location: ./libros.php?error=No se pudo subir la imagen");
    }
} else {
    header("Location: ./libros.php?error=Todos los campos son requeridos");
}
exit();
?>