<?php
 $Familia=(isset($_POST['Familia']))?$_POST['Familia']:"";
 $Clap=(isset($_POST['Clap']))?$_POST['Clap']:"";
 $Gas=(isset($_POST['Gas']))?$_POST['Gas']:"";
 $ListaClap=(isset($_POST['ListaClap']))?$_POST['ListaClap']:"";
 $ListaGas=(isset($_POST['ListaGas']))?$_POST['ListaGas']:"";
 $FechaCancelado=(isset($_POST['FechaCancelado']))?$_POST['FechaCancelado']:"";
 include("../config/database.php");

 try {
     
       $sentencia=("INSERT INTO reporte_servicios ( familia_rp, servi_clap, servic_gas, clap_reprt, gas_report, fecha_entr) 
       VALUES ('$Familia','$Clap','$Gas','$ListaClap','$ListaGas','$FechaCancelado')");
       $ejecutado=mysqli_query($conexion,$sentencia);
   
     json_encode('true');
     
} catch(PDOException $error) {
   echo $error->getMessage();
   die();
}
?>