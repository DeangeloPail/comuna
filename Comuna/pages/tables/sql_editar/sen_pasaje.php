<?php 
  $IdPasaje=(isset($_POST['IdPasaje']))?$_POST['IdPasaje']:"";
  $NombrePasaje=(isset($_POST['NombrePasaje']))?$_POST['NombrePasaje']:"";

  include("../config/database.php");

  try {
      
        $sentencia="UPDATE pasajes 
        SET num_pasaje = '".$NombrePasaje."'WHERE pasajes.id_pasajes = '".$IdPasaje."'";
        $ejecutado=mysqli_query($conexion,$sentencia);
    
      json_encode('true');
      
} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}
?>