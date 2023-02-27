<?php
include ('./config/database.php');
ob_start();
//jefe de calle
$sql="SELECT * FROM `pasajes`";
$pasaje=mysqli_query($conexion,$sql);

$sql="SELECT * FROM `vereda`";
$vereda=mysqli_query($conexion,$sql);
//familia
$sql="SELECT * FROM `jefe_de_calle`";
$jefeCalle=mysqli_query($conexion,$sql);
//integrante
//Sexo
$sql="SELECT * FROM `sexo`";
$sexo=mysqli_query($conexion,$sql);
//Familia
$sql="SELECT * FROM `familias`";
$Familia=mysqli_query($conexion,$sql);
//condicion laborarl
$sql="SELECT * FROM `condicion_laboral`";
$condicionLaboral=mysqli_query($conexion,$sql);
//condicion servicio Clap
$sql="SELECT * FROM `servicio_clap`";
$servicioClap=mysqli_query($conexion,$sql);
//condicion servicio gas
$sql="SELECT * FROM `servicio_gas`";
$servicioGas=mysqli_query($conexion,$sql);
//condicion Clap
$sql="SELECT * FROM `clap`";
$Clap=mysqli_query($conexion,$sql);


$sql="SELECT * FROM `gas`";
$Gas=mysqli_query($conexion,$sql);
//condicion gas
$sql="SELECT * FROM `vacunas`";
$vacunas=mysqli_query($conexion,$sql);
//


?>