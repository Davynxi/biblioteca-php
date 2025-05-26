<?php
include('conexion1.php'); //Se incluye la conexión
$id = $_REQUEST['id'];
$documento_u      = $_REQUEST['documento_u'];
$nombre      = $_REQUEST['nombre'];
$apellido     = $_REQUEST['apellido'];
$correo 	 = $_REQUEST['correo'];
$telefono 	 = $_REQUEST['telefono'];
$usuario      = $_REQUEST['usuario'];

$update = ("UPDATE usuarios 
	SET 
    documento_u  ='" .$documento_u. "',
	nombre  ='" .$nombre. "',
    apellido  ='" .$apellido. "',
	correo  ='" .$correo. "',
	telefono ='" .$telefono. "',
    usuario  ='" .$usuario. "',

WHERE id='" .$id. "'
");
$result_update = mysqli_query($conexion, $update);

echo "<script type='text/javascript'>
        window.location='UsuariosCrud.php';
    </script>"; //Actualización de los datos de los usuarios en el sitio web y en la base de datos

?>
