<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C.C Las Margaritas|Editar Pasaje</title>
<?php include ('./template/header.php'); ?>
<?php 
    include ('./config/database.php');
    ob_start();
  //ususario
  
  $id=$_GET['id'];
  $sql="SELECT * FROM pasajes where id_pasajes='".$id."'";
  $resultadopasaje=mysqli_query($conexion,$sql);

  $filaFamilia=mysqli_fetch_assoc($resultadopasaje);
  $IdPasaje=$filaFamilia["id_pasajes"];
  $NombrePasaje=$filaFamilia["num_pasaje"];
  ?>
<section class="content">

<div class="container">
    
  <div class="row mt-5">

    <form class="row g-3 needs-validation " method="POST" enctype="multipart/form-data" id="formulario" novalidate >
    <div class=" position-relative">
            <input type="hidden" autocomplete="off" class="form-control" id="IdPasaje" name="IdPasaje" value="<?php echo $IdPasaje; ?>" required>
        </div>
        <div class=" position-relative">
            <label for="NombrePasaje" class="form-label">Nombre pasaje</label>
            <input type="text" autocomplete="off" class="form-control" id="NombrePasaje" name="NombrePasaje" value="<?php echo $NombrePasaje; ?>" required>
            <div class="invalid-feedback" id="alertaNombrePasaje">
           Escrive un valor permitido
            </div>
        </div>
        
        <div class="d-grid gap-2 d-md-block ">
            <button type="submit" class="btn btn-success px-5">Editar</button>
            <a type='button' class='btn btn-secondary px-5'href='./pasaje.php'>
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
<script src="./js_editar/pasaje.js"></script>
<?php include ('./template/footer.php');?>