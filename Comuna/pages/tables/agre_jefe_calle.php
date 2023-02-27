<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C.C Las Margaritas|Agregar Jefe de Calle</title>
<?php include ('./template/header.php'); ?>
<?php include ('./sql_agregar/mostrar_form.php'); ?>
<div class="container">
    
  <div class="row mt-5">

    <form class="row g-3 needs-validation " method="POST" enctype="multipart/form-data" id="formulario" novalidate >

        <div class=" position-relative">
            <label for="nombreJefeCalle" class="form-label">Nombre de Jefe de Calle</label>
            <input type="text" autocomplete="off" class="form-control" id="nombreJefeCalle" name="nombreJefeCalle" required>
            <div class="invalid-feedback" id="alertaNombreJefe">
           Escrive un valor permitido
            </div>
        </div>
        <div class=" position-relative">
            <label for="DocumentoIdentidad" class="form-label">Documento Identidad</label>
            <input type="text" autocomplete="off" class="form-control" id="DocumentoIdentidad" name="DocumentoIdentidad"  required>
            <div class="invalid-feedback" id="alertaDocumentoIdentidad">
           Escrive un valor permitido
            </div>
        </div>
        <div class=" position-relative">
            <label for="Pasaje" class="form-label">Pasaje</label>
            <select class="form-control my-3" name="Pasaje" id="Pasaje" required>
                <option selected disabled>Seleccione Epecialidad...</option>
                <?php while($ListaPasaje=mysqli_fetch_assoc($pasaje)){?>
                        <option value="<?php echo $ListaPasaje['id_pasajes'];?>"><?php echo $ListaPasaje['num_pasaje']?></option>
                <?php }?>
            </select>
            <div class="invalid-feedback" id="alertaPasaje">
            Escrive un valor permitido
            </div>
        </div>
        <div class=" position-relative">
            <label for="Vereda" class="form-label">Vereda</label>
            <select class="form-control my-3" name="Vereda" id="Vereda"required>
                <option selected disabled>Seleccione Epecialidad...</option>
                <?php while($ListaVereda=mysqli_fetch_assoc($vereda)){?>
                        <option value="<?php echo $ListaVereda['id_veredas'];?>"><?php echo $ListaVereda['num_vereda']?></option>
                <?php }?>
            </select>
            <div class="invalid-feedback" id="alertaVereda">
            Escrive un valor permitido
            </div>
        
        <div class="d-grid gap-2 d-md-block ">
            <button type="submit" class="btn btn-success px-5">Agregar</button>
            <a type='button' class='btn btn-secondary px-5'href='./jefe_calle.php'>
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
<script src="./js_agregar/jefe_calle.js"></script>
<?php include ('./template/footer.php');?>