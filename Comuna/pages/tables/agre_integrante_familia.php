<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C.C Las Margaritas|Agregar Habitante</title>
<?php include ('./template/header.php'); ?>
<?php include ('./sql_agregar/mostrar_form.php'); ?>
<div class="container">
    
  <div class="row mt-5">

    <form class="row g-3 needs-validation " method="POST" enctype="multipart/form-data" id="formulario" novalidate >

        <div class=" position-relative">
            <label for="NombreIntFam" class="form-label">Nombre de integrante de familia</label>
            <input type="text" autocomplete="off" class="form-control" id="NombreIntFam" name="NombreIntFam" required>
            <div class="invalid-feedback" id="alertaNombreIntFam">
           Escrive un valor permitido
            </div>
        </div>

        <div class=" position-relative">
            <label for="ApellidoIntegrante" class="form-label">Apellido de integrante de familia</label>
            <input type="text" autocomplete="off" class="form-control" id="ApellidoIntegrante" name="ApellidoIntegrante"  required>
            <div class="invalid-feedback" id="alertaApellidoIntegrante">
           Escrive un valor permitido
            </div>
        </div>

        <div class=" position-relative">
            <label for="DocumentoInt" class="form-label">Documento de identidad</label>
            <input type="text" autocomplete="off" class="form-control" id="DocumentoInt" name="DocumentoInt"  required>
            <div class="invalid-feedback" id="alertaDocumentoInt">
           Escrive un valor permitido
            </div>
        </div>

        <div class=" position-relative">
            <label for="Sexo" class="form-label">Sexo</label>
            <select class="form-control my-3" name="Sexo" id="Sexo" required>
                <option selected disabled>Seleccione Sexo...</option>
                <?php while($listaSexo=mysqli_fetch_assoc($sexo)){?>
                        <option value="<?php echo $listaSexo['id_sexo_pr'];?>"><?php echo $listaSexo['sexo_perso']?></option>
                <?php }?>
            </select>
            <div class="invalid-feedback" id="alertaSexo">
            Escrive un valor permitido
            </div>
        </div>

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
            <label for="FechaDeNacimiento" class="form-label">Fecha de nacimiento </label>
            <input type="date" autocomplete="off" class="form-control" id="FechaDeNacimiento" name="FechaDeNacimiento"  required>
            <div class="invalid-feedback" id="alertaFechaDeNacimiento">
           Escrive un valor permitido
            </div>
        </div>

        <div class=" position-relative">
            <label for="Telefono" class="form-label">Telefono</label>
            <input type="tel" autocomplete="off" class="form-control" id="Telefono" name="Telefono"  required>
            <div class="invalid-feedback" id="alertaTelefono">
           Escrive un valor permitido
            </div>
        </div>
        <div class=" position-relative">
            <label for="Profecion" class="form-label">Profecion</label>
            <input type="text" autocomplete="off" class="form-control" id="Profecion" name="Profecion"  required>
            <div class="invalid-feedback" id="alertaProfecion">
           Escrive un valor permitido
            </div>
        </div>

        <div class=" position-relative">
            <label for="CondLaboral" class="form-label">Condicion Laboral</label>
            <select class="form-control my-3" name="CondLaboral" id="CondLaboral" required>
                <option selected disabled>Seleccione Condicion Laboral...</option>
                <?php while($listaCondLaboral=mysqli_fetch_assoc($condicionLaboral)){?>
                        <option value="<?php echo $listaCondLaboral['id_estatus'];?>"><?php echo $listaCondLaboral['tp_con_lab']?></option>
                <?php }?>
            </select>
            <div class="invalid-feedback" id="alertaCondLaboral">
            Escrive un valor permitido
            </div>
        </div>

        <div class=" position-relative">
            <label for="Enfermedad" class="form-label">Enfermedad</label>
            <input type="text" autocomplete="off" class="form-control" id="Enfermedad" name="Enfermedad"  required>
            <div class="invalid-feedback" id="alertaEnfermedad">
           Escrive un valor permitido
            </div>
        </div>

        
        <div class=" position-relative">
            <label for="Ayuda" class="form-label">Ayuda</label>
            <input type="text" autocomplete="off" class="form-control" id="Ayuda" name="Ayuda"  required>
            <div class="invalid-feedback" id="alertaAyuda">
           Escrive un valor permitido
            </div>
        </div>

        
        
        <div class=" position-relative">
            <label for="EstatusVacuna" class="form-label">Esta Vacunado/da</label>
            <select class="form-control my-3" name="EstatusVacuna" id="EstatusVacuna" required>
                <option selected disabled>Seleccione Condicion Laboral...</option>
                <option value="1">Vacundo</option>
                <option value="2">No Vacunado</option>
            </select>
            <div class="invalid-feedback" id="alertaEstatusVacuna">
            Escrive un valor permitido
            </div>
        </div>

        <div class=" position-relative">
            <label for="TipoVacuna" class="form-label">Tipo de Vacuna</label>
            <select class="form-control my-3" name="TipoVacuna" id="TipoVacuna" required>
                <option selected disabled>Seleccione Condicion Laboral...</option>
                <?php while($listaTipoVacuna=mysqli_fetch_assoc($vacunas)){?>
                        <option value="<?php echo $listaTipoVacuna['ide_vacuna'];?>"><?php echo $listaTipoVacuna['tip_vacuna']?></option>
                <?php }?>
            </select>
            <div class="invalid-feedback" id="alertaTipoVacuna">
            Escrive un valor permitido
            </div>
        </div>

        <div class=" position-relative">
            <label for="CantDosis" class="form-label">Cantidad de Dosis</label>
            <input type="text" autocomplete="off" class="form-control" id="CantDosis" name="CantDosis"  required>
            <div class="invalid-feedback" id="alertaCantDosis">
           Escrive un valor permitido
            </div>
        </div>
        
        <div class=" position-relative">
            <label for="Otros" class="form-label">Otros</label>
            <input type="text" autocomplete="off" class="form-control" id="Otros" name="Otros"  required>
            <div class="invalid-feedback" id="alertaOtros">
           Escrive un valor permitido
            </div>
        </div>
        

        
        <div class="d-grid gap-2 d-md-block">
            <button type="submit" class="btn btn-success px-5">Agregar</button>
            <a type='button' class='btn btn-secondary px-5'href='./integrante_familia.php'>
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
<script src="./js_agregar/integrante.js"></script>
<?php include ('./template/footer.php');?>