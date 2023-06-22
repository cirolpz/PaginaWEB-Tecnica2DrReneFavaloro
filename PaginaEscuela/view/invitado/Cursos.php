<?php
include("../../db/claseMysql.php");
$AllowInscripciones = true;
?>

<!DOCTYPE html>
<html long ="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cursos</title>
	<link rel="stylesheet" href="../css/stylematerias2.css">
  	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="../css/mdboostrap/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="../css/mdboostrap/mdb.min.css" rel="stylesheet">
	<!-- JQuery -->
	<script type="text/javascript" src="../css/js/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="../css/js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="../css/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="../css/js/mdb.min.js"></script>
	<!-- Bootstrap datatable  -->
	<link href="../css/addons/datatables.min.css" rel="stylesheet">
	<!-- Bootstrap datatable JavaScript -->
	<script type="text/javascript" src="../css/js/addons/datatables.min.js"></script>
</head>

<body style="background-color:#e9ecef;">
<!-- Menu -->
<nav class="navbar navbar-expand-xl navbar-dark scrolling-navbar fixed-top" style="background: rgb(40, 45, 51);">
	<a class="navbar-brand" href="../Pagina de la escuela.php"> <img src="../img/Logo.png" class="logo-brand"> E.E.S.T N°2 </a>
	<button class="navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="menu">
		<ul class="navbar-nav ml-auto mr-4">
		  <li class="nav-item mr-4">
			<a class="nav-link" href="../Pagina de la escuela.php"><span class="button"><i class="fas fa-home"></i>Inicio</span> </a>
		  </li>
		  <li class="nav-item mr-4">
			<a class="nav-link " href="../Ciclo Basico.php"><span class="button">Ciclo Basico</span> </a>
		  </li>

		  <li class="nav-item dropdown mr-4">
			  <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  <span class="button">Ciclo Superior </span></a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  <a class="dropdown-item" href="../Informatica.php">Informatica</a>
			  <a class="dropdown-item " href="../Maestro Mayor de Obras.php">Maestro Mayor de Obras</a>
			</div>
		  </li>

		  <li class="nav-item dropdown mr-4">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
			  <span class="button">Septimo Año </a>
		  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			<a class="dropdown-item " href="../Septimo Informatica.php">Septimo Informatica </a>
			<a class="dropdown-item" href="../Septimo M. Mayor de Obras.php">Septimo M.M.O</a>
		  </div>
			</li>
			<li class="nav-item dropdown mr-4">
			  <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
				  <span class="button">Otros </a>
				  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="../NormasdeConvivencia.php">N. de Convivencia </a>
				<a class="dropdown-item" href="../Centroestudiantes.php">Institución</a>
				<a class="dropdown-item" href="../../controller/Preguntar.php">Mesa de Examenes</a>
				<a class="dropdown-item" href="../Contactanos.php">Mandanos un Email</a>
			</div>
		  </li>
		  	<!-- Boton Login -->
		  		<button type="button" class="btn btn-outline-success waves-effect login" data-toggle="modal" data-target="#centralModalSm">
					<i class="fa fa-user prefix"></i>&nbsp; Ingresar
				</button>
		</ul>
	  </div>

</nav>

<div class="container-lg">
	<div class="row">
		<div class="col-xl-12">
			<section id="Sistema">
					<div class="row">
						<div class="col-12 text-sm-left text-center">
							<h2 class="h2-responsive card-title"> Material para Mesas de Examenes</h2>
						</div>	
					</div>		
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-4 col-12 order-sm-1 order-12 text-sm-left text-center mt-sm-4 mt-0">
						<?php echo '<a href="">Cursos</a>' ?>

						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-12 order-sm-12 order-1 text-sm-right text-center ">
							<a href="#">
							<button name="submit" type="submit" class="btn btn-primary btn-md"><i class="fas fa-calendar-alt"> </i>  Fecha de mesas</button>
							</a>
							<?php if($AllowInscripciones){?>
							<a href="#">
							<button name="submit" type="submit" class="btn btn-danger btn-md"><i class="fas fa-pencil-alt"> </i> Inscripciones </button>
							</a>	
							<?php }?>
						</div>		
					</div>
					<hr class="mt-0 mb-0"> </hr>
					<div class="table">
						<table border="1" id="dtBasicExample" class="table text-center table-striped">
							<thead class="table-dark">
							<tr>
								<th> Cursos </th>
							</tr>
							</thead>
							<tbody>
								<?php
									$Cursos = '../Cursos';
									if(is_dir($Cursos)){
										if($dir = opendir($Cursos)){
											while(($Curso = readdir($dir)) !== false){
												if($Curso != '.' && $Curso != '..' && $Curso != '.htaccess'){
													echo '<tr> <td><i class="fas fa-folder"></i> <a href="Materias.php?Curso='.$Curso.'">'.$Curso.'</a> </td>';
												}
											}
											closedir($dir);
										}
									}
								?>
							</tbody>
						</table>
					</div>
			</section>
		</div>
	</div>
</div>


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
			<form class="text-center" style="color: #757575;" action="../../model/metadatos.php" method="post">

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
					<a class="fb-ic">
						<i class="fab fa-facebook-f white-text mr-4"> </i>
					</a>
					<!-- Youtube -->
					<a class="fb-ic">
						<i class="fab fa-youtube white-text mr-4"></i>
					</a>
					<!--Instagram-->
					<a class="ins-ic">
						<i class="fab fa-instagram white-text"> </i>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container text-center text-md-left mt-xl-3 mb-3 mt-sm-0 container2">
		<div class="row mt-3 ">

			<div class="col-md-6 col-lg-1 col-xl-2 mx-auto mt-xl-3 mt-sm-5 mt-md-4 mt-5">
				<h6 class="text-uppercase font-weight-bold ml-xl-5"><a href="pagina de la escuela.php">Inicio </a></h6>
				<hr class="green accent-2 mt-0 d-inline-block ml-xl-5" style="width: 60px;">
				<p class="ml-xl-5">
				<a href="../pagina de la escuela.php">Inicio </a>
				</p>
			</div>

			<div class="col-md-6 col-lg-2 col-xl-2 mx-auto mt-xl-3 mt-sm-5 mt-md-4 mt-5">
				<h6 class="text-uppercase font-weight-bold"><a href="Ciclo Basico.php">Ciclo Basico </a></h6>
				<hr class="green accent-2 mt-0 d-inline-block mx-auto" style="width: 130px;">
				<p>
				<a href="../Ciclo Basico.php">Ciclo Basico </a>
				</p>
			</div>
			
			<div class="col-md-6 col-lg-2 col-xl-2 mx-auto mt-xl-3 mt-sm-5 mt-md-4 mt-5">
				<h6 class="text-uppercase font-weight-bold">Ciclo Superior</h6>
				<hr class="green accent-2 mt-0 d-inline-block mx-auto" style="width: 150px;">
				<p>
				<a href="../Informatica.php">Informatica</a>
				</p>
				<p>
				<a href="../Maestro Mayor de Obras.php">Maestro Mayor de Obra</a>
				</p>
			</div>
		
			<div class="col-md-6 col-lg-2 col-xl-2 mx-auto mt-xl-3 mt-sm-5 mt-md-4 mt-5">
			<h6 class="text-uppercase font-weight-bold">Septimo Año</h6>
				<hr class="green accent-2 mt-0 d-inline-block mx-auto" style="width: 120px;">
				<p>
				<a href="../Septimo Informatica.php">Informatica</a>
				</p>
				<p>
				<a href="../Septimo M. Mayor de Obras.php">Maestro Mayor de Obra</a>
				</p>
			</div>

			<div class="col-md-6 col-lg-2 col-xl-2 mx-auto mt-xl-3 mt-sm-5 mt-md-4 mt-5">
			<h6 class="text-uppercase font-weight-bold">Otros</h6>
				<hr class="green accent-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p>
				<a href="../NormasdeConvivencia.php">Normas de Convivencia</a>
				</p>
				<p>
				<a href="../CentroEstudiantes.php">Institución</a>
				</p>
				<p>
				<a href="../../controller/Preguntar.php">Mesa de Examenes</a>
				</p>
				<p >
				<a href="../Contactanos.php">Mandanos un Email</a>
				</p>
			</div>

			<div class="col-md-6 col-lg-2 col-xl-2 mx-auto mb-md-0 mt-xl-3 mt-sm-5 mt-md-4 mt-5">
				<h6 class="text-uppercase font-weight-bold">Contacto</h6>
				<hr class="green accent-2 mt-0 d-inline-block " style="width: 100px;">
				<p>
				<i class="fas fa-home mr-1"></i> Rawson 2950, Villa de Mayo, Buenos Aires </p>
				<p>
				<i class="fas fa-envelope correo"></i> eestnro2malvarg@ gmail.com</p>
				<p>
				<i class="fas fa-phone mr-1"></i> + 011 4463-8509</p>
			</div>
		</div>
	</div>


  <!-- Copyright -->
  <div class="footer-copyright text-center py-3"><a href="https://www.instagram.com/tuwebsegura/">© 2020 Copyright</a>
  </div>

</footer>


<script>
	$(document).ready(function () {
	$('#dtBasicExample').DataTable({
			language:{
				"sProcessing":     "Procesando...",
				"sLengthMenu":     "Mostrar _MENU_ ",
				"sZeroRecords":    "No se encontraron resultados",
				"sEmptyTable":     "Ningún dato disponible en esta tabla",
				"sInfo":           "Mostrando de _START_ a _END_ registros de un total de _TOTAL_ ",
				"sInfoEmpty":      "Mostrando 0 a 0 de un total de 0 ",
				"sInfoFiltered":   "",
				"sInfoPostFix":    "",
				"sSearch":         "Buscar:",
				"sUrl":            "",
				"sInfoThousands":  ",",
				"sLoadingRecords": "Cargando...",
				"oPaginate": {
					"sFirst":    "Primero",
					"sLast":     "Último",
					"sNext":     "Siguiente",
					"sPrevious": "Anterior"
				},
				"oAria": {
					"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
					"sSortDescending": ": Activar para ordenar la columna de manera descendente"
				},
				"buttons": {
					"copy": "Copiar",
					"colvis": "Visibilidad"
				}
			}
		});
	$('.dataTables_length').addClass('bs-select');
	});
</script>

</body>
</html>
