<?php
$id=$_GET['id'];
include("../config/database.php");
$sql="DELETE FROM int_familia where id_int_fam='".$id."'";
    $resultado=mysqli_query($conexion,$sql);
    if($resultado){
        header("location:../integrante_familia.php");
    }
?>