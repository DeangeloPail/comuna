<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C.C Las Margaritas|Repotes de Habitantes</title>
  <?php include ('./template/header.php');?>
<?php include ('./sql/vistas_tablas.php');?>

<section class="content">
<div class="container">
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Repotes de Habitantes</h1>
          </div>
          <div class="col-sm-3" style="margin-left: 15pc">
            <ol class="breadcrumb float-sm-right" >
              <li class="breadcrumb-item" ><a href=""><i class="bi bi-house-fill"></i></a></li>
              <li class="breadcrumb-item active">Repotes de Habitantes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <div class="row mt-">

    <div class="table-responsive">
      <table id="tabla2" class="table table-bordered table-striped">
      <thead>
        
        <th class="text-center" >Nombre</th>
        <th class="text-center" >Documento</th>
        <th class="text-center" >Sexo</th>
        <th class="text-center">Familia</th>
        <th class="text-center">Fecha de Nacimieto</th>
        <th class="text-center">Telefono</th>
        <th class="text-center">Profecion</th>
        <th class="text-center">condicion laboral</th>
       
        
      </thead>
      <tbody>
        <?php while($integrante=mysqli_fetch_assoc($resultadoIntegrante)){?>
        <tr>
          <td class="text-center"><?php echo $integrante['nombre_inf']; ?> <?php echo $integrante['apelli_inf']; ?></td>        
          <td class="text-center"><?php echo $integrante['cedula_inf']; ?></td>
          <td class="text-center"><?php echo $integrante['sexo_perso']; ?></td>
          <td class="text-center"><?php echo $integrante['ap_familia']; ?></td>
          <td class="text-center"><?php echo $integrante['fecha_naci']; ?></td>
          <td class="text-center"><?php echo $integrante['telef_intef']; ?></td>
          <td class="text-center"><?php echo $integrante['profecion_']; ?></td>
          <td class="text-center"><?php echo $integrante['tp_con_lab']; ?></td>
        
          
        </tr>
        <?php  }?>
      </tbody>
      <tfoot>
      <tr>
        <th class="text-center" >Nombre</th>
        <th class="text-center" >Documento</th>
        <th class="text-center" >Sexo</th>
        <th class="text-center">Familia</th>
        <th class="text-center">Fecha de Nacimieto</th>
        <th class="text-center">Telefono</th>
        <th class="text-center">Profecion</th>
        <th class="text-center">condicion laboral</th>
  
        
      </tr>
      </tfoot>
      </table>
    </div>
  </div>
</div>
</section>
<?php include ('./template/footer.php');?>