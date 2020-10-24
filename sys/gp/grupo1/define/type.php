<?php
// Querys
function arreglos() {
	require '../../../../settings/conexion.php';

	$pub1 = "SELECT tipo FROM publicador1";
	$pub2 = "SELECT tipo FROM publicador2";
	$pub3 = "SELECT tipo FROM publicador3";
	$pub4 = "SELECT tipo FROM publicador4";
	$pub5 = "SELECT tipo FROM publicador5";
	$pub6 = "SELECT tipo FROM publicador6";
	$pub7 = "SELECT tipo FROM publicador7";
	$pub8 = "SELECT tipo FROM publicador8";
	$pub9 = "SELECT tipo FROM publicador9";
	$pub10 = "SELECT tipo FROM publicador10";
	$pub11 = "SELECT tipo FROM publicador11";
	$pub12 = "SELECT tipo FROM publicador12";
	$pub13 = "SELECT tipo FROM publicador13";
	$pub14 = "SELECT tipo FROM publicador14";
	$pub15 = "SELECT tipo FROM publicador15";
	$pub16 = "SELECT tipo FROM publicador16";
	$pub17 = "SELECT tipo FROM publicador17";
	$pub18 = "SELECT tipo FROM publicador18";
	$pub19 = "SELECT tipo FROM publicador19";
	$pub20 = "SELECT tipo FROM publicador20";

	$sql1 = mysqli_query($cn,$pub1);
	$sql2 = mysqli_query($cn,$pub2);
	$sql3 = mysqli_query($cn,$pub3);
	$sql4 = mysqli_query($cn,$pub4);
	$sql5 = mysqli_query($cn,$pub5);
	$sql6 = mysqli_query($cn,$pub6);
	$sql7 = mysqli_query($cn,$pub7);
	$sql8 = mysqli_query($cn,$pub8);
	$sql9 = mysqli_query($cn,$pub9);
	$sql10 = mysqli_query($cn,$pub10);
	$sql11 = mysqli_query($cn,$pub11);
	$sql12 = mysqli_query($cn,$pub12);
	$sql13 = mysqli_query($cn,$pub13);
	$sql14 = mysqli_query($cn,$pub14);
	$sql15 = mysqli_query($cn,$pub15);
	$sql16 = mysqli_query($cn,$pub16);
	$sql17 = mysqli_query($cn,$pub17);
	$sql18 = mysqli_query($cn,$pub18);
	$sql19 = mysqli_query($cn,$pub19);
	$sql20 = mysqli_query($cn,$pub20);

	$rel1 = mysqli_fetch_array($sql1);
	$rel2 = mysqli_fetch_array($sql2);
	$rel3 = mysqli_fetch_array($sql3);
	$rel4 = mysqli_fetch_array($sql4);
	$rel5 = mysqli_fetch_array($sql5);
	$rel6 = mysqli_fetch_array($sql6);
	$rel7 = mysqli_fetch_array($sql7);
	$rel8 = mysqli_fetch_array($sql8);
	$rel9 = mysqli_fetch_array($sql9);
	$rel10 = mysqli_fetch_array($sql10);
	$rel11 = mysqli_fetch_array($sql11);
	$rel12 = mysqli_fetch_array($sql12);
	$rel13 = mysqli_fetch_array($sql13);
	$rel14 = mysqli_fetch_array($sql14);
	$rel15 = mysqli_fetch_array($sql15);
	$rel16 = mysqli_fetch_array($sql16);
	$rel17 = mysqli_fetch_array($sql17);
	$rel18 = mysqli_fetch_array($sql19);
	$rel19 = mysqli_fetch_array($sql19);
	$rel20 = mysqli_fetch_array($sql20);

	require '../../../../settings/close.php';
}

// Definición del tipo de publicador
function pub() {
	switch (querys()) {
		case 'PUB':
		echo "<strong>Publicadores</strong>";
		echo "<br>";
		print_r(arreglos());
		break;

		case 'PA':
		echo "<br><br>";
		echo "<strong>Precursores Auxiliares</strong>";
		echo "<br>";
		print_r(arreglos());
		break;

		case 'PR':
		echo "<br><br>";
		echo "<strong>Precursores Regulares</strong>";
		echo "<br>";
		print_r(arreglos());
		break;

		case '':
		echo "<strong>No se encontraron registros</strong>";
		break;
		
		default:
		echo "Error 3000";
		break;
	}
}

arreglos();

?>