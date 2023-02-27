<?php 
  $IdVereda=(isset($_POST['IdVereda']))?$_POST['IdVereda']:"";
  $NombreVereda=(isset($_POST['NombreVereda']))?$_POST['NombreVereda']:"";

  include("../config/database.php");

  try {
      
        $sentencia="UPDATE vereda 
        SET num_vereda = '".$NombreVereda."'WHERE vereda.id_veredas = '".$IdVereda."'";
        $ejecutado=mysqli_query($conexion,$sentencia);
    
      json_encode('true');
      
} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}
?>