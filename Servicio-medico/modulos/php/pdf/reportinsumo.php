<?php
    require ("../conexion.php");
    require("palntilla.php");
    
 
    

    $pdf = new PDF("P", "mm", "letter");
    

    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 9);
    $pdf->Ln(10);
    $pdf->Cell(200, 5, "REPORTE  TIPO DE INSUMO", 0, 1, "C");
    $pdf->Ln(10);
    $pdf->SetFont("Arial", "B", 10);
    $pdf->Cell(50, 5, "Id", 1, 0, "C");
    $pdf->Cell(50, 5, "Medicamento", 1, 1, "C");
    $sql = "SELECT * FROM `tipo_insumo`";
    $re = mysqli_query($conexion,$sql);
    $pdf->SetFont("Arial", "", 10);
    while ($fila = mysqli_fetch_assoc($re)) {
        $pdf->Cell(50, 5, $fila['cod_insumo'], 1, 0, "C");
        $pdf->Cell(50, 5, $fila['nombre'], 1, 1, "C");
    }
    
    $pdf->Output();
?>   