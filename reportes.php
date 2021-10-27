<?php
include('libreria/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Lista de usuarios',0,0,'C');
    // Salto de línea

   // $this->Image('imagenes/imagen1.jpg' , 10 ,5, 40 , 20,'JPG');
    $this->Ln(20);
   
    $this->cell(80,10, 'nombre',1,0,'C',0);
    $this->cell(50,10, 'usuario',1,0,'C',0);
    $this->cell(50,10, 'tipo',1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'pagina'.$this->PageNo().'',0,0,'C');
}
}

require("conexion.php");

//$consulta = "SELECT * FROM alumno";
//$resultado = $mysqli_query($consulta);

$result=mysqli_query($conexion,"select * from usuarios") or die ("problemas en el select".mysqli_error($conexion));

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);


while ($fila = $result->fetch_assoc()) {
    $pdf->cell(80,10, $fila['nombre'],1,0,'c',0);
    $pdf->cell(50,10, $fila['usuario'],1,0,'c',0);
    $pdf->cell(50,10, $fila['tipo'],1,1,'c',0);
}

$pdf->Output();

?>
