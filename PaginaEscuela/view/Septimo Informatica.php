<!DOCTYPE html>
<html long ="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Septimo Informatica</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<!-- Menu -->
<nav class="navbar navbar-expand-xl navbar-dark scrolling-navbar fixed-top" style="background: rgb(40, 45, 51);">
	<a class="navbar-brand" href="principal.php"> <img src="img/Logo.png" class="logo-brand"> E.E.S.T N°2 </a>
	<button class="navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="menu">
		<ul class="navbar-nav ml-auto mr-4">
		  <li class="nav-item mr-4">
			<a class="nav-link" href="principal.php"><span class="button"><i class="fas fa-home"></i>Inicio</span> </a>
		  </li>
		  <li class="nav-item mr-4">
			<a class="nav-link" href="Ciclo Basico.php"><span class="button">Ciclo Basico</span> </a>
		  </li>

		  <li class="nav-item dropdown mr-4">
			  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  <span class="button">Ciclo Superior </span></a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  <a class="dropdown-item" href="Informatica.php">Informatica</a>
			  <a class="dropdown-item active" href="Maestro Mayor de Obras.php">Maestro Mayor de Obras</a>
			</div>
		  </li>

		  <li class="nav-item dropdown mr-4">
			<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
			  <span class="button">Septimo Año </a>
		  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			<a class="dropdown-item active" href="Septimo Informatica.php">Septimo Informatica </a>
			<a class="dropdown-item" href="Septimo M. Mayor de Obras.php">Septimo M.M.O</a>
		  </div>
			</li>
		  <li class="nav-item dropdown mr-4">
			  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
				  <span class="button">Otros </a>
			  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="NormasdeConvivencia.php">N. de Convivencia </a>
				<a class="dropdown-item" href="Centroestudiantes.php">Instituciónal</a>
				<a class="dropdown-item" href="../controller/Preguntar.php">Mesa de Examenes</a>
				<a class="dropdown-item" href="Contactanos.php">Mandanos un Email</a>
			</div>
		  </li>
		  <?php
				require_once("../controller/Login.php");
				if($estado){
					?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-user"></i> Perfil </a>
						<div class="dropdown-menu dropdown-menu-left dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
						<a class="dropdown-item" href="Perfil.php"><i class="fas fa-user-edit"></i> Mi Perfil</a>
									<a class="dropdown-item" href="../controller/CerrarSesion.php"><i class="fas fa-power-off"></i> Cerrar Sesion</a>
						</div>
					</li>
				<?php }else{
					echo '<button type="button" class="btn btn-outline-success waves-effect login" data-toggle="modal" data-target="#centralModalSm">
						<i class="fa fa-user prefix"></i>&nbsp; Ingresar 
					</button>';
				}
			?>
		</ul>
	  </div>
</nav>


	<!--   Carta Principal de Talleres    -->
	<section id="team-header">
		<div class="row ">
			<div class="col-xl-8 col-lg-8 col-md-8">
					<div class="card-body">
						<h4 class="card-title mt-4"> Septimo Año "Informática" </h4>
						<p class="mt-4">
							En este ultimo año, los alumnos realizaran las denominadas "Practicas Profesionalizantes", con el objetivo de 
							que los alumnos consoliden, integren y amplien, las capacidades y saberes que se corresponden con el perfil 
							profesional en el que se estan formando. Estan organizadas por la institucion educativa y referenciadas en 
							situaciones de trabajo y desarrolladas dentro o fuera de la escuela. 
							<a href ="DiseñosCurriculares/PProfesionalizantes.pdf" class="pdf1" target="_blank">Mas Informacion.</a>
						</p>
						<p>
							En la escuela realizaran proyectos para cada materia en forma grupal, aplicando los conocimientos aprendidos en el transcurso
							del año y en los 6 años previos, y donde aprenderan a trabajar en equipo. 
						</p>	
						<p>
							El Técnico en Informática Profesional y Personal está capacitado para asistir al usuario
             				 de productos y servicios informáticos brindándole servicios
              				desarrollando las actividades descriptas en su perfil profesional.
						</p>
						
					</div>
				</div>
			
				<div class="col-xl-4 col-lg-4 col-md-4 segundadacol">	
					<div class="card-body">
						<h4 class="card-title"> Materias</h4>
						<p>
							Carga Horaria semanal: varía según el taller
						</p>
						<p>
							<i class="fas fa-angle-right"></i> Practicas Profesionalizantes
						</p>
						<p>
							<i class="fas fa-angle-right"></i> Proyecto Integrador
						</p>
						<p>
							<i class="fas fa-angle-right"></i> Instalación, Reparación y Mantenimiento de <br>Equipos Computacionales
						</p>
						<p>
							<i class="fas fa-angle-right"></i> Redes Informáticas
						</p>
						<p>
							<i class="fas fa-angle-right"></i> Emprendimíento
						</p>
						<p>
							<i class="fas fa-angle-right"></i> Modelos y Sistemas
						</p>
						<p>
							<i class="fas fa-angle-right"></i> Base de Datos
						</p>
						<p class="mt-4 mb-1">
							<a href="DiseñosCurriculares/Informatica.PDF" class="pdf2" target="_blank"><i class="far fa-file-pdf"></i> Diseño Curricular "Informatica"</a>
						</p>
					</div>
				</div>
			</div>
		</section>

	<!--   Cartas de Talleres    -->
		<section id="team">
			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="card text-center h-100">
						<div class="card-body">
							<img src="img/redesinformaticas.jpg" alt="" class="img-fluid mt-4">
							<h3 class="card-title pt-4"> Redes Informáticas </h3>
							<p class="card-text">El alumno conocera sobre todas las redes informáticas a profundidad, su Instalación
								y óptimo desempeño posible para sus usuarios en un ámbito real.  
							</p>

						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="card text-center h-100">
						<div class="card-body">
							<img src="img/proyectoinformatica.png" alt="" class="img-fluid mt-4">
							<h3 class="card-title pt-4"> Proyecto Integrador</h3>
							<p class="card-text">A través del los proyectos se busca desarrollar en el estudiante capacidades para la preparación,
                				formulación y presentación formal de propuestas e informes de proyectos de ingeniería e investigación, a partir de algunas herramientas básicas de la metodología de la investigación,
                				adquirir habilidades en la presentación de resultados de un proyecto como informes finales, artículos científicos, resúmenes, y presentaciones orales.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="card text-center h-100">
						<div class="card-body">
							<img src="img/IRM.jpg" alt="" class="img-fluid mt-4">
							<h3 class="card-title pt-4"> Instalación, Reparación y Mantenimiento de Equipos Computacionales </h3>
							<p class="card-text">Se abordaran actividades asociadas al tratamiento de equipos computacionales, tanto en
              					su mantenimiento, reparación y en la perfecta optimización tanto de parte del Hardware
								como del software que compone a los equipos con los que trabaje el alumno.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="card text-center h-100">
						<div class="card-body">
							<img src="img/emprendimiento.jpg" alt="" class="img-fluid mt-4">
							<h3 class="card-title pt-4"> Emprendimíento  </h3>
							<p class="card-text">Se realizaran actividades que permitan a los estudiantes adquirir el conocimiento y la
								voluntad suficiente para desarrollar un micro emprendimiento con todas sus fases y análisis de mercado, 
								toda, de inversiones, de rentabilidad, Asientos básicos de contabilidad. plan de ventas , estrategias de marketing.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="card text-center h-100">
						<div class="card-body">
							<img src="img/modelosysistemas.jpg" alt="" class="img-fluid mt-4">
							<h3 class="card-title pt-4"> Modelos y Sistemas </h3>
							<p class="card-text">El alumno aprendera a través del análisis sobre los tipos de sistemas
                				aplicables a los humanos y empresas utilizados para trabajar, tomar decisiones,
								de forma teórica y cómo aplicarlos a casos reales en el área de trabajo.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="card text-center h-100">
						<div class="card-body">
							<img src="img/basededatos.jpg" alt="" class="img-fluid mt-4">
							<h3 class="card-title pt-4"> Base de Datos </h3>
							<p class="card-text">Se le enseñara al alumno a gestionar bases de datos, creando sus propios
              					modelos, optimizandolos y pasandolos a lenguaje de programación para ser útilizado en
							 	entornos profesionales de trabajo.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 mb-4 tercercard">
					<div class="card text-center h-100">
						<div class="card-body">
							<img src="img/practicasinformatica.jpg" alt="" class="img-fluid mt-4 ">
							<h3 class="card-title pt-4"> Prácticas Profesionalizantes</h3>
							<p class="card-text">Las Prácticas Profesionalizantes pretenden familiarizar e introducir a los estudiantes 
							en los procesos y el ejercicio profesional vigentes, para lo cual utilizan un variado tipo de estrategias 
							didácticas ligadas a la dinámica profesional caracterizada por la incertidumbre, la singularidad y el conflicto 
							de valores.En el marco de la Educación Técnico Profesional, estas prácticas formativas deben ser concebidas 
							como el núcleo central y al mismo tiempo, como eje transversal de la formación, que da sentido al conjunto 
							saberes y capacidades que comprenden un título técnico.
							</p>
						</div>
					</div>
				</div>
	</section>
<!-- Cartel Login -->
<section id="form">
	<div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<h4 class="card-header elegant-color text-center py-4 arriba">
			<strong><i class="fa fa-user prefix"></i> &nbsp;Iniciar Sesion</strong>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</h5>
				<!--Card content-->
				<div class="card-body px-lg-5 pt-0">

			<!-- Form -->
			<form class="text-center" style="color: #757575;" action="../model/metadatos.php" method="post">

			<!-- Email -->
			<div class="md-form">
				<input type="text" id="materialLoginFormEmail" required class="form-control" pattern="[A-Za-z0-9_-]{1,15}" name="User">
				<label for="materialLoginFormEmail">Usuario</label>
			</div>

			<!-- Password -->
			<div class="md-form">
				<input type="password" id="materialLoginFormPassword" required class="form-control" pattern="[A-Za-z0-9_-]{1,15}" name="Pass">
				<label for="materialLoginFormPassword">Contraseña</label>
			</div>

			<!-- Sign in button -->
			<button class="btn btn-success btn-block my-4 z-depth-1 font-weight-bold boton" type="submit" name="enviar" value ="Ingresar">Ingresar</button>

			</form>
			<!-- Form -->

			</div>

			</div>
		</div>
	</div>
</section>


<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">
  	<div style="background-color: #00B573 ;">
		<div class="container">
			<!-- Grid row-->
			<div class="row py-4 d-flex align-items-center">
				<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
					<h6 class="mb-0">Conoce Nuestras Redes Sociales</h6>
				</div>
				<div class="col-md-6 col-lg-7 text-center text-md-right">
					<!-- Facebook -->
					<a href="https://www.facebook.com/tecnica2.malvinas" style="text-decoration:none" class="fb-ic"><i class="fab fa-facebook-f white-text mr-4"></i></a>
					<!-- Youtube -->
					<a href="https://www.youtube.com/channel/UCOY7uWhOfxXQDdVG8stwJgg" style="text-decoration:none" class="fb-ic"><i class="fab fa-youtube white-text mr-4"></i></a>
					<!--Instagram-->
					<a href="https://www.instagram.com/tecnica2.malvinas/" style="text-decoration:none" class="ins-ic"><i class="fab fa-instagram white-text"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container text-center text-md-left mt-xl-3 mb-3 mt-sm-0 container2">
		<div class="row mt-3 ">
			<div class="col-md-6 col-lg-1 col-xl-2 mx-auto mt-xl-3 mt-sm-5 mt-md-4 mt-5">
				<h6 class="text-uppercase font-weight-bold ml-xl-5"><a href="principal.php">Inicio </a></h6>
				<hr class="green accent-2 mt-0 d-inline-block ml-xl-5" style="width: 60px;">
				<p class="ml-xl-5"><a href="principal.php">Inicio </a></p>
			</div>
			<div class="col-md-6 col-lg-2 col-xl-2 mx-auto mt-xl-3 mt-sm-5 mt-md-4 mt-5">
				<h6 class="text-uppercase font-weight-bold"><a href="Ciclo Basico.php">Ciclo Basico </a></h6>
				<hr class="green accent-2 mt-0 d-inline-block mx-auto" style="width: 130px;">
				<p><a href="Ciclo Basico.php">Ciclo Basico</a></p>
			</div>
			<div class="col-md-6 col-lg-2 col-xl-2 mx-auto mt-xl-3 mt-sm-5 mt-md-4 mt-5">
				<h6 class="text-uppercase font-weight-bold">Ciclo Superior</h6>
				<hr class="green accent-2 mt-0 d-inline-block mx-auto" style="width: 150px;">
				<p><a href="Informatica.php">Informatica</a></p>
				<p><a href="Maestro Mayor de Obras.php">Maestro Mayor de Obra</a></p>
			</div>
			<div class="col-md-6 col-lg-2 col-xl-2 mx-auto mt-xl-3 mt-sm-5 mt-md-4 mt-5">
			<h6 class="text-uppercase font-weight-bold">Septimo Año</h6>
				<hr class="green accent-2 mt-0 d-inline-block mx-auto" style="width: 120px;">
				<p><a href="Septimo Informatica.php">Informatica</a></p>
				<p><a href="Septimo M. Mayor de Obras.php">Maestro Mayor de Obra</a></p>
			</div>
			<div class="col-md-6 col-lg-2 col-xl-2 mx-auto mt-xl-3 mt-sm-5 mt-md-4 mt-5">
			<h6 class="text-uppercase font-weight-bold">Otros</h6>
				<hr class="green accent-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p><a href="NormasdeConvivencia.php">Normas de Convivencia</a></p>
				<p><a href="CentroEstudiantes.php">Institución</a></p>
				<p><a href="../controller/Preguntar.php">Mesa de Examenes</a></p>
				<p><a href="Contactanos.php">Mandanos un Email</a></p>
			</div>
			<div class="col-md-6 col-lg-2 col-xl-2 mx-auto mb-md-0 mt-xl-3 mt-sm-5 mt-md-4 mt-5">
				<h6 class="text-uppercase font-weight-bold">Contacto</h6>
				<hr class="green accent-2 mt-0 d-inline-block " style="width: 100px;">
				<p><i class="fas fa-home mr-1"></i> Rawson 2950, Villa de Mayo, Buenos Aires</p>
				<p><i class="fas fa-envelope correo"></i> eestnro2malvarg@ gmail.com</p>
				<p><i class="fas fa-phone mr-1"></i> + 011 4463-8509</p>
			</div>
		</div>
	</div>
<!-- Copyright -->
<div class="footer-copyright text-center py-3"><a href="https://www.instagram.com/tuwebsegura/">© 2020 Copyright</a>
</div>
</footer>

	</body>
	</html>
