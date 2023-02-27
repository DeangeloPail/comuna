<?php
$id=$_GET['id'];
include("../config/database.php");
$sql="DELETE FROM pasajes where id_pasajes='".$id."'";
    $resultado=mysqli_query($conexion,$sql);
    if($resultado){
        header("location:../pasaje.php");
    }else{
        header("location:../pasaje.php");
    }

?>