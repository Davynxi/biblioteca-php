<?php
	$conn = new mysqli("localhost","root","","biblioteca");
	$count=0;
	if(!empty($_POST['add'])) {
		$autor = mysqli_real_escape_string($conn,$_POST["NOMBRE_COMPLETO"]);
		$mensaje = mysqli_real_escape_string($conn,$_POST["NOMBRE_LIBRO"]);
		$sql = "INSERT INTO prestamo (NOMBRE_COMPLETO,NOMBRE_LIBRO) VALUES('" . $NOMBRE_COMPLETO . "','" . $NOMBRE_LIBRO . "')";
		mysqli_query($conn, $sql);
	}
	$sql2="SELECT * FROM prestamo WHERE estado = 0";
	$result=mysqli_query($conn, $sql2);
	$count=mysqli_num_rows($result);

	header( 'Location: ../' ) ;
?>