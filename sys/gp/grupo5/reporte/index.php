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

		case 'grupo4':
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
					pr_pub81();
					pr_pub82();
					pr_pub83();
					pr_pub84();
					pr_pub85();
					pr_pub86();
					pr_pub87();
					pr_pub88();
					pr_pub89();
					pr_pub90();
					pr_pub91();
					pr_pub92();
					pr_pub93();
					pr_pub94();
					pr_pub95();
					pr_pub96();
					pr_pub97();
					pr_pub98();
					pr_pub99();
					pr_pub100();
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
					pa_pub81();
					pa_pub82();
					pa_pub83();
					pa_pub84();
					pa_pub85();
					pa_pub86();
					pa_pub87();
					pa_pub88();
					pa_pub89();
					pa_pub90();
					pa_pub91();
					pa_pub92();
					pa_pub93();
					pa_pub94();
					pa_pub95();
					pa_pub96();
					pa_pub97();
					pa_pub98();
					pa_pub99();
					pa_pub100();
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
					pub_pub81();
					pub_pub82();
					pub_pub83();
					pub_pub84();
					pub_pub85();
					pub_pub86();
					pub_pub87();
					pub_pub88();
					pub_pub89();
					pub_pub90();
					pub_pub91();
					pub_pub92();
					pub_pub93();
					pub_pub94();
					pub_pub95();
					pub_pub96();
					pub_pub97();
					pub_pub98();
					pub_pub99();
					pub_pub100();
				?>			
			</tbody>
		</table><br>
	</div>

	<?php include '../../../../assets/layouts/footer.php'; ?>

</body>
</html>