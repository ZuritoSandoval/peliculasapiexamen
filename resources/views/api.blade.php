<!DOCTYPE HTML>
<html>
	<head>
		<title>Cinema Max</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
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

					<!-- Banner -->
						<section id="banner">
							<header>
								<h2>Quieres ver cuales son las mejores peliculas del año?</h2>
								<p>¡Cine Max es para ti!</p>
							</header>
						</section>
				</section>

				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Portfolio -->
								<form method="post" action="{{route('mostrarEdad')}}">
									@csrf
									<input type="text" name="nombre" id="nombre" placeholder="Nombre" />
									<br>
									<button type="submit">Enviar</button>
								</form>
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