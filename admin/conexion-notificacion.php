<?php
	
    $conn = new mysqli("seguridadenredes.c6bkqwk8eqtu.us-east-1.rds.amazonaws.com","admin","VE9RzUIFtZ4A08GYHGQ8","biblioteca");
    $count = 0;
    $sql2 = "SELECT * FROM prestamo WHERE estado = 0";
    $result = mysqli_query($conn, $sql2);
    $count = mysqli_num_rows($result);
?>