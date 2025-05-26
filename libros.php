
<!-- Conexion al cerrar sesión para que cuando el usuario intente devolverse deba iniciar de nuevo con el login -->
<?php
include("conexion.php");

session_start();
if(!isset($_SESSION['id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
		<!-- Nombre e imagen del sitio web que aparece en la ventana superior del navegador -->

		<title>BIBLIOTECA AURORA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main2.css" />
		<link rel="shortcut icon" type="image/png" href="images/Escudo.png"/>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<script src="app.js"></script>
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

		<!--Titulo de la categoria a la cual ingresamos --> 			
		<div id="header">

<div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-right">
<form action="./busqueda.php" class="site-block-top-search" method="GET">
<span class="icon icon-search2"></span>
<input type="text" class="form-control border-0" placeholder="Buscar libro, autor o descripción..." name="texto">
</form>
</div>
<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="libros.php" id="logo">Libros</a></h1>
							</header>
						</div>
			<!-- Información de la barra de menu superior del sitio web -->
			<nav id="nav">
				<ul>
					<li><a href="inicio.php">Inicio</a></li>
					</li>
					<li><a href="quienesomos.php">¿Quienes somos?</a></li>
					<li><a href="libros.php">Libros</a></li>
					<li><a href="cerrarsesion.php">Cerrar Sesión</a></li>
				</ul>
			</nav>
			</div>

			<!-- Contenedor el cual incluye la conexion de la base de datos biblioteca llamando la tabla libros, llamando y seccionando cada
			una de las secciones de dicha tabla para que se muestre en el sitio web  -->

				<div class="wrapper style1">


					<div class="container"> 
						
						<div class="row" >
						<?php include('conexion-libros.php');
								$resultado = $conexion ->query("SELECT * FROM libros ORDER BY id DESC LIMIT 10")or die($conexion -> error);
								while($fila = mysqli_fetch_array($resultado)){
									?>						
							<article class="col-4 col-12-mobile special">
								
								<center><a class="image featured"><img src="images/<?php echo $fila['imagen']; ?>" alt="<?php echo $fila['nombre'];?>" /></a></center>
								<header>
									<center><h3><a><?php echo $fila['nombre']; ?></a></h3></center>
								</header>
								<header>
									<center><h5>Autor: <a><?php echo $fila['autor']; ?></a></h5></center>
								</header>
								<header>
								<center><h4><a>Libros Disponibles: <?php echo $fila['disponible']; ?></a></h4></center>
								</header>
								<p><?php echo  $fila['descripcion']; ?></p>
								<header>
								<a href="formulario.php?id=<?php echo $fila['id']; ?>"  class="button">Realizar prestamo</a>
										
								</header>

							</article>
							
							<?php }?>

							
							
						</div>	

                </div><br><br>
				<!--<div class="lista">
               
			   <div class="number-page">
			   <i class="fas fa-chevron-left"></i>
			   </div>
			   <div class="number-page">1</div>
			   <div class="number-page">2</div>
			   <div class="number-page">3</div>
			   <div class="number-page">4</div>
			   <div class="number-page">5</div>
			   <div class="number-page">6</div>
			   <div class="number-page">
			   <i class="fas fa-chevron-right"></i> 
			   </div>
						
					</div>

				</div> -->

						

				</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">

						<!-- Sistema de comentarios-->

						<div id="disqus_thread"></div>
						<script>
							/**
							*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
							*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
							/*
							var disqus_config = function () {
							this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
							this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
							};
							*/
							(function() { // DON'T EDIT BELOW THIS LINE
							var d = document, s = d.createElement('script');
							s.src = 'https://biblioteca-bravo-marquez.disqus.com/embed.js';
							s.setAttribute('data-timestamp', +new Date());
							(d.head || d.body).appendChild(s);
							})();
						</script>
						<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
						
					</div>
					<!--Termina sistema de comentarios-->
						
						<hr />
					<!-- Redes sociales -->
					<section class="contact">
										<header>
											<h3>¡Nuestras redes sociales!</h3>
										</header>
										<p></p>
										<ul class="icons">
											<li><a href="https://www.facebook.com/bravomarquez" target="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="https://www.iejosemariabravomarquez.edu.co" target="_blank" class="icon brands fa-chrome"><span class="label">Pagina institucional/span></a></li>
										</ul>
									</section>
						</div>

							</div>

						</div>
				
				</div>
						
	

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>