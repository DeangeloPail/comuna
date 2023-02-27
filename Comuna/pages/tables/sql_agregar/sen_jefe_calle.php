<?php 
  $nombreJefeCalle=(isset($_POST['nombreJefeCalle']))?$_POST['nombreJefeCalle']:"";
  $DocumentoIdentidad=(isset($_POST['DocumentoIdentidad']))?$_POST['DocumentoIdentidad']:"";
  $Pasaje=(isset($_POST['Pasaje']))?$_POST['Pasaje']:"";
  $Vereda=(isset($_POST['Vereda']))?$_POST['Vereda']:"";

  include("../config/database.php");

  try {
      
        $sentencia=("INSERT INTO jefe_de_calle (nom_apelli, cedula_jfc, cod_pasaje, cod_vereda) 
        VALUES ('$nombreJefeCalle','$DocumentoIdentidad','$Pasaje','$Vereda')");
        $ejecutado=mysqli_query($conexion,$sentencia);
    
      json_encode('true');
      
} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}
?>