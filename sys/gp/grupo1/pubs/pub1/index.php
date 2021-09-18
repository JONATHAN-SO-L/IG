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

require '../../../../../settings/conexion.php';
require '../../../functions/fun.php';

function head () {
	include '../../../../../assets/layouts/header.php';
}

function footer () {
	include '../../../../../assets/layouts/footer.php';
}

$val_info = "SELECT horas FROM $table2 WHERE id_pub = 1";
$sentencia = mysqli_query($cn, $val_info);
$resul = mysqli_fetch_array($sentencia);

switch ($resul['horas']) {
	case '':
	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo1/pubs/pub1/registro.php">';
	break;

	default:
	$sql = "SELECT publicaciones, videos, horas, revisitas, cursos, comentarios FROM $table2 WHERE id_pub = 1";
	$rel = mysqli_query($cn, $sql);

	while ($pub = mysqli_fetch_array($rel)) {

		echo '
		<!DOCTYPE html>
		<html lang="es">
		<head>
		<title>INFORME DE GRUPO</title>
		<link rel="icon" href="/ig/assets/img/logo.png" type="image/icon">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="/ig/css/subir.css">
		<script src="/ig/js/subir.js"></script>
		<link rel="stylesheet" type="text/css" href="/ig/css/header2.css">
		<link rel="stylesheet" type="text/css" href="/ig/css/informe.css">
		</head>
		<body>

		'.head().'

		<span class="ir-arriba"><img class="flecha" src="https://th.bing.com/th/id/OIP.uKDR0QxG651E2BynzO95BQHaHa?w=193&h=193&c=7&o=5&pid=1.7"></span>

		<div class="container"><br>

		<div class="alert alert-success">
		<strong><center>Este es el informe que se guardó<button type="button" class="close" data-dismiss="alert">&times;</button></center>
		</strong>
		</div>

		<div class="container" style="background-color: white;"><br>
		<table class="table table-dark table-striped table-hover">
		<tbody>
		<tr>
		<td>Publicaciones (impresas y electrónicas) : </td>
		<td><center>'.$pub['publicaciones'].'</center></td>
		</tr>
		<tr>
		<td>Videos : </td>
		<td><center>'.$pub['videos'].'</center></td>
		</tr>
		<tr>
		<td>Horas : </td>
		<td><center>'.$pub['horas'].'</center></td>
		</tr>
		<tr>
		<td>Revisitas : </td>
		<td><center>'.$pub['revisitas'].'</center></td>
		</tr>
		<tr>
		<td>Número de <i> diferentes </i> <br> cursos bíblicos dirigidos : </td>
		<td><center>'.$pub['cursos'].'</center></td>
		</tr>
		<tr>
		<td>Comentarios : </td>
		<td><center>'.$pub['comentarios'].'</center></td>
		</tr>
		</tbody>
		</table>
		<div class="container" align="center">
		<a href="/ig/sys/gp/grupo1/pubs/pub1/mod.php"><button style="margin: 10px" type="sumbit" class="btn btn-warning btn-lg"><img id="modificar" src="/ig/assets/img/im.png"><strong class="modificar">MODIFICAR INFORME</strong></button></a>
		</div><br>
		</div>
		</div>
		</body>
		</html>
		';

		footer();

		break;
	}
}

require '../../../../../settings/close.php';

?>
