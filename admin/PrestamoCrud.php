<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/index.css">
  <title>Panel administrativo</title>

 <!-- Google fonts para la letra -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome, iconos -->
  <link rel="stylesheet" href="./dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="./dashboard/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Libreria de Bootstrap 4 -->
  <link rel="stylesheet" href="./dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Plugin de JQVMap para el dashboard -->
  <link rel="stylesheet" href="./dashboard/plugins/jqvmap/jqvmap.min.css">
  <!-- Estilos css para el sitio web -->
  <link rel="stylesheet" href="./dashboard/dist/css/adminlte.min.css">
  <!-- overlay de las barras de scroll -->
  <link rel="stylesheet" href="./dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="./dashboard/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="./dashboard/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Pre carga del sitio web -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../images/LogoBBM.jpg" alt="AdminLTELogo" height="60" width="60">
  </div>

  
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Boton para expandir o reducir el menu lateral izquierdo -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <ul class="navbar-nav ml-auto">
     
<!--Cerrar sesión -->
<li class="nav-item dropdown">
        <a href=" ../index.php" class="nav-link" >
        <i class="fas fa-door-closed">Cerrar Sesión</i>
        </a>
       
      </li>
<!-- Boton para poner en pantalla completa el sitio web -->      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Logo -->
    <br><br>

<center> <img src="../images/LogoBBM.jpg" width="80px" class="brand-image img-circle elevation-3" style="opacity: .8">
      <br>
      <span class="brand-text ">Biblioteca Aurora</span></center>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <!-- <div class="image">
          <img src="./dashboard/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>-->
      </div>

      

      <!-- Barra de Menu lateral izquierdo -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Información y contenido del sitio web en la barra lateral izquierda -->
          
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
    </div>
  </aside>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Prestamos</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div>
    </div>

    <!-- Contenido principal el cual contiene todo el contenido  e información de los prestamos -->
    <section class="content">
      <div class="container-fluid">
        
         
        <!-- Crud Prestamos -->

        <div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>


        
        <?php
include('conexion1.php');

$fila   = ("SELECT * FROM prestamo ORDER BY id_prestamo DESC ");
$queryUsuarios = mysqli_query($conexion, $fila);

?>
       

                <div >
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                          <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Documento</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Libro</th>
                            <th scope="col">Día prestamo</th>
                            <th scope="col">Día devolver</th>
                            
                            <center><th colspan="2">Acciones</th></center> 
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              while ($fila = mysqli_fetch_array($queryUsuarios)) { ?>
                          <tr>
                            <td><?php echo $fila['ID_PRESTAMO']; ?></td>
                            <td><?php echo $fila['DOCUMENTO_IDENTIDAD']; ?></td>
                            <td><?php echo $fila['NOMBRE_COMPLETO']; ?></td>
                            <td><?php echo $fila['CORREO']; ?></td>
                            <td><?php echo $fila['TELEFONO']; ?></td>
                            <td><?php echo $fila['NOMBRE_LIBRO']; ?></td>
                            <td><?php echo $fila['DIA_PRESTAMO_L']; ?></td>
                            <td><?php echo $fila['DIA_DEVOLVER_L']; ?></td>
                            
                            
                          
                             
               
                            <td>
               <button class= "btn btn-danger btn-small btnEliminar" data-ID_PRESTAMO="<?php echo $fila['ID_PRESTAMO']; ?>" data-toggle="modal" data-target="#modalEliminar">
               <i class="fa fa-trash"></i>
               </button>
           </td>
                              <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editPrestamo<?php echo $fila['ID_PRESTAMO']; ?>">
                              <i class="fa fa-edit"> </i>
                              </button></td>
                          
                          </tr>

                     <!--Ventana Modal para Actualizar--->
                     <?php  include('ModalEditarPrestamo.php'); ?>

                            

                        <?php } ?>
                
                    </table>
                </div>

                
              </div>
              
          </div>
          </div>
      </div>
  </div>
</div>




       <!-- Modal Eliminar -->
  <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="modalEliminarLabel">Eliminar prestamo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          ¿Esta seguro que desea eliminar el prestamo?
        </div>
      
      <div class="modal-footer">
      
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger eliminar" data-dismiss="modal">Eliminar</button>
      </div>
      
    </div>
    
  </div>

</div>
                   
                    
                 
           
         

            <!-- Calendar -->
            <!--<div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>-->
                <!-- tools card -->
               <!-- <div class="card-tools">-->
                  <!-- button with a dropdown -->
                  <!--<div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>-->
                <!-- /. tools -->
             <!-- </div>-->
              <!-- /.card-header -->
              <!--<div class="card-body pt-0">-->
                <!--The calendar -->
                <!--<div id="calendar" style="width: 100%"></div>
              </div>-->
              <!-- /.card-body -->
            <!--</div>-->
            <!-- /.card -->
         <!-- </section>-->
          <!-- right col -->
        <!--</div>-->
        <!-- /.row (main row) -->
      <!--</div>--><!-- /.container-fluid -->
    <!--</section>-->
    <!-- /.content -->
  <!--</div>-->
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
  var id_prestamoEliminar = -1;
  var idEditar = -1;
  var fila;
  $(".btnEliminar").click(function(){
    id_prestamoEliminar= $(this).data('id_prestamo');
    fila =$(this).parent('td').parent('tr');
  });
  $(".eliminar").click(function(){
    $.ajax({
      url: 'eliminarPrestamo.php',
      method: 'POST',
      data:{
        id_prestamo:id_prestamoEliminar
      }
    }).done(function(res){
        alert(res);
    $(fila).fadeOut(1000);


});

});
});
</script>
</body>
</html>