<?php

session_start();

if (isset($_SESSION['tipo'])) {

  switch ($_SESSION['tipo']) {
    case 'U':
    echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig">';
    break;

    case 'S':
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
	<link rel="stylesheet" type="text/css" href="/ig/css/header2.css">
	<script src="/ig/js/subir.js"></script>
</head>
<body>

	<?php include '../../../assets/layouts/header2.php'; ?><br>

	<span class="ir-arriba"><img class="flecha" src="https://th.bing.com/th/id/OIP.uKDR0QxG651E2BynzO95BQHaHa?w=193&h=193&c=7&o=5&pid=1.7"></span>

	<div class="container">

		<div class="container pass form-inline"><br>
			<form method="POST" action="#" class="form-inline">
				<div class="container">
					<strong><h3>CAMBIO DE CONTRASEÑA DEL SECRETARIO</h3></strong>
				</div>
				<div class="container form-inline">
					<label style="margin: 20px;">CONTRASEÑA ACTUAL:</label>
					<input style="margin: 5px;" type="password" name="old_password" required class="form-control">
				</div>
				<div class="container form-inline">
					<label style="margin: 20px;">CONTRASEÑA NUEVA:</label>
					<input style="margin: 5px;" type="password" name="new_pass" required class="form-control">
				</div>
				<div class="container form-inline">
					<input type="submit" name="cambiar" value="CAMBIAR CONTRASEÑA" class="btn btn-success form-control">
				</div>
			</form><br>
		</div>

	</div>

	<?php include '../../../assets/layouts/footer.php'; ?>

</body>
</html>

<?php

if (isset($_POST['cambiar'])) {

	require "../../../settings/conexion.php";

	$pass_old = $_POST['old_password'];
	$pass_new = $_POST['new_pass'];

	$sql = "SELECT contraseña FROM $table4 WHERE contraseña = '$pass_old' AND usuario = 'secretario'";
	$con = mysqli_query($cn, $sql);
	$rel = mysqli_fetch_array($con);

	if ($rel['contraseña'] == $pass_old) {

		$query = "SELECT usuario FROM $table4 WHERE usuario = 'secretario'";
		$action = mysqli_query ($cn, $query);
		$usr = mysqli_fetch_array ($action);

		if ($usr['usuario'] = 'secretario') {

			if ($pass_new == $rel['contraseña']) {

				echo "<script>alert('LA CONTRASEÑA NUEVA NO PUEDE SER IGUAL QUE LA ANTERIOR')</script>";

			}	else {

				$cn->query("UPDATE usuarios SET contraseña = '$pass_new' WHERE contraseña = '$pass_old' AND usuario = 'secretario'");

				echo "<script>alert('CONTRASEÑA MODIFICADA CON ÉXITO')</script>";

				echo "<meta HTTP-EQUIV='REFRESH' CONTENT='0;URL=/ig/sys/admin/pass'>";

			}

		}

	}	else {

		echo "<script>alert('LA CONTRASEÑA ANTIGUA QUE SE INGRESÓ NO ES LA CORRECTA, INTÉNTALO DE NUEVO')</script>";

	}

	require "../../../settings/close.php";

}

?>