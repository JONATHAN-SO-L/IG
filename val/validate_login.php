<?php

require '../settings/conexion.php';

$user = $_POST['usuario'];
$contra = $_POST['contrasena'];

$query = "SELECT tipo FROM $table3 WHERE usuario = '$user' AND contrasena = '$contra'";
$rq = mysqli_query($cn,$query);
$rel = mysqli_fetch_array($rq);

switch ($rel['tipo']) {
	case 'A':
	session_start();
	$_SESSION['usuario'] = $user;
	echo "<meta http-equiv='refresh' content='0; url=/ig/sys/admin'>";
	break;

	case 'S':
	session_start();
	$_SESSION['usuario'] = $user;
	echo "<meta http-equiv='refresh' content='0; url=/ig/sys/admin'>";
	break;

	case 'U':
	switch ($user) {

		case 'grupo1':
		session_start();
		$_SESSION['usuario'] = $user;
		echo "<meta http-equiv='refresh' content='0; url=/ig/sys/gp/grupo1/functions/info.php'>";
		break;

		case 'grupo2':
		session_start();
		$_SESSION['usuario'] = $user;
		echo "<meta http-equiv='refresh' content='0; url=/ig/sys/gp/grupo2/functions/info.php'>";
		break;

		case 'grupo3':
		session_start();
		$_SESSION['usuario'] = $user;
		echo "<meta http-equiv='refresh' content='0; url=/ig/sys/gp/grupo3/functions/info.php'>";
		break;

		case 'grupo4':
		session_start();
		$_SESSION['usuario'] = $user;
		echo "<meta http-equiv='refresh' content='0; url=/ig/sys/gp/grupo4/functions/info.php'>";
		break;

		case 'grupo5':
		session_start();
		$_SESSION['usuario'] = $user;
		echo "<meta http-equiv='refresh' content='0; url=/ig/sys/gp/grupo5/functions/info.php'>";
		break;

		case 'grupo6':
		session_start();
		$_SESSION['usuario'] = $user;
		echo "<meta http-equiv='refresh' content='0; url=/ig/sys/gp/grupo6/functions/info.php'>";
		break;
		
		default:
		echo "<meta http-equiv='refresh' content='0; url=/ig/val/data_failed.php'>";
		break;
	}

	break;
	
	default:
	echo "<meta http-equiv='refresh' content='0; url=/ig/val/data_failed.php'>";
	break;
}