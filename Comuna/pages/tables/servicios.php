<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C.C Las Margaritas|Servicios</title>
<?php include ('./template/header.php');?>
<?php include ('./config/database.php');?>
<script type="text/javascript">
  function confirmar(){
    return confirm('¿Estas Seguro?, se eliminaran los datos');
  }
</script>
<section class="content">
  <div class="container is-fluid">
    <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Entrega de Servicios</h1>
          </div>
          <div class="col-sm-3" style="margin-left: 15pc">
            <ol class="breadcrumb float-sm-right" >
              <li class="breadcrumb-item" ><a href=""><i class="bi bi-house-fill"></i></a></li>
              <li class="breadcrumb-item active">Entrega de Servicios</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="col-xs-12">
      <form action="" method="GET">
    
        <div class="row">                        
          <div class="d-grid gap-2 col-3 mx-auto">
                <a type="button" class="btn btn-info" href="./agre_reporte_servicios.php">Agregar <i class=" mx-1 bi bi-plus-square"></i></a>
              </div>
          </div>
          
        
        <br>
      </form>
        <table id="tabla1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Aelldio Familia</th>
              <th>Clap</th>
              <th>Gas</th>
              <th>Tipo Clap</th>
              <th>Tipo Gas</th>
              <th>Fecha Cancelado</th>
              <th>Acciones</th>
            </tr>
          </thead>
            <tbody>
              <?php  
                
                        $query = "SELECT id_reporte,familias.ap_familia,servicio_clap.estatu_clap,
                        servicio_gas.estatu_gas,clap.tipo_clap_,gas.tp_bombona,
                        `fecha_entr` FROM `reporte_servicios` 
                        LEFT JOIN familias on familias.id_familia=reporte_servicios.familia_rp
                        LEFT JOIN servicio_clap on servicio_clap.id_sv_clap=reporte_servicios.servi_clap
                        LEFT JOIN servicio_gas on servicio_gas.id_ser_gas=reporte_servicios.servic_gas
                        LEFT JOIN clap on clap.ident_clap=reporte_servicios.clap_reprt
                        LEFT JOIN gas on gas.codigo_gas=reporte_servicios.gas_report
                        WHERE `fecha_entr`  ";
                        $query_run = mysqli_query($conexion, $query);

                        
                            foreach($query_run as $fila)
                              {
              ?>
              <tr>
                <td><?php echo $fila['ap_familia']; ?></td>
                <td><?php echo $fila['estatu_clap']; ?></td>
                <td><?php echo $fila['estatu_gas']; ?></td>
                <td><?php echo $fila['tipo_clap_']; ?></td>
                <td><?php echo $fila['tp_bombona']; ?></td>
                <td><?php echo $fila['fecha_entr']; ?></td>
                <td class="text-center"><?php echo "<a type='submit' class='btn btn-outline-dark'
                                  href='./edit_reporte_servicios.php?id=".$fila['id_reporte']."'>
                                  <i class='bi bi-pencil-square'></i>
                  </a>";?>
                    <?php echo "<a type='submit' class='btn btn-outline-dark'
                                  href='./sql/eliminar_reporte_servicios.php?id=".$fila['id_reporte']."'
                                  onclick='return confirmar()'>
                  <i class='bi bi-trash'></i>
                  </a>";?>
              </td>
                </tr>
                  </tr>
                    <?php
                      }
                  ?>
            </tbody>
        </table>
    </div>
  </div>
</section>
<?php include ('./template/footer.php');?>