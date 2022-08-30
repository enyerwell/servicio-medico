<?php
    require ("../conexion.php");
    require("palntilla.php");

    $pdf = new PDF("L", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 10);
    $pdf->Cell(50, 5, "Id", 1, 0, "C");
    $pdf->Cell(50, 5, "Unidad", 1, 1, "C");
    $sql = "SELECT * FROM `unidad` ";
    $re = mysqli_query($conexion,$sql);
    $pdf->SetFont("Arial", "", 10);
    while ($fila = mysqli_fetch_assoc($re)) {

        
        $pdf->Cell(50, 5, $fila['idu'], 1, 0, "C");
        $pdf->Cell(50, 5, $fila['unidad'], 1, 1, "C");
       
    }
    $pdf->Output();
?>