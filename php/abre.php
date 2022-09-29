<?php
    $conexion = new mysqli("localhost", "root", "", "empresa");
    if($conexion){
        }else{
            echo "Falla en la conexion";
        }
?>
