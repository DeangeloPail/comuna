<?php 
  $idFamilia=(isset($_POST['idFamilia']))?$_POST['idFamilia']:"";
  $apellidoFamilia=(isset($_POST['apellidoFamilia']))?$_POST['apellidoFamilia']:"";
  $NumeroCasa=(isset($_POST['NumeroCasa']))?$_POST['NumeroCasa']:"";
  $JefeCalle=(isset($_POST['JefeCalle']))?$_POST['JefeCalle']:"";
  $JefeFamilia=(isset($_POST['JefeFamilia']))?$_POST['JefeFamilia']:"";

  include("../config/database.php");

  try {
      
        $sentencia="UPDATE familias 
        SET numer_casa = '".$NumeroCasa."', ap_familia = '".$apellidoFamilia."', jefe_calle = '".$JefeCalle."', jef_familia = '".$JefeFamilia."' 
        WHERE familias.id_familia = '".$idFamilia."'";
        $ejecutado=mysqli_query($conexion,$sentencia);
    
      json_encode('true');
      header("location:../familias.php");
} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}
?>