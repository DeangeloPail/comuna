<?php 
  $IdUsuario=(isset($_POST['IdUsuario']))?$_POST['IdUsuario']:"";
  $Contrasena=(isset($_POST['Contrasena']))?$_POST['Contrasena']:"";
  $NombreUsuario=(isset($_POST['NombreUsuario']))?$_POST['NombreUsuario']:"";

  include("../config/database.php");

  try {
      
        $sentencia="UPDATE usuario 
        SET nm_usuario = '".$NombreUsuario."', contrasena = '".$Contrasena."'WHERE usuario.id_usuario = '".$IdUsuario."'";
        $ejecutado=mysqli_query($conexion,$sentencia);
    
      json_encode('true');
      
} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}
?>