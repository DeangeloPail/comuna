<?php
$id=$_GET['id'];
include("../config/database.php");
$sql="DELETE FROM familias where id_familia='".$id."'";
    $resultado=mysqli_query($conexion,$sql);
    if($resultado){
        header("location:../familias.php");
    }else{
        header("location:../familias.php");
    }
?>