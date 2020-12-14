<!DOCTYPE html>
<html lang="es">
<head>
	<title>PANEL DE ADMINISTRACIÓN</title>
	<link rel="icon" href="/ig/assets/img/logo.png" type="image/icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/ig/css/panel.css">
	<link rel="stylesheet" type="text/css" href="/ig/css/subir.css">
	<script src="/ig/js/subir.js"></script>
</head>
<body>

	<?php include '../../../assets/layouts/header2.php'; ?><br>

	<span class="ir-arriba"><img class="flecha" src="https://th.bing.com/th/id/OIP.uKDR0QxG651E2BynzO95BQHaHa?w=193&h=193&c=7&o=5&pid=1.7"></span>

	<div class="container">

		<div class="container pass form-inline"><br>
			<form method="POST" action="#" class="form-inline">
				<div class="container">
					<strong><h3>CAMBIO DE CONTRASEÑA DEL GRUPO 1</h3></strong>
				</div>
				<div class="container form-inline">
					<label style="margin: 20px;">CONTRASEÑA ANTIGUA:</label>
					<input style="margin: 5px;" type="password" name="old_password" required class="form-control">
				</div>
				<div class="container form-inline">
					<label style="margin: 20px;">CONTRASEÑA NUEVA:</label>
					<input style="margin: 5px;" type="password" name="new_pass" required class="form-control">
				</div>
				<div class="container form-inline">
					<input type="submit" name="guardar" value="CAMBIAR CONTRASEÑA" class="btn btn-success form-control">
				</div>
			</form><br>
		</div>

	</div>

	<?php include '../../../assets/layouts/footer.php'; ?>

</body>
</html>