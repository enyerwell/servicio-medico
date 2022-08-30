<?php
    require ("../conexion.php");
    require("palntilla.php");
    $id = $_GET['id'];
    $pdf = new PDF("P", "mm", "letter");
    $pdf->AddPage();
    $pdf->Ln(10);
    $pdf->Cell(200, 5, "REPORTE  TIPO DE MATERIAL", 0, 1, "C");
    $pdf->Ln(10);
    $pdf->SetFont("Arial", "B", 10);
    $pdf->Cell(8, 5, "Id", 1, 0, "C");
    $pdf->Cell(70, 5, "Medicamento", 1, 0, "C");
    $pdf->Cell(55, 5, "Registrado por", 1, 0, "C");
    $pdf->Cell(55, 5, "Accion", 1, 1, "C");
    $query = "SELECT * FROM `material` 
                INNER JOIN tipo_de_material ";
    $re = mysqli_query($conexion,$query);
    $pdf->SetFont("Arial", "", 10);
    while ($fila = mysqli_fetch_assoc($re)) {
        $pdf->Cell(8, 5, $fila['cod_tmaterial'], 1, 0, "C");
        $pdf->Cell(70, 5, $fila['medicamento'], 1, 0, "C");
        $pdf->Cell(55, 5, $fila['registrado por'], 1, 0, "C");
        $pdf->Cell(55, 5, $fila['accion'], 1, 1, "C");
    }
    $pdf->Output();
?>