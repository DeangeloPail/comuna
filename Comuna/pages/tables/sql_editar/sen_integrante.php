<?php
  $IdIntegrante=(isset($_POST['IdIntegrante']))?$_POST['IdIntegrante']:"";    
  $NombreIntFam=(isset($_POST['NombreIntFam']))?$_POST['NombreIntFam']:"";
  $ApellidoIntegrante=(isset($_POST['ApellidoIntegrante']))?$_POST['ApellidoIntegrante']:"";
  $DocumentoInt=(isset($_POST['DocumentoInt']))?$_POST['DocumentoInt']:"";
  $Sexo=(isset($_POST['Sexo']))?$_POST['Sexo']:"";
  $Familia=(isset($_POST['Familia']))?$_POST['Familia']:"";
  $FechaDeNacimiento=(isset($_POST['FechaDeNacimiento']))?$_POST['FechaDeNacimiento']:"";
  $Telefono=(isset($_POST['Telefono']))?$_POST['Telefono']:"";
  $Profecion=(isset($_POST['Profecion']))?$_POST['Profecion']:"";
  $CondLaboral=(isset($_POST['CondLaboral']))?$_POST['CondLaboral']:"";
  $Enfermedad=(isset($_POST['Enfermedad']))?$_POST['Enfermedad']:"";
  $Ayuda=(isset($_POST['Ayuda']))?$_POST['Ayuda']:"";
  $EstatusVacuna=(isset($_POST['EstatusVacuna']))?$_POST['EstatusVacuna']:"";
  $TipoVacuna=(isset($_POST['TipoVacuna']))?$_POST['TipoVacuna']:"";
  $CantDosis=(isset($_POST['CantDosis']))?$_POST['CantDosis']:"";
  $Otros=(isset($_POST['Otros']))?$_POST['Otros']:"";
  

  include("../config/database.php");
  
  try {
      $sentencia="UPDATE int_familia 
      SET cedula_inf = '".$DocumentoInt."',
       nombre_inf = '".$NombreIntFam."', 
       apelli_inf = '".$ApellidoIntegrante."', 
       sexo_intef = '".$Sexo."', 
       enfermedad = '".$Enfermedad."', 
       ayuda_reci = '".$Ayuda."', 
       familia_in = '".$Familia."', 
       fecha_naci = '".$FechaDeNacimiento."',
        telef_intef = '".$Telefono."',
        profecion_ = '".$Profecion."', 
       rf_con_lab = '".$CondLaboral."', 
       statu_vacu = '".$EstatusVacuna."', 
       tip_vacuna = '".$TipoVacuna."', 
       nume_dosis = '".$CantDosis."',
        otras_vacu = '".$Otros."' 
        WHERE int_familia.id_int_fam = '".$IdIntegrante."'";
      $ejecutado=mysqli_query($conexion,$sentencia);
      json_encode('true');
      
} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}
?>