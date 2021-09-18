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

<?php require '../../functions/fun.php'; ?>

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
	<link rel="stylesheet" type="text/css" href="/ig/css/panel.css">
	<link rel="stylesheet" type="text/css" href="/ig/css/header.css">
</head>
<body>

	<?php include '../../../../assets/layouts/header.php'; ?> <br>

	<h2 class="titulo_panel"><strong>Panel del <?php echo $_SESSION['usuario']; ?></strong></h2><br>

	<span class="ir-arriba"><img class="flecha" src="https://th.bing.com/th/id/OIP.uKDR0QxG651E2BynzO95BQHaHa?w=193&h=193&c=7&o=5&pid=1.7"></span>

	<div class="container" align="center">
		<a href="/ig/sys/gp/grupo5/pubs/pub81"><button style="margin: 10px" type="sumbit" class="btn botones-s1 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub81(); ?></strong></button></a>

		<a href="/ig/sys/gp/grupo5/pubs/pub82"><button style="margin: 10px" type="sumbit" class="btn botones-s1 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub82(); ?></strong></button></a>

		<a href="/ig/sys/gp/grupo5/pubs/pub83"><button style="margin: 10px" type="sumbit" class="btn botones-s1 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub83(); ?></strong></button></a>
	</div>

	<div class="container" align="center">
		<a href="/ig/sys/gp/grupo5/pubs/pub84"><button style="margin: 10px" type="sumbit" class="btn botones-s1 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub84(); ?></strong></button></a>

		<a href="/ig/sys/gp/grupo5/pubs/pub85"><button style="margin: 10px" type="sumbit" class="btn botones-s1 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub85(); ?></strong></button></a>

		<a href="/ig/sys/gp/grupo5/pubs/pub86"><button style="margin: 10px" type="sumbit" class="btn botones-s1 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub86(); ?></strong></button></a>
	</div>

	<div class="container" align="center">
		<a href="/ig/sys/gp/grupo5/pubs/pub87"><button style="margin: 10px" type="sumbit" class="btn botones-s2 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub87(); ?></strong></button></a>

		<a href="/ig/sys/gp/grupo5/pubs/pub88"><button style="margin: 10px" type="sumbit" class="btn botones-s2 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub88(); ?></strong></button></a>

		<a href="/ig/sys/gp/grupo5/pubs/pub89"><button style="margin: 10px" type="sumbit" class="btn botones-s2 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub89(); ?></strong></button></a>
	</div>

	<div class="container" align="center">
		<a href="/ig/sys/gp/grupo5/pubs/pub90"><button style="margin: 10px" type="sumbit" class="btn botones-s2 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub90(); ?></strong></button></a>

		<a href="/ig/sys/gp/grupo5/pubs/pub91"><button style="margin: 10px" type="sumbit" class="btn botones-s2 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub91(); ?></strong></button></a>

		<a href="/ig/sys/gp/grupo5/pubs/pub92"><button style="margin: 10px" type="sumbit" class="btn botones-s2 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub92(); ?></strong></button></a>
	</div>

	<div class="container" align="center">
		<a href="/ig/sys/gp/grupo5/pubs/pub93"><button style="margin: 10px" type="sumbit" class="btn botones-s3 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub93(); ?></strong></button></a>

		<a href="/ig/sys/gp/grupo5/pubs/pub94"><button style="margin: 10px" type="sumbit" class="btn botones-s3 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub94(); ?></strong></button></a>

		<a href="/ig/sys/gp/grupo5/pubs/pub95"><button style="margin: 10px" type="sumbit" class="btn botones-s3 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub95(); ?></strong></button></a>
	</div>

	<div class="container" align="center">
		<a href="/ig/sys/gp/grupo5/pubs/pub96"><button style="margin: 10px;" type="sumbit" class="btn botones-s3 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub96(); ?></strong></button></a>

		<a href="/ig/sys/gp/grupo5/pubs/pub97"><button style="margin: 10px" type="sumbit" class="btn botones-s3 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub97(); ?></strong></button></a>

		<a href="/ig/sys/gp/grupo5/pubs/pub98"><button style="margin: 10px" type="sumbit" class="btn botones-s3 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub98(); ?></strong></button></a>
	</div>

	<div class="container" align="center">
		<a href="/ig/sys/gp/grupo5/pubs/pub99"><button style="margin: 10px" type="sumbit" class="btn botones-s4 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub99(); ?></strong></button></a>

		<a href="/ig/sys/gp/grupo5/pubs/pub100"><button style="margin: 10px" type="sumbit" class="btn botones-s4 btn-lg"><img id="persona" src="/ig/assets/img/persona.png"><strong><?php panel_pub100(); ?></strong></button></a>
	</div>

	<div class="container" align="center">
		<a href="/ig/sys/gp/grupo5/reporte"><button style="margin: 10px" type="sumbit" class="btn botones-s5 btn-lg"><img id="faltantes" src="/ig/assets/img/faltantes.png"><strong class="faltantes">FALTANTES</strong></button></a>

		<a href="/ig/sys/gp/grupo5/informe"><button style="margin: 10px" type="sumbit" class="btn botones-s6 btn-lg"><img id="informe" src="/ig/assets/img/descarga.png"><strong>INFORME</strong></button></a>

		<!-- <a href="/ig/sys/gp/grupo5/grafica"><button style="margin: 10px" type="sumbit" class="btn botones-s2 btn-lg"><img id="grafica" src="/ig/assets/img/grafica.png"><strong>GRÁFICA</strong></button></a> -->
	</div>

	<div class="container" align="center">
		<button name="borrar" style="margin: 10px" type="sumbit" class="btn botones-s7 btn-lg" data-toggle="modal" data-target="#myModal"><img id="reiniciar" src="/ig/assets/img/reiniciar.png" alt="borrar"><strong>BORRAR TODO</strong></button>

		<div class="modal fade" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header">
						<h3 class="modal-title" style="margin: 10px">¿Realmente quieres borrar toda la información guardada y reiniciar el mes completamente?</h3>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<div class="modal-body">
						<h4><strong>NOTA: </strong>Si borras, no hay forma de recuperar la información, no se respalda, tendrás que volverla a ingresar</h4>
					</div>

					<div class="modal-footer">
						<form method="POST" action="/ig/sys/gp/grupo5/settings/delete_all.php">
							<input type="submit" class="btn btn-danger" id="eliminar" name="eliminar" value="ESTOY DE ACUERDO">
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="container" align="center">
		<span name="flotante" id="flotante" class="flotante" data-toggle="modal" data-target="#myModal2" ><img class="qns2" src="/ig/assets/img/qns.png" alt="Q&S"></span>

		<div class="modal fade" id="myModal2">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header">
						<img id="qns" src="/ig/assets/img/qns.png" style="margin-top: 5px" ><h3 class="form-title" style="margin: 10px"><strong>Buzón de Mensajes</strong></h3>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<div class="modal-body">
						<form method="POST" action="/ig/sys/gp/grupo5/settings/q&s.php">
							<div>
								<div class="form-group" align="left">
									<label><strong>NOMBRE :</strong></label>
									<input required="#" type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre aquí">
								</div>

								<div class="form-group" align="left">
									<label><strong>MENSAJE :</strong></label>
									<textarea required="#" class="form-control" rows="3" id="mensaje" name="mensaje" placeholder="Redacta tu mensaje aquí"></textarea>
								</div>
								<input type="submit" class="btn qns1" id="enviar" name="qns" value="Enviar Mensaje">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include '../../../../assets/layouts/footer.php'; ?>

</body>
</html>