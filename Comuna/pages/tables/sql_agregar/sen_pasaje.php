<?php 
  $NombrePasaje=(isset($_POST['NombrePasaje']))?$_POST['NombrePasaje']:"";


  include("../config/database.php");

  try {
      
        $sentencia=("INSERT INTO `pasajes` (`num_pasaje`) VALUES ('$NombrePasaje')");
        $ejecutado=mysqli_query($conexion,$sentencia);
      
        json_encode('true');
      
} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}
?>