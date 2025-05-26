<?php
include "conexion1.php";

   $fila = $conexion->query('select * from usuarios where id='.$_POST['id']);
   
   $conexion->query("delete from usuarios where id=".$_POST['id']);
   echo "Usuario eliminado correctamente"; //Conexión del boton para eliminar los usuarios en el sitio web y en la base de datos
   
?>




