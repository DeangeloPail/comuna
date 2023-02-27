<?php
$IdReporte=(isset($_POST['IdReporte']))?$_POST['IdReporte']:"";
 $Familia=(isset($_POST['Familia']))?$_POST['Familia']:"";
 $Clap=(isset($_POST['Clap']))?$_POST['Clap']:"";
 $Gas=(isset($_POST['Gas']))?$_POST['Gas']:"";
 $ListaClap=(isset($_POST['ListaClap']))?$_POST['ListaClap']:"";
 $ListaGas=(isset($_POST['ListaGas']))?$_POST['ListaGas']:"";
 $FechaCancelado=(isset($_POST['FechaCancelado']))?$_POST['FechaCancelado']:"";
 include("../config/database.php");

 try {
     
       $sentencia=("UPDATE reporte_servicios SET familia_rp= '".$Familia."',servi_clap= '".$Clap."',
       servic_gas='".$Gas."',clap_reprt='".$ListaClap."', gas_report= '".$ListaGas."',fecha_entr='".$FechaCancelado."'
       WHERE `reporte_servicios`.`id_reporte`='".$IdReporte."'");
       $ejecutado=mysqli_query($conexion,$sentencia);
   
     json_encode('true');
     header("location:../sevicios.php");

} catch(PDOException $error) {
   echo $error->getMessage();
   die();
}
?>