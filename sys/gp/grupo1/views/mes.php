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
	<link rel="stylesheet" type="text/css" href="/ig/css/mes.css">
</head>
<body>

	<?php include '../../../../assets/layouts/header.php'; ?><br>

	<div class="container">
		<center>
			<form method="POST" action="#"><br>
				<h3 class="mes">Ingresa el mes en el que se registrarán los informes:</h3><br>
				<input class="form-inline text-center" type="text" name="mes" placeholder="MAYÚSCULAS" required><br>
				<input class="btn btn-success" name="ingresar" type="submit" value="INGRESAR"><br><br>
			</form>
		</center>
	</div>

	<?php include '../../../../assets/layouts/footer.php'; ?>

</body>
</html>

<?php

if (isset($_POST['ingresar'])) {

	require '../../../../settings/conexion.php';

	$mes = $_POST['mes'];
	$query = "INSERT INTO $table1 (mes) VALUES ('$mes')";

	$cn->query($query);

	require '../../../../settings/close.php';

	echo "<script>alert('MES REGISTRADO CORRECTAMENTE')</script>";

	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo1/functions/info.php">';

}

?>