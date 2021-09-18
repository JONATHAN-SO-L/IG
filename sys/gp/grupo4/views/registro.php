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
				<input style="margin: 5px;" type="text" class="form-control" id="publicador61" name="publicador61" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo61" name="tipo61">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 2:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador62" name="publicador62" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo62" name="tipo62">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 3:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador63" name="publicador63" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo63" name="tipo63">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 4:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador64" name="publicador64" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo64" name="tipo64">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 5:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador65" name="publicador65" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo65" name="tipo65">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 6:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador66" name="publicador66" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo66" name="tipo66">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 7:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador67" name="publicador67" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo67" name="tipo67">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 8:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador68" name="publicador68" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo68" name="tipo68">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 9:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador69" name="publicador69" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo69" name="tipo69">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 10:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador70" name="publicador70" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo70" name="tipo70">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 11:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador71" name="publicador71" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo71" name="tipo71">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 12:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador72" name="publicador72" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo72" name="tipo72">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 13:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador73" name="publicador73" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo73" name="tipo73">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 14:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador74" name="publicador74" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo74" name="tipo74">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 15:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador75" name="publicador75" placeholder="Damián Reyes Muñoz" required>

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo75" name="tipo75">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 16:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador76" name="publicador76" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo76" name="tipo76">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 17:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador77" name="publicador77" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo77" name="tipo77">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 18:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador78" name="publicador78" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo78" name="tipo78">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 19:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador79" name="publicador79" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo79" name="tipo79">
					<option value="PUB">PUBLICADOR</option>
					<option value="PA">PRECURSOR AUXILIAR</option>
					<option value="PR">PRECURSOR REGULAR</option>
				</select>
			</div><br>

			<div class="form-inline">
				<label style="margin: 20px;" ><strong>PUBLICADOR 20:</strong></label>
				<input style="margin: 5px;" type="text" class="form-control" id="publicador80" name="publicador80" placeholder="Damián Reyes Muñoz">

				<label style="margin: 20px;" ><strong>TIPO DE PUBLICADOR:</strong></label>
				<select class="tipo" style="margin: 10px" id="tipo80" name="tipo80">
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

	pub61();
	pub62();
	pub63();
	pub64();
	pub65();
	pub66();
	pub67();
	pub68();
	pub69();
	pub70();
	pub71();
	pub72();
	pub73();
	pub74();
	pub75();
	pub76();
	pub77();
	pub78();
	pub79();
	pub80();

	echo "<script>alert('PUBLICADORES GUARDADOS CORRECTAMENTE')</script>";
	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo4/functions/info.php">';

}

?>
