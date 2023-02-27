<?php
$host="localhost";
$bd="comuna";
$usuario="root";
$contraseña="";
try{
  $con=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contraseña);
  
}catch(Exeption $ex){
  echo $exe->getMessage();
}

?>