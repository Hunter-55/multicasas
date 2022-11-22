<?php
	include 'plantilla.php';
	require 'conexion.php';
	require('prueba1.php');
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(20,6,'Inmueble',1,0,'C',1);
	$pdf->Cell(28,6,'Encabezado',1,0,'C',1);
	$pdf->Cell(30,6,'Direccion',1,0,'C',1);
	$pdf->Cell(28,6,'Recamaras',1,0,'C',1);
	$pdf->Cell(20,6,'Ciudad',1,0,'C',1);
	$pdf->Cell(20,6,'Estado',1,0,'C',1);
	$pdf->Cell(20,6,'Costo',1,0,'C',1);
	$pdf->Cell(20,6,'Estatus',1,1,'C',1);
	$pdf->SetFont('Arial','',10);

	$consulta = "SELECT id_inmueble, encabezado, direccion, recamaras, ciudad, estado, costo_inmueble, estatus FROM inmueble ";
	$resultado = mysqli_query($enlace, $consulta);

		while ($row = mysqli_fetch_assoc($resultado)){
			$pdf->Cell(20,12,utf8_decode($row['id_inmueble']),1,'C');
			$pdf->MultiCell(28,6,utf8_decode($row['encabezado']),1,'C');
			$y = $pdf->GetX();
			$y = $pdf->GetY();
			//$pdf->SetX(58+12);
			//$pdf->SetY(36+12);
			$pdf->MultiCell(30,6,utf8_decode($row['direccion']),1,'C');
			$y = $pdf->GetX();
			$y = $pdf->GetY();
			//$pdf->Cell(28,6,utf8_decode($row['recamaras']),1,0,'C');
			//$pdf->Cell(20,6,utf8_decode($row['ciudad']),1,0,'C');
			//$pdf->Cell(20,6,utf8_decode($row['estado']),1,0,'C');
			//$pdf->Cell(20,6,utf8_decode($row['costo_inmueble']),1,0,'C');
			//$pdf->Cell(20,6,utf8_decode($row['estatus']),1,1,'C');

		}

	
	
	$pdf->Output();//creamos el pdf
?>