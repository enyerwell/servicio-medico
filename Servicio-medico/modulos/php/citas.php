<?php
    require ("conexion.php");
        $query = "SELECT * FROM cita ORDER BY id DESC";
    $r=mysqli_query($conexion,$query);

    while($row=mysqli_fetch_array($r)){
        $json["data"] []= $row;
    }
    echo json_encode($json);
?>    
