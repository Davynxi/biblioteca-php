<?php
include('../conexion-libros.php');
$id = $_REQUEST['id'];
$titulo      = $_REQUEST['titulo'];
$descripcion 	 = $_REQUEST['descripcion'];
$imagen 	 = $_REQUEST['imagen'];

$update = ("UPDATE libros_mensuales 
	SET 
    titulo  ='" .$titulo. "',
	descripcion  ='" .$descripcion. "',
    imagen  ='" .$imagen. "'
	

WHERE id='" .$id. "'
");
$result_update = mysqli_query($conexion, $update);

echo "<script type='text/javascript'>
        window.location='libros-mensuales.php';
    </script>";//Actualización de los datos de los libros mensuales en el sitio web y en la base de datos

?>