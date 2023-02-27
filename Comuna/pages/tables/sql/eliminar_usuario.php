<?php
$id=$_GET['id'];
include("../config/database.php");
$sql="DELETE FROM usuario where id_usuario='".$id."'";
    $resultado=mysqli_query($conexion,$sql);
    if($resultado){
        header("location:../usuario.php");
    }
?>