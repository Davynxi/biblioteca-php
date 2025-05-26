<?php

$servidor="localhost"; //Colocamos el nombre del servidor en el cual esta la base de datos
$nombreBd="biblioteca";//Colocamos el nombre de nuestra base de datos
$usuario="root"; //Colocamos el usuario del sevidor al cual vamos a ingresar
$password=""; //Ingresamos contraseña si el servidor la tiene sino pues se deja vacía


//Creamos la variable conexión en la que se almacenará la información de todo el ingreso a la base de datos 
$conexion= new mysqli($servidor,$usuario,$password,$nombreBd); 
if ($conexion-> connect_error ) { //Si la concexión no se realiza arrojará un error y mostrará un mensaje de que no se pudo conectar
    die("No se pudo conectar"); 
}
?>