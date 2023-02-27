<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C.C Las Margaritas|Crear Usuario</title>
<?php include ('./template/header.php'); ?>
<section class="content">

<div class="container">
    
  <div class="row mt-5">

    <form class="row g-3 needs-validation " method="POST" enctype="multipart/form-data" id="formulario" novalidate >

        <div class=" position-relative">
            <label for="NombreUsuario" class="form-label">Nombre Usuario</label>
            <input type="text" autocomplete="off" class="form-control" id="NombreUsuario" name="NombreUsuario" required>
            <div class="invalid-feedback" id="alertaNombreUsuario">
           Escrive un valor permitido
            </div>
        </div>
        <div class=" position-relative">
            <label for="Contrasena" class="form-label">Contraseña</label>
            <input type="text" autocomplete="off" class="form-control" id="Contrasena" name="Contrasena"  required>
            <div class="invalid-feedback" id="alertaContrasena">
           Escrive un valor permitido
            </div>
        </div>
        
        <div class="d-grid gap-2 d-md-block ">
            <button type="submit" class="btn btn-success px-5">Agregar</button>
            <a type='button' class='btn btn-secondary px-5'href='./usuario.php'>
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
<script src="./js_agregar/usuario.js"></script>
<?php include ('./template/footer.php');?>