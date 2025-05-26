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
	</head>
	<body class="left-sidebar is-preload">
		<div id="page-wrapper">

		<!--Titulo de la categoria a la cual ingresamos --> 				
				<div id="header">
						<div class="inner">	
							<header>
								<h1><a id="logo">Sobre Nosotros...</a></h1>
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

			<!-- Información general de la biblioteca institucional -->
			
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-mobile" id="sidebar">
								<hr class="first" />
								<ul class="contact">
								</header>
								<br><br>
								
								<!-- Mapa donde se muestra la ubicación de la institucion educativa. -->
									<section>
										<center><h3>Ubicación.</h3></center> <br> 						
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9846863207094!2d-75.55947009958938!3d6.265743795442532!2m3!
									1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4428e97ba87c6b%3A0xefaaa93add9a3d81!2sCl.%2070%20%2347a-4%2C%20Medell%C3%ADn%2C%2
									0Antioquia!5e0!3m2!1ses!2sco!4v1613525100107!5m2!1ses!2sco" width="330" height="350" frameborder="0" style="border:0;"
									 allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
									</ul> 
									<hr>
								
									<!-- Informacion general sobre el horario de atencion y numeros telefonicos de la institucion educativa -->
										<header>
											<h3><a>Horario de atención:</a></h3>
										</header>
										<p>
											Nuestros horarios de atención son de Lunes a Viernes de 8:00a.m a 4:00p.m
										</p>
										<div class="row gtr-50">
											
											<header>
												<h3><a>Números telefonicos</a></h3>
											</header>
											<p>
											Teléfonos: 123 45 67 - 345 67 89
											</p>
										</div>
									</section>
							</div>

							<!-- Explicación de los objetivos y metas generales de la biblioteca institucional -->
							<div class="col-8 col-12-mobile imp-mobile" id="content">
								<article id="main">
									<header>
										<!--<h2><a href="#">Biblioteca Bravo Marquez</a></h2>-->
									<br><br>
											<center><h3>¿Quienes somos?</h3></center>
										
									</header>
									
									<p>
										Somos la Biblioteca Aurora, la cual presta sus servicios para que
										los clientes puedan tener un espacio divertido y accesible para dejar volar su imaginación con todo el portafolio
										de libros que contamos actualmente y con nuestras multiples actividades didacticas para pasar un rato alegre, armonoiso y
										en comunidad.
									</p>
									<section>
										<header>
											<center><h3>Misión.</h3></center>
										</header>
										<p>
											Proporcionar recursos y servicios de información innovadores, pertinentes y de calidad, que sirvan como 
											soporte para el desarrollo de los procesos académicos, de investigación y creación de conocimiento, 
											articulados con la responsabilidad social y cívica.
										</p>
									</section>
									<section>
										<header>
											<center><h3>Visión.</h3></center>
										</header>
										<p>
											Nuestra principal visión es ser un espacio moderno, agradable y accesible, orientada al usuario, 
											referente informativo para la gestión y transmisión del conocimiento, donde las nuevas tecnologías 
											estén al alcance de todos.
										</p>
									
									</section>
								</article>
								<br> <br>
								<center><a class="image featured"><img src="images/BBM3.png" alt="" /></a></center>
							</div>
						</div>
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
					
					<hr/>

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