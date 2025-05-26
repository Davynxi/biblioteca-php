<?php
session_start();
session_destroy();
header('location: index.php')
//Conexion al momento de cerrar la sesión en el sitio web, para que cuando lo haga e intente devolverse deba ingresar nuevamente su información desde el login 
?>