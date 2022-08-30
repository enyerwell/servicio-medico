<?php 
require("conexion.php");
require("fpdf.php");


$gerencia=$_POST['personal'];


if($gerencia == 0 ){

    $query ="SELECT * From Datos INNER JOIN Gerencia ON Datos.id_gerencia = Gerencia.Id_G
    JOIN Division ON Datos.id_Division = Division.id_D JOIN 
    Cargo ON Datos.id_Cargo = Cargo.id_C";
}else{
    $query = "SELECT * FROM Datos INNER JOIN Gerencia ON Datos.id_gerencia = Gerencia.Id_G
     JOIN Division ON Datos.id_Division = Division.id_D JOIN 
     Cargo ON Datos.id_Cargo = Cargo.id_C  WHERE Gerencia.Id_G = '$gerencia'";
}

$resultado = mysqli_query($conexion,$query);





class PDF extends FPDF{
    //Cabecera de la Pagina
    function Header()
    {
        // Logo
    $this->Ln(3);
    $this->Image('../Assets/encabezado.png',10,10,0);
    $this->Image('../Assets/logo-VTV-transparente-pequeno.png',240,20,30);
    $this->Ln(20);
    $this->Ln(25);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    // Movernos a la derecha
    $this->Cell(70);
    // Título
    $this->Cell(145,10,utf8_decode('Venezolana de Televisión'),0,1,'C');
    $this->Cell(70);
    $this->Cell(142,10,utf8_decode(' Reporte de Personal'),0,1,'C');
    $this->Ln(10);
    $this->Cell(50);
     // Salto de línea
     $this->Ln(2);
     $this->SetFont('Arial','B',10);
    $this->CELL(32,10,'Nombres',1,0,'C',0 );
    $this->CELL(37,10,'Apellido',1,0,'C',0 );
    $this->CELL(16,10,'CI',1,0,'C',0 );
    $this->CELL(70,10,'Gerencia',1,0,'C',0 );
    $this->CELL(70,10,utf8_decode('División'),1,0,'C',0 );
    $this->CELL(60,10,'Cargo',1,1,'C',0 );										
        }
    function footer(){
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        $this->Image('../Assets/pie.png',-65,188,200);
    }        
}

$pdf= new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();

while ($mostrar=mysqli_fetch_array($resultado)) {
   

    $pdf->SetFont('Arial','B',6);
      $pdf->CELL(32,10,utf8_decode($mostrar['nombres']),1,0,'C',0 );
        $pdf->CELL(37,10,utf8_decode($mostrar['apellidos']),1,0,'C',0 );
    $pdf->CELL(16,10,utf8_decode($mostrar['cedula']),1,0,'C',0 );
          $pdf->CELL(70,10,utf8_decode($mostrar['Gerencia']),1,0,'C',0 );
        $pdf->CELL(70,10,utf8_decode($mostrar['Division']),1,0,'C',0 );
      $pdf->CELL(60,10,utf8_decode($mostrar['Cargo']),1,1,'C',0 );
    
}
$pdf->Output();   


?> 