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
					pr_pub1();
					pr_pub2();
					pr_pub3();
					pr_pub4();
					pr_pub5();
					pr_pub6();
					pr_pub7();
					pr_pub8();
					pr_pub9();
					pr_pub10();
					pr_pub11();
					pr_pub12();
					pr_pub13();
					pr_pub14();
					pr_pub15();
					pr_pub16();
					pr_pub17();
					pr_pub18();
					pr_pub19();
					pr_pub20();
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
					pa_pub1();
					pa_pub2();
					pa_pub3();
					pa_pub4();
					pa_pub5();
					pa_pub6();
					pa_pub7();
					pa_pub8();
					pa_pub9();
					pa_pub10();
					pa_pub11();
					pa_pub12();
					pa_pub13();
					pa_pub14();
					pa_pub15();
					pa_pub16();
					pa_pub17();
					pa_pub18();
					pa_pub19();
					pa_pub20();
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
					pub_pub1();
					pub_pub2();
					pub_pub3();
					pub_pub4();
					pub_pub5();
					pub_pub6();
					pub_pub7();
					pub_pub8();
					pub_pub9();
					pub_pub10();
					pub_pub11();
					pub_pub12();
					pub_pub13();
					pub_pub14();
					pub_pub15();
					pub_pub16();
					pub_pub17();
					pub_pub18();
					pub_pub19();
					pub_pub20();
				?>			
			</tbody>
		</table><br>
	</div>

	<?php include '../../../../assets/layouts/footer.php'; ?>

</body>
</html>