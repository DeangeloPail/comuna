<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C.C Las Margaritas|Editar Familia</title>
<?php include ('./template/header.php'); ?>
<?php 
    include ('./config/database.php');
    ob_start();
  //familias

  $sql="SELECT * FROM `jefe_de_calle`";
  $jefeCalle=mysqli_query($conexion,$sql);
  
  $id=$_GET['id'];
  $sql="SELECT * FROM familias where id_familia='".$id."'";
  $resultadoFamilia=mysqli_query($conexion,$sql);

  $filaFamilia=mysqli_fetch_assoc($resultadoFamilia);
  $idFamilia=$filaFamilia["id_familia"];
  $apellidoFamilia=$filaFamilia["ap_familia"];
  $NumeroCasa=$filaFamilia["numer_casa"];
  $JefeCalle=$filaFamilia["jefe_calle"];
  $JefeFamilia=$filaFamilia["jef_familia"]; ?>
<div class="container">
    
  <div class="row mt-5">

    <form class="row g-3 needs-validation " method="POST" enctype="multipart/form-data" id="formulario" novalidate >
        <div class = "form-group">
            <input type="hidden"  required readonly class="form-control mt-3" value="<?php echo $idFamilia; ?>" name="idFamilia" id="idFamilia">
        </div>
        <div class=" position-relative">
            <label for="apellidoFamilia" class="form-label">Apellido de Familia</label>
            <input type="text" autocomplete="off" class="form-control" value="<?php echo $apellidoFamilia; ?>" id="apellidoFamilia" name="apellidoFamilia" required>
            <div class="invalid-feedback" id="alertaApellidoFamilia">
           Escrive un valor permitido
            </div>
        </div>
        <div class=" position-relative">
            <label for="NumeroCasa" class="form-label">Numero de Casa</label>
            <input type="text" autocomplete="off" class="form-control" value="<?php echo $NumeroCasa; ?>" id="NumeroCasa" name="NumeroCasa"  required>
            <div class="invalid-feedback" id="alertaNumeroCasa">
           Escrive un valor permitido
            </div>
        </div>
        <div class=" position-relative">
            <label for="JefeCalle" class="form-label">Jefe de Calle</label>
            <select class="form-control my-3" name="JefeCalle" id="JefeCalle" value="<?php echo $JefeCalle; ?>" required>
                <option selected disabled>Seleccione Epecialidad...</option>
                <?php while($ListaJefe=mysqli_fetch_assoc($jefeCalle)){?>
                        <option value="<?php echo $ListaJefe['cedula_jfc'];?>"><?php echo $ListaJefe['nom_apelli']?></option>
                <?php }?>
            </select>
            <div class="invalid-feedback" id="alertaJefeCalle">
            Escrive un valor permitido
            </div>
        </div>
        <div class=" position-relative">
            <label for="JefeFamilia" class="form-label">Jefe de Familia</label>
            <input type="text" autocomplete="off" class="form-control" value="<?php echo $JefeFamilia; ?>" id="JefeFamilia" name="JefeFamilia"  required>
            <div class="invalid-feedback" id="alertaJefeFamilia">
           Escrive un valor permitido
            </div>
        </div>
        
        <div class="d-grid gap-2 d-md-block ">
            <button type="submit" class="btn btn-success px-5">Editar</button>
            <a type='button' class='btn btn-secondary px-5'href='./familias.php'>
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
<script src="./js_editar/familias.js"></script>
<?php include ('./template/footer.php');?>