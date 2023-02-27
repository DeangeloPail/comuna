<?php include ('./template/header.php'); ?>
<?php 
    include ('./config/database.php');
    ob_start();
    //reporte de servixios 
    //Familia
    $sql="SELECT * FROM `familias`";
    $FamiliaReporte=mysqli_query($conexion,$sql);

    //condicion servicio Clap
    $sql="SELECT * FROM `servicio_clap`";
    $servicioClap=mysqli_query($conexion,$sql);
    //condicion servicio gas
    $sql="SELECT * FROM `servicio_gas`";
    $servicioGas=mysqli_query($conexion,$sql);
    //condicion Clap
    $sql="SELECT * FROM `clap`";
    $Clap=mysqli_query($conexion,$sql);
    //condicion gas
    $sql="SELECT * FROM `gas`";
    $Gas=mysqli_query($conexion,$sql);

  $id=$_GET['id'];
  $sql="SELECT * FROM `reporte_servicios`WHERE `id_reporte`='".$id."'";
  $resultadoReporteServicios=mysqli_query($conexion,$sql);

  $filaReporte=mysqli_fetch_assoc($resultadoReporteServicios);
  $IdReporte=$filaReporte["id_reporte"];
  $FechaCancelado=$filaReporte["fecha_entr"];?>
<div class="container">
    
  <div class="row mt-5">

    <form class="row g-3 needs-validation " method="POST" enctype="multipart/form-data" id="formulario" novalidate >
        <div class=" position-relative">
            <input type="hidden" autocomplete="off" class="form-control" id="IdReporte" name="IdReporte" value="<?php echo $IdReporte; ?>" required>
        </div>
        <div class=" position-relative">
            <label for="Familia" class="form-label">Familia</label>
            <select class="form-control my-3" name="Familia" id="Familia"  required>
                <option selected disabled>Seleccione Familia...</option>
                <?php while($listaFamilia=mysqli_fetch_assoc($FamiliaReporte)){?>
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
            <input type="date" autocomplete="off" class="form-control" id="FechaCancelado" name="FechaCancelado" value="<?php echo $FechaCancelado; ?>" required>
            <div class="invalid-feedback" id="alertaFechaCancelado">
           Escrive un valor permitido
            </div>
        </div>


        <div class="d-grid gap-2 d-md-block">
            <button type="submit" class="btn btn-success px-5">Editar</button>
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
<script src="./js_editar/reporte.js"></script>
<?php include ('./template/footer.php');?>