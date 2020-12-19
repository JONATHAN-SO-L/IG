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

function delete_pub1() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador1 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}


function delete_pub2() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador2 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_pub3() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador3 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_pub4() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador4 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_pub5() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador5 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_pub6() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador6 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_pub7() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador7 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_pub8() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador8 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_pub9() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador9 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_pub10() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador10 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_pub11() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador11 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_pub12() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador12 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_pub13() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador13 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_pub14() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador14 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_pub15() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador15 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_pub16() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador16 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_pub17() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador17 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_pub18() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador18 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_pub19() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador19 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_pub20() {
	require '../../../../settings/conexion.php';
	$pub = "UPDATE publicador20 SET publicaciones = NULL, videos =NULL, horas = NULL, revisitas = NULL, cursos = NULL, comentarios = NULL";
	$rel = mysqli_query ($cn,$pub);
	require '../../../../settings/close.php';
}

function delete_mes() {
	require '../../../../settings/conexion.php';
	$sql = "TRUNCATE mes1";
	$rs = mysqli_query ($cn,$sql);
	require '../../../../settings/close.php';
}

if (isset($_POST['eliminar'])) {
	delete_pub1();
	delete_pub2();
	delete_pub3();
	delete_pub4();
	delete_pub5();
	delete_pub6();
	delete_pub7();
	delete_pub8();
	delete_pub9();
	delete_pub10();
	delete_pub11();
	delete_pub12();
	delete_pub13();
	delete_pub14();
	delete_pub15();
	delete_pub16();
	delete_pub17();
	delete_pub18();
	delete_pub19();
	delete_pub20();
	delete_mes();
	echo "<script>alert('DATOS BORRADOS DE MANERA EXITOSA')</script>";
	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo1/functions/info.php">';
}

?>
