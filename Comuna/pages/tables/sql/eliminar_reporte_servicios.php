<?php
$id=$_GET['id'];
include("../config/database.php");
$sql="DELETE FROM reporte_servicios where id_reporte='".$id."'";
    $resultado=mysqli_query($conexion,$sql);
    if($resultado){
        header("location:../reporte_servicios.php");
    }
?>
<script></script>