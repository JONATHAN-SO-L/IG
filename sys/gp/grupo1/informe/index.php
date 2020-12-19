<?php

require ('../../../../assets/plugins/fpdf/fpdf.php');

class PDF extends FPDF
{

	function Header()
	{
		$this->SetFont('Arial','B',15);

		$this->Cell(50);

		$this->Cell(100,10,utf8_decode('INFORME DEL SERVICIO DEL CAMPO'),1,0,'C');

		$this->Ln(20);
	}

	function Footer()
	{
		$this->SetY(-15);

		$this->SetFont('Arial','',8);

		$this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
	}

}

$pdf->Output();

?>