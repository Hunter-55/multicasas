<?php
include('class/class_inmueble_dal.php');
include('class/class_Db.php');
include_once('libs/tfpdf/tfpdf.php');

if (isset( $_GET['id_inmueble'])){

    $id = $_GET['id_inmueble'];

    $inmueble = new inmueble();
    $inmueble = $inmueble->get_datos_inmueble($mysqli,$id);

    
    class PDF extends tFPDF
    {
        function Header()
        {
            $this->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
            $this->SetFont('DejaVu','',20);
            // Move to the right
            $this->Cell(120);
            // Framed title
            $this->Cell(50,10,'Bienes Raices',0,0,'C');
            // Line break
            $this->Ln(20);
        }
        function Footer()
        {
            // Posición: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('DejaVu','',20);            
            // Número de página
            // $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
            $this->Cell(480,10,'Página '.$this->PageNo(),0,0,'C');
        }
        
    }
    $pdf = new PDF('L','mm');
    $pdf->Header();
    $pdf->AddPage();
    $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
    // $pdf->SetMargins(1,1,95);

    $pdf->SetFont('DejaVu','',14);
    $pdf->Write(10,"Encabezado: " .$inmueble->getEncabezado() . ".");
    $pdf->Ln();
    $pdf->Write(10,"Descripcion: " .$inmueble->getDescripcion() . ".");
    $pdf->Ln();
    $pdf->Write(10,"Dirección: " .$inmueble->getDireccion() . ".");
    $pdf->Ln();
    $pdf->Write(10,"Recamaras: " .$inmueble->getRecamaras() . ".");
    $pdf->Ln();
    $pdf->Write(10,"Baño(s): " .$inmueble->getBaños() . ".");
    $pdf->Ln();
    $pdf->Write(10,"Estacionamiento(s): " .$inmueble->getEstacionamientos() . ".");
    $pdf->Ln();
    $pdf->Write(10,"Estatus: " .$inmueble->getEstatus() . ".");
    $pdf->Ln();
    $pdf->Write(10,"Ciudad: " .$inmueble->getCiudad() . ".");
    $pdf->Ln();
    $pdf->Write(10,"Estado: " . $inmueble->getEstado() . ".");
    $pdf->Ln();
    $pdf->Write(10,"Código postal: " . $inmueble->getCodigo_postal() . ".");
    $pdf->Ln();
    $pdf->Write(10,"Area terreno: " . $inmueble->getArea_terreno() . ".");
    $pdf->Ln();
    $pdf->Write(10,"Latitud: " . $inmueble->getLatitud() . ".");
    $pdf->Ln();
    $pdf->Write(10,"Longitud: " . $inmueble->getLongitud() . ".");
    $pdf->Ln();

    $pdf->Text(70,115,"Ubicación:");
    $precio = $inmueble->getCosto_inmueble();
    setlocale(LC_MONETARY, 'en_USD');
    $precio =  money_format('%i', $precio);
    $pdf->Write(10,"Precio: " . $precio . ".");
    $pdf->Ln();
    
    

    $id = $inmueble->get_id_inmueble($mysqli);

    
    $texto = "var url = 'http://localhost/bienesraices/muestrainmueble.php?id_inmueble=$id')";


    $pdf->Output();
    //$pdf->Close();#
}