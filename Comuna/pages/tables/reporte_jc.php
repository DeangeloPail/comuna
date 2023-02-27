<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C.C Las Margaritas| Jefes de calles activos</title>
<?php include ('./template/header.php');?>
<?php include ('./sql/vistas_tablas.php');?>

<section class="content">
<div class="container">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    
  <div class="row mt-5">
  <div class="d-grid gap-2 col-12 mx-auto">
   
  </div>
    <table id="tabla2" class="table table-bordered table-striped">
      <thead>
        <th class="text-center" >Documento</th>
        <th class="text-center" >Nombre</th>
        <th class="text-center" >Pasaje</th>
        <th class="text-center" >Vereda</th>
        
      </thead>
      <tbody>
        <?php while($jefe=mysqli_fetch_assoc($resultadoJefeCalle))
                        {?>
        <tr>
          <td class="text-center"><?php echo $jefe['cedula_jfc']; ?></td>
          <td class="text-center"><?php echo $jefe['nom_apelli']; ?></td>
          <td class="text-center"><?php echo $jefe['num_pasaje']; ?></td>
          <td class="text-center"><?php echo $jefe['num_vereda']; ?></td>
        </tr>
        <?php }?>
      </tbody>
      <tfoot>
      <tr>
        <th class="text-center" >Documento</th>
        <th class="text-center" >Nombre</th>
        <th class="text-center" >Pasaje</th>
        <th class="text-center" >Vereda</th>

      </tr>
      </tfoot>
    </table>
  </div>
</div>
</section>
<?php include ('./template/footer.php');?>

