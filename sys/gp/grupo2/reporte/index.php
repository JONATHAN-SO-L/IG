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
					pr_pub21();
					pr_pub22();
					pr_pub23();
					pr_pub24();
					pr_pub25();
					pr_pub26();
					pr_pub27();
					pr_pub28();
					pr_pub29();
					pr_pub30();
					pr_pub31();
					pr_pub32();
					pr_pub33();
					pr_pub34();
					pr_pub35();
					pr_pub36();
					pr_pub37();
					pr_pub38();
					pr_pub39();
					pr_pub40();
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
					pa_pub21();
					pa_pub22();
					pa_pub23();
					pa_pub24();
					pa_pub25();
					pa_pub26();
					pa_pub27();
					pa_pub28();
					pa_pub29();
					pa_pub30();
					pa_pub31();
					pa_pub32();
					pa_pub33();
					pa_pub34();
					pa_pub35();
					pa_pub36();
					pa_pub37();
					pa_pub38();
					pa_pub39();
					pa_pub40();
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
					pub_pub21();
					pub_pub22();
					pub_pub23();
					pub_pub24();
					pub_pub25();
					pub_pub26();
					pub_pub27();
					pub_pub28();
					pub_pub29();
					pub_pub30();
					pub_pub31();
					pub_pub32();
					pub_pub33();
					pub_pub34();
					pub_pub35();
					pub_pub36();
					pub_pub37();
					pub_pub38();
					pub_pub39();
					pub_pub40();
				?>			
			</tbody>
		</table><br>
	</div>

	<?php include '../../../../assets/layouts/footer.php'; ?>

</body>
</html>