<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(20,6,'Id Inmueble',1,0,'C',1);
	$pdf->Cell(20,6,'Encabezado',1,0,'C',1);
	$pdf->Cell(20,6,'Direccion',1,0,'C',1);
	$pdf->Cell(20,6,'Costo',1,1,'C',1);
	$pdf->Cell(20,6,'Recamaras',1,0,'C',1);
	$pdf->Cell(20,6,'Baños',1,0,'C',1);
	$pdf->Cell(20,6,'Estacionamientos',1,1,'C',1);
	$pdf->Cell(20,6,'Ciudad',1,0,'C',1);
	$pdf->Cell(20,6,'Estado',1,0,'C',1);
	$pdf->Cell(20,6,'Area de Terreno',1,0,'C',1);
	$pdf->Cell(20,6,'Estatus',1,1,'C',1);
	$pdf->SetFont('Arial','',10);

	$consulta = "SELECT id_inmueble, encabezado, direccion, costo_inmueble, recamaras, baños, estacionamientos, ciudad, estado, area_terreno, estatus FROM inmueble";
	$resultado = mysqli_query($enlace, $consulta);

	for ($i=0; $i <=10 ; $i++) { 
		while ($row = mysqli_fetch_assoc($resultado)){
			$pdf->Cell(40,6,utf8_decode($row['id_inmueble']),1,0,'C');
			$pdf->Cell(100,6,utf8_decode($row['encabezado']),1,0,'C');
			$pdf->Cell(20,6,utf8_decode($row['direccion']),1,0,'C');
			$pdf->Cell(40,6,utf8_decode($row['costo_inmueble']),1,0,'C');
			$pdf->Cell(100,6,utf8_decode($row['recamaras']),1,0,'C');
			$pdf->Cell(20,6,utf8_decode($row['baños']),1,0,'C');
			$pdf->Cell(40,6,utf8_decode($row['estacionamientos']),1,0,'C');
			$pdf->Cell(100,6,utf8_decode($row['ciudad']),1,0,'C');
			$pdf->Cell(20,6,utf8_decode($row['estado']),1,0,'C');
			$pdf->Cell(20,6,utf8_decode($row['area_terreno']),1,0,'C');
			$pdf->Cell(20,6,utf8_decode($row['estatus']),1,1,'C');
		}
	}
	$pdf->Output();//creamos el pdf
?>

