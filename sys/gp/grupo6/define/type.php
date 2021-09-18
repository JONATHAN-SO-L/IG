<?php

require '../../../../settings/conexion.php';

// Consultas
$pub1 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=101";
$pub2 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=102";
$pub3 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=103";
$pub4 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=104";
$pub5 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=105";
$pub6 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=106";
$pub7 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=107";
$pub8 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=108";
$pub9 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=109";
$pub10 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=110";
$pub11 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=111";
$pub12 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=112";
$pub13 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=113";
$pub14 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=114";
$pub15 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=115";
$pub16 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=116";
$pub17 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=117";
$pub18 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=118";
$pub19 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=119";
$pub20 = "SELECT nombre, horas, tipo FROM $table2 WHERE id_pub=120";

// Ejecuciones
$sql1 = mysqli_query ($cn, $pub1);
$sql2 = mysqli_query ($cn, $pub2);
$sql3 = mysqli_query ($cn, $pub3);
$sql4 = mysqli_query ($cn, $pub4);
$sql5 = mysqli_query ($cn, $pub5);
$sql6 = mysqli_query ($cn, $pub6);
$sql7 = mysqli_query ($cn, $pub7);
$sql8 = mysqli_query ($cn, $pub8);
$sql9 = mysqli_query ($cn, $pub9);
$sql10 = mysqli_query ($cn, $pub10);
$sql11 = mysqli_query ($cn, $pub11);
$sql12 = mysqli_query ($cn, $pub12);
$sql13 = mysqli_query ($cn, $pub13);
$sql14 = mysqli_query ($cn, $pub14);
$sql15 = mysqli_query ($cn, $pub15);
$sql16 = mysqli_query ($cn, $pub16);
$sql17 = mysqli_query ($cn, $pub17);
$sql18 = mysqli_query ($cn, $pub18);
$sql19 = mysqli_query ($cn, $pub19);
$sql20 = mysqli_query ($cn, $pub20);

// Arreglos
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
$rel18 = mysqli_fetch_array($sql18);
$rel19 = mysqli_fetch_array($sql19);
$rel20 = mysqli_fetch_array($sql20);

?>
