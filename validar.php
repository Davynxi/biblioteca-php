<?php
include("conexion.php");

session_start();
if(isset($_SESSION['id'])){
    header("Location: index.php");
}

$usuario = $_POST['usuarioU'];
$contraseña = $_POST['passwordU'];

$consulta="SELECT * FROM usuarios WHERE usuario ='$usuario' and password = '$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
$row = mysqli_fetch_array($resultado);

$consulta2="SELECT * FROM administrador WHERE usuario ='$usuario' and contraseña = '$contraseña'";
$resultado2=mysqli_query($conexion,$consulta2);
$row2 = mysqli_fetch_array($resultado2);

if($row>0){
    $_SESSION['id'] = $row['id'];
    header("location: inicio.php");
}elseif($row2>0){
    $_SESSION['id_admin'] = $row2['id_admin'];
    header("Location: admin/");
}else{
    echo'<script type="text/javascript">
    window.alert("Datos incorrectos, por favor ingreselos nuevamente.");
    window.location.href="index.php";
    </script>';
}

mysqli_free_result($resultado);
mysqli_close($conexion);//Conexion de las tablas usuarios y administrador para el ingreso desde el login general
?>