<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C.C Las Margaritas|Reportes Mensuales</title>
<?php include ('./template/header.php');?>
<?php include ('./config/database.php');?>
<script type="text/javascript">
  function confirmar(){
    return confirm('¿Estas Seguro?, se eliminaran los datos');
  }
</script>
<section class="content">
  <div class="container is-fluid">

    <div class="col-xs-12">
      <form action="" method="GET">
    
        <div class="row">                        
          <div class="col-md-4">
              <div class="form-group">
                  <label><b>Del Dia</b></label>
                  <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
              </div>
          </div>
          <div class="col-md-4">
              <div class="form-group">
                  <label><b> Hasta  el Dia</b></label>
                  <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
              </div>
          </div>
          
          <div class="col-md-4">
              <div class="form-group">
                  <label><b></b></label> <br>
                <button type="submit" class="btn btn-primary">Buscar</button>
                
              </div>
          </div>
        </div>
        <br>
      </form>
        <table id="tabla2" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Aelldio Familia</th>
              <th>Clap</th>
              <th>Gas</th>
              <th>Tipo Clap</th>
              <th>Tipo Gas</th>
              <th>Fecha Cancelado</th>
             
            </tr>
          </thead>
            <tbody>
              <?php  
                  if(isset($_GET['from_date']) && isset($_GET['to_date']))
                    {
                        $from_date = $_GET['from_date'];
                        $to_date = $_GET['to_date'];
                        $query = "SELECT id_reporte,familias.ap_familia,servicio_clap.estatu_clap,
                        servicio_gas.estatu_gas,clap.tipo_clap_,gas.tp_bombona,
                        `fecha_entr` FROM `reporte_servicios` 
                        LEFT JOIN familias on familias.id_familia=reporte_servicios.familia_rp
                        LEFT JOIN servicio_clap on servicio_clap.id_sv_clap=reporte_servicios.servi_clap
                        LEFT JOIN servicio_gas on servicio_gas.id_ser_gas=reporte_servicios.servic_gas
                        LEFT JOIN clap on clap.ident_clap=reporte_servicios.clap_reprt
                        LEFT JOIN gas on gas.codigo_gas=reporte_servicios.gas_report
                        WHERE `fecha_entr` 
                        BETWEEN '$from_date' AND '$to_date'; ";
                        $query_run = mysqli_query($conexion, $query);

                        if(mysqli_num_rows($query_run) > 0)
                          {
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
                
                </tr>
                  </tr>
                  <?php
                    }
                      }
                        else
                          {
                  ?>                            
                    <tr>
                      <td colspan="6" class="text-center"><?php  echo "No se encontraron resultados"; ?></td>
                  <?php
                    }
                      }
                  ?>
            </tbody>
        </table>
    </div>
  </div>
</section>
<?php include ('./template/footer.php');?>