<?php

if (isset($_POST['qns'])){

	//include "../../../../conexion.php";

	$name = $_POST['nombre'];
	$msj = $_POST['mensaje'];

	//$cn -> query ("INSERT INTO $table2 (nombre, q_or_s) VALUES ('$name', '$msj')");

	echo "<script>alert('MENSAJE ENVIADO EXITOSAMENTE')</script>";

	//include "../../../../close.php";
}

	echo "<meta HTTP-EQUIV='REFRESH' CONTENT='0;URL=/ig'>";

?>
