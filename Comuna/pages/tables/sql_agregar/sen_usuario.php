<?php 
  $NombreUsuario=(isset($_POST['NombreUsuario']))?$_POST['NombreUsuario']:"";
  $Contrasena=(isset($_POST['Contrasena']))?$_POST['Contrasena']:"";


  include("../config/database.php");

  try {
      
        $sentencia=("INSERT INTO `usuario` (`nm_usuario`, `contrasena`) VALUES ('$NombreUsuario', '$Contrasena')");
        $ejecutado=mysqli_query($conexion,$sentencia);
      
        json_encode('true');
      
} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}
?>