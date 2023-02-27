<?php
session_start();
if (empty($_SESSION["id_usuario"])){
  header("location:../../login.php");
}
?>
   <!--bootstrap CDN-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!--sweetalert2 CDN-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <!--DataTables CDN-->
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.5.2/css/autoFill.bootstrap5.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.bootstrap5.min.css"/>
 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/autofill/2.5.2/js/dataTables.autoFill.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/autofill/2.5.2/js/autoFill.bootstrap5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.bootstrap5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>

<!--select2 CDN-->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.php" class="nav-link">Inicio</a>
        
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
        <a class="nav-link"   href="../../cerrar.php" role="button">
          <i class="bi bi-door-open-fill"></i>
      
 
          
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">C.C Las Margaritas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php  echo $_SESSION["nm_usuario"];
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
                <a href="./vereda.php" class="nav-link">
                  <i class="bi bi-align-end"></i>
                  <p>Vereda</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./pasaje.php" class="nav-link">
                  <i class="bi bi-align-end"></i>
                  <p>Pasaje</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item"><i class=""></i>
              <li class="nav-item">
                <a href="./jefe_calle.php" class="nav-link">
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
                <a href="./familias.php" class="nav-link">
                  <i class="bi bi-align-end"></i>
                  <p>Familias</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="./integrante_familia.php" class="nav-link">
                  <i class="bi bi-align-end"></i>
                  <p>Habitantes</p>
                </a>
              </li>
            
            </ul>
          </li>
          <li class="nav-item"><i class=""></i>
              <li class="nav-item">
                <a href="./control_sanitario.php" class="nav-link">
                <i class="bi bi-balloon-heart-fill"></i>
                  
                  <p>Salud</p>
                </a>
              </li>
          </li>
          <li class="nav-item"><i class=""></i>
              <li class="nav-item">
                <a href="./servicios.php" class="nav-link">
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
                <a href="./reporte_servicios.php" class="nav-link">
                  <i class="bi bi-align-end"></i>
                  <p>Servios Mensuales</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./reportes_familia.php" class="nav-link">
                  <i class="bi bi-align-end"></i>
                  <p>Familias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./reporte_jc.php" class="nav-link">
                  <i class="bi bi-align-end"></i>
                  <p>Jefes de Calle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./reporte_habitantes.php" class="nav-link">
                  <i class="bi bi-align-end"></i>
                  <p>Habitantes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./Vacunacion.php" class="nav-link">
                  <i class="bi bi-align-end"></i>
                  <p>Vacunacíon</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
              <a href="./usuario.php" class="nav-link">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
