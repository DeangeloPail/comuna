<?php 
  $NombreVereda=(isset($_POST['NombreVereda']))?$_POST['NombreVereda']:"";


  include("../config/database.php");

  try {
      
        $sentencia=("INSERT INTO `vereda` (`num_vereda`) VALUES ('$NombreVereda')");
        $ejecutado=mysqli_query($conexion,$sentencia);
      
        json_encode('true');
      
} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}
?>