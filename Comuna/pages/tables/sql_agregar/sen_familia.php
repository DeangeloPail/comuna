<?php 
  $apellidoFamilia=(isset($_POST['apellidoFamilia']))?$_POST['apellidoFamilia']:"";
  $NumeroCasa=(isset($_POST['NumeroCasa']))?$_POST['NumeroCasa']:"";
  $JefeCalle=(isset($_POST['JefeCalle']))?$_POST['JefeCalle']:"";
  $JefeFamilia=(isset($_POST['JefeFamilia']))?$_POST['JefeFamilia']:"";

  include("../config/database.php");

  try {
      
        $sentencia=("INSERT INTO `familias` (`ap_familia`, `numer_casa`, `jefe_calle`, `jef_familia`) 
        VALUES ('$apellidoFamilia','$NumeroCasa','$JefeCalle','$JefeFamilia')");
        $ejecutado=mysqli_query($conexion,$sentencia);
      json_encode('true');
      
} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}
?>