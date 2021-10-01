<?php

// Consulta y validación de mes registrado en la DDBB

require '../../../../settings/conexion.php';
$sql = "SELECT mes1 FROM $table1 WHERE mes1 != ''";	// Se selecciona el mes 'X' que no esté vacío
$query = mysqli_query ($cn, $sql);
$rel = mysqli_fetch_array ($query);
$soft = $rel['mes1'];	// Se extrae el mes en un arreglo legible
require '../../../../settings/close.php';

switch ($soft) {
	case '':	// En caso de que no haya un mes registrado en la BBDD se redirecciona para ingresarlo
	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo1/views/mes.php">';
	break;

	default:
	vali_pub();
	break;

}

// Función que consulta y valida la existencia de publicadores en la DDBB

function vali_pub() {
	require '../../../../settings/conexion.php';
	$sql2 = "SELECT nombre FROM $table2 WHERE id_pub = 15";	// Se verifica si está el mínimo de publicadores para el grupo
	$query2 = mysqli_query ($cn, $sql2);
	$rel2 = mysqli_fetch_array ($query2);
	require '../../../../settings/close.php';

	switch ($rel2) {
		case '':	// En caso que no halla regitro de publicadores, se redirecciona para registrarlos
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo1/views/registro.php">';
		break;

		default:	// En caso de que si halla un registro, se envía al paneldel grupo
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig/sys/gp/grupo1/views/panel.php">';
		break;
	}

}

?>