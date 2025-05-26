<?php
$conexion=mysqli_connect("localhost","root","","biblioteca");

if(mysqli_connect_errno())
{
    echo"Fallo en la conexion" . mysqli_connect_error();
}//Conexion con la base de datos biblioteca definiendo el usuario y contraseña del servidor

?>