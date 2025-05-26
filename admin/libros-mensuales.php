<?php
include('../conexion-libros.php');
$resultado = $conexion ->query("select * from libros_mensuales order by id DESC")or die ($conexion->error);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/index.css">
  <title>Panel administrativo</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="./dashboard/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="./dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="./dashboard/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dashboard/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="./dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="./dashboard/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="./dashboard/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="./dashboard/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
    
          
      <!--Cerrar sesión -->
      <li class="nav-item dropdown">
        <a href=" ../index.php" class="nav-link" >
        <i class="fas fa-door-open">Cerrar sesión</i>
        </a>
       
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Logo -->
   <br><br>

<center> <img src="../images/LogoBBM.jpg" width="80px" class="brand-image img-circle elevation-3" style="opacity: .8">
      <br>
      <span class="brand-text ">Biblioteca Aurora</span></center>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
               <li class="nav-item">
            <a href="index.php" class="nav-link">
            <i class="fa fa-home" style="color: black;"></i>
              <p style="color: black;  font-weight:bold;">
                Inicio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="libros.php" class="nav-link">
            <i class="fa fa-book" style="color: black;"></i>
              <p style="color: black;  font-weight:bold;">
                Libros
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="UsuariosCrud.php" class="nav-link">
            <i class="fas fa-user-edit" style="color: black;"></i>
              <p style="color: black;  font-weight:bold;">
                Usuarios
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="PrestamoCrud.php" class="nav-link">
            <i class="fa fa-id-card" style="color: black;"></i>
              <p style="color: black;  font-weight:bold;">
                Prestamos
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="libros-mensuales.php" class="nav-link">
            <i class="fas fa-book-open" style="color: black;"></i>
              <p style="color: black;  font-weight:bold;">
                Libros populares
              </p>
            </a>
          </li>
          
            </ul>
          </li>
         
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
            <h1 class="m-0">Libros del MES</h1>
          </div><!-- /.col -->
          <div class="col-sm-6 text-right">
            <!-- Button trigger modal -->
              <!-- Button trigger modal -->

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
      <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Imagen</th>
            <th>Editar</th>
            </tr>
            
            </thead>
            <tbody>
            
            <?php
            while ($f = mysqli_fetch_array($resultado)){

           

            ?>
            <tr>
                <td><?php echo $f['id']; ?></td>
                <td><?php echo $f['titulo']; ?></td>
                <td><?php echo $f['descripcion']; ?></td>
                <td>
                <img src="../images/<?php echo $f['imagen']; ?>" width="120px" height="120px" alt="">
                </td>
                
                
               
                

                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $f['id']; ?>">
                              <i class="fa fa-edit"></i>
                              </button>
                            </td>
                          </tr>
                     <!--Ventana Modal para Actualizar--->
                     <?php  include('ModalEditarLibrosMensuales.php'); ?>
            <?php
        } 
            ?>
            </tbody>
            </table>
        <!-- Main row -->
   
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="./dashboard/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="./dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="./dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="./dashboard/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="./dashboard/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="./dashboard/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="./dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="./dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="./dashboard/plugins/moment/moment.min.js"></script>
<script src="./dashboard/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="./dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="./dashboard/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="./dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="./dashboard/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dashboard/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./dashboard/dist/js/pages/dashboard.js"></script>
<script>
$(document).ready(function(){
  var idEliminar = -1;
  var idEditar = -1;
  var fila;
  $(".btnEliminar").click(function(){
    idEliminar= $(this).data('id');
    fila =$(this).parent('td').parent('tr');
  });
  $(".eliminar").click(function(){
    $.ajax({
      url: '../admin2/eliminarlibro.php',
      method: 'POST',
      data:{
        id:idEliminar
      }
    }).done(function(res){  
    $(fila).fadeOut(1000);

  });
    $(".btnEditar").click(function(){
      idEditar=$(this).data('id');
      var ISBN=$(this).data('ISBN');
      var nombre=$(this).data('nombre');
      var autor=$(this).data('autor');
      var descripcion=$(this).data('descipcion');
      var disponibl =$(this).data('disponible');
      var categoria=$(this).data('categoria');
      $("#ISBNEdit").val(ISBN);
      $("#nombreEdit").val(nombre);
      $("#autorEdit").val(autor);
      $("#descripcioneEdit").val(descripcion);
      $("#disponibleEdit").val(disponible);
      $("#categoriaEdit").val(categoria);
      
    });

  });
});
</script>
</body>
</html>