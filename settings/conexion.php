<?php

$host = "localhost";
$admin = "root";
$pass = "";
$ddbb = "ig";

$table1 = "meses";
$table2 = "publicadores";
$table3 = "q_n_s";
$table4 = "usuarios";

$cn = new mysqli ($host, $admin, $pass, $ddbb);

if ($cn->connect_errno) {
	die("Conection Failed: ". $cn->connect_errno);
	error_reporting(1);
}

?>