<?php

// Consulta y validación de mes registrado en la DDBB

require '../../../../settings/conexion.php';
$sql = "SELECT mes4 FROM $table1 WHERE mes4 != ''";
$query = mysqli_query ($cn, $sql);
$rel = mysqli_fetch_array ($query);
$soft = $rel['mes4'];
require '../../../../settings/close.php';

switch ($soft) {
	case '':
	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo4/views/mes.php">';
	break;

	default:
	vali_pub();
	break;

}

// Función que consulta y valida la existencia de publicadores en la DDBB

function vali_pub() {
	require '../../../../settings/conexion.php';
	$sql2 = "SELECT nombre FROM $table2 WHERE id_pub = 75";
	$query2 = mysqli_query ($cn, $sql2);
	$rel2 = mysqli_fetch_array ($query2);
	require '../../../../settings/close.php';

	switch ($rel2) {
		case '':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo4/views/registro.php">';
		break;

		default:
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo4/views/panel.php">';
		break;
	}

}

?>