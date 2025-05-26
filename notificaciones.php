<?php
$conn = new mysqli("localhost","root","","biblioteca");

$sql = "UPDATE prestamo SET estado = 1 WHERE estado = 0";	
$result = mysqli_query($conn, $sql);

$sql = "SELECT * FROM prestamo ORDER BY ID_PRESTAMO DESC limit 5";
$result = mysqli_query($conn, $sql);

$response='';

while($row=mysqli_fetch_array($result)) {

	/* Formate fecha */
	$fechaOriginal = $row["fecha"];
	$fechaFormateada = date("d-m-Y", strtotime($fechaOriginal));

	$response = $response . "<div class='notification-item'>" .
	"<div class='notification-subject'>". $row["NOMBRE_COMPLETO"] . " - <span>". $fechaFormateada . "</span> </div>" . 
	"<div class='notification-comment'>" . $row["NOMBRE_LIBRO"]  . "</div>" .
	"</div>";
}
if(!empty($response)) {
	print $response;
}


?>