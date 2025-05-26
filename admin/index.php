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
<!-- Content Principal del sitio web-->
 <div class="content-wrapper">
    
    <!-- Estilos css para las tarjetas del index donde aparecen las categorias disponibles en la misma -->
    <style>
      .cards2{
        display: flex;
      }
    .card2{
    width: 300px;
    margin: 25px;
    padding: 40px 20px;
    background: linear-gradient(-45deg, #190707, #FE2E2E);
    border-radius: 15px;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.5);
    text-align: center;
    transition: all 0.8s ease;
}

.card2:nth-child(2){
  background: linear-gradient(-45deg, yellow, #292A0A);
  transform: scale(1.05);

}

.card2:nth-child(2):hover{
  transform: scale(1.08);
}

.card2:nth-child(3){
  background: linear-gradient(-45deg, #190707, #FE2E2E);
  transform: scale(1.05);

}

.card2:nth-child(3):hover{
  transform: scale(1.08);
}

.card2:nth-child(4){
  background: linear-gradient(-45deg, yellow, #292A0A);
  transform: scale(1.05);

}

.card2:nth-child(4):hover{
  transform: scale(1.08);
}

.title2 .fas{
    color: white;
    font-size: 60px;
    width: 100px;
    height: 100px;
    line-height: 100px;
    text-align: center;
    border-radius: 50%;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3);
}
.title2 h2{
    color: white;
    font-size: 30px;
    margin-top: 15px;
}
.btn{
    display: inline-block;
    margin-top: 20px;
    padding: 10px 15px ;
    background: white;
    border-radius: 40px;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3);
    color: black;
    text-decoration: none;
}
.card2:hover{
    transform: scale(1.05);
}
    </style>
<!-- Tarjetas de todas las secciones en el index del sitio web -->
    <div class="cards2">
    <div class="card2">
    <div class="title2">
    <i class="fas fa-book"></i>
    <h2>Libros</h2>
    <br>
    <a class="btn" href="libros.php">Más información</a>
    </div>
    </div>

    <div class="card2">
    <div class="title2">
    <i class="fas fa-user-edit"></i>
    <h2>Usuarios</h2>
    <br>
    <a class="btn" href="UsuariosCrud.php">Más información</a>
    </div>
    </div>

    <div class="card2">
    <div class="title2">
    <i class="fas fa-id-card"></i>
    <h2>Prestamos</h2>
    <br>
    <a class="btn" href="PrestamoCrud.php">Más información</a>
    </div>
    </div>

    <div class="card2">
    <div class="title2">
    <i class="fas fa-book-open"></i>
    <h2>Libros populares</h2>
    <a class="btn" href="libros-mensuales.php">Más información</a>
    </div>
    </div>
    </div>
       </div>
    </section>
  </div>
  <footer class="main-footer">
    
  </footer>

  <!-- Linea oscura y delgada de la barra lateral izquierda -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</div>


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
<script>window.jQuery || document.write('<script src="./dashboard/plugins/jquery/jquery.min.js"><\/script>')</script>
<script src="/dashboard/js/ie10-viewport-bug-workaround.js"></script>
<script type="text/javascript">
      function myFunction() {
        $.ajax({
          url: "notificaciones.php",
          type: "POST",
          processData:false,
          success: function(data){
            $("#notification-count").remove();                  
            $("#notification-latest").show();$("#notification-latest").html(data);
          },
          error: function(){}           
        });
      }
                                 
      $(document).ready(function() {
        $('body').click(function(e){
          if ( e.target.ID_PRESTAMO != 'notification-icon'){
            $("#notification-latest").hide();
          }
        });
      });                                     
    </script>
</body>
</html>
