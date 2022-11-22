<?php
	include ('FPDF/fpdf.php');
	include('class/class_inmueble_dal.php');

	$obj = new inmueble_dal();
	
	$pdf = new FPDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(2,6,'Descripción',1,1,'C');
	$pdf->Cell(2,6,'Area Terreno',1,0,'C');
	$pdf->Cell(2,6,'Baños',1,0,'C',1);
	$pdf->Cell(2,6,'Estacionamientos',1,0,'C');
	$pdf->Cell(2,6,'Recamaras',1,0,'C');
	$pdf->Cell(2,6,'Dirección',1,0,'C');
	$pdf->Cell(2,6,'Ciudad',1,0,'C');
	$pdf->Cell(2,6,'Estado',1,0,'C');
	$pdf->Cell(2,6,'Código Postal',1,0,'C');
	$pdf->Cell(2,6,'Costo',1,0,'C');
	$pdf->Cell(2,6,'Estatus',1,1,'C');


	$pdf->SetFont('Arial','',10);

	$consulta = "SELECT descripcion, area_terreno, baños, estacionamientos, recamaras, direccion, ciudad, estado, codigo_postal, costo_inmueble, estatus FROM inmueble WHERE id_inmueble = '1' ";
	$obj->set_sql($consulta);
	$obj->db_conn->set_charset("utf8");
	$resultado = mysqli_query($obj->db_conn, $obj->db_query);
 
		while ($row = mysqli_fetch_assoc($resultado)){
			$pdf->Cell(20,6,utf8_decode($row['descripcion']),1,1,'C');
			$pdf->Cell(20,6,utf8_decode($row['area_terreno']),1,0,'C');
			$pdf->Cell(20,6,utf8_decode($row['baños']),1,0,'C');
			$pdf->Cell(20,6,utf8_decode($row['estacionamientos']),1,0,'C');
			$pdf->Cell(20,6,utf8_decode($row['recamaras']),1,0,'C');
			$pdf->Cell(20,6,utf8_decode($row['direccion']),1,0,'C');
			$pdf->Cell(20,6,utf8_decode($row['ciudad']),1,0,'C');
			$pdf->Cell(20,6,utf8_decode($row['estado']),1,0,'C');
			$pdf->Cell(20,6,utf8_decode($row['codigo_postal']),1,0,'C');
			$pdf->Cell(20,6,utf8_decode($row['costo_inmueble']),1,0,'C');
			$pdf->Cell(20,6,utf8_decode($row['estatus']),1,0,'C');

		}
	
	$pdf->Output();//creamos el pdf
?>