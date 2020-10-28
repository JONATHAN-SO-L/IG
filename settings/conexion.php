<?php

$host = "localhost";
$admin = "root";
$pass = "";
$ddbb = "ig";

$table2 = "q_n_s";
$table3 = "usuarios";

$cn = new mysqli ($host, $admin, $pass, $ddbb);

if ($cn->connect_errno) {
	die("Conection Failed: ". $cn->connect_errno);
	error_reporting(1);
}

?>