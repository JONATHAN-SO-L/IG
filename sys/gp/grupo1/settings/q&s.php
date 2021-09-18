<?php

session_start();

if (isset($_SESSION['usuario'])) {

	switch ($_SESSION['usuario']) {

		case 'grupo2':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig">';
		break;

		case 'grupo3':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig">';
		break;

		case 'grupo4':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig">';
		break;

		case 'grupo5':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig">';
		break;

		case 'grupo6':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig">';
		break;

		case 'secretario':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig">';
		break;

		case 'admin':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig">';
		break;
		
		default:

		break;
	}
	
}	else {

	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig">';
}

if (isset($_POST['qns'])) {

	require '../../../../settings/conexion.php';

	$name = $_POST['nombre'];
	$msj = $_POST['mensaje'];

	$cn->query ("INSERT INTO $table3 (id_qns, nombre, q_or_s) VALUES (NULL, '$name', '$msj')");

	$destinatario="sanceznarval00@outlook.com";
	$asunto=utf8_decode("SISTEMA DE INFORMES DE GRUPO MENSUAL -- LAGUNILLA");
	$cuerpo= utf8_decode("Mensaje realizado por:  ".$name."\n\nEste es el mensaje: \n\n".$msj);

	mail($destinatario, $asunto, $cuerpo);

	echo "<script>alert('MENSAJE ENVIADO EXITOSAMENTE')</script>";

	echo "<meta HTTP-EQUIV='REFRESH' CONTENT='0;URL=/ig/sys/gp/grupo1/functions/info.php'>";

	require '../../../../settings/close.php';
}

?>
