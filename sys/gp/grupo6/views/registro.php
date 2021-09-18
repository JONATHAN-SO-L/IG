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

		case 'grupo5':
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
				<input style="margin: 5px;" type="text" class="form-control" id="publicador101" name="publicador101" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo101" name="tipo101">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 2:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador102" name="publicador102" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo102" name="tipo102">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 3:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador103" name="publicador103" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo103" name="tipo103">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 4:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador104" name="publicador104" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo104" name="tipo104">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 5:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador105" name="publicador105" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo105" name="tipo105">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 6:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador106" name="publicador106" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo106" name="tipo106">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 7:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador107" name="publicador107" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo107" name="tipo107">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 8:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador108" name="publicador108" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo108" name="tipo108">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 9:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador109" name="publicador109" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo109" name="tipo109">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 10:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador110" name="publicador110" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo110" name="tipo110">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 11:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador111" name="publicador111" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo111" name="tipo111">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 12:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador112" name="publicador112" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo112" name="tipo112">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 13:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador113" name="publicador113" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo113" name="tipo113">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 14:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador114" name="publicador114" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo114" name="tipo114">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 15:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador115" name="publicador115" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo115" name="tipo115">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 16:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador116" name="publicador116" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo116" name="tipo116">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 17:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador117" name="publicador117" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo117" name="tipo117">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 18:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador118" name="publicador118" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo118" name="tipo118">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 19:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador119" name="publicador119" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo119" name="tipo119">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 20:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador120" name="publicador120" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo120" name="tipo120">
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

	pub101();
	pub102();
	pub103();
	pub104();
	pub105();
	pub106();
	pub107();
	pub108();
	pub109();
	pub110();
	pub111();
	pub112();
	pub113();
	pub114();
	pub115();
	pub116();
	pub117();
	pub118();
	pub119();
	pub120();

	echo "<script>alert('PUBLICADORES GUARDADOS CORRECTAMENTE')</script>";
	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo6/functions/info.php">';

}

?>
