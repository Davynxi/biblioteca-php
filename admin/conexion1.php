<?php

$servidor="seguridadenredes.c6bkqwk8eqtu.us-east-1.rds.amazonaws.com"; //Colocamos el nombre del servidor en el cual esta la base de datos
$nombreBd="biblioteca";//Colocamos el nombre de nuestra base de datos
$usuario="admin"; //Colocamos el usuario del sevidor al cual vamos a ingresar
$password="VE9RzUIFtZ4A08GYHGQ8"; //Ingresamos contraseña si el servidor la tiene sino pues se deja vacía


//Creamos la variable conexión en la que se almacenará la información de todo el ingreso a la base de datos 
$conexion= new mysqli($servidor,$usuario,$password,$nombreBd); 
if ($conexion-> connect_error ) { //Si la concexión no se realiza arrojará un error y mostrará un mensaje de que no se pudo conectar
    die("No se pudo conectar"); 
}
?>