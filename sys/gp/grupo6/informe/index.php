<?php

require '../../../../assets/plugins/fpdf/fpdf.php';
require '../../../../settings/conexion.php';
require 'operations.php';

class PDF extends FPDF
{

	function Header()
	{
		$this->SetFont('Times','B',20);

		$this->Cell(50);

		$this->Cell(100,5,utf8_decode('INFORME DEL SERVICIO DEL CAMPO'),0,0,'C');

		$this->Ln(10);

		$this->SetFont('Times','',15);

		$this->Cell(50);

		$this->Cell(100,10,utf8_decode('GRUPO DE PREDICACIÓN NO. 6'),0,0,'C');

		$this->Ln(10);
	}

	function Footer()
	{
		$this->SetY(-15);

		$this->SetFont('Times','',8);

		$this->Cell(340,10,utf8_decode('Última actualización: 01 de Diciembre de 2021'),0,0,'C');
	}

}

// Consulta del mes
$query = "SELECT mes6 FROM $table1 WHERE mes6 != ''";
$plen = mysqli_query ($cn, $query);

$pdf = new PDF();

$pdf->AliasNbPages();

$pdf->AddPage('portrait','letter');

// Ciclo que muestra el mes consultado
$pdf->Cell(175,10,utf8_decode('MES: '),0,0,'C');

while($month = mysqli_fetch_assoc($plen)) {
	$pdf->SetFont('Times','BI',13);
	$pdf->Cell(-130,10,$month['mes6'],0,0,'C');
}

// Ciclo que muestra a los PR registrados
$pdf->Ln();
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Times','B',13);
$pdf->Cell(195,8,'PRECURSORES REGULARES',1,0,'C',1);
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->Cell(55,10,'Nombre',1,0,'C',1);
$pdf->Cell(25,10,'Publicaciones',1,0,'C',1);
$pdf->Cell(15,10,'Videos',1,0,'C',1);
$pdf->Cell(15,10,'Horas',1,0,'C',1);
$pdf->Cell(20,10,'Revisitas',1,0,'C',1);
$pdf->Cell(15,10,'Cursos',1,0,'C',1);
$pdf->Cell(50,10,'Comentarios',1,0,'C',1);
$pdf->Ln();

// Sentencia para conocer datos de PR's
$pr_pub1 = "SELECT * FROM $table2 WHERE id_pub= 101 AND tipo = 'PR'";
$pr_sql1 = mysqli_query ($cn, $pr_pub1);
while ($row = mysqli_fetch_assoc ($pr_sql1)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub2 = "SELECT * FROM $table2 WHERE id_pub= 102 AND tipo = 'PR'";
$pr_sql2 = mysqli_query ($cn, $pr_pub2);
while ($row = mysqli_fetch_assoc ($pr_sql2)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub3 = "SELECT * FROM $table2 WHERE id_pub= 103 AND tipo = 'PR'";
$pr_sql3 = mysqli_query ($cn, $pr_pub3);
while ($row = mysqli_fetch_assoc ($pr_sql3)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub4 = "SELECT * FROM $table2 WHERE id_pub= 104 AND tipo = 'PR'";
$pr_sql4 = mysqli_query ($cn, $pr_pub4);
while ($row = mysqli_fetch_assoc ($pr_sql4)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub5 = "SELECT * FROM $table2 WHERE id_pub= 105 AND tipo = 'PR'";
$pr_sql5 = mysqli_query ($cn, $pr_pub5);
while ($row = mysqli_fetch_assoc ($pr_sql5)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub6 = "SELECT * FROM $table2 WHERE id_pub= 106 AND tipo = 'PR'";
$pr_sql6 = mysqli_query ($cn, $pr_pub6);
while ($row = mysqli_fetch_assoc ($pr_sql6)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub7 = "SELECT * FROM $table2 WHERE id_pub= 107 AND tipo = 'PR'";
$pr_sql7 = mysqli_query ($cn, $pr_pub7);
while ($row = mysqli_fetch_assoc ($pr_sql7)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub8 = "SELECT * FROM $table2 WHERE id_pub= 108 AND tipo = 'PR'";
$pr_sql8 = mysqli_query ($cn, $pr_pub8);
while ($row = mysqli_fetch_assoc ($pr_sql8)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub9 = "SELECT * FROM $table2 WHERE id_pub= 109 AND tipo = 'PR'";
$pr_sql9 = mysqli_query ($cn, $pr_pub9);
while ($row = mysqli_fetch_assoc ($pr_sql9)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub10 = "SELECT * FROM $table2 WHERE id_pub= 110 AND tipo = 'PR'";
$pr_sql10 = mysqli_query ($cn, $pr_pub10);
while ($row = mysqli_fetch_assoc ($pr_sql10)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub11 = "SELECT * FROM $table2 WHERE id_pub= 111 AND tipo = 'PR'";
$pr_sql11 = mysqli_query ($cn, $pr_pub11);
while ($row = mysqli_fetch_assoc ($pr_sql11)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub12 = "SELECT * FROM $table2 WHERE id_pub= 112 AND tipo = 'PR'";
$pr_sql12 = mysqli_query ($cn, $pr_pub12);
while ($row = mysqli_fetch_assoc ($pr_sql12)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub13 = "SELECT * FROM $table2 WHERE id_pub= 113 AND tipo = 'PR'";
$pr_sql13 = mysqli_query ($cn, $pr_pub13);
while ($row = mysqli_fetch_assoc ($pr_sql13)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub14 = "SELECT * FROM $table2 WHERE id_pub= 114 AND tipo = 'PR'";
$pr_sql14 = mysqli_query ($cn, $pr_pub14);
while ($row = mysqli_fetch_assoc ($pr_sql14)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub15 = "SELECT * FROM $table2 WHERE id_pub= 115 AND tipo = 'PR'";
$pr_sql15 = mysqli_query ($cn, $pr_pub15);
while ($row = mysqli_fetch_assoc ($pr_sql15)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub16 = "SELECT * FROM $table2 WHERE id_pub= 116 AND tipo = 'PR'";
$pr_sql16 = mysqli_query ($cn, $pr_pub16);
while ($row = mysqli_fetch_assoc ($pr_sql16)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub17 = "SELECT * FROM $table2 WHERE id_pub= 117 AND tipo = 'PR'";
$pr_sql17 = mysqli_query ($cn, $pr_pub17);
while ($row = mysqli_fetch_assoc ($pr_sql17)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub18 = "SELECT * FROM $table2 WHERE id_pub= 118 AND tipo = 'PR'";
$pr_sql18 = mysqli_query ($cn, $pr_pub18);
while ($row = mysqli_fetch_assoc ($pr_sql18)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub19 = "SELECT * FROM $table2 WHERE id_pub= 119 AND tipo = 'PR'";
$pr_sql19 = mysqli_query ($cn, $pr_pub19);
while ($row = mysqli_fetch_assoc ($pr_sql19)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pr_pub20 = "SELECT * FROM $table2 WHERE id_pub= 120 AND tipo = 'PR'";
$pr_sql20 = mysqli_query ($cn, $pr_pub20);
while ($row = mysqli_fetch_assoc ($pr_sql20)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

// Suma total PR's
$pdf->Cell(55,10,'TOTALES:',1,0,'C',1);
$pdf->Cell(25,10,$t_pr_pub['pr_total_pub'],1,0,'C',1);
$pdf->Cell(15,10,$t_pr_vid['pr_total_vid'],1,0,'C',1);
$pdf->Cell(15,10,$t_pr_hr['pr_total_hr'],1,0,'C',1);
$pdf->Cell(20,10,$t_pr_rv['pr_total_rv'],1,0,'C',1);
$pdf->Cell(15,10,$t_pr_cr['pr_total_cr'],1,0,'C',1);
$pdf->Cell(50,10,'------',1,0,'C',1);
$pdf->Ln(20);

// Ciclo que muestra a los PA registrados
$pdf->SetFont('Times','B',13);
$pdf->Cell(195,8,'PRECURSORES AUXILIARES',1,0,'C',1);
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->Cell(55,10,'Nombre',1,0,'C',1);
$pdf->Cell(25,10,'Publicaciones',1,0,'C',1);
$pdf->Cell(15,10,'Videos',1,0,'C',1);
$pdf->Cell(15,10,'Horas',1,0,'C',1);
$pdf->Cell(20,10,'Revisitas',1,0,'C',1);
$pdf->Cell(15,10,'Cursos',1,0,'C',1);
$pdf->Cell(50,10,'Comentarios',1,0,'C',1);
$pdf->Ln();

// Sentencia para conocer datos de PA's
$pa_pub1 = "SELECT * FROM $table2 WHERE id_pub= 101 AND tipo = 'PA'";
$pa_sql1 = mysqli_query ($cn, $pa_pub1);
while ($row = mysqli_fetch_assoc ($pa_sql1)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub2 = "SELECT * FROM $table2 WHERE id_pub= 102 AND tipo = 'PA'";
$pa_sql2 = mysqli_query ($cn, $pa_pub2);
while ($row = mysqli_fetch_assoc ($pa_sql2)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub3 = "SELECT * FROM $table2 WHERE id_pub= 103 AND tipo = 'PA'";
$pa_sql3 = mysqli_query ($cn, $pa_pub3);
while ($row = mysqli_fetch_assoc ($pa_sql3)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub4 = "SELECT * FROM $table2 WHERE id_pub= 104 AND tipo = 'PA'";
$pa_sql4 = mysqli_query ($cn, $pa_pub4);
while ($row = mysqli_fetch_assoc ($pa_sql4)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub5 = "SELECT * FROM $table2 WHERE id_pub= 105 AND tipo = 'PA'";
$pa_sql5 = mysqli_query ($cn, $pa_pub5);
while ($row = mysqli_fetch_assoc ($pa_sql5)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub6 = "SELECT * FROM $table2 WHERE id_pub= 106 AND tipo = 'PA'";
$pa_sql6 = mysqli_query ($cn, $pa_pub6);
while ($row = mysqli_fetch_assoc ($pa_sql6)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub7 = "SELECT * FROM $table2 WHERE id_pub= 107 AND tipo = 'PA'";
$pa_sql7 = mysqli_query ($cn, $pa_pub7);
while ($row = mysqli_fetch_assoc ($pa_sql7)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub8 = "SELECT * FROM $table2 WHERE id_pub= 108 AND tipo = 'PA'";
$pa_sql8 = mysqli_query ($cn, $pa_pub8);
while ($row = mysqli_fetch_assoc ($pa_sql8)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub9 = "SELECT * FROM $table2 WHERE id_pub= 109 AND tipo = 'PA'";
$pa_sql9 = mysqli_query ($cn, $pa_pub9);
while ($row = mysqli_fetch_assoc ($pa_sql9)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub10 = "SELECT * FROM $table2 WHERE id_pub= 110 AND tipo = 'PA'";
$pa_sql10 = mysqli_query ($cn, $pa_pub10);
while ($row = mysqli_fetch_assoc ($pa_sql10)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub11 = "SELECT * FROM $table2 WHERE id_pub= 111 AND tipo = 'PA'";
$pa_sql11 = mysqli_query ($cn, $pa_pub11);
while ($row = mysqli_fetch_assoc ($pa_sql11)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub12 = "SELECT * FROM $table2 WHERE id_pub= 112 AND tipo = 'PA'";
$pa_sql12 = mysqli_query ($cn, $pa_pub12);
while ($row = mysqli_fetch_assoc ($pa_sql12)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub13 = "SELECT * FROM $table2 WHERE id_pub= 113 AND tipo = 'PA'";
$pa_sql13 = mysqli_query ($cn, $pa_pub13);
while ($row = mysqli_fetch_assoc ($pa_sql13)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub14 = "SELECT * FROM $table2 WHERE id_pub= 114 AND tipo = 'PA'";
$pa_sql14 = mysqli_query ($cn, $pa_pub14);
while ($row = mysqli_fetch_assoc ($pa_sql14)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub15 = "SELECT * FROM $table2 WHERE id_pub= 115 AND tipo = 'PA'";
$pa_sql15 = mysqli_query ($cn, $pa_pub15);
while ($row = mysqli_fetch_assoc ($pa_sql15)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub16 = "SELECT * FROM $table2 WHERE id_pub= 116 AND tipo = 'PA'";
$pa_sql16 = mysqli_query ($cn, $pa_pub16);
while ($row = mysqli_fetch_assoc ($pa_sql16)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub17 = "SELECT * FROM $table2 WHERE id_pub= 117 AND tipo = 'PA'";
$pa_sql17 = mysqli_query ($cn, $pa_pub17);
while ($row = mysqli_fetch_assoc ($pa_sql17)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub18 = "SELECT * FROM $table2 WHERE id_pub= 118 AND tipo = 'PA'";
$pa_sql18 = mysqli_query ($cn, $pa_pub18);
while ($row = mysqli_fetch_assoc ($pa_sql18)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub19 = "SELECT * FROM $table2 WHERE id_pub= 119 AND tipo = 'PA'";
$pa_sql19 = mysqli_query ($cn, $pa_pub19);
while ($row = mysqli_fetch_assoc ($pa_sql19)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pa_pub20 = "SELECT * FROM $table2 WHERE id_pub= 120 AND tipo = 'PA'";
$pa_sql20 = mysqli_query ($cn, $pa_pub20);
while ($row = mysqli_fetch_assoc ($pa_sql20)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

// Suma total PA's
$pdf->Cell(55,10,'TOTALES:',1,0,'C',1);
$pdf->Cell(25,10,$t_pa_pub['pa_total_pub'],1,0,'C',1);
$pdf->Cell(15,10,$t_pa_vid['pa_total_vid'],1,0,'C',1);
$pdf->Cell(15,10,$t_pa_hr['pa_total_hr'],1,0,'C',1);
$pdf->Cell(20,10,$t_pa_rv['pa_total_rv'],1,0,'C',1);
$pdf->Cell(15,10,$t_pa_cr['pa_total_cr'],1,0,'C',1);
$pdf->Cell(50,10,'------',1,0,'C',1);
$pdf->Ln(20);

// Ciclo que muestra a los PUB registrados
$pdf->SetFont('Times','B',13);
$pdf->Cell(195,8,'PUBLICADORES',1,0,'C',1);
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->Cell(55,10,'Nombre',1,0,'C',1);
$pdf->Cell(25,10,'Publicaciones',1,0,'C',1);
$pdf->Cell(15,10,'Videos',1,0,'C',1);
$pdf->Cell(15,10,'Horas',1,0,'C',1);
$pdf->Cell(20,10,'Revisitas',1,0,'C',1);
$pdf->Cell(15,10,'Cursos',1,0,'C',1);
$pdf->Cell(50,10,'Comentarios',1,0,'C',1);
$pdf->Ln();

// Sentencia para conocer datos de PUB's
$pub_pub1 = "SELECT * FROM $table2 WHERE id_pub= 101 AND tipo = 'PUB'";
$pub_sql1 = mysqli_query ($cn, $pub_pub1);
while ($row = mysqli_fetch_assoc ($pub_sql1)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub2 = "SELECT * FROM $table2 WHERE id_pub= 102 AND tipo = 'PUB'";
$pub_sql2 = mysqli_query ($cn, $pub_pub2);
while ($row = mysqli_fetch_assoc ($pub_sql2)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub3 = "SELECT * FROM $table2 WHERE id_pub= 103 AND tipo = 'PUB'";
$pub_sql3 = mysqli_query ($cn, $pub_pub3);
while ($row = mysqli_fetch_assoc ($pub_sql3)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub4 = "SELECT * FROM $table2 WHERE id_pub= 104 AND tipo = 'PUB'";
$pub_sql4 = mysqli_query ($cn, $pub_pub4);
while ($row = mysqli_fetch_assoc ($pub_sql4)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub5 = "SELECT * FROM $table2 WHERE id_pub= 105 AND tipo = 'PUB'";
$pub_sql5 = mysqli_query ($cn, $pub_pub5);
while ($row = mysqli_fetch_assoc ($pub_sql5)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub6 = "SELECT * FROM $table2 WHERE id_pub= 106 AND tipo = 'PUB'";
$pub_sql6 = mysqli_query ($cn, $pub_pub6);
while ($row = mysqli_fetch_assoc ($pub_sql6)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub7 = "SELECT * FROM $table2 WHERE id_pub= 107 AND tipo = 'PUB'";
$pub_sql7 = mysqli_query ($cn, $pub_pub7);
while ($row = mysqli_fetch_assoc ($pub_sql7)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub8 = "SELECT * FROM $table2 WHERE id_pub= 108 AND tipo = 'PUB'";
$pub_sql8 = mysqli_query ($cn, $pub_pub8);
while ($row = mysqli_fetch_assoc ($pub_sql8)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub9 = "SELECT * FROM $table2 WHERE id_pub= 109 AND tipo = 'PUB'";
$pub_sql9 = mysqli_query ($cn, $pub_pub9);
while ($row = mysqli_fetch_assoc ($pub_sql9)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub10 = "SELECT * FROM $table2 WHERE id_pub= 110 AND tipo = 'PUB'";
$pub_sql10 = mysqli_query ($cn, $pub_pub10);
while ($row = mysqli_fetch_assoc ($pub_sql10)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub11 = "SELECT * FROM $table2 WHERE id_pub= 111 AND tipo = 'PUB'";
$pub_sql11 = mysqli_query ($cn, $pub_pub11);
while ($row = mysqli_fetch_assoc ($pub_sql11)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub12 = "SELECT * FROM $table2 WHERE id_pub= 112 AND tipo = 'PUB'";
$pub_sql12 = mysqli_query ($cn, $pub_pub12);
while ($row = mysqli_fetch_assoc ($pub_sql12)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub13 = "SELECT * FROM $table2 WHERE id_pub= 113 AND tipo = 'PUB'";
$pub_sql13 = mysqli_query ($cn, $pub_pub13);
while ($row = mysqli_fetch_assoc ($pub_sql13)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub14 = "SELECT * FROM $table2 WHERE id_pub= 114 AND tipo = 'PUB'";
$pub_sql14 = mysqli_query ($cn, $pub_pub14);
while ($row = mysqli_fetch_assoc ($pub_sql14)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub15 = "SELECT * FROM $table2 WHERE id_pub= 115 AND tipo = 'PUB'";
$pub_sql15 = mysqli_query ($cn, $pub_pub15);
while ($row = mysqli_fetch_assoc ($pub_sql15)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub16 = "SELECT * FROM $table2 WHERE id_pub= 116 AND tipo = 'PUB'";
$pub_sql16 = mysqli_query ($cn, $pub_pub16);
while ($row = mysqli_fetch_assoc ($pub_sql16)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub17 = "SELECT * FROM $table2 WHERE id_pub= 117 AND tipo = 'PUB'";
$pub_sql17 = mysqli_query ($cn, $pub_pub17);
while ($row = mysqli_fetch_assoc ($pub_sql17)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub18 = "SELECT * FROM $table2 WHERE id_pub= 118 AND tipo = 'PUB'";
$pub_sql18 = mysqli_query ($cn, $pub_pub18);
while ($row = mysqli_fetch_assoc ($pub_sql18)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub19 = "SELECT * FROM $table2 WHERE id_pub= 119 AND tipo = 'PUB'";
$pub_sql19 = mysqli_query ($cn, $pub_pub19);
while ($row = mysqli_fetch_assoc ($pub_sql19)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

$pub_pub20 = "SELECT * FROM $table2 WHERE id_pub= 120 AND tipo = 'PUB'";
$pub_sql20 = mysqli_query ($cn, $pub_pub20);
while ($row = mysqli_fetch_assoc ($pub_sql20)) {
	$pdf->Cell(55,10,utf8_decode($row['nombre']),1,0,'C',0);
	$pdf->Cell(25,10,$row['publicaciones'],1,0,'C',0);
	$pdf->Cell(15,10,$row['videos'],1,0,'C',0);
	$pdf->Cell(15,10,$row['horas'],1,0,'C',0);
	$pdf->Cell(20,10,$row['revisitas'],1,0,'C',0);
	$pdf->Cell(15,10,$row['cursos'],1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['comentarios']),1,0,'C',0);
	$pdf->Ln();
}

// Suma total PUB's
$pdf->Cell(55,10,'TOTALES:',1,0,'C',1);
$pdf->Cell(25,10,$t_pub_pub['pub_total_pub'],1,0,'C',1);
$pdf->Cell(15,10,$t_pub_vid['pub_total_vid'],1,0,'C',1);
$pdf->Cell(15,10,$t_pub_hr['pub_total_hr'],1,0,'C',1);
$pdf->Cell(20,10,$t_pub_rv['pub_total_rv'],1,0,'C',1);
$pdf->Cell(15,10,$t_pub_cr['pub_total_cr'],1,0,'C',1);
$pdf->Cell(50,10,'------',1,0,'C',1);
$pdf->Ln(20);

$pdf->Output('I','INFORME DE SERVICIO MENSUAL DEL GRUPO 6.pdf');

require '../../../../settings/close.php';

?>
