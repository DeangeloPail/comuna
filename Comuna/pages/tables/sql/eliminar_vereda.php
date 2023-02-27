<?php
$id=$_GET['id'];
include("../config/database.php");
$sql="DELETE FROM vereda where id_veredas='".$id."'";
    $resultado=mysqli_query($conexion,$sql);
    if($resultado){
        header("location:../vereda.php");
    }
    else{
        header("location:../vereda.php");
    }

?>