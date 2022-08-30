<?php
    require ("../conexion.php");
    require("palntilla.php");

    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 10);
    $pdf->Ln(10);
    $pdf->Cell(200, 5, "REPORTE  DE DIVISION", 0, 1, "C");
    $pdf->Ln(10);
    $pdf->Cell(8, 5, "Id", 1, 0, "C");
    $pdf->Cell(180, 5, "Division", 1, 1, "C");
    $sql = "SELECT * FROM `Division`";
    $re = mysqli_query($conexion,$sql);
    $pdf->SetFont("Arial", "", 10);
    while ($fila = mysqli_fetch_assoc($re)) {
        $pdf->Cell(8, 5, $fila['id_D'], 1, 0, "C");
        $pdf->Cell(180, 5, $fila['Division'], 1, 1, "C");
    }
    $pdf->Output();
?>