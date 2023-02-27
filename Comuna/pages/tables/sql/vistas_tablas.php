<?php 
  include ('./config/database.php');
  ob_start();

  //vista de jefe de calle 
  $sqlJefeCalle="SELECT `id_jef_cal`,`cedula_jfc`,`nom_apelli`,pasajes.num_pasaje,vereda.num_vereda FROM `jefe_de_calle`
  INNER JOIN pasajes on pasajes.id_pasajes=jefe_de_calle.cod_pasaje
  INNER JOIN vereda on vereda.id_veredas=jefe_de_calle.cod_vereda;";
  $resultadoJefeCalle=mysqli_query($conexion,$sqlJefeCalle);
//vista de familias
  $sqlFamilias="SELECT `id_familia`,`ap_familia`,`numer_casa`,jefe_de_calle.nom_apelli,`jef_familia` FROM `familias`
  LEFT JOIN jefe_de_calle ON jefe_de_calle.cedula_jfc=familias.jefe_calle";
  $resultadoFamilias=mysqli_query($conexion,$sqlFamilias);
//vista Integrantes
  $sqlIntegrante="SELECT `id_int_fam`,`cedula_inf`,`nombre_inf`,`apelli_inf`,sexo.sexo_perso, `enfermedad`,
  `ayuda_reci`,familias.ap_familia,`fecha_naci`,`telef_intef`, `profecion_`,condicion_laboral.tp_con_lab,vacunas.tip_vacuna,
  vacuna_int.vac_estatu,`nume_dosis`,`otras_vacu`
    FROM `int_familia` 
    INNER JOIN familias on familias.id_familia=int_familia.familia_in 
    INNER JOIN sexo on sexo.id_sexo_pr=int_familia.sexo_intef 
    INNER JOIN condicion_laboral on condicion_laboral.id_estatus=int_familia.rf_con_lab
    INNER JOIN vacunas on vacunas.ide_vacuna=int_familia.tip_vacuna
    INNER JOIN vacuna_int on vacuna_int.id_vacuna_=int_familia.statu_vacu
    ORDER BY `int_familia`.`cedula_inf` ASC;";
  $resultadoIntegrante=mysqli_query($conexion,$sqlIntegrante);

  $sqlUsuario="SELECT * FROM `usuario`";
  $resultadoUsuario=mysqli_query($conexion,$sqlUsuario);
  
  $sqlVereda="SELECT * FROM `vereda`";
  $resultadoVereda=mysqli_query($conexion,$sqlVereda);
  
  $sqlPasaje="SELECT * FROM `pasajes`";
  $resultadoPasaje=mysqli_query($conexion,$sqlPasaje);
  
?>