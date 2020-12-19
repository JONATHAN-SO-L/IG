<?php

session_start();

if (isset($_SESSION['tipo'])) {

	switch ($_SESSION['tipo']) {
		case 'A':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/admin">';
		break;

		case 'S':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/admin">';
		break;
		
		default:

		break;
	}
}

if (isset($_SESSION['usuario'])) {

	switch ($_SESSION['usuario']) {

		case 'grupo1':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo1/functions/info.php">';
		break;

		case 'grupo2':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo2/functions/info.php">';
		break;

		case 'grupo3':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo3/functions/info.php">';
		break;

		case 'grupo4':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo4/functions/info.php">';
		break;

		case 'grupo5':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo5/functions/info.php">';
		break;

		case 'grupo6':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo6/functions/info.php">';
		break;
		
		default:

		break;
	}
	
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
	<link rel="stylesheet" type="text/css" href="/ig/css/login.css">
</head>
<body>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark"></nav>

	<div class="container">
		<h2 style="color: white;"><strong><center>¡Bienvenido al Sistema de Informes de Grupo!</center></strong></h2>
	</div><br>

	<div class="container">
		<form method="POST" action="/ig/val/validate_login.php">
			<center>
				<img class="login" src="/ig/assets/img/logo.png">
				<h2>Iniciar Sesión</h2>
				<input class="form-control" type="text" name="usuario" placeholder="Usuario" required>
				<br>
				<input class="form-control" type="password" name="contrasena" placeholder="Contraseña" required>
				<br>
				<input class="btn btn-success" type="submit" name="ingresar" value="INGRESAR">
			</center>
		</form>
	</div>

	<?php include 'assets/layouts/footer.php'; ?>

</body>
</html>