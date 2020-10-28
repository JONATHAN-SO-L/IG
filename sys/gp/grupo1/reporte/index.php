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
	<link rel="stylesheet" type="text/css" href="/ig/css/faltantes.css">
</head>
<body>

	<?php include '../../../../assets/layouts/header2.php'; ?><br>

	<span class="ir-arriba"><img class="flecha" src="https://th.bing.com/th/id/OIP.uKDR0QxG651E2BynzO95BQHaHa?w=193&h=193&c=7&o=5&pid=1.7"></span>

	<?php include '../define/type.php'; ?>

	<div class='container' id="faltantes"><br>
		<center><h3><strong>Publicadores que faltan informar</strong></h3></center>
		<table class='table table-dark table-hover'>
			<thead>
				<tr>
					<th><center><strong>PRECURSORES REGULARES</strong></center></th>
				</tr>
				<br>
			</thead>
			<tbody>
				<?php 
				if ($rel1['tipo'] == 'PR') {
					if ($rel1['horas'] == NULL) {
						echo '<tr><th><center>'.$rel1['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel2['tipo'] == 'PR') {
					if ($rel2['horas'] == NULL) {
						echo '<tr><th><center>'.$rel2['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel3['tipo'] == 'PR') {
					if ($rel3['horas'] == NULL) {
						echo '<tr><th><center>'.$rel3['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel4['tipo'] == 'PR') {
					if ($rel4['horas'] == NULL) {
						echo '<tr><th><center>'.$rel4['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel5['tipo'] == 'PR') {
					if ($rel5['horas'] == NULL) {
						echo '<tr><th><center>'.$rel5['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel6['tipo'] == 'PR') {
					if ($rel6['horas'] == NULL) {
						echo '<tr><th><center>'.$rel6['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel7['tipo'] == 'PR') {
					if ($rel7['horas'] == NULL) {
						echo '<tr><th><center>'.$rel7['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel8['tipo'] == 'PR') {
					if ($rel8['horas'] == NULL) {
						echo '<tr><th><center>'.$rel8['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel9['tipo'] == 'PR') {
					if ($rel9['horas'] == NULL) {
						echo '<tr><th><center>'.$rel9['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel10['tipo'] == 'PR') {
					if ($rel10['horas'] == NULL) {
						echo '<tr><th><center>'.$rel10['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel11['tipo'] == 'PR') {
					if ($rel11['horas'] == NULL) {
						echo '<tr><th><center>'.$rel11['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel12['tipo'] == 'PR') {
					if ($rel12['horas'] == NULL) {
						echo '<tr><th><center>'.$rel12['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel13['tipo'] == 'PR') {
					if ($rel13['horas'] == NULL) {
						echo '<tr><th><center>'.$rel13['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel14['tipo'] == 'PR') {
					if ($rel14['horas'] == NULL) {
						echo '<tr><th><center>'.$rel14['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel15['tipo'] == 'PR') {
					if ($rel15['horas'] == NULL) {
						echo '<tr><th><center>'.$rel15['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel16['tipo'] == 'PR') {
					if ($rel16['horas'] == NULL) {
						echo '<tr><th><center>'.$rel16['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel17['tipo'] == 'PR') {
					if ($rel17['horas'] == NULL) {
						echo '<tr><th><center>'.$rel17['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel18['tipo'] == 'PR') {
					if ($rel18['horas'] == NULL) {
						echo '<tr><th><center>'.$rel18['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel19['tipo'] == 'PR') {
					if ($rel19['horas'] == NULL) {
						echo '<tr><th><center>'.$rel19['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel20['tipo'] == 'PR') {
					if ($rel20['horas'] == NULL) {
						echo '<tr><th><center>'.$rel20['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				?>
			</tbody>
		</table>

		<table class='table table-dark table-hover'>
			<thead>
				<tr>
					<th><center><strong>PRECURSORES AUXILIARES</strong></center></th>
				</tr>
				<br>
			</thead>
			<tbody>
				<?php 
				if ($rel1['tipo'] == 'PA') {
					if ($rel1['horas'] == NULL) {
						echo '<tr><th><center>'.$rel1['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel2['tipo'] == 'PA') {
					if ($rel2['horas'] == NULL) {
						echo '<tr><th><center>'.$rel2['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel3['tipo'] == 'PA') {
					if ($rel3['horas'] == NULL) {
						echo '<tr><th><center>'.$rel3['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel4['tipo'] == 'PA') {
					if ($rel4['horas'] == NULL) {
						echo '<tr><th><center>'.$rel4['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel5['tipo'] == 'PA') {
					if ($rel5['horas'] == NULL) {
						echo '<tr><th><center>'.$rel5['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel6['tipo'] == 'PA') {
					if ($rel6['horas'] == NULL) {
						echo '<tr><th><center>'.$rel6['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel7['tipo'] == 'PA') {
					if ($rel7['horas'] == NULL) {
						echo '<tr><th><center>'.$rel7['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel8['tipo'] == 'PA') {
					if ($rel8['horas'] == NULL) {
						echo '<tr><th><center>'.$rel8['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel9['tipo'] == 'PA') {
					if ($rel9['horas'] == NULL) {
						echo '<tr><th><center>'.$rel9['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel10['tipo'] == 'PA') {
					if ($rel10['horas'] == NULL) {
						echo '<tr><th><center>'.$rel10['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel11['tipo'] == 'PA') {
					if ($rel11['horas'] == NULL) {
						echo '<tr><th><center>'.$rel11['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel12['tipo'] == 'PA') {
					if ($rel12['horas'] == NULL) {
						echo '<tr><th><center>'.$rel12['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel13['tipo'] == 'PA') {
					if ($rel13['horas'] == NULL) {
						echo '<tr><th><center>'.$rel13['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel14['tipo'] == 'PA') {
					if ($rel14['horas'] == NULL) {
						echo '<tr><th><center>'.$rel14['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel15['tipo'] == 'PA') {
					if ($rel15['horas'] == NULL) {
						echo '<tr><th><center>'.$rel15['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel16['tipo'] == 'PA') {
					if ($rel16['horas'] == NULL) {
						echo '<tr><th><center>'.$rel16['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel17['tipo'] == 'PA') {
					if ($rel17['horas'] == NULL) {
						echo '<tr><th><center>'.$rel17['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel18['tipo'] == 'PA') {
					if ($rel18['horas'] == NULL) {
						echo '<tr><th><center>'.$rel18['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel19['tipo'] == 'PA') {
					if ($rel19['horas'] == NULL) {
						echo '<tr><th><center>'.$rel19['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel20['tipo'] == 'PA') {
					if ($rel20['horas'] == NULL) {
						echo '<tr><th><center>'.$rel20['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				?>
			</tbody>
		</table>

		<table class='table table-dark table-hover'>
			<thead>
				<tr>
					<th><center><strong>PUBLICADORES</strong></center></th>
				</tr>
				<br>
			</thead>
			<tbody>
				<?php 
				if ($rel1['tipo'] == 'PUB') {
					if ($rel1['horas'] == NULL) {
						echo '<tr><th><center>'.$rel1['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel2['tipo'] == 'PUB') {
					if ($rel2['horas'] == NULL) {
						echo '<tr><th><center>'.$rel2['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel3['tipo'] == 'PUB') {
					if ($rel3['horas'] == NULL) {
						echo '<tr><th><center>'.$rel3['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel4['tipo'] == 'PUB') {
					if ($rel4['horas'] == NULL) {
						echo '<tr><th><center>'.$rel4['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel5['tipo'] == 'PUB') {
					if ($rel5['horas'] == NULL) {
						echo '<tr><th><center>'.$rel5['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel6['tipo'] == 'PUB') {
					if ($rel6['horas'] == NULL) {
						echo '<tr><th><center>'.$rel6['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel7['tipo'] == 'PUB') {
					if ($rel7['horas'] == NULL) {
						echo '<tr><th><center>'.$rel7['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel8['tipo'] == 'PR') {
					if ($rel8['horas'] == NULL) {
						echo '<tr><th><center>'.$rel8['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel9['tipo'] == 'PUB') {
					if ($rel9['horas'] == NULL) {
						echo '<tr><th><center>'.$rel9['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel10['tipo'] == 'PUB') {
					if ($rel10['horas'] == NULL) {
						echo '<tr><th><center>'.$rel10['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel11['tipo'] == 'PUB') {
					if ($rel11['horas'] == NULL) {
						echo '<tr><th><center>'.$rel11['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel12['tipo'] == 'PUB') {
					if ($rel12['horas'] == NULL) {
						echo '<tr><th><center>'.$rel12['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel13['tipo'] == 'PUB') {
					if ($rel13['horas'] == NULL) {
						echo '<tr><th><center>'.$rel13['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel14['tipo'] == 'PUB') {
					if ($rel14['horas'] == NULL) {
						echo '<tr><th><center>'.$rel14['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel15['tipo'] == 'PUB') {
					if ($rel15['horas'] == NULL) {
						echo '<tr><th><center>'.$rel15['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel16['tipo'] == 'PUB') {
					if ($rel16['horas'] == NULL) {
						echo '<tr><th><center>'.$rel16['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel17['tipo'] == 'PUB') {
					if ($rel17['horas'] == NULL) {
						echo '<tr><th><center>'.$rel17['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel18['tipo'] == 'PUB') {
					if ($rel18['horas'] == NULL) {
						echo '<tr><th><center>'.$rel18['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel19['tipo'] == 'PUB') {
					if ($rel19['horas'] == NULL) {
						echo '<tr><th><center>'.$rel19['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				if ($rel20['tipo'] == 'PUB') {
					if ($rel20['horas'] == NULL) {
						echo '<tr><th><center>'.$rel20['nombre'].'</center></th></tr>';
					} else {}
				} else {}
				?>			
			</tbody>
		</table><br>
	</div>

	<?php include '../../../../assets/layouts/footer.php'; ?>

</body>
</html>