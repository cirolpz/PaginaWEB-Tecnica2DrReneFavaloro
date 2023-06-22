<!DOCTYPE html>
<html long ="es">
	<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informatica</title>
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
			  <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  <span class="button">Ciclo Superior </span></a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  <a class="dropdown-item" href="Informatica.php">Informatica</a>
			  <a class="dropdown-item " href="Maestro Mayor de Obras.php">Maestro Mayor de Obras</a>
			</div>
		  </li>

		  <li class="nav-item dropdown mr-4">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
			  <span class="button">Septimo Año </a>
		  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			<a class="dropdown-item " href="Septimo Informatica.php">Septimo Informatica </a>
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
				<a class="dropdown-item" href="Contactanos.php">Mandanos un Mail</a>
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
				<div class="card-body mt-3">
					<h4 class="card-title "> Ciclo Superior "Informatica"</h4>
					<p class="mt-4">
						Una vez finalizado el ciclo basico, el alumno debera elegir una especialidad, que tambien estara organizado en modulos, pero a 
						diferencia de que estos seran especificamente de la carrera.
					</p>
					<p>
						El técnico se desempeña individualmente dentro de una organización o en su propio microemprendimiento. 
						Para poder manejarse en un ámbito de constante evolución tecnológica, en el cual los productos o servicios entran rápidamente
						en obsolescencia, tiene que actualizarse permanentemente en lo técnico. También, y por la forma de realizar sus actividades, 
						tiene que programar y administrar sus tiempos y resultados, así como muchas veces gestionar su propio negocio, para lo cual 
						registra sus actividades para disponer de elementos de juicio, compara los resultados técnicos logrados en cada trabajo y 
						sus resultados económicos para tomar sus propias decisiones sobre cómo llevarlas a cabo.
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
						<i class="fas fa-angle-right"></i> Laboratorio de Aplicaciones
					</p>
					<p>
						<i class="fas fa-angle-right"></i> Laboratorio de Sistemas Operativos
					</p>
					<p>
						<i class="fas fa-angle-right"></i> Laboratorio de Hardware
					</p>
					<p>
						<i class="fas fa-angle-right"></i> Programacion
					</p>
					<p>
						<i class="fas fa-angle-right"></i> Sistemas Digitales
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
						<img src="img/Aplicaciones.png" alt="" class="img-fluid mt-4 ">
						<h3 class="card-title pt-4"> Laboratorio de Aplicaciones</h3>
						<p class="card-text">Los alumnos deberan desarrollar las capacidades para: Operar Aplicaciones de uso general, 
							Optimizar el trabajo mediante aplicaciones especificas, Diseñar y desarrollar presentaciones , bases de datos, 
							realizando consultas y formularios mediante aplicaciones y diseños e implimentacion de paginas web. Relacionar 
							diferentes lenguajes de programacion con los conocimientos previos. Detectar situaciones problematicas y seleccionar
							la herramienta adecuada para resolverla.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="card text-center h-100">
					<div class="card-body">
						<img src="img/Operativo.jpeg" alt="" class="img-fluid mt-4">
						<h3 class="card-title pt-4"> Laboratorio de Sistemas Operativos</h3>
						<p class="card-text">El Alumno Interpretarara el esquema del funcionamiento del software de la computadora. 
							Identificarara los sistemas instalados y sus componentes atendiendo estructura y funcion en relacion con la aplicacion.
							Sabra el sistema operativo a instalar en funcion con que lo que necesite el cliente.  
							Analizarara las variables para el diseño de redes que cubran las expectativas de una organización. 
							Administrara la red de forma óptima. Y se Desempeñara adecuadamente en un entorno de trabajo.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 ">
				<div class="card text-center h-100">
					<div class="card-body">
						<img src="img/Hardware.png" alt="" class="img-fluid mt-4">
						<h3 class="card-title pt-4"> Laboratorio de Hardware </h3>
						<p class="card-text">Evaluar la estructura y arquitectura de los sistemas computacionales, así como los componentes 
							básicos que los conforman. Identificar las características generales e individuales de los elementos del hardware. 
							Autonomía en la resolución de problemas. Configurar, administrar y resolver conflictos que se presenten en los 
							dispositivos. Realizar el diseño integral de una red de computadores a nivel físico y lógico. Configurar, implementar 
							y mantener, redes y servicios.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 tercercard">
				<div class="card text-center h-100 ">
					<div class="card-body">
						<img src="img/Programacion.jpg" alt="" class="img-fluid mt-4">
						<h3 class="card-title pt-4"> Programacion </h3>
						<p class="card-text">Interpretar y comprender problemas factibles de ser sistematizados. Razonar de forma lógica en la 
							resolución de problemas. Que el alumno pueda desarrollar estructuras de datos. Que el alumno logre desarrollar
							habilidades de optimización en la programación. Diseñar, desarrollar e implementar soluciones informáticas simples.
							Desarrollar algoritmos elementales. Aprender la base de la programacion para aplicar cualquier aplicacion de 
							programacion.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 tercercard">
				<div class="card text-center h-100">
					<div class="card-body">
						<img src="img/Digitales.jpg" alt="" class="img-fluid mt-4">
						<h3 class="card-title pt-4"> Sistemas Digitales </h3>
						<p class="card-text">Habilidad y competencia para diseñar sistemas digitales. Compuertas Logicas. 
							Evaluar los datos y líneas de acción para conseguir tomar decisiones lógicas de forma imparcial y razonada. 
							Identificar la organización del procesador y sus elementos. Identificar el comportamiento de las memorias en el equipo.
							Demostrar el funcionamiento de algunos circuitos lógicos especiales y sus aplicaciones. 
							Diferenciar las características de entradas, salidas y circuitos internos. Adquirir habilidades sobre el uso de múltiples
							plataformas. Valorar el uso de los materiales y simbología electrónica.</p>
					</div>
				</div>
			</div>
		</div>
</section>

<!--   Carta footer   -->
<section id="team-header2">
	<div class="row">
		<div class="col-xl-6 col-lg-6 col-md-12">
			<div class="card-body">
				<h4 class="card-title"> Alcance del Perfil del Tecnico Informatico</h4>
				<p>
					El Técnico en Informática Profesional y Personal está capacitado para asistir al usuario de
					productos y servicios informáticos brindándole servicios de instalación, capacitación,
					sistematización, mantenimiento primario, resolución de problemas derivados de la operatoria,
					y apoyo a la contratación de productos o servicios informáticos, desarrollando las actividades
					descriptas en su perfil profesional y pudiendo actuar de nexo entre el especialista o experto en
					el tema, producto o servicio y el usuario final.
				</p>
			</div>	
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 order-12 m-auto">
			<div class="card-body text-center">
				<h6 class="card-title"> Sus actividades profesionales cubren las siguientes áreas:</h6>
				<p>
					<i class="fas fa-angle-right"></i> “Facilitar la operatoria del usuario”
				</p>
				<p>
					<i class="fas fa-angle-right"></i> “Mantener la integridad de los datos locales del usuario"
				</p>
				<p>
					<i class="fas fa-angle-right"></i> “Instalar y poner en marcha componentes o sistemas, equipos y redes”
				</p>
				<p>
					<i class="fas fa-angle-right"></i> “Mantener equipos y sistemas de baja complejidad o componentes de los mismos”
				</p>
				<p>
					<i class="fas fa-angle-right"></i> “Optimizar el ambiente informático de trabajo del usuario”
				</p>
				<p>
					<i class="fas fa-angle-right"></i> “Asesorar y apoyar en la compra y en la venta de productos o servicios informáticos”
				</p>
			</div>
		</div>	
		<div class="col-xl-6 col-lg-6 col-md-12 order-1 ">	
			<div class="card-body">
				<h4 class="card-title"> Area Ocupacional</h4>
				<p>
					Los Técnicos en Informática Profesional y Personal brindan servicios de asistencia técnica y
					asesoramiento al usuario y, como parte de ello, pueden instalar, reemplazar y configurar o
					reconfigurar elementos de hardware o de software, incluyendo la intercomunicación entre
					equipos, o también diseñar programas y ejecutar procesos para proteger datos.
					Es decir,brinda servicios de apoyo al usuario de computadoras personales, que son los que las operan como
					parte de sus actividades principales (productivas, comerciales, administrativas, artísticas o
					lúdicas)- realizando intervenciones más o menos puntuales para resolver los problemas que los
					mismos experimentan en su utilización.
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
