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

require '../../../functions/fun.php'; ?>

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

	<?php include '../../../../../assets/layouts/header2.php'; ?><br>

	<span class="ir-arriba"><img class="flecha" src="https://th.bing.com/th/id/OIP.uKDR0QxG651E2BynzO95BQHaHa?w=193&h=193&c=7&o=5&pid=1.7"></span>

	<div class="container">

		<div class="alert alert-danger">
			<strong><center>Comprueba que los datos sean correctos<button type="button" class="close" data-dismiss="alert">&times;</button></center>
			</strong>
		</div>

		<form class="form-inline" id="informe" method="POST" action="#"><br>
			<h3 class="titulo_informe"><center><strong>MODIFICACIÓN DEL INFORME DE PREDICACIÓN</strong></center></h3>
			<h4 class="nombre_informe"><center><strong><?php informe_pub24(); ?></strong></center></h4>
			<div class="form-inline">
				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo" name="tipo">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICACIONES (IMPRESAS Y ELECTRÓNICAS):</strong></label>
				<input style="margin: 5px;" required type="number" min="0" class="form-control" id="publicaciones" name="publicaciones">
			</div><br>
			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PRESENTACIONES DE VIDEOS:</strong></label>
				<input style="margin: 5px;" required type="number" min="0" class="form-control" id="videos" name="videos">
			</div><br>
			<div class="form-inline">
				<label style="margin: 20px;" ><strong>HORAS:</strong></label>
				<input style="margin: 5px;" required type="number" min="0" class="form-control" id="horas" name="horas">
			</div><br>
			<div class="form-inline">
				<label style="margin: 20px;" ><strong>REVISITAS:</strong></label>
				<input style="margin: 5px;" required type="number" min="0" class="form-control" id="revisitas" name="revisitas">
			</div><br>
			<div class="form-inline">
				<label style="margin: 20px;" ><strong>NÚMERO DE <i>DIFERENTES</i> CURSOS BÍBLICOS DIRIGIDOS:</strong></label>
				<input style="margin: 5px;" required type="number" min="0" class="form-control" id="cursos" name="cursos">
			</div><br>
			<div class="form-inline">
				<label style="margin: 20px;" ><strong>COMENTARIOS:</strong></label>
				<textarea style="margin: 20px;" class="form-control" cols="100" rows="3" id="comentarios" name="comentarios" placeholder="Ingresa los comentarios del publicador aquí"></textarea>
			</div>
			<div class="form-group">
				<input style="margin: 20px;" type="submit" class="btn btn-success" id="guardar" name="guardar" value="GUARDAR CAMBIOS">
			</div>
		</form>
	</div>

	<?php include '../../../../../assets/layouts/footer.php'; ?>

</body>
</html>

<?php

if (isset($_POST['guardar'])) {
	
	require '../../../../../settings/conexion.php';

	$publicaciones = $_POST['publicaciones'];
	$videos = $_POST['videos'];
	$horas = $_POST['horas'];
	$revisitas = $_POST['revisitas'];
	$cursos = $_POST['cursos'];
	$comentarios = $_POST['comentarios'];
	$tipo = $_POST['tipo'];

	$insercion = "UPDATE $table2 SET publicaciones = '$publicaciones', videos = '$videos', horas = '$horas', revisitas = '$revisitas', cursos = '$cursos', comentarios = '$comentarios', tipo = '$tipo' WHERE id_pub = 24";
	$ejecucion = mysqli_query($cn, $insercion);

	echo "<script>alert('INFORME MODIFICADO CON ÉXITO')</script>";
	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo2/pubs/pub24/">';

	require '../../../../../settings/close.php';

}

?>
