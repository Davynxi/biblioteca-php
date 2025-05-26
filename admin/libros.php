<?php
include('../conexion-libros.php');

$resultado = $conexion ->query("select  
libros.*, categorias.nombre as catego from libros
inner join categorias on libros.id_categoria = categorias.id
 order by id DESC")or die($conexion->error); //Conexion de la tabla categorias a la tabla libros.
?>


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

    
    <!-- Encabezado de pagina -->
    <div class="content-header">
      <div class="container-fluid"><!-- Contenedor fluido -->
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Libros</h1>
          </div>
          <div class="col-sm-6 text-right">
            <!-- Button insertar un nuevo usuario, se crea una clase con el nombre exampleModal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="background: linear-gradient(90deg, #FEAE32, #FA3B20); border:#FA3B20; color:black; font-weight:bold;">
            <li class="fa fa-plus"></li> Nuevo libro</button>
          </div>
          
        </div>
        

      </div><!-- cierre contenedor fluido -->
    </div><!-- cierre encabezado de pagina -->
   

    <!-- Contenido principal del crud de libros -->
    <section class="content">
      <div class="container-fluid">

      <?php
      if (isset($_GET['error'])) {
      ?>
              <div class="alert alert-danger" role="alert">
          <?php echo $_GET['error']; ?>
              </div>
              <?php } ?>
              <?php
      if (isset($_GET['succes'])) {
      ?>
              <div class="alert alert-success" role="alert">
          Se ha insertado el libro correctamente
              </div>
              <?php } ?>
      <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
            <th>Id</th>
            <th>ISBN</th>
            <th>Libro</th>
            <th>Genero</th>
            <th>Autor</th>
            <th>Descripción</th>
            <th>Libros disponibles</th>
            <center><th colspan="2">Acciones</th></center>
            </tr>
            
            </thead>
            <tbody>
            
            <?php
            while ($f = mysqli_fetch_array($resultado)){

           

            ?>
            <tr>
                <td><?php echo $f['id']; ?></td>
                <td><?php echo $f['ISBN']; ?></td>
                <td>
                <img src="../images/<?php echo $f['imagen']; ?>" width="20px" height="20px" alt="">
                <?php echo $f['nombre']; ?></td>
                <td><?php echo $f['catego']; ?></td>
                <td><?php echo $f['autor']; ?></td>
                <td><?php echo $f['descripcion']; ?></td>
                <td><?php echo $f['disponible']; ?></td>
                
           <!--Se crea el boton de eliminar con ventana modal para confirmar, el registro se borra por id-->
                            
           <td><button class= "btn btn-danger btn-small btnEliminar" data-id="<?php echo $f['id']; ?>" data-toggle="modal" data-target="#modalEliminar">
  <i class="fa fa-trash"></i>
      </button></td>
      <!--Se crea el boton de editar con ventana modal, se crea la clase editChildresn y para editar se hace por id-->
  <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $f['id']; ?>">
  <i class="fa fa-edit"></i>
  </button></td>
                          
                          </tr>
                     <!--Ventana Modal para Actualizar--->
                     <?php  include('ModalEditarLibro.php'); ?>
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
  <!-- Ventana modal agregar libro -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="./insertarlibro.php" method="POST" enctype="multipart/form-data">
      <div class="modal-header" style="background: linear-gradient(90deg, #FEAE32, #FA3B20);">
        <h5 class="modal-title" id="exampleModalLabel" style="color: black; text-align: center; font-weight:bold;">Insertar Libro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
          <label for="ISBN">ISBN</label>
          <input type="text" name="ISBN" placeholder="ISBN" id="ISBN" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="nombre">Nombre del libro</label>
          <input type="text" name="nombre" placeholder="Nombre del libro" id="nombre" class="form-control"required>
        </div>
        <div class="form-group">
          <label for="categoria">Genero</label>
          <select name="categoria" id="categoria" class="form-control"required>
          <?php 
          $res= $conexion->query("select * from categorias");
          while($f=mysqli_fetch_array($res)){
            echo '<option value="'.$f['id'].'">'.$f ['nombre'].'</option>';
          }

          ?>
          </select>
          </div>
        <div class="form-group">
          <label for="autor"> Autor del libro</label>
          <input type="text" name="autor" placeholder="Autor del libro" id="autor" class="form-control"required>
        </div>
        
        <div class="form-group">
          <label for="descripcion"> Descipción del Libro</label>
          <input type="text" name="descripcion" placeholder="Descripción del libro" id="descripcion" class="form-control"required>
        </div>
        <div class="form-group">
          <label for="imagen">Imagen del libro</label>
          <input type="file" name="imagen" id="imagen" class="form-control"required>
        </div>
        <div class="form-group">
          <label for="disponible">Libros Disponibles</label>
          <input type="number" min="0" name="disponible" placeholder="Cantidad de libros disponibles" id="disponible" class="form-control"required>
        </div>
        </div>
      
      <div class="modal-footer">
      
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background: #FA3B20; border:#FA3B20">Cerrar</button>
        <button type="submit" class="btn btn-primary" style="background: #FEAE32; border:#FEAE32">Guardar</button>
      </div>
      </form>
      
    </div>
  </div>
</div>
  
  <!-- Modal Eliminar -->
  <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="modalEliminarLabel">Eliminar libro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          ¿Esta seguro que desea eliminar el libro?
        </div>
      
      <div class="modal-footer">
      
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger eliminar" data-dismiss="modal">Eliminar</button>
      </div>
      
    </div>
    
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
  var f;
  $(".btnEliminar").click(function(){
    idEliminar= $(this).data('id');
    f =$(this).parent('td').parent('tr');
  });
  $(".eliminar").click(function(){
    $.ajax({
      url: '../admin/eliminarlibro.php',
      method: 'POST',
      data:{
        id:idEliminar
      }
    }).done(function(res){  
      alert(res);
    $(f).fadeOut(1000);


  });
    $(".btnEditar").click(function(){
      idEditar=$(this).data('id');
      var ISBN=$(this).data('ISBN');
      var nombre=$(this).data('nombre');
      var autor=$(this).data('autor');
      var descripcion=$(this).data('descipcion');
      var disponible =$(this).data('disponible');
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