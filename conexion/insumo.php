<?php
    include ("conexion.php");

    $r=mysqli_query($conexion,"SELECT * from insumos");

    while($row=mysqli_fetch_array($r)){
        $json["data"] []= $row;
    }
    echo json_encode($jason);
?>