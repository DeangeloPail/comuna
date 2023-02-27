<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C.C Las Margaritas|Reportes de Familias</title>

<?php include ('./template/header.php');?>
<?php include ('./sql/vistas_tablas.php');?>


<section class="content">
<div class="container">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Reportes de Familias</h1>
          </div>
          <div class="col-sm-3" style="margin-left: 15pc">
            <ol class="breadcrumb float-sm-right" >
              <li class="breadcrumb-item" ><a href=""><i class="bi bi-house-fill"></i></a></li>
              <li class="breadcrumb-item active">Reportes de Familias</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <div class="row mt-5">
  <div class="d-grid gap-2 col-12 mx-auto">
   
    <table id="tabla2" class="table table-bordered table-striped">
      <thead>
        <th class="text-center" >Apellio de Familia</th>
        <th class="text-center" >Numero de casa</th>
        <th class="text-center" >Jefe de Calle</th>
        <th class="text-center" >Jefe de Familia</th>
        
      </thead>
      <tbody>
        <?php while($Familias=mysqli_fetch_assoc($resultadoFamilias))
                        {?>
        <tr>
          <td class="text-center"><?php echo $Familias['ap_familia']; ?></td>
          <td class="text-center"><?php echo $Familias['numer_casa']; ?></td>
          <td class="text-center"><?php echo $Familias['nom_apelli']; ?></td>
          <td class="text-center"><?php echo $Familias['jef_familia']; ?></td>
          
        </tr>
        <?php }?>
      </tbody>
      <tfoot>
      <tr>
      <th class="text-center" >Apellio de Familia</th>
        <th class="text-center" >Numero de casa</th>
        <th class="text-center" >Jefe de Calle</th>
        <th class="text-center" >Jefe de Familia</th>
        
      </tr>
      </tfoot>
    </table>
  </div>
</div>
</section>
<?php include ('./template/footer.php');?>