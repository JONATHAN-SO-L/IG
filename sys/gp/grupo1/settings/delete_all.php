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

function restart_mes() {
	require '../../../../settings/conexion.php';
	$previo = "SELECT id_mes, mes1 FROM $table1 WHERE mes1 != ''";
	$declaracion = mysqli_query($cn, $previo);
	$sucesion = mysqli_fetch_array($declaracion);
	$restauracion = $sucesion['id_mes'];
	
	$sentencia = "DELETE FROM $table1 WHERE id_mes = '$restauracion'";
	$accion = mysqli_query($cn, $sentencia);
	require '../../../../settings/close.php';
}

function restart_pub1() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 1";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub2() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 2";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub3() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 3";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub4() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 4";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub5() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 5";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub6() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 6";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub7() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 7";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub8() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 8";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub9() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 9";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub10() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 10";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub11() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 11";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub12() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 12";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub13() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 13";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub14() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 14";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub15() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 15";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub16() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 16";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub17() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 17";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub18() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 18";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub19() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 19";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

function restart_pub20() {
	require '../../../../settings/conexion.php';
	$up = "UPDATE $table2 SET publicaciones = NULL, videos = NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL WHERE id_pub = 20";
	$move = mysqli_query($cn, $up);
	require '../../../../settings/close.php';
}

if (isset($_POST['eliminar'])) {
	restart_mes();
	restart_pub1();
	restart_pub2();
	restart_pub3();
	restart_pub4();
	restart_pub5();
	restart_pub6();
	restart_pub7();
	restart_pub8();
	restart_pub9();
	restart_pub10();
	restart_pub11();
	restart_pub12();
	restart_pub13();
	restart_pub14();
	restart_pub15();
	restart_pub16();
	restart_pub17();
	restart_pub18();
	restart_pub19();
	restart_pub20();
	echo "<script>alert('DATOS BORRADOS DE MANERA EXITOSA')</script>";
	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo1/functions/info.php">';
}

?>
