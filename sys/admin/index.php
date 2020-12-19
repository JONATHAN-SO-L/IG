<?php

session_start();

if (isset($_SESSION['tipo'])) {

	switch ($_SESSION['tipo']) {
		case 'U':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig">';
		break;
		
		default:

		break;
	}
}

if (isset($_SESSION['usuario'])) {}	
	else {
	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig">';
}

?>

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
	<link rel="stylesheet" type="text/css" href="/ig/css/panel_admin.css">
	<link rel="stylesheet" type="text/css" href="/ig/css/subir.css">
	<script src="/ig/js/subir.js"></script>
</head>
<body>

	<?php include '../../assets/layouts/header.php'; ?>
	<?php require '../../settings/conexion.php'; ?>

	<br>
	<h2 class="titulo_admin"><strong>¡BIENVENIDO <?php echo $_SESSION['usuario']; ?>!</strong></h2>

	<span class="ir-arriba"><img class="flecha" src="https://th.bing.com/th/id/OIP.uKDR0QxG651E2BynzO95BQHaHa?w=193&h=193&c=7&o=5&pid=1.7"></span>

	<?php

	// Validación de datos en Grupo 1
	$sql1 = "SELECT horas FROM publicador15";
	$query1 = mysqli_query ($cn,$sql1);
	$rel1 = mysqli_fetch_array ($query1);

	// Validación de datos en Grupo 2
	$sql2 = "SELECT horas FROM publicador35";
	$query2 = mysqli_query ($cn,$sql2);
	$rel2 = mysqli_fetch_array ($query2);

	// Validación de datos en Grupo 3
	$sql3 = "SELECT horas FROM publicador55";
	$query3 = mysqli_query ($cn,$sql3);
	$rel3 = mysqli_fetch_array ($query3);

	// Validación de datos en Grupo 4
	$sql4 = "SELECT horas FROM publicador75";
	$query4 = mysqli_query ($cn,$sql4);
	$rel4 = mysqli_fetch_array ($query4);

	// Validación de datos en Grupo 5
	$sql5 = "SELECT horas FROM publicador95";
	$query5 = mysqli_query ($cn,$sql5);
	$rel5 = mysqli_fetch_array ($query5);

	// Validación de datos en Grupo 6
	$sql6 = "SELECT horas FROM publicador115";
	$query6 = mysqli_query ($cn,$sql6);
	$rel6 = mysqli_fetch_array ($query6);

	?>

	<div class='container'>
		<table class='table table-dark table-hover'>
			<thead>
				<tr>
					<th><center><strong>GRUPO 1</strong></center></th>
				</tr>
				<br>
			</thead>
			<tbody>
				<tr>
					<th><center>

						<?php

						switch ($rel1['horas']) {
							case '':
							echo "<h5 class='alert alert-danger'><strong>SIN CONCLUIR</strong></h5>";
							break;
							
							default:
							echo "<h5 class='alert alert-success'><strong>FINALIZADO</strong></h5>";
							break;
						}

						?>

					</center></th>
				</tr>
			</tbody>
		</table>

		<table class='table table-dark table-hover'>
			<thead>
				<tr>
					<th><center><strong>GRUPO 2</strong></center></th>
				</tr>
				<br>
			</thead>
			<tbody>
				<tr>
					<th><center>

						<?php

						switch ($rel2['horas']) {
							case '':
							echo "<h5 class='alert alert-danger'><strong>SIN CONCLUIR</strong></h5>";
							break;
							
							default:
							echo "<h5 class='alert alert-success'><strong>FINALIZADO</strong></h5>";
							break;
						}

						?>

					</center></th>
				</tr>
			</tbody>
		</table>

		<table class='table table-dark table-hover'>
			<thead>
				<tr>
					<th><center><strong>GRUPO 3</strong></center></th>
				</tr>
				<br>
			</thead>
			<tbody>
				<tr>
					<th><center>
						
						<?php

						switch ($rel3['horas']) {
							case '':
							echo "<h5 class='alert alert-danger'><strong>SIN CONCLUIR</strong></h5>";
							break;
							
							default:
							echo "<h5 class='alert alert-success'><strong>FINALIZADO</strong></h5>";
							break;
						}

						?>

					</center></th>
				</tr>
			</tbody>
		</table>

		<table class='table table-dark table-hover'>
			<thead>
				<tr>
					<th><center><strong>GRUPO 4</strong></center></th>
				</tr>
				<br>
			</thead>
			<tbody>
				<tr>
					<th><center>
						
						<?php

						switch ($rel4['horas']) {
							case '':
							echo "<h5 class='alert alert-danger'><strong>SIN CONCLUIR</strong></h5>";
							break;
							
							default:
							echo "<h5 class='alert alert-success'><strong>FINALIZADO</strong></h5>";
							break;
						}

						?>

					</center></th>
				</tr>
			</tbody>
		</table>

		<table class='table table-dark table-hover'>
			<thead>
				<tr>
					<th><center><strong>GRUPO 5</strong></center></th>
				</tr>
				<br>
			</thead>
			<tbody>
				<tr>
					<th><center>
						
						<?php

						switch ($rel5['horas']) {
							case '':
							echo "<h5 class='alert alert-danger'><strong>SIN CONCLUIR</strong></h5>";
							break;
							
							default:
							echo "<h5 class='alert alert-success'><strong>FINALIZADO</strong></h5>";
							break;
						}

						?>

					</center></th>
				</tr>
			</tbody>
		</table>

		<table class='table table-dark table-hover'>
			<thead>
				<tr>
					<th><center><strong>GRUPO 6</strong></center></th>
				</tr>
				<br>
			</thead>
			<tbody>
				<tr>
					<th><center>
						
						<?php

						switch ($rel6['horas']) {
							case '':
							echo "<h5 class='alert alert-danger'><strong>SIN CONCLUIR</strong></h5>";
							break;
							
							default:
							echo "<h5 class='alert alert-success'><strong>FINALIZADO</strong></h5>";
							break;
						}

						?>

					</center></th>
				</tr>
			</tbody>
		</table>
	</div>

	<?php require '../../settings/close.php'; ?>
	<?php include '../../assets/layouts/footer.php'; ?>

</body>
</html>