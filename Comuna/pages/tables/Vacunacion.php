<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C.C Las Margaritas|Vacunados</title>
<?php include ('./template/header.php');?>
<?php include ('./sql/vistas_tablas.php');?>
<section class="content">
<div class="container">
     <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vacunados</h1>
          </div>
          <div class="col-sm-3" style="margin-left: 15pc">
            <ol class="breadcrumb float-sm-right" >
              <li class="breadcrumb-item" ><a href=""><i class="bi bi-house-fill"></i></a></li>
              <li class="breadcrumb-item active">Vacunados</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  
    <div class="table-responsive">
      <table id="tabla2" class="table table-bordered table-striped">
      <thead>
        <th class="text-center" >Nombre</th>
        <th class="text-center">Enfermedad</th>
        <th class="text-center">Ayudas Recibidas</th>
        <th class="text-center">Vacunado</th>
        <th class="text-center">Tipo de vacuna</th>
        <th class="text-center">Dosis</th>
        <th class="text-center">Otras Vacunas</th>
      </thead>
      <tbody>
        <?php while($integrante=mysqli_fetch_assoc($resultadoIntegrante)){?>
        <tr>
          <td class="text-center"><?php echo $integrante['nombre_inf']; ?> <?php echo $integrante['apelli_inf']; ?></td>        
          <td class="text-center"><?php echo $integrante['enfermedad']; ?></td>
          <td class="text-center"><?php echo $integrante['ayuda_reci']; ?></td>
          <td class="text-center"><?php echo $integrante['vac_estatu']; ?></td>
          <td class="text-center"><?php echo $integrante['tip_vacuna']; ?></td>
          <td class="text-center"><?php echo $integrante['nume_dosis']; ?></td>
          <td class="text-center"><?php echo $integrante['otras_vacu']; ?></td>
        </tr>
        <?php  }?>
      </tbody>
      <tfoot>
      <tr>
        <th class="text-center" >Nombre</th>
        <th class="text-center">Enfermedad</th>
        <th class="text-center">Ayudas Recibidas</th>
        <th class="text-center">Vacunado</th>
        <th class="text-center">Tipo de vacuna</th>
        <th class="text-center">Dosis</th>
        <th class="text-center">Otras Vacunas</th>        
      </tr>
      </tfoot>
      </table>
    </div>
  </div>
</div>
</section>
<?php include ('./template/footer.php');?>