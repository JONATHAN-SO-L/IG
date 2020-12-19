<?php

require ('../../../../assets/plugins/fpdf/fpdf.php');
require ('../../../../settings/conexion.php');
require ('../../functions/publicadores.php');
require ('../define/type.php');

class PDF extends FPDF
{

	function Header()
	{
		$this->SetFont('Times','B',20);

		$this->Cell(50);

		$this->Cell(100,10,utf8_decode('INFORME DEL SERVICIO DEL CAMPO'),0,0,'C');

		$this->Ln(10);

		$this->SetFont('Times','',15);

		$this->Cell(50);

		$this->Cell(100,10,utf8_decode('GRUPO DE PREDICACIÓN NO. 1'),0,0,'C');

		$this->Ln(10);

		$this->SetFont('Times','',15);

		$this->Cell(50);

		$this->Cell(100,10,utf8_decode('MES: '),0,0,'C');
	}

	function Footer()
	{
		$this->SetY(-15);

		$this->SetFont('Times','',8);

		$this->Cell(340,10,utf8_decode('Última actualización: 01 de Febrero de 2020'),0,0,'C');
	}

}

$pdf = new PDF();

$pdf->AliasNbPages();

$pdf->AddPage('portrait','letter');

$pdf->Output();

?>