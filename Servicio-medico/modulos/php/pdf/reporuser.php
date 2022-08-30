<?php
    require ("../conexion.php");
    require("palntilla.php");
 
    $pdf = new PDF("L", "mm", "letter");
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 10);
    $pdf->Ln(10);
    $pdf->Cell(200, 5, "REPORTE  USUARIOS", 0, 1, "C");
    $pdf->Ln(10);
    $pdf->Cell(10, 5, "Id", 1, 0, "C");
    $pdf->Cell(20, 5, "Nombre", 1, 0, "C");
    $pdf->Cell(20, 5, "Apellido", 1, 0, "C");
    $pdf->Cell(20, 5, "Cedula", 1, 0, "C");
    $pdf->Cell(40, 5, "Correo", 1, 0, "C");
    $pdf->Cell(95, 5, "Gerencia", 1, 0, "C");
    $pdf->Cell(25, 5, "Perfil", 1, 0, "C");
    $pdf->Cell(20, 5, "Usuario", 1, 0, "C");
    $pdf->Cell(15, 5, "Clave", 1, 1, "C");

    $sql = "SELECT * FROM `usuario` 
    INNER JOIN Gerencia ON usuario.id_gerencia = Gerencia.id_G 
    JOIN perfil ON usuario.id_perfil = perfil.cod order by usuario.id";
    $re = mysqli_query($conexion,$sql);
    $pdf->SetFont("Arial", "", 10);
    while ($fila = mysqli_fetch_assoc($re)) {

        
        $pdf->Cell(10, 5, $fila['id'], 1, 0, "C");
        $pdf->Cell(20, 5, $fila['Nombre'], 1, 0, "C");
        $pdf->Cell(20, 5, $fila['apellido'], 1, 0, "C");
        $pdf->Cell(20, 5, $fila['cedula'], 1, 0, "C");
        $pdf->Cell(40, 5, $fila['correo'], 1, 0, "C");
        $pdf->Cell(95, 5, $fila['Gerencia'], 1, 0, "C");
        $pdf->Cell(25, 5, $fila['nombre_cargo'], 1, 0, "C");
        $pdf->Cell(20, 5, $fila['usuario'], 1, 0, "C");
        $pdf->Cell(15, 5, $fila['passwordd'], 1, 1, "C");
    }
    $pdf->Output();









?>