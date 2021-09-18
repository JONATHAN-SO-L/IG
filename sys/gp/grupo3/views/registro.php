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
<html>
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
	<link rel="stylesheet" type="text/css" href="/ig/css/header.css">
	<link rel="stylesheet" type="text/css" href="/ig/css/informe.css">
</head>
<body>

	<?php include '../../../../assets/layouts/header.php'; ?> <br>

	<span class="ir-arriba"><img class="flecha" src="https://th.bing.com/th/id/OIP.uKDR0QxG651E2BynzO95BQHaHa?w=193&h=193&c=7&o=5&pid=1.7"></span>

	<div class="container">
		<form class="form-inline" id="informe" method="POST" action="#"><br>
			<h3 class="titulo_informe"><center><strong>REGISTRO DE PUBLICADORES</strong></center></h3><br>
			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 1:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador41" name="publicador41" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo41" name="tipo41">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 2:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador42" name="publicador42" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo42" name="tipo42">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 3:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador43" name="publicador43" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo43" name="tipo43">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 4:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador44" name="publicador44" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo44" name="tipo44">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 5:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador45" name="publicador45" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo45" name="tipo45">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 6:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador46" name="publicador46" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo46" name="tipo46">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 7:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador47" name="publicador47" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo47" name="tipo47">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 8:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador48" name="publicador48" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo48" name="tipo48">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 9:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador49" name="publicador49" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo49" name="tipo49">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 10:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador50" name="publicador50" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo50" name="tipo50">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 11:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador51" name="publicador51" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo51" name="tipo51">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 12:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador52" name="publicador52" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo52" name="tipo52">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 13:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador53" name="publicador53" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo53" name="tipo53">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 14:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador54" name="publicador54" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo54" name="tipo54">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 15:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador55" name="publicador55" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo55" name="tipo55">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 16:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador56" name="publicador56" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo56" name="tipo56">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 17:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador57" name="publicador57" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo57" name="tipo57">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 18:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador58" name="publicador58" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo58" name="tipo58">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 19:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador59" name="publicador59" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo59" name="tipo59">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 20:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador60" name="publicador60" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo60" name="tipo60">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div>

			<div class="form-group">
				<input style="margin: 20px;" type="submit" class="btn btn-success" id="guardar" name="registrar" value="REGISTRAR">
			</div>
		</form>
	</div>

	<?php include '../../../../assets/layouts/footer.php'; ?>

</body>
</html>

<?php

require '../../functions/fun.php';

if (isset($_POST['registrar'])) {

	pub41();
	pub42();
	pub43();
	pub44();
	pub45();
	pub46();
	pub47();
	pub48();
	pub49();
	pub50();
	pub51();
	pub52();
	pub53();
	pub54();
	pub55();
	pub56();
	pub57();
	pub58();
	pub59();
	pub60();

	echo "<script>alert('PUBLICADORES GUARDADOS CORRECTAMENTE')</script>";
	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo3/functions/info.php">';

}

?>
