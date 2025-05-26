
<?php
//Conexion con la base de datos biblioteca a la tabla libros definiendo el usuario y contraseña del servidor 
$servidor="localhost";
$nombreBd="biblioteca";
$usuario="root";
$password="";
$conexion= new mysqli($servidor,$usuario,$password,$nombreBd);
if ($conexion-> connect_error ) {
    die("No se pudo conectar");
}
?>