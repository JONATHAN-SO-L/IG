<?php

session_start();

if (isset($_SESSION['usuario'])) {

	switch ($_SESSION['usuario']) {

		case 'grupo1':
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

function restart_mes() {
	require '../../../../settings/conexion.php';
	$previo = "SELECT id_mes, mes2 FROM $table1 WHERE mes2 != ''";
	$declaracion = mysqli_query($cn, $previo);
	$sucesion = mysqli_fetch_array($declaracion);
	$restauracion = $sucesion['id_mes'];
	
	$sentencia = "DELETE FROM $table1 WHERE id_mes = '$restauracion'";
	$accion = mysqli_query($cn, $sentencia);
	require '../../../../settings/close.php';
}

function restart_pub21() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 21";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub22() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 22";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub23() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 23";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub24() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 24";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub25() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 25";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub26() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 26";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub27() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 27";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub28() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 28";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub29() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 29";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub30() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 30";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub31() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 31";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub32() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 32";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub33() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 33";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub34() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 34";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub35() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 35";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub36() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 36";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub37() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 37";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub38() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 38";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub39() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 39";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub40() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 40";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

if (isset($_POST['eliminar'])) {
	restart_mes();
	restart_pub21();
	restart_pub22();
	restart_pub23();
	restart_pub24();
	restart_pub25();
	restart_pub26();
	restart_pub27();
	restart_pub28();
	restart_pub29();
	restart_pub30();
	restart_pub31();
	restart_pub32();
	restart_pub33();
	restart_pub34();
	restart_pub35();
	restart_pub36();
	restart_pub37();
	restart_pub38();
	restart_pub39();
	restart_pub40();
	echo "<script>alert('DATOS BORRADOS DE MANERA EXITOSA')</script>";
	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo2/functions/info.php">';
}

?>
