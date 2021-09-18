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
				<input style="margin: 5px;" type="text" class="form-control" id="publicador21" name="publicador21" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo21" name="tipo21">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 2:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador22" name="publicador22" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo22" name="tipo22">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 3:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador23" name="publicador23" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo23" name="tipo23">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 4:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador24" name="publicador24" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo24" name="tipo24">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 5:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador25" name="publicador25" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo25" name="tipo25">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 6:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador26" name="publicador26" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo26" name="tipo26">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 7:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador27" name="publicador27" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo27" name="tipo27">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 8:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador28" name="publicador28" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo28" name="tipo28">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 9:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador29" name="publicador29" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo29" name="tipo29">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 10:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador30" name="publicador30" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo30" name="tipo30">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 11:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador31" name="publicador31" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo31" name="tipo31">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 12:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador32" name="publicador32" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo32" name="tipo32">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 13:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador33" name="publicador33" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo33" name="tipo33">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 14:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador34" name="publicador34" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo34" name="tipo34">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 15:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador35" name="publicador35" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo35" name="tipo35">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 16:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador36" name="publicador36" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo36" name="tipo36">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 17:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador37" name="publicador37" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo37" name="tipo37">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 18:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador38" name="publicador38" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo38" name="tipo38">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 19:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador39" name="publicador39" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo39" name="tipo39">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 20:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador40" name="publicador40" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo40" name="tipo40">
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

	pub21();
	pub22();
	pub23();
	pub24();
	pub25();
	pub26();
	pub27();
	pub28();
	pub29();
	pub30();
	pub31();
	pub32();
	pub33();
	pub34();
	pub35();
	pub36();
	pub37();
	pub38();
	pub39();
	pub40();

	echo "<script>alert('PUBLICADORES GUARDADOS CORRECTAMENTE')</script>";
	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo2/functions/info.php">';

}

?>
