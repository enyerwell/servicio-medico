<?php
     require("../conexion.php");
     require("fpdf.php");
     $id = $_GET['id'];
     class PDF extends FPDF{
        //Cabecera de la Pagina
        function Header()   
        {
            // Logo
        $this->Ln(3);
        $this->Image('img/encabezado.jpeg',10,10,0);
        $this->Image('img/icon-vtv.png',240,20,30);
        $this->Ln(20);
        $this->Ln(25);
        // Arial bold 15
        $this->SetFont('Arial','B',20);
        // Movernos a la derecha
        $this->Cell(70);
        // Título
        $this->Cell(145,10,utf8_decode('Venezolana de Televisión'),0,1,'C');
        $this->Cell(70);
        $this->Cell(142,10,utf8_decode(' Reporte de Material'),0,1,'C');
        $this->Ln(10);
        $this->Cell(50);
         // Salto de línea
        $this->Ln(2);
        $this->SetFont('Arial','B',10);
        $this->CELL(10, 5, "Id", 1, 0, "C");
        $this->CELL(40, 5, "Fecha Entrada", 1, 0, "C");
        $this->CELL(30, 5, "Nombre", 1, 0, "C");
        $this->CELL(20, 5, "Cantidad", 1, 0, "C");
        $this->CELL(30, 5, "Registrado por", 1, 0, "C");
        $this->CELL(40, 5, "Accion", 1, 1, "C");
    }
        function footer()
        {
            $this->SetFont('Arial','I',8);
            $this->Image('img/footer.jpeg',-65,188,200);
        }         
    }
    $pdf= new PDF('L','mm','A4');   
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $sql = "SELECT * FROM `insumos` INNER JOIN tipo_insumo ON insumos.cod_insumo = tipo_insumo.cod_insumo WHERE ID = '$id'";
    $re = mysqli_query($conexion,$sql);
    $pdf->SetFont("Arial", "", 10);
    while ($fila = mysqli_fetch_assoc($re)) {
        $pdf->Cell(10, 5, $fila['id'], 1, 0, "C");
        $pdf->Cell(40, 5, $fila['f_entrega'], 1, 0, "C");
        $pdf->Cell(30, 5, $fila['nombre'], 1, 0, "C");
        $pdf->Cell(20, 5, $fila['cantidad'], 1, 0, "C");
        $pdf->Cell(30, 5, $fila['registro1'], 1, 0, "C");
        $pdf->Cell(40, 5, $fila['acciones'], 1, 1, "C");
    }
    $pdf->Output();
?>

    