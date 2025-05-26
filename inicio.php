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
<!-- Nombre e imagen del sitio web que aparece en la ventana superior del navegador -->
	<head>
		<title>BIBLIOTECA AURORA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" type="image/png" href="images/Escudo.png"/>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<script src="app.js"></script>
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!--Titulo de la categoria a la cual ingresamos -->
				<div id="header">
						<div class="inner">
							<header>
								<h1><a id="logo">Biblioteca Aurora</a></h1>
								<hr/>
								<p>"Educar para pensar libremente"</p>
							</header>
							<footer>
								<a href="#banner" class="button circled scrolly">Descubre</a>
							</footer>
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

			<!-- Sección de los libros mas populares por cada mes -->
				<section id="banner">
					<header>
						<h2>Los 5 libros mas populares del<strong> MES</strong>.</h2>
						<p>
							En esta sección encontraras los 5 libros mas solicitados por nuestros estudiantes a traves de nuestra biblioteca,<br> 
							 encontraras libros de todo tipo de genero literario, asi que no esperes mas y descubre lo que la biblioteca tiene para tí.
						</p>
					</header>
				</section>

			<!-- Sección donde va distribuido cada libro con su respectiva información -->
				<section class="carousel">
					<div class="reel">
					<?php include('conexion-libros.php');
								$resultado = $conexion ->query("select * from libros_mensuales order by id DESC limit 10")or die($conexion -> error);
								while($fila = mysqli_fetch_array($resultado)){
									?>

						<article>
							<a class="image featured"><img src="images/<?php echo $fila['imagen']; ?>" width="300px" height="300px" alt="" /></a>
							<header>
								<h4><a><?php echo $fila['titulo'];?></a></h4>
							</header>
							<p><?php echo  $fila['descripcion']; ?></p>
						</article>
					
						<?php }?>

					</div>
				</section>


			<!-- Servicios que presta la biblioteca institucional en general para el entretenimiento de los estudiantes -->
				<div class="wrapper style1">

					<section id="features" class="container special">
						<header>
							<h2>Nuestros Servicios</h2>
							<p>En esta sección encontraras todos los servicios que ofrece la bibliotca.</p>
						</header>
						<div class="row">
							<article class="col-4 col-12-mobile special">
								<a class="image featured"><img src="images/juegos.png"  width="400" height="300" alt="" /></a>
								<header>
									<h3><a>JUEGOS DIDACTICOS</a></h3>
								</header>
								<p>
									En nuestra biblioteca contamos con juegos didacticos para todos nuestros estudiantes que quieran
									pasar un rato agradable en compañia de sus compañeros.
								</p>
							</article>
							<article class="col-4 col-12-mobile special">
								<a class="image featured"><img src="images/muñecos.jpg"  width="400" height="300" alt="" /></a>
								<header>
									<h3><a>ENTRETENIMIENTO PARA TODOS</a></h3>
								</header>
								<p>
									En nuestra biblioteca podras encontrar secciones en la cual todos nos divertiremos con ayuda de nuestros ayudantes
									en la biblioteca, para que aburrirte no sea una opción.
								</p>
							</article>
							<article class="col-4 col-12-mobile special">
								<a class="image featured"><img src="images/obras.jpg"  width="400" height="300" alt="" /></a>
								<header>
									<h3><a>ESPACIOS DE CREATIVIDAD</a></h3>
								</header>
								<p>
									En nuestro biblioteca tenemos diversos materiales de decoración para que puedas hacer volar tu imaginación y para hacer que te 
									conviertas en un gran artista.
								</p>
							</article>
						</div>
					</section>

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