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

		case 'grupo3':
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
					pr_pub61();
					pr_pub62();
					pr_pub63();
					pr_pub64();
					pr_pub65();
					pr_pub66();
					pr_pub67();
					pr_pub68();
					pr_pub69();
					pr_pub70();
					pr_pub71();
					pr_pub72();
					pr_pub73();
					pr_pub74();
					pr_pub75();
					pr_pub76();
					pr_pub77();
					pr_pub78();
					pr_pub79();
					pr_pub80();
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
					pa_pub61();
					pa_pub62();
					pa_pub63();
					pa_pub64();
					pa_pub65();
					pa_pub66();
					pa_pub67();
					pa_pub68();
					pa_pub69();
					pa_pub70();
					pa_pub71();
					pa_pub72();
					pa_pub73();
					pa_pub74();
					pa_pub75();
					pa_pub76();
					pa_pub77();
					pa_pub78();
					pa_pub79();
					pa_pub80();
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
					pub_pub61();
					pub_pub62();
					pub_pub63();
					pub_pub64();
					pub_pub65();
					pub_pub66();
					pub_pub67();
					pub_pub68();
					pub_pub69();
					pub_pub70();
					pub_pub71();
					pub_pub72();
					pub_pub73();
					pub_pub74();
					pub_pub75();
					pub_pub76();
					pub_pub77();
					pub_pub78();
					pub_pub79();
					pub_pub80();
				?>			
			</tbody>
		</table><br>
	</div>

	<?php include '../../../../assets/layouts/footer.php'; ?>

</body>
</html>