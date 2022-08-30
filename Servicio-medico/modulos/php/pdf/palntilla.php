<?php
   require("fpdf.php");

    class PDF extends FPDF
    {
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image("img/encabezado.jpeg", 5, 5, 150);
        // Arial bold 15
        $this->SetFont("Arial", "B", 12);
        // Título
        $this->Cell(150);
        //FECHA
        $this->Cell(20, 2, "FECHA:  "  .date("d/m/Y"), 0, 1, "L");
        // Salto de línea
        $this->Ln(10);
    }
    
    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        
        // Arial italic 8
        $this->SetFont('Arial','I',8);  
        // Número de página
        $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
    }
    }
?>  