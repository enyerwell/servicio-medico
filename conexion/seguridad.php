<?php 
require("conexion.php");

if(!isset($_SESSION)) 
    { 
        session_start(); 
        $loging=$_SESSION['log'];

if(!$loging){
    header("location:../index.php ");
    session_destroy();

}else{
    $name=$_SESSION['Nombre'];
}

    }


?>