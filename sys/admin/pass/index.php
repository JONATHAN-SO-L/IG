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
	<link rel="stylesheet" type="text/css" href="/ig/css/panel.css">
	<link rel="stylesheet" type="text/css" href="/ig/css/subir.css">
	<link rel="stylesheet" type="text/css" href="/ig/css/header.css">
	<script src="/ig/js/subir.js"></script>
</head>
<body>

	<?php include '../../../assets/layouts/header.php'; ?><br>

	<span class="ir-arriba"><img class="flecha" src="https://th.bing.com/th/id/OIP.uKDR0QxG651E2BynzO95BQHaHa?w=193&h=193&c=7&o=5&pid=1.7"></span>

	<div class="container pass">
		<br><center><h2><strong>Elige el usuario al que se le cambiará la contraseña</strong></h2></center><br>
		<div class="container" align="center">
			<a href="/ig/sys/admin/pass/passgp1.php"><button style="margin: 10px" type="sumbit" class="btn btn-info btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong>GRUPO 1</strong></button></a>
			<a href="/ig/sys/admin/pass/passgp2.php"><button style="margin: 10px" type="sumbit" class="btn btn-primary btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong>GRUPO 2</strong></button></a>
			<a href="/ig/sys/admin/pass/passgp3.php"><button style="margin: 10px" type="sumbit" class="btn btn-success btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong>GRUPO 3</strong></button></a>
		</div>

		<div class="container" align="center">
			<a href="/ig/sys/admin/pass/passgp4.php"><button style="margin: 10px" type="sumbit" class="btn botones-s5 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong>GRUPO 4</strong></button></a>
			<a href="/ig/sys/admin/pass/passgp5.php"><button style="margin: 10px" type="sumbit" class="btn btn-warning btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong>GRUPO 5</strong></button></a>
			<a href="/ig/sys/admin/pass/passgp6.php"><button style="margin: 10px" type="sumbit" class="btn btn-danger btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong>GRUPO 6</strong></button></a>
		</div>

		<div class="container" align="center">
			<a href="/ig/sys/admin/pass/pass_super.php"><button style="margin: 10px" type="sumbit" class="btn btn-dark btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong>SECRETARIO</strong></button></a>
		</div><br>
	</div>

	<?php include '../../../assets/layouts/footer.php'; ?>

</body>
</html>
