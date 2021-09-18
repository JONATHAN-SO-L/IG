<?php

session_start();

if (isset($_SESSION['usuario'])) {

	switch ($_SESSION['usuario']) {

		case 'grupo1':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig">';
		break;

		case 'grupo2':
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

?>

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
	<link rel="stylesheet" type="text/css" href="/ig/css/faltantes.css">
</head>
<body>

	<?php include '../../../../assets/layouts/header2.php'; ?><br>

	<span class="ir-arriba"><img class="flecha" src="https://th.bing.com/th/id/OIP.uKDR0QxG651E2BynzO95BQHaHa?w=193&h=193&c=7&o=5&pid=1.7"></span>

	<?php include '../define/nuf.php'; ?>

	<div class='container' id="faltantes"><br>
		<center><h3><strong>Publicadores que faltan informar</strong></h3></center>
		<table class='table table-dark table-hover'>
			<thead>
				<tr>
					<th><center><strong>PRECURSORES REGULARES</strong></center></th>
				</tr>
				<br>
			</thead>
			<tbody>
				<?php 
					pr_pub41();
					pr_pub42();
					pr_pub43();
					pr_pub44();
					pr_pub45();
					pr_pub46();
					pr_pub47();
					pr_pub48();
					pr_pub49();
					pr_pub50();
					pr_pub51();
					pr_pub52();
					pr_pub53();
					pr_pub54();
					pr_pub55();
					pr_pub56();
					pr_pub57();
					pr_pub58();
					pr_pub59();
					pr_pub60();
				?>
			</tbody>
		</table>

		<table class='table table-dark table-hover'>
			<thead>
				<tr>
					<th><center><strong>PRECURSORES AUXILIARES</strong></center></th>
				</tr>
				<br>
			</thead>
			<tbody>
				<?php 
					pa_pub41();
					pa_pub42();
					pa_pub43();
					pa_pub44();
					pa_pub45();
					pa_pub46();
					pa_pub47();
					pa_pub48();
					pa_pub49();
					pa_pub50();
					pa_pub51();
					pa_pub52();
					pa_pub53();
					pa_pub54();
					pa_pub55();
					pa_pub56();
					pa_pub57();
					pa_pub58();
					pa_pub59();
					pa_pub60();
				?>
			</tbody>
		</table>

		<table class='table table-dark table-hover'>
			<thead>
				<tr>
					<th><center><strong>PUBLICADORES</strong></center></th>
				</tr>
				<br>
			</thead>
			<tbody>
				<?php 
					pub_pub41();
					pub_pub42();
					pub_pub43();
					pub_pub44();
					pub_pub45();
					pub_pub46();
					pub_pub47();
					pub_pub48();
					pub_pub49();
					pub_pub50();
					pub_pub51();
					pub_pub52();
					pub_pub53();
					pub_pub54();
					pub_pub55();
					pub_pub56();
					pub_pub57();
					pub_pub58();
					pub_pub59();
					pub_pub60();
				?>			
			</tbody>
		</table><br>
	</div>

	<?php include '../../../../assets/layouts/footer.php'; ?>

</body>
</html>