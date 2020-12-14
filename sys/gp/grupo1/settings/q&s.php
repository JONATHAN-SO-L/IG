<?php

if (isset($_POST['qns'])){

	require "../../../../settings/conexion.php";

	$name = $_POST['nombre'];
	$msj = $_POST['mensaje'];

	$cn -> query ("INSERT INTO $table2 (nombre, q_or_s) VALUES ('$name', '$msj')");

	echo "<script>alert('MENSAJE ENVIADO EXITOSAMENTE')</script>";

	require "../../../../settings/close.php";
}

	echo "<meta HTTP-EQUIV='REFRESH' CONTENT='0;URL=/ig'>";

?>
