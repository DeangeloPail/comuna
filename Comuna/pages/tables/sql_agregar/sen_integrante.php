<?php
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
        $sentencia=("INSERT INTO `int_familia` (`nombre_inf`, `apelli_inf`, `cedula_inf`, `sexo_intef`,`familia_in`,
        `fecha_naci`,`telef_intef`,`profecion_`,`rf_con_lab`,`enfermedad`,`ayuda_reci`,`statu_vacu`, 
        `tip_vacuna`, `nume_dosis`, `otras_vacu`) 
        VALUES ('$NombreIntFam','$ApellidoIntegrante','$DocumentoInt','$Sexo','$Familia','$FechaDeNacimiento',
        '$Telefono','$Profecion','$CondLaboral','$Enfermedad','$Ayuda','$EstatusVacuna','$TipoVacuna','$CantDosis','$Otros')");
        $ejecutado=mysqli_query($conexion,$sentencia);
            
      json_encode('true');
      
} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}
?>