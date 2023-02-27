<?php
$id=$_GET['id'];
include("../config/database.php");
$sql="DELETE FROM jefe_de_calle where id_jef_cal='".$id."'";
    $resultado=mysqli_query($conexion,$sql);
    if($resultado){
        header("location:../jefe_calle.php");
    }
?>