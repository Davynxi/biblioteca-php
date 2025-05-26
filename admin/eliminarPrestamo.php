<?php
include "conexion1.php";

   $fila = $conexion->query('select * from prestamo where id_prestamo='.$_POST['id_prestamo']);
   
   $conexion->query("delete from prestamo where id_prestamo=".$_POST['id_prestamo']);
   echo "Prestamo eliminado correctamente";//Conexión del boton para eliminar los prestamos en el sitio web y en la base de datos
   
?>