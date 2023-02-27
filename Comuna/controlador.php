<?php
session_start();
if (!empty($_POST["btningresar"])){
    if (!empty($_POST["username"]) and !empty($_POST["password"])) {
        $usuario=$_POST["username"];
        $password=$_POST["password"];
        $sql=$conexion->query("select * from usuario where nm_usuario='$usuario' and contrasena='$password'");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["id_usuario"]=$datos->id_usuario;
            $_SESSION["nm_usuario"]=$datos->nm_usuario;
            $_SESSION["contrasena"]=$datos->contrasena;
            header("location: index.php");
        } else {
            echo "<script>alert('Acceso Denegago')</script>";
        }
        

    } else {
        echo "<script>alert('Campos Vacios')</script>";
    }
    
}

?>