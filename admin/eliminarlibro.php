<?php
include "../conexion-libros.php";

   $f = $conexion->query('select imagen from libros where id='.$_POST['id']);
   $id = mysqli_fetch_row($f);
   if (file_exists('./images/'.$id[0])) {
        unlink('./images/'.$id[0]);
   }
   $conexion->query("delete from libros where id=".$_POST['id']);
   echo "Libro eliminado correctamente"; //Conexión del boton para eliminar los libros en el sitio web y en la base de datos
   ?>