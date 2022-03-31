<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Cinema Max</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="left-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">

					<!-- Logo -->
						<h1><a href="index.html">Cinema Max</a></h1>

					<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="current"><a href={{route('inicio')}}>Peliculas</a></li>
							<li><a href={{route('ejapi')}}>Api</a></li>
							<li><a href={{route('tutorial')}}>Video sobre la realizacion</a></li>
							<li><a href={{route('nosotros')}}>Sobre nosotros</a></li>
						</ul>
					</nav>

				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-4 col-12-medium">
							</div>
							<div class="col-8 col-12-medium imp-medium">

								<!-- Content -->
									<article class="box post">
										<a href="#" class="image featured"><img src="https://t3.ftcdn.net/jpg/03/92/23/34/360_F_392233403_klSdFxVOhqO5cish5V86RAvXLTVfsYGT.jpg" alt="" /></a>
										<header>
											<h2>A cerca de nosotro</h2>
											<p>Cinema Max</p>
										</header>
										<p>
											Nosotros estamos comprometidos a darte las reseñas de las personas, las opiniones y los actores que participan en 
											dichas peliculas, esta pagina fue creada con el fin de aprender a usar controladores, seeders, modelos y controladores.
											Tambien cuaenta con funciones vistas en clases pasadas con el docente Emanuel Torres, dicho docente estuvo a cargo de 
											asignarnos dicha tarea.
										</p>
										<p>
											Como estudiante de la universiada politecnica de tecamac, tengo como proposito hacer proyectos de gran calidad, aprendere mas sobre este tema
											
										</p>
									</article>

							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
			<section id="footer">
				<div class="container">
					<div class="row">
						<div class="col-4 col-12-medium">
							<section>
								<header>
									<h2>Acerca de nosotros</h2>
								</header>
								<a href="{{route('nosotros')}}" class="image featured"><img src="images/logo.jpg" alt="" /></a>
								<p>
									Nosotros estamas encantados de darle a conocer al publico sobre las peliculas mas impactantes del momento, de que tratan las peliculas, 
									su fecha de estreno y un pequeño resumen y crita sobre la pelicula, 
								</p>
								<footer>
									<ul class="actions">
										<li><a href="{{route('nosotros')}}" class="button">Ver mas acerca de nosotros</a></li>
									</ul>
								</footer>
							</section>
						</div>
						<div class="col-4 col-12-medium">
							<section>
								<header>
									<h2>Contactanos</h2>
								</header>
								<ul class="contact">
									<li>
										<h3>Direccion</h3>
										<p>
											Universidad Politecnica<br />
											de Tecamac<br />
										</p>
									</li>
									<li>
										<h3>Correo</h3>
										<p>eduardo_antonio@gmail.com</p>
									</li>
									<li>
										<h3>Telefono</h3>
										<p>5534896138</p>
									</li>
								</ul>
							</section>
						</div>
						<div class="col-12">

							<!-- Copyright -->
								<div id="copyright">
									<ul class="links">
										<li>&copy; Cinema Max.</li>
									</ul>
								</div>

							</div>
						</div>
					</div>
				</section>

		</div>

		<!-- Scripts -->
		<script src="../../assets/js/jquery.min.js"></script>
			<script src="../../assets/js/jquery.dropotron.min.js"></script>
			<script src="../../assets/js/browser.min.js"></script>
			<script src="../../assets/js/breakpoints.min.js"></script>
			<script src="../../assets/js/util.js"></script>
			<script src="../../assets/js/main.js"></script>

	</body>
</html>