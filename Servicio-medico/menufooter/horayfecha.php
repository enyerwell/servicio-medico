<?php 
        echo  ("Fecha". "   ". " ");
        echo  date("d / m / Y");
        date_default_timezone_set("America/Caracas");
        $hora = date('h:i a',time() - 3600*date('I'));
        echo  (" ". "  ");
        echo  ("HORA");
        print "&nbsp;$hora&nbsp;"; 
?>