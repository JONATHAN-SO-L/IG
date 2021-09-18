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
				<input style="margin: 5px;" type="text" class="form-control" id="publicador81" name="publicador81" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo81" name="tipo81">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 2:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador82" name="publicador82" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo82" name="tipo82">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 3:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador83" name="publicador83" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo83" name="tipo83">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 4:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador84" name="publicador84" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo84" name="tipo84">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 5:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador85" name="publicador85" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo85" name="tipo85">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 6:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador86" name="publicador86" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo86" name="tipo86">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 7:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador87" name="publicador87" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo87" name="tipo87">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 8:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador88" name="publicador88" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo88" name="tipo88">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 9:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador89" name="publicador89" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo89" name="tipo89">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 10:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador90" name="publicador90" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo90" name="tipo90">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 11:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador91" name="publicador91" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo91" name="tipo91">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 12:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador92" name="publicador92" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo92" name="tipo92">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 13:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador93" name="publicador93" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo93" name="tipo93">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 14:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador94" name="publicador94" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo94" name="tipo94">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 15:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador95" name="publicador95" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo95" name="tipo95">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 16:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador96" name="publicador96" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo96" name="tipo96">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 17:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador97" name="publicador97" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo97" name="tipo97">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 18:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador98" name="publicador98" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo98" name="tipo98">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 19:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador99" name="publicador99" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo99" name="tipo99">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 20:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador100" name="publicador100" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo100" name="tipo100">
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

	pub81();
	pub82();
	pub83();
	pub84();
	pub85();
	pub86();
	pub87();
	pub88();
	pub89();
	pub90();
	pub91();
	pub92();
	pub93();
	pub94();
	pub95();
	pub96();
	pub97();
	pub98();
	pub99();
	pub100();

	echo "<script>alert('PUBLICADORES GUARDADOS CORRECTAMENTE')</script>";
	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo5/functions/info.php">';

}

?>
