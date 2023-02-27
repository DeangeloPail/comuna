<?php 
  $idJefeCalle=(isset($_POST['idJefeCalle']))?$_POST['idJefeCalle']:"";
  $nombreJefeCalle=(isset($_POST['nombreJefeCalle']))?$_POST['nombreJefeCalle']:"";
  $DocumentoIdentidad=(isset($_POST['DocumentoIdentidad']))?$_POST['DocumentoIdentidad']:"";
  $Pasaje=(isset($_POST['Pasaje']))?$_POST['Pasaje']:"";
  $Vereda=(isset($_POST['Vereda']))?$_POST['Vereda']:"";

  include("../config/database.php");

  try {
      
        $sentencia="UPDATE jefe_de_calle 
        SET cedula_jfc = '".$DocumentoIdentidad."', nom_apelli = '".$nombreJefeCalle."', cod_pasaje = '".$Pasaje."', cod_vereda = '".$Vereda."' 
        WHERE jefe_de_calle.id_jef_cal = '".$idJefeCalle."'";
        $ejecutado=mysqli_query($conexion,$sentencia);
    
      json_encode('true');
      
} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}
?>