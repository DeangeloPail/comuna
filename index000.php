<?php
session_start();
if (empty($_SESSION["id_usuario"])){
  header("location:./login.php");
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Administracion| C.C Las Margaritas</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Bootstrap Material Design style -->
  <link rel="stylesheet" href="dist/css/bootstrap-material-design.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.html" class="nav-link">Inicio</a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"   href="cerrar.php" role="button">
          <i class="bi bi-door-open-fill"></i>
          
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">C.C Las Margaritas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) PONER AQUI EL NOMBRE DE USUARIO -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" ><?php  echo $_SESSION["nm_usuario"];
          ?></a>
        </div>
      </div>

     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item"><i class=""></i>
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-geo-alt-fill"></i>
                  <p>
                    Comunidad
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/tables/vereda.php" class="nav-link">
                      <i class="bi bi-align-end"></i>
                      <p>Vereda</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/tables/pasaje.php" class="nav-link">
                      <i class="bi bi-align-end"></i>
                      <p>Pasaje</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item"><i class=""></i>
                  <li class="nav-item">
                    <a href="pages/tables/jefe_calle.php" class="nav-link">
                    <i class="nav-icon bi bi-person-badge"></i>
                      
                      <p>Jefes de Calle</p>
                    </a>
                  </li>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-people-fill"></i>
                  <p>
                    Población
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/tables/familias.php" class="nav-link">
                      <i class="bi bi-align-end"></i>
                      <p>Familias</p>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a href="pages/tables/integrante_familia.php" class="nav-link">
                      <i class="bi bi-align-end"></i>
                      <p>Habitantes</p>
                    </a>
                  </li>
                
                </ul>
              </li>
              <li class="nav-item"><i class=""></i>
                  <li class="nav-item">
                    <a href="pages/tables/control_sanitario.php" class="nav-link">
                    <i class="bi bi-balloon-heart-fill"></i>
                      
                      <p>Salud</p>
                    </a>
                  </li>
              </li>
              <li class="nav-item"><i class=""></i>
                  <li class="nav-item">
                    <a href="pages/tables/servicios.php" class="nav-link">
                    <i class="bi bi-basket2-fill"></i>
                      
                      <p>Servicios</p>
                    </a>
                  </li>
              </li>
              
              <li class="nav-item"><i class=""></i>
                <a href="#" class="nav-link">
                  <i class="bi bi-clipboard-data-fill"></i>
                  <p>
                     Reportes
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/tables/reporte_servicios.php" class="nav-link">
                      <i class="bi bi-align-end"></i>
                      <p>Servios Mensuales</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/tables/reportes_familia.php" class="nav-link">
                      <i class="bi bi-align-end"></i>
                      <p>Familias</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/tables/reporte_jc.php" class="nav-link">
                      <i class="bi bi-align-end"></i>
                      <p>Jefes de Calle</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/tables/reporte_habitantes.php" class="nav-link">
                      <i class="bi bi-align-end"></i>
                      <p>Habitantes</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/tables/Vacunacion.php" class="nav-link">
                      <i class="bi bi-align-end"></i>
                      <p>Vacunacíon</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                  <a href="pages/tables/usuario.php" class="nav-link">
                    <i class="nav-icon bi bi-person-workspace"></i>
                    
                    <p>Usuarios</p>
                  </a>
              </li>
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Estadisticas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">C.C Las Margaritas</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
          <?php
             $conexion = mysqli_connect("localhost","id20199280_root","De@ngelopail1234","id20199280_comuna");

             $sqlFamilias="SELECT COUNT(familias.numer_casa) FROM familias";
             $resultadoFamilias=mysqli_query($conexion,$sqlFamilias);

             $sqlHabitantes="SELECT COUNT(int_familia.nombre_inf) FROM int_familia;";
             $resultadoHabitantes=mysqli_query($conexion,$sqlHabitantes);

             $sqlJefeCalle="SELECT COUNT(jefe_de_calle.cedula_jfc) FROM jefe_de_calle;";
             $resultadoJefeCalle=mysqli_query($conexion,$sqlJefeCalle);

             $sqlVacuna="SELECT COUNT(`statu_vacu`) FROM int_familia WHERE`statu_vacu`=1;";
             $resultadoVacuna=mysqli_query($conexion,$sqlVacuna);
          ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                  <?php while($habitantes=mysqli_fetch_assoc($resultadoHabitantes))
                            {?>
                    <h3><?php echo $habitantes['COUNT(int_familia.nombre_inf)']; ?></h3>
                  <?php } ?>

                <p>Habitantes</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="./pages/tables/integrante_familia.php" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- pages/tables/col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php while($Familias=mysqli_fetch_assoc($resultadoFamilias))
                        {?>
                  <h3><?php echo $Familias['COUNT(familias.numer_casa)']; ?><sup style="font-size: 20px"></sup></h3>
              <?php } ?>
                <p>Familias</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="./pages/tables/familias.php" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php while($jefes=mysqli_fetch_assoc($resultadoJefeCalle))
                            {?>
                    <h3><?php echo $jefes['COUNT(jefe_de_calle.cedula_jfc)']; ?></h3>
                  <?php } ?>
                <p>Jefes de Calle</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="./pages/tables/jefe_calle.php" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">

                  <?php while($vacunado=mysqli_fetch_assoc($resultadoVacuna))
                            {?>
                    <h3><?php echo $vacunado['COUNT(`statu_vacu`)']; ?></h3>
                  <?php } ?>
              
                <p>Vacunados contra COVID</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="./pages/tables/control_sanitario.php" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          

  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- Bootstrap Material Design -->
<script src="dist/js/popper.min.js"></script>
<script src="dist/js/bootstrap-material-design.min.js"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
