<?php

// Consulta de mes a la DDBB
require '../../../../settings/conexion.php';
$sql = "SELECT * FROM mes1";
$query = mysqli_query ($cn,$sql);
$rel = mysqli_fetch_array ($query);
require '../../../../settings/close.php';

// Validación de un mes existente
switch ($rel) {
	case '':
	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo1/views/mes.php">';
	break;
	
	default:
	vali_pub();
	break;
}

// Función que valida la existencia de publicadores
function vali_pub() {
	require '../../../../settings/conexion.php';
	$sql2 = "SELECT nombre FROM publicador15";
	$query2 = mysqli_query ($cn,$sql2);
	$rel2 = mysqli_fetch_array ($query2);
	require '../../../../settings/close.php';

	switch ($rel2) {
		case '':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo1/views/registro.php">';
		break;

		default:
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo1/views/panel.php">';
		break;
	}
}

?>