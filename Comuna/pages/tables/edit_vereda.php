<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C.C Las Margaritas|Editar Vereda</title>
<?php include ('./template/header.php'); ?>
<?php 
    include ('./config/database.php');
    ob_start();
  //ususario
  
  $id=$_GET['id'];
  $sql="SELECT * FROM vereda where id_veredas='".$id."'";
  $resultadoVereda=mysqli_query($conexion,$sql);

  $filaFamilia=mysqli_fetch_assoc($resultadoVereda);
  $IdVereda=$filaFamilia["id_veredas"];
  $NombreVereda=$filaFamilia["num_vereda"];
  ?>
<section class="content">

<div class="container">
    
  <div class="row mt-5">

    <form class="row g-3 needs-validation " method="POST" enctype="multipart/form-data" id="formulario" novalidate >
    <div class=" position-relative">
            <input type="hidden" autocomplete="off" class="form-control" id="IdVereda" name="IdVereda" value="<?php echo $IdVereda; ?>" required>
        </div>
        <div class=" position-relative">
            <label for="NombreVereda" class="form-label">Nombre Vereda</label>
            <input type="text" autocomplete="off" class="form-control" id="NombreVereda" name="NombreVereda" value="<?php echo $NombreVereda; ?>" required>
            <div class="invalid-feedback" id="alertaNombreVereda">
           Escrive un valor permitido
            </div>
        </div>
        
        <div class="d-grid gap-2 d-md-block ">
            <button type="submit" class="btn btn-success px-5">Editar</button>
            <a type='button' class='btn btn-secondary px-5'href='./vereda.php'>
                <i class="bi bi-x-circle"></i>   Cancelar
            </a>
        </div>
    </form>
     </div>
        <div class="alert alert-success mt-2 d-none" id="alertSuccess">
        </div>
        <div class="alert alert-danger mt-2 d-none" id="alerteError">
     </div>
  </div>
</div>
</section>
<script src="./js_editar/vereda.js"></script>
<?php include ('./template/footer.php');?>