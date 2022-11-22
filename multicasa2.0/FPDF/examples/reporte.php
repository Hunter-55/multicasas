<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,6,'MATRICULA',1,0,'C',1);
	$pdf->Cell(100,6,'ALUMNO',1,0,'C',1);
	$pdf->Cell(20,6,'Plan',1,0,'C',1);
	$pdf->Cell(20,6,'GRADO',1,1,'C',1);
	$pdf->SetFont('Arial','',10);

	$consulta = "SELECT matricula, alumno, cve_plan, grado FROM alumnos GROUP BY matricula";
	$resultado = mysqli_query($enlace, $consulta);

	for ($i=0; $i <=10 ; $i++) { 
		while ($row = mysqli_fetch_assoc($resultado)){
			$pdf->Cell(40,6,utf8_decode($row['matricula']),1,0,'C');
			$pdf->Cell(100,6,utf8_decode($row['alumno']),1,0,'C');
			$pdf->Cell(20,6,utf8_decode($row['cve_plan']),1,0,'C');
			$pdf->Cell(20,6,utf8_decode($row['grado']),1,1,'C');
		}
	}
	
	$pdf->Output();//creamos el pdf
?>