<!DOCTYPE html>
<html long ="es">
	<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maestro Mayor de Obras</title>
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
			<a class="nav-link" href="Ciclo Basico.php"><span class="button">Ciclo Basico</span> </a>
		  </li>

		  <li class="nav-item dropdown mr-4">
			  <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  <span class="button">Ciclo Superior </span></a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  <a class="dropdown-item" href="Informatica.php">Informatica</a>
			  <a class="dropdown-item active" href="Maestro Mayor de Obras.php">Maestro Mayor de Obras</a>
			</div>
		  </li>

		  <li class="nav-item dropdown mr-4">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
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
	<div class="row">
		<div class="col-xl-8 col-lg-8 col-md-8">
			<div class="card-body mt-3">
				<h4 class="card-title"> Ciclo Superior "Maestro Mayor de Obra"</h4>
				<p class="mt-4">
					Una vez finalizado el ciclo basico, el alumno debera elegir una especialidad, que tambien estara organizado en modulos, pero a 
					diferencia de que estos seran especificamente de la carrera.
				</p>
				<p>
					Como profesional sera capaz de proponer y/o interpretar las definiciones surgidas de los estamento tecnicos y jerarquicos 
					correspondientes, gestionar los procesos de elaboracion y gestacion de un proyecto edilicio y sus procesos constructivos, 
					controlar la totalidad de las actividades requeridas hasta su efectiva concrecion, teniendo en cuenta los criterios de seguridad,
					impacto ambiental, relaciones humanas, calidad, productividad y costos.
				</p>
			</div>
		</div>
		<div class="col-xl-4 col-lg-4 col-md-4 segundadacol">	
			<div class="card-body">
				<h4 class="card-title"> Talleres</h4>
				<p>
					Carga Horaria semanal: 2 horas por taller
				</p>
				<p>
					<i class="fas fa-angle-right"></i> Diseño Arquitectonico
				</p>
				<p>
					<i class="fas fa-angle-right"></i> Sistemas Constructivos
				</p>
				<p>
					<i class="fas fa-angle-right"></i> Construcciones
				</p>
				<p>
					<i class="fas fa-angle-right"></i> Dibujo Asistido por PC
				</p>
				<p>
					<i class="fas fa-angle-right"></i> Representacion Grafica de Proyectos
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
					<img src="img/diseño arquitectonico.jpg" alt="" class="img-fluid mt-4 ">
					<h3 class="card-title pt-4"> Diseño arquitectonico </h3>
					<p class="card-text">Finalizado el cursado de la materia los y las estudiantes deberán haber desarrollado las 
						siguientes Capacidades:Proyectar aplicando las nuevas tecnologías que favorezcan los recursos renovables en 
						la arquitectura sustentable. Analizar e interpretar diferentes estilos arquitectónicos de época y contemporáneos. 
						Aplicar técnicas de formas y espacios para la toma de partido e idea rectora. Confeccionar un legajo integral con 
						los planos pertinentes.</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 mb-4">
			<div class="card text-center h-100">
				<div class="card-body">
					<img src="img/sistemas constructivos.png" alt="" class="img-fluid mt-4">
					<h3 class="card-title pt-4"> Sistemas constructivos</h3>
					<p class="card-text">Finalizado el cursado de la materia los estudiantes deberán haber desarrollado las siguientes Capacidades:
						Resolver cálculos relacionados con determinación de puntos y distancias, etc Reconocer el instrumental 
						propio relacionado con las tareas de topografía. Elección de pinturas y revestimientos aplicando ideas creativas y adecuadas 
						a cada ambiente. Resolver terminaciones en general aplicando técnicas de buen gusto, tradicionales y de última generación. 
						Aplicar criterios de elección según la función y forma de ejecución de los distintos revoques y solados. Realizar prácticas
						concretas con situaciones reales.</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 mb-4 tercercard">
			<div class="card text-center h-100">
				<div class="card-body">
					<img src="img/Proyecto.jpg" alt="" class="img-fluid mt-4">
					<h3 class="card-title pt-4"> Construcciones  </h3>
					<p class="card-text">Finalizado el cursado de la materia los estudiantes deberán haber desarrollado las siguientes Capacidades:
						Discernir frente a las problemáticas planteadas en relación a las soluciones y metodologías a emplear.
						Evaluar el riesgo e impacto en las decisiones que se toman para la solución de las patologías en construcciones edilicias.
						Realizar un diagnóstico basado en el análisis de lesiones de obra y en función de los resultados aplicar los métodos más
						convenientes para subsanar el problema. Realizar planos de replanteo de obra, detallando toda la información necesaria 
						para una optima ejecución en el terreno, enfatizando la importancia que el mismo tiene para el arte del buen construir.</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 mb-4 tercercard">
			<div class="card text-center h-100 ">
				<div class="card-body">
					<img src="img/DibujoAsistido.jpg" alt="" class="img-fluid mt-4">
					<h3 class="card-title pt-4"> Dibujo Asistido por PC </h3>
					<p class="card-text">Finalizado el cursado de la materia los estudiantes deberán haber desarrollado las siguientes Capacidades:
						 Utilizar los elementos y herramientas relacionados con el dibujo técnico manual.
						 Aplicar las Normas IRAM en toda tarea relacionada con la asignatura.
						 Poner en práctica todas las formas de representación en relación al dibujo de diseño, grafismos, escalas, etc.
						 Aplicar como herramienta el dibujo asistido por computadora con los programas específicos para la modalidad.
						</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 mb-4 tercercard">
			<div class="card text-center h-100">
				<div class="card-body">
					<img src="img/RepresentacionGraficaProyectos.jpg" alt="" class="img-fluid mt-4">
					<h3 class="card-title pt-4"> Representacion Grafica de Proyectos </h3>
					<p class="card-text">Finalizado el cursado de la materia los estudiantes deberán haber desarrollado las siguientes Capacidades:
						Utilizar los elementos y herramientas relacionados con el dibujo técnico manual.
 						Aplicar las Normas IRAM en toda tarea relacionada con la asignatura.
						Poner en práctica todas las formas de representación en relación al dibujo de diseño, grafismos, escalas, etc.
						 Aplicar como herramienta el dibujo asistido por computadora con los programas específicos para la modalidad.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!--   Carta footer   -->
<section id="team-header2">
	<div class="row">
		<div class="col-xl-6 col-lg-6 col-md-12 mt-1">
			<div class="card-body">
				<h4 class="card-title"> Alcance del Perfil del Maestro Mayor de Obras</h4>
				<p>
					El Maestro Mayor de Obras está capacitado para manifestar conocimientos, habilidades,
					destrezas, valores y actitudes en situaciones reales de trabajo, conforme a criterios de
					profesionalidad propios de su área y de responsabilidad social al:
				</p><p>
					<i class="fas fa-angle-right"></i> “Analizar las necesidades de un cliente y elaborar el programa de necesidades”
				</p>
				<p>
					<i class="fas fa-angle-right"></i> “Elaborar anteproyectos de soluciones espaciales edilicias constructivas y técnicas para un
					programa de necesidades determinado”
				</p>
				<p>
					<i class="fas fa-angle-right"></i> “Proyectar soluciones espaciales edilicias, constructivas y técnicas para un anteproyecto
					determinado”
				</p>
				<p>
					<i class="fas fa-angle-right"></i> “Dirigir la ejecución de procesos constructivos en genera.”
				</p>
				<p>
					<i class="fas fa-angle-right"></i> “Gestionar y administrar la ejecución del proceso constructivo en general”
				</p>
				<p>
					<i class="fas fa-angle-right"></i> “Prestar servicios de evaluación técnica a terceros”
				</p>
				<p>
					<i class="fas fa-angle-right"></i> “Asesorar técnicamente a terceros”
				</p>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 order-12 m-auto">
			<div class="card-body text-center">
				<h6 class="card-title"> Sus actividades profesionales cubren las siguientes áreas:</h6>
				<p>
					<i class="fas fa-angle-right"></i> “Concepción de la idea proyecto solución y toma de partido"
				</p>
				<p>
					<i class="fas fa-angle-right"></i> “Planificación estratégica del anteproyecto"
				</p>
				<p>
					<i class="fas fa-angle-right"></i> “Diseño y resolución constructiva de la propuesta”
				</p>
				<p>
					<i class="fas fa-angle-right"></i> “Coordinación operativa de los procesos”
				</p>
				<p>
					<i class="fas fa-angle-right"></i> “Evaluación global de la idea proyecto”
				</p>
				<p>
					<i class="fas fa-angle-right"></i> “Construcción de una idea de comercialización”
				</p>
			</div>
		</div>	
		<div class="col-xl-6 col-lg-6 col-md-12 mt-1 segundadacol">	
			<div class="card-body">
				<h4 class="card-title"> Area Ocupacional</h4>
				<p>
					Las capacidades que el Maestro Mayor de Obras desarrolla en el marco de las funciones
					profesionales del campo de la construcción, le permiten desempeñarse en los ámbitos de
					producción: oficinas técnicas, obras de construcción edilicias, empresas de productos o
					servicios relacionados con el ámbito de la construcción actuando en forma independiente en
					las áreas ocupacionales de: proyecto, dirección, planificación, control, gestión, administración y
					comercialización en la industria de la construcción.
				</p>
				<p>
					Actúa interdisciplinariamente con expertos en otras áreas, eventualmente involucrados en su
					actividad (equipamiento e instalaciones electromecánicas, otras especialidades de
					construcciones, mecánica, producción agropecuaria, informática, etc.).
				</p>
				<p>
					Interpreta las necesidades del comitente, las definiciones surgidas de los estamentos técnicos y
					jerárquicos correspondientes, gestiona sus actividades específicas, controla la totalidad de las
					actividades requeridas hasta su efectiva concreción, teniendo en cuenta los criterios de
					seguridad, impacto ambiental, relaciones humanas, calidad, productividad y costos
				</p>
				<p>
					Según los alcances y condiciones de su ejercicio profesional, se responsabiliza, ante sus
					contratantes por el cumplimiento de las normas específicas y la aplicación de las de seguridad e
					higiene, además de la calidad en los servicios y productos prestados hasta su efectiva
					humanas, calidad, productividad y costos. 
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
