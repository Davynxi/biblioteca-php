<?php
include('../conexion-libros.php');
$id = $_REQUEST['id'];
$ISBN      = $_REQUEST['ISBN'];
$nombre 	 = $_REQUEST['nombre'];
$autor 	 = $_REQUEST['autor'];
$descripcion 	 = $_REQUEST['descripcion'];
$imagen 	 = $_REQUEST['imagen'];
$disponible 	 = $_REQUEST['disponible'];
$id_categoria 	 = $_REQUEST['id_categoria'];

$update = ("UPDATE libros 
	SET 
    ISBN  ='" .$ISBN. "',
	nombre  ='" .$nombre. "',
    autor  ='" .$autor. "',
    descripcion  ='" .$descripcion. "',
    imagen  ='" .$imagen. "',
    disponible  ='" .$disponible. "',
    id_categoria  ='" .$id_categoria. "'
	

WHERE id='" .$id. "'
");
$result_update = mysqli_query($conexion, $update);

echo "<script type='text/javascript'>
        window.location='libros.php';
    </script>";//Actualización de los datos de los libros en el sitio web y en la base de datos

?>