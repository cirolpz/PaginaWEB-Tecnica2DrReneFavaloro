<!DOCTYPE html>
<html long ="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Septimo M. Mayor de Obras</title>
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
	<a class="navbar-brand" href="Pagina de la escuela.php"> <img src="img/Logo.png" class="logo-brand"> E.E.S.T N°2 </a>
	<button class="navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="menu">
		<ul class="navbar-nav ml-auto mr-4">
		  <li class="nav-item mr-4">
			<a class="nav-link" href="Pagina de la escuela.php"><span class="button"><i class="fas fa-home"></i>Inicio</span> </a>
		  </li>
		  <li class="nav-item mr-4">
			<a class="nav-link " href="Ciclo Basico.php"><span class="button">Ciclo Basico</span> </a>
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
						<h4 class="card-title mt-4"> Septimo Año "Maestro Mayor de Obras" </h4>
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
						
					</div>
				</div>
			
				<div class="col-xl-4 col-lg-4 col-md-4 segundadacol">	
					<div class="card-body">
						<h4 class="card-title"> Materias</h4>
						<p>
							Carga Horaria semanal:  varía según el taller
						</p>
						<p>
							<i class="fas fa-angle-right"></i> Practicas Profesionalizantes
						</p>
						<p>
							<i class="fas fa-angle-right"></i> Normativa profesional de la construcción
						</p>
						<p>
							<i class="fas fa-angle-right"></i> Condicionamiento del Aire
						</p>
						<p>
							<i class="fas fa-angle-right"></i> Gerenciamiento de obra
						</p>
						<p>
							<i class="fas fa-angle-right"></i> Introduccion Emprendimiento
						</p>
						<p>
							<i class="fas fa-angle-right"></i> Proyecto Integrador
						</p>
						<p>
							<i class="fas fa-angle-right"></i>Estructura
						</p>
						<p class="mt-4 mb-1">
							<a href="DiseñosCurriculares/MaestroMayorDeObras.pdf" class="pdf2" target="_blank"><i class="far fa-file-pdf"></i> Diseño Curricular "M.M.O"</a>
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
						<img src="img/casa.jpeg" alt="" class="img-fluid mt-4">
						<h3 class="card-title pt-4"> Proyecto Integrador </h3>
						<p class="card-text">Adoptar el Proyecto de arquitectura de acuerdo a la incumbencia general del Maestro Mayor de Obras 
						que se realizara el año anterior en ”Diseño arquitectónico” cumpliendo en un todo con los aspectos normativos, 
						legales y profesionales. Por otra parte tambien se desarrolla en esta materia el Armado de legajo completo y 
						documentación técnica del edificio según incumbencia Se tiene en cuenta una evaluación formativa, del proceso de enseñanza 
						y aprendizaje, desarrollando capacidades y competencias propias de la especialidad.</p>
						
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="card text-center h-100">
					<div class="card-body">
						<img src="img/normativa.jpeg" alt="" class="img-fluid mt-4">
						<h3 class="card-title pt-4"> Normativa profesional de la construcción</h3>
						<p class="card-text">Se realizaran actividades que permitan a los estudiantes adquirir el conocimiento sobre las 
						normas/leyes y/o contratos a cumplir obligatoriamente por un Maestro Mayor de Obras que ejerza de manera profesional.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="card text-center h-100">
					<div class="card-body">
						<img src="img/aire.png" alt="" class="img-fluid mt-4">
						<h3 class="card-title pt-4"> Acondicionamiento del Aire </h3>
						<p class="card-text">Se abordaran actividades asociadas al acondicionamiento del aire, es decir, se les da el conocimiento
							sobre todo lo relacionado con aires acondicionados, calefacción y por ultimo pero tambien muy importante el acondicionamiento
							de una habitacion y/o interiores a la hora de la construcción (Muy importante para un MMO a la hora de ejercer). 
							En si lo que los alumnos desarrollan es: Los efectos que se generan en habitad - Investigar los principios físicos -
							Redacción de memorias técnicas - Producción de informes - Resolución de situaciones 
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="card text-center h-100">
					<div class="card-body">
						<img src="img/gerenciamiento.jpg" alt="" class="img-fluid mt-4">
						<h3 class="card-title pt-4"> Gerenciamiento de Obra </h3>
						<p class="card-text">En base a lo desarrollado en “Proyecto Integrador” en relación al edificio diseñado, 
						realizar el gerenciamiento del mismo acorde a los contenidos propuestos en esta asignatura.
						Se tiene en cuenta una evaluación formativa, del proceso de enseñanza y aprendizaje, desarrollando capacidades y 
						competencias propias de la especialidad.
						La evaluación para 7° año es integral, donde todas las materias se interrelacionas atravesando todos los campos del 
						conocimiento adquirido a lo largo de su trayectoria, para culminar en la planificación estratégica del Proyecto Integrador.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="card text-center h-100">
					<div class="card-body">
						<img src="img/emprendimiento.jpg" alt="" class="img-fluid mt-4">
						<h3 class="card-title pt-4"> Emprendimiento </h3>
						<p class="card-text">Se realizaran actividades que permitan a los estudiantes adquirir el conocimiento y la voluntad 
						suficiente para desarrollar un micro emprendimiento con todas sus fases y análisis de mercado, toda, de
                 		inversiones, de rentabilidad, Asientos básicos de contabilidad.
						plan de ventas , estrategias de marketing. </p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="card text-center h-100">
					<div class="card-body">
						<img src="img/ESTRUCTURA.jpg" alt="" class="img-fluid mt-4">
						<h3 class="card-title pt-4"> Estructura </h3>
						<p class="card-text">En este espacio se propone que los alumnos trabajen en el desarrollo y cálculo de la estructura en 
						función de su proyecto relacionado con la asignatura “proyecto integrador” y del sistema constructivo que adoptaron. 
						el docente será el guía que acompañe el desarrollo del cálculo especifico para cada proyecto. -nota: los conceptos se 
						desarrollaron en años anteriores, en esta asignatura se aplican.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 mb-4 tercercard">
				<div class="card text-center h-100">
					<div class="card-body">
						<img src="img/practicas.jpg" alt="" class="img-fluid mt-4 ">
						<h3 class="card-title pt-4"> Prácticas Profesionalizantes</h3>
						<p class="card-text">Las Prácticas Profesionalizantes pretenden familiarizar e introducir a los estudiantes en los procesos
							y el ejercicio profesional vigentes, para lo cual utilizan un variado tipo de estrategias didácticas ligadas a la dinámica 
							profesional caracterizada por la incertidumbre, la singularidad y el conflicto de valores.En el marco de la Educación 
							Técnico Profesional, estas prácticas formativas deben ser concebidas como el núcleo central y al mismo tiempo, como eje
							transversal de la formación, que da sentido al conjunto saberes y capacidades que comprenden un título técnico.
						</p>
					</div>
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
				<h6 class="text-uppercase font-weight-bold ml-xl-5"><a href="pagina de la escuela.php">Inicio </a></h6>
				<hr class="green accent-2 mt-0 d-inline-block ml-xl-5" style="width: 60px;">
				<p class="ml-xl-5"><a href="pagina de la escuela.php">Inicio </a></p>
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
