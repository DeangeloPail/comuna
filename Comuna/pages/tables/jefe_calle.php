<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C.C Las Margaritas| Jefes de calles</title>
<?php include ('./template/header.php');?>
<?php include ('./sql/vistas_tablas.php');?>
<script type="text/javascript">
  function confirmar(){
    return confirm('¿Estas Seguro?, se eliminaran los datos');
  }
</script>
<section class="content">
<div class="container">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Jefes de Calles</h1>
          </div>
          <div class="col-sm-3" style="margin-left: 15pc">
            <ol class="breadcrumb float-sm-right" >
              <li class="breadcrumb-item" ><a href=""><i class="bi bi-house-fill"></i></a></li>
              <li class="breadcrumb-item active">Jefes de Calles</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    
  <div class="row mt-5">
  <div class="d-grid gap-2 col-3 mx-auto">
    <a type="button" class="btn btn-info" href="./agre_jefe_calle.php">Agregar <i class=" mx-1 bi bi-plus-square"></i></a>
  </div>
    <table id="tabla1" class="table table-bordered table-striped">
      <thead>
        <th class="text-center" >Documento</th>
        <th class="text-center" >Nombre</th>
        <th class="text-center" >Pasaje</th>
        <th class="text-center" >Vereda</th>
        <th class="text-center">Accion</th>
      </thead>
      <tbody>
        <?php while($jefe=mysqli_fetch_assoc($resultadoJefeCalle))
                        {?>
        <tr>
          <td class="text-center"><?php echo $jefe['cedula_jfc']; ?></td>
          <td class="text-center"><?php echo $jefe['nom_apelli']; ?></td>
          <td class="text-center"><?php echo $jefe['num_pasaje']; ?></td>
          <td class="text-center"><?php echo $jefe['num_vereda']; ?></td>
          <td class="text-center"><?php echo "<a type='submit' class='btn btn-outline-dark'
                              href='./edit_jefe_calle.php?id=".$jefe['id_jef_cal']."'>
                              <i class='bi bi-pencil-square'></i>
              </a>";?>
                <?php echo "<a type='submit' class='btn btn-outline-dark'
                              href='./sql/eliminar_jefe_calle.php?id=".$jefe['id_jef_cal']."'
                              onclick='return confirmar()'>
              <i class='bi bi-trash'></i>
              </a>";?>
          </td>
        </tr>
        <?php }?>
      </tbody>
      <tfoot>
      <tr>
        <th class="text-center" >Documento</th>
        <th class="text-center" >Nombre</th>
        <th class="text-center" >Pasaje</th>
        <th class="text-center" >Vereda</th>
        <th class="text-center">Accion</th>
      </tr>
      </tfoot>
    </table>
  </div>
</div>
</section>
<?php include ('./template/footer.php');?>

