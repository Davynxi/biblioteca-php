<?php
include('conexion1.php');
$ID_PRESTAMO = $_REQUEST['ID_PRESTAMO'];
$DOCUMENTO_IDENTIDAD      = $_REQUEST['DOCUMENTO_IDENTIDAD'];
$NOMBRE_COMPLETO      = $_REQUEST['NOMBRE_COMPLETO'];
$CORREO 	 = $_REQUEST['CORREO'];
$TELEFONO 	 = $_REQUEST['TELEFONO'];
$NOMBRE_LIBRO      = $_REQUEST['NOMBRE_LIBRO'];
$DIA_PRESTAMO_L      = $_REQUEST['DIA_PRESTAMO_L'];
$DIA_DEVOLVER_L      = $_REQUEST['DIA_DEVOLVER_L'];

$update = ("UPDATE prestamo 
	SET 
    DOCUMENTO_IDENTIDAD  ='" .$DOCUMENTO_IDENTIDAD. "',
	NOMBRE_COMPLETO  ='" .$NOMBRE_COMPLETO. "',
	CORREO  ='" .$CORREO. "',
	TELEFONO ='" .$TELEFONO. "',
    NOMBRE_LIBRO  ='" .$NOMBRE_LIBRO. "',
    DIA_PRESTAMO_L  ='" .$DIA_PRESTAMO_L. "',
    DIA_DEVOLVER_L  ='" .$DIA_DEVOLVER_L. "',

WHERE ID_PRESTAMO='" .$ID_PRESTAMO. "'
");
$result_update = mysqli_query($conexion, $update);

echo "Se actualizo correctamente";

echo "<script type='text/javascript'>
        window.location='PrestamoCrud.php';
    </script>";//Actualización de los datos de los prestamos en el sitio web y en la base de datos
    

?>