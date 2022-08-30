<?php
    require ("conexion.php");
        $query = "SELECT * FROM `material` INNER JOIN tipo_de_material ON material.cod_tmaterial = tipo_de_material.cod_tmaterial ORDER BY material.ID DESC";
        $r=mysqli_query($conexion,$query);

    while($row=mysqli_fetch_array($r)){
        $json["data"] []= $row;
    }
    echo json_encode($json);
?>    
