<!DOCTYPE html>
<html long ="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Normas de Convivencia</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/scrollbar.css">
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
			  <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
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

<section id="team-header-Normas">
	<div class="row">
		<div class="col"> 
			<div class="card example-1 scrollbar-ripe-malinka">
				<div class="caca text-left">
				<h4 class="card-title mt-3">Normas de Convivencia</h4>
				<p>
					<h6><strong>Principios Reactores</strong></h6>
					<p>
						Se destaca el rol de la escuela en la comunidad de Villa de Mayo, el cual debe brindar un servico de excelencia para dar igualdad de oportunidades a la población estudiantil que asiste a ella,
						independientemente cual sea su origen económico social, u otras características del alumnado.<br>
							El egresado de la E.E.S.T.N°2, tiene y debe tener las habilidades y capacidades para
							emprender en cualquier proyecto, sea laboral, cultural, o académico y desarrollarlo exitosamente, para
							ello, todos los miembros que forman parte de la institución, más allá de su rol, debe cumplir las
							funciones holísticamente, con un desenpeño solidario y mancomunado en la realización de las tareas
							que le compete, o la institución necesita, en las que se prioriza el servicio a la comunidad en general y a
							los alumnos en particular.<br>
							Este servicio de calidad es el punto de partida de nuestro proyecto institucional y los AIC están
							pensados en función de alcanzar los ideales trazados.<br>
							Teniendo como objetivo la excelencia educativa y la formación de personas confiadas en si
							mismas, como agentes de cambios debemos tener en cuenta la convivencia democrática y
							participativa, basada en el respeto y la armonia institucional, con vínculos y relaciones abiertas a la
							comunidad en la que se inserta, reforzando el sentido del servicio educativo.<br>
				En ese sentido, se direcciona la propuesta en la relación Escuela - Comunidad, en un trabajo
				solidario, dando lo mejor de sí para para lograr una educación de excelencia, cimentada en principios éticos y
				valores morales que formen a los alumnos <strong>como personas de bien y ciudadanos patrióticos, honrados,
				honorables  que desarrollen el respeto por la vida, la justicia, la verdad, defensa de la paz, el respeto
				por la diversidad y responsable de sus actos, conscientes de sus derechos y de sus deberes críticos y
				dispuestos al fiel cumplimiento de sus deberes como ciudadanos.</strong><br>
				Mujeres y hombres que pueden desempeñarse en diferentes ámbitos de la cultura, de la
				producción, del mundo de trabajo con capacidades acordes a las necesidades del mundo laboral que
				solicitará sus servicios, con conocimientos, aptitudes y actitudes que les permitan a los <strong>jóvenes
				desempeñarse en forma honorable, disiplinada, responsable, comprometida, y solidaria, a la vez, de
				continuar estudios superiores para cumplir con su proyecto de vida con éxito.</strong><br>
				El Taller, es espacio institucional en que el alumnado aprende el saber hacer y por otro lado, las
				Prácticas Profesionalizantes que los alumnos de 7° año realizan como parte del plan de estudios, a través
				de vínculos con empresas y la Municipalidad de Malvinas Argentinas, con la aprobación de la DET
				provincial, el conocimiento de la comunidad y estricta conformidad de los padres de los alumnos que las
				realizan.<br>
				Abonando el mismo propósito, la escuela ha institucionalizado las Salidas educativas
				y de representación institucional, Torneos, Actividades de Campamentos, Olimpíadas, para el desarrollo de
				valores ético morales, de participación y de convivencia en armonía en comunidad, mejorando la
				relación entre pares y alumno-docente. Todo ello, con el aval y el consentimiento de los adultos
				responsables de los estudiantes.<br>
			  
				<br>- Notificar todas las Comunicaciones enviadas a los padres.
				<br>- Asitir todos los días con el cuaderno de comunicados.
				<br>- No traer objetos de valor.
				<br>- Evitar actitudes de discriminación y/o violencia de qualequier tipo.
				<br>- Valorar la palabra y el uso de vocabulario respetuoso.
				<br>- Traer los materiales requeridos para realizar las tareas escolares.
				<br>- Observar buena conducta en todos los ámbitos.
				<br>- Recurrir al diálogo para resolver los conflictos.
				<br>- Cuidar la infraestructura y los recursos didácticos (Libros, mapas elementos de Laboratorio,
				Educación Física, Computadoras, etc.) Es falta grave el deterioro intencional de los mismos.
				<br>- Presentarse simpre con el cuaderno, documento de identidad dentro de la escuela.
				<br>- Usar ropa adecuada para las clases de Educación Física (Pantalón deportivo largo, remera lisa 
				azul, sin inscripciones). 
				<br>- No ingerir alimentos o líquidos  en las aulas o laboratorios
				<br>- Queda expresamente vedados el uso de celulares o elementos que distraigan la atención de la
				clase.
				<br>- respertar la disposición del aula y su ubicación según indique el docente
				<br>- Usar guardapolvo azul en las clases de taller. <br>

				La conflictividad es inherente al ser humano lo importante es prevenirla, reconocerla, afrontarla,
				resolverla. Ante la precencia de situaciones conflictivas la Comunidad educativa llega a los siguientes
				acuerdos:<br>

				<br>- Reflexionar sobre las mútiples variables que produjeron una situación conflictiva
				contextualizando la prblemática, clarificando el hecho a través del dialogo de las partes 
				involucradas.
				<br>- Intervención del docente asesor para mediar en la situación.
				<br>- última instancia de intervención institucional a cargo del director/a para la toma de desiciones y
				resolver el conflicto, tomando las medidas necesarias para la reparación del daño ocasionado a
				las personas o los bienes públicos. En esta instancia la sanción es ejemplificadora.
				<br>- Desmostrar en el proceder actitudes patrióticas y de respeto a la patria.
				
				<br>las sanciones se aplicarán de acuerdo a la gravedad e intencionalidad, siendo desde
				llamado de atención, apercibimiento, reparación del daño ocasionado, continuación pedagógica con trabajos
				prácticos en otro sector de la escuela, tareas comunitarias dentro de la institución, cambio de curso,
				cambio de turno, suspención con actividades domiciliaras programadas y supervisadas por los
				docentes, o el pase a otra institución. Se tendrá en cuenta la seguridad e integridad propia del
				alumno trasgresor, de otros alumnos, integrantes de la comunidad educativa y/o resguardar el rol de
				la autoridad escolar.<br>

				<h6> Alumnos</h6>
				<p>
				Derechos<br>
				- Recibir eduación en cantidad y calidad tales que posibiliten el desarrollo de sus
				hablidades, juicios críticos y sentido de responsabilidad y solidariadad social.<br>
				-Ser respetados en su libertad de conciencia y no ser objeto de ningún tipo discriminación
				humillante.<br> 
				- Expresar su opinión libremente y tener libertad de buscar, recibir y difuncir información<br>
				- Ser escuchados en todos los hechos que se vean involucrados.<br>
				- Ser evaluados en sus desempeños y logros conforme a criterios explicitados y ser
				informados al respecto.<br>
				- Integrar cenros de estudiantes, asociaciones, clubes de estudiantes y otras organizaciones
				comunitarias para participar en el funcionamiento de unidades educativas.<br>
				- Concurrir a la Escuela para completar su educación obligatoria.<br>
				- Ser protegidos contra toda agresión física, Psicológica, o moral.<br>
				- Desarrolar sus aprendizajes  en edifícios que respondadn normas de higiene y seguridad.<br>

					<strong> Deberes </strong><br>
				- Ser responsable de su accionar como integrante de la Escuela y de la Sociedad<br>
				- Respetar los simbolos patreos.<br>
				- Conocer y cumplir los Acuerdos institucionales de Convivencia.<br>
				- Dirigirse respetuosamente hacia los directivos, profesores, preceptores, acatando las indicaciones
				que éstos le realicen en función de los aprendizajes o disciplina y las personas en general.<br>
				- Ingresar al aula antes que el docente a cargo, ni se retirarse antes del horario.
				el docente no permitirá la salida de alumnos en horas de clase.<br>
				- No se utilizaran juegos o elementos de distracción en las aulas sin finalidad didáctica.<br>
				- Respetar los derechos de todos los miembros de la comunidad.<br>
				- Cumplir en tiempo y forma con las actividades pautadas.<br>
				- Ser puntuales en el ingreso a la institución y justificar todas las inasistencias.<br>
				- Asistir con la vestimenta escolar sencilla, prolija, formal(Remera de la Escuela, Guardapolvo en
				taller, pantalón largo negro o azul marino, sin roturas ni inscripciones, sin adornos ni maquillajes,
				aros, extensores, o piercing, campera azul, bufanda negra o azul en los días de frío). No está
				inscripciones que sea motivo de conflictos.<br>
				- Usar guardapolvo en las clases de taller.<br>
				- Favorecer la tarea del aula manteniendo una conducta respetuosa hacia los pares y docentes.<br>
				- Utilizar las nuevas tecnologías únicamente con fines pedagógicos y bajo la supervisión del
				docente. Los celulares, aparatos electrónicos o elementos que distraigan el aprendizaje quedan
				prohibidos en el ambito escolar.<br>
				-Desarrollar formas de cortesia, saludo, ceder el paso, decir gracias, solicitar permisos, ser gentiles
				con el objeto de favorecer la armonia y bienestar general.<br>
				- Cuidar las instalaciones y mobilario de la institución.<br>
				

				Teniendo en cuenta la continuidad pedagógica, los alumnos del ciclo básico cumplen la
				Jornada Escolar. Sólo en casos excepcionales, la dirección autoriza la entrada tardía o salir más
				temprano del horario en situaciones excepcionales, la dirección autoriza la entrada tardía o salir más
				temprano del horario en situaciones imponderables, por lo que los padres autorizan expresamente,
				simpre con comunicación expresa a la familia en el cuaderno de comunicados. Los adultos responsables
				no deben consentir que los menores, llamen por telefono para que los retire en forma anticipada
				en caso de ausencia de profesores la escuela tiene plan de contingencia institucional para suplir a los profesores.
				<br>
				Los alumnos no están autorizados a salir del lugar de trabajo en horas de clase, por cuestiones
				de higiene y seguridad para los estudiantes, teniendo en cuenta la convievencia de alumnos de ambos
				sexos, de diferentes fanjas etarias, los sanitarios permanecen cerrados durante las horas de clase,
				están habilitados a la entrada, salida y en los recreos, momentos que se destina personal para el cuidado
				del área, también, serán abiertos por razones de urgencia, en cuyo caso se avisa al preceptor, o personal
				auxiliar para abrir y volver a cerrar al finalizar su uso.
				<br>
				Los alumnos deben observar la buena presencia, aseo e higiene personal, como así
				también, en los espacios, bienes comunes y el cuidado del mobiliario y material de estudio de la
				institución. Su cumplimiento es una trasgresión a los AIC.
				<br>
			

				<h6> Derechos y Deberes </h6>
				<p>
				Padres y Tutores
				<p>
				Derechos 
				<p>
				- Ser reconocidos como agentes naturales y primarios de la educación<br>
				- Participar en las actividades del establecimiento educativo en forma individual o través de
				cooperadoras escolares en el marco del proyecto Educativo institucional.<br>
				- Elegir para sus hijos/as la institución cuyo ideario responda a sus convicciones filosóficas, éticas
				o religiosas.<br>
				- Ser informados periódicamente acerca de la evolución y evaluación del proceso educativo de sus
				hijos.<br><br>

				Deberes<br><br>

				- Hacer cumplir a sus hijos/as con la educación obligatoria.<br>
				- Acompañar la formación de sus hijos, orientándolos al cumplimiento del presente acuerdo.<br>
				- Respetar y hacer respetar a sus hijos/as la autoridad pedagógica y los Acuerdos de convivencia.<br>
				- Justificar inasistencias y faltas de puntualidad en el plazo de 24 horas.<br>
				- Registrar la firma y concurrir al estableciminto ante una citación escolar.<br>
				- Notificarse diariamente de los comunicados, calificaciones, citaciones, notas, etc.<br> 
				- Colaborar con la institución por medio de la Asociación Cooperadora y o comisión de padres <br>

				</p>
			</div>

			<a href="DiseñosCurriculares/Normas y Convivencia.docx"><button type="button" class="btn btn-info">Normas y Convivencias Completo</button></a>

			</div>
		</div>
	</div>
</section>
<a href="DiseñosCurriculares/Proyecto Instutucional.docx"><button type="button" class="btn btn-primary btn-lg btn-block "><h2 class="h2-responsive">-   -   -  PROYECTO INSTITUCIONAL    -  -  -</h2></button></a>
<br><br>
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
