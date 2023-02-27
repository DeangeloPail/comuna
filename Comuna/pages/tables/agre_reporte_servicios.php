<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C.C Las Margaritas|Crear Reporte</title>
<?php include ('./template/header.php'); ?>
<?php include ('./sql_agregar/mostrar_form.php'); ?>
<div class="container">
    
  <div class="row mt-5">

    <form class="row g-3 needs-validation " method="POST" enctype="multipart/form-data" id="formulario" novalidate >
        <div class=" position-relative">
            <label for="Familia" class="form-label">Familia</label>
            <select class="form-control my-3" name="Familia" id="Familia" required>
                <option selected disabled>Seleccione Familia...</option>
                <?php while($listaFamilia=mysqli_fetch_assoc($Familia)){?>
                        <option value="<?php echo $listaFamilia['id_familia'];?>"><?php echo $listaFamilia['ap_familia']?></option>
                <?php }?>
            </select>
            <div class="invalid-feedback" id="alertaFamilia">
            Escrive un valor permitido
            </div>
        </div>
        
        <div class=" position-relative">
            <label for="Clap" class="form-label">Clap</label>
            <select class="form-control my-3" name="Clap" id="Clap" required>
                <option selected disabled>Seleccione Clap...</option>
                <?php while($listaClap=mysqli_fetch_assoc($servicioClap)){?>
                        <option value="<?php echo $listaClap['id_sv_clap'];?>"><?php echo $listaClap['estatu_clap']?></option>
                <?php }?>
            </select>
            <div class="invalid-feedback" id="alertaClap">
            Escrive un valor permitido
            </div>
        </div>

        <div class=" position-relative">
            <label for="Gas" class="form-label">Gas</label>
            <select class="form-control my-3" name="Gas" id="Gas" required>
                <option selected disabled>Seleccione Gas...</option>
                <?php while($listaGas=mysqli_fetch_assoc($servicioGas)){?>
                        <option value="<?php echo $listaGas['id_ser_gas'];?>"><?php echo $listaGas['estatu_gas']?></option>
                <?php }?>
            </select>
            <div class="invalid-feedback" id="alertaGas">
            Escrive un valor permitido
            </div>
        </div>

        <div class=" position-relative">
            <label for="ListaClap" class="form-label">Lista Clap</label>
            <select class="form-control my-3" name="ListaClap" id="ListaClap" required>
                <option selected disabled>Seleccione Condicion Laboral...</option>
                <?php while($listaListaClap=mysqli_fetch_assoc($Clap)){?>
                        <option value="<?php echo $listaListaClap['ident_clap'];?>"><?php echo $listaListaClap['tipo_clap_']?></option>
                <?php }?>
            </select>
            <div class="invalid-feedback" id="alertaListaClap">
            Escrive un valor permitido
            </div>
        </div>

        <div class=" position-relative">
            <label for="ListaGas" class="form-label">Lista Gas</label>
            <select class="form-control my-3" name="ListaGas" id="ListaGas" required>
                <option selected disabled>Seleccione Condicion Laboral...</option>
                <?php while($listaListaGas=mysqli_fetch_assoc($Gas)){?>
                        <option value="<?php echo $listaListaGas['codigo_gas'];?>"><?php echo $listaListaGas['tp_bombona']?></option>
                <?php }?>
            </select>
            <div class="invalid-feedback" id="alertaListaGas">
            Escrive un valor permitido
            </div>
        </div>

        <div class=" position-relative">
            <label for="FechaCancelado" class="form-label">Fecha de pago </label>
            <input type="date" autocomplete="off" class="form-control" id="FechaCancelado" name="FechaCancelado"  required>
            <div class="invalid-feedback" id="alertaFechaCancelado">
           Escrive un valor permitido
            </div>
        </div>


        <div class="d-grid gap-2 d-md-block">
            <button type="submit" class="btn btn-success px-5">Agregar</button>
            <a type='button' class='btn btn-secondary px-5'href='./reporte_servicios.php'>
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
<script src="./js_agregar/reporte.js"></script>
<?php include ('./template/footer.php');?>