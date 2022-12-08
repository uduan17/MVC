<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{

	$this->Image('img/Logo-Motel.jpg',10,8,27);

    
    // Arial bold 15
    $this->SetFont('times','B',18 );
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->SetTextColor(0,80,180);
    $this->Cell(70,25,'Reporte de reservas al mes',0,0,'C');
    

    //Fecha y Hora
    $this->SetFont('helvetica','B',12);
    $this->Cell(70,25,'Fecha y hora actual',0,0,'C');
    $this->Ln(5);
    setlocale(LC_TIME, "");
    date_default_timezone_set('America/Bogota');
    $date_du_jour = utf8_encode(strftime('%d/%m/%y     %H:%M'));
    $this->Cell(305,25,$date_du_jour,0,0,'C');

  // Salto de línea
  $this->Ln(20);
  $this->SetFont('helvetica','',10);
  $this->Cell(115,25,'Este reporte trae las reservas que solo se encuentran en estado "Efectiva, y que se realizaron en el mes actual.',0,0,'');
  $this->Ln(4);
  $this->Cell(115,25,'No cuentan las reservas que son canceladas o realizadas en otro mes',0,0,'');


    // Salto de línea
    $this->Ln(27);
    
    $this->SetFont('helvetica','B',12);
    $this->SetTextColor(1, 90, 209);
    $this->SetFillColor(224,235,255);
    $this->SetLineWidth(0.5);
    $this->Cell(30,10,utf8_decode('Telefono'),1,0,'C',1);
	$this->Cell(53,10,'Correo',1,0,'C',1);
	$this->Cell(40,10,utf8_decode('Habitacion'),1,0,'C',1);
    $this->Cell(35,10,'Tiempo estadia',1,0,'C',1);
    $this->Cell(30,10,'Precio',1,1,'C',1);
    
    
}


// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('helvetica','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');

    $this->SetTextColor(0,0, 0); //Color de la letra rgb 
    $this->SetFont('times','',10);
    $this->Cell(-335,-20,'Direccion:',0,0,'C',0);
    $this->Ln(100);
    $this->setXY(50,268);
    $this->Line(12,260,200, 260);
    $this->Cell(15,8,'Calle 31A # 2A - 20',0,0,'C',0);
    $this->Ln(0.2);
    $this->setX(37);
    $this->Cell(-10,0,'Telefono:',0,0,'C',0);
    $this->Cell(57,0,'(+57)(2) 2442815',0,0,'C',0);
    $this->Ln(0.2);
    $this->setX(37);
    $this->Cell(-13,15,'Correo:',0,0,'C',0);
    $this->Cell(72,15,'info@motelsolyluna.org',0,0,'C',0); 
	$this->Image('img/Logo-Motel.jpg',10,8,27);

}
}


require ("cn.php");
$consulta = "SELECT * FROM usuarios WHERE reserva_programada= 'Efectiva' AND MONTH(fecha_ingreso) = 12";
$result = $conexion->query($consulta);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
// $pdf->Image('img/Logo-Motel.jpg',60,30,90,0,'PNG');
$pdf->SetFont('helvetica','',10);

$total=0;
while($row = $result -> fetch_assoc()){

    $pdf->Cell(30,10,$row['telefono'],1,0,'C',0);
	$pdf->Cell(53,10,utf8_decode($row['correo']),1,0,'C',0);
	$pdf->Cell(40,10,utf8_decode($row['nombre_habitacion']),1,0,'C',0);
    $pdf->Cell(35,10,($row['tiempo_estadia']),1,0,'C',0);
    $pdf->Cell(30,10,(" $ ").$row['precio'],1,1,'C',0);
    // $pdf->Cell(30,10,$row['precio'],1,1,'C',0);
    $total+=$row['precio'];


}

$pdf->SetTextColor(1, 90, 209);
$pdf->SetFont('times','',12);
$pdf->Cell(345, 15,('Total: $' . $total), 0, 0, 'C');

	$pdf->Output();
?>