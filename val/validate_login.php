<?php

require '../settings/conexion.php';	//Conecta a la BBDD

// Obtiene los datos del login
$user = $_POST['usuario'];
$contra = $_POST['contrasena'];

// Verfica la existencia del usuario en la base de datos
$query = "SELECT tipo FROM $table4 WHERE usuario = '$user' AND contraseña = '$contra'";
$rq = mysqli_query($cn,$query);
$rel = mysqli_fetch_array($rq);

// Valida el tipo de usuario
switch ($rel['tipo']) {
	case 'A':	// Administrador
	session_start();
	$_SESSION['usuario'] = $user;
	$_SESSION['tipo'] = $rel['tipo'];
	echo "<meta http-equiv='refresh' content='0; url=/ig/sys/admin'>";
	break;

	case 'S':	// Supervisor
	session_start();
	$_SESSION['usuario'] = $user;
	$_SESSION['tipo'] = $rel['tipo'];
	echo "<meta http-equiv='refresh' content='0; url=/ig/sys/admin'>";
	break;

	case 'U':	// Usuario
	switch ($user) {

		case 'grupo1':
		session_start();
		$_SESSION['usuario'] = $user;
		$_SESSION['tipo'] = $rel['tipo'];
		echo "<meta http-equiv='refresh' content='0; url=/ig/sys/gp/grupo1/functions/info.php'>";
		break;

		case 'grupo2':
		session_start();
		$_SESSION['usuario'] = $user;
		$_SESSION['tipo'] = $rel['tipo'];
		echo "<meta http-equiv='refresh' content='0; url=/ig/sys/gp/grupo2/functions/info.php'>";
		break;

		case 'grupo3':
		session_start();
		$_SESSION['usuario'] = $user;
		$_SESSION['tipo'] = $rel['tipo'];
		echo "<meta http-equiv='refresh' content='0; url=/ig/sys/gp/grupo3/functions/info.php'>";
		break;

		case 'grupo4':
		session_start();
		$_SESSION['usuario'] = $user;
		$_SESSION['tipo'] = $rel['tipo'];
		echo "<meta http-equiv='refresh' content='0; url=/ig/sys/gp/grupo4/functions/info.php'>";
		break;

		case 'grupo5':
		session_start();
		$_SESSION['usuario'] = $user;
		$_SESSION['tipo'] = $rel['tipo'];
		echo "<meta http-equiv='refresh' content='0; url=/ig/sys/gp/grupo5/functions/info.php'>";
		break;

		case 'grupo6':
		session_start();
		$_SESSION['usuario'] = $user;
		$_SESSION['tipo'] = $rel['tipo'];
		echo "<meta http-equiv='refresh' content='0; url=/ig/sys/gp/grupo6/functions/info.php'>";
		break;
		
		default:
		echo "<meta http-equiv='refresh' content='0; url=/ig/val/data_failed.php'>";
		break;
	}

	break;
	
	default:
	// Si no se halló el usuario en la BBDD resirige a la pantalla de error
	echo "<meta http-equiv='refresh' content='0; url=/ig/val/data_failed.php'>";
	break;
}

