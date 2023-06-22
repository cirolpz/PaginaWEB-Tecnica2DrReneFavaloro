<?php
include("../db/claseMysql.php");
?>

<!DOCTYPE html>
<html long ="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PreInscripcion</title>
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
			  <a class="dropdown-item " href="Maestro Mayor de Obras.php">Maestro Mayor de Obras</a>
			</div>
		  </li>
        <nav>
        	BIENVENIDO
        </nav>
		  <li class="nav-item dropdown mr-4">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
			  <span class="button">Septimo Año </a>
		  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			<a class="dropdown-item " href="Septimo Informatica.php">Septimo Informatica </a>
			<a class="dropdown-item" href="Septimo M. Mayor de Obras.php">Septimo M.M.O</a>
		  </div>
			</li>
		  <li class="nav-item dropdown mr-4">
			  <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
				  <span class="button">Otros </a>
			  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="NormasdeConvivencia.php">N. de Convivencia </a>
				<a class="dropdown-item" href="Centroestudiantes.php">C. de Estudiantes</a>
				<a class="dropdown-item" href="../model/Preguntar.php">Mesa de Examenes</a>
				<a class="dropdown-item" href="Contactanos.php">Mandanos un Mail</a>
			</div>
		  </li>
		  <?php
				require_once("../model/Login.php");
				if($estado){
					?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-user"></i> Perfil </a>
						<div class="dropdown-menu dropdown-menu-left dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
							<a class="dropdown-item" href="#">Mi Perfil</a>
							<a class="dropdown-item" href="../model/CerrarSesion.php">Cerrar Sesion</a>
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
				<input type="text" id="materialLoginFormEmail" class="form-control" name="User">
				<label for="materialLoginFormEmail">Usuario</label>
			</div>

			<!-- Password -->
			<div class="md-form">
				<input type="password" id="materialLoginFormPassword" class="form-control" name="Pass">
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
<!--Formulario  -->
<div class="container-fluid mt-8 justify-content-xl-center mb-5" >
	<form action="../model/correo.php" method="POST">
	<center>
		<div class="form-row-cols-1 mb-5 " >
		<br><br><br><br><br><br><br><br>
			<div class="col-6">
				<input type="text" class="form-control mb-3" placeholder="Nombre" name="nombre" required >
			</div>
		
			<div class="col-6">
				<input type="text" class="form-control mb-3" placeholder="Email"  name="email" required>

				 <input type="localidad y partido" name="localidad y partido" id="localidad y partido" maxlength="50">
			</div>
			<div class="col-6">
			
				<input type="text" class="form-control mb-3" placeholder="Calllateee"  name="Calllateee" required>
			</div>	 
			<div class="col-6 ">
				<textarea  class="form-control mb-4" rows="5" placeholder="mensaje" name="mensaje" required></textarea>
			</div>
		</div>

		<input type="submit" class="btn btn-primary btn-md ml-3" value="Enviar">
		<a href="pagina de la escuela.php"> <button type="button" class="btn btn-danger btn-md">Cancelar</button></a>
		
	</center>	
	</form>	
	<hr>
</div>
<br><br>

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

	<div class="container text-center text-md-left mt-5 mb-3 mt-sm-0">
		<div class="row mt-3">

			<div class="col-md-2 col-lg-2 col-xl-2 mt-5 mt-sm-0">
				<h6 class="text-uppercase mt-4 font-weight-bold ml-sm-0 ml-xl-5"><a href="pagina de la escuela.php">Inicio </a></h6>
				<hr class="green accent-2 mt-0 d-inline-block ml-sm-0 ml-xl-5" style="width: 60px;">
				<p class="ml-xl-5">
				<a href="pagina de la escuela.php">Inicio </a>
				</p>
			</div>

			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-5 mt-sm-0">
				<h6 class="text-uppercase mt-4 font-weight-bold"><a href="Ciclo Basico.php">Ciclo Basico </a></h6>
				<hr class="green accent-2 mt-0 d-inline-block mx-auto" style="width: 110px;">
				<p>
				<a href="Ciclo Basico.php">Ciclo Basico </a>
				</p>
			</div>
			
			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-5 mt-sm-0 Coso">
				<h6 class="text-uppercase mt-4 font-weight-bold">Ciclo Superior</h6>
				<hr class="green accent-2 mt-0 d-inline-block mx-auto" style="width: 130px;">
				<p>
				<a href="Informatica.php">Informatica</a>
				</p>
				<p>
				<a href="Maestro Mayor de Obras.php">Maestro Mayor de Obra</a>
				</p>
			</div>
		
			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-5 mt-sm-0 Coso">
			<h6 class="text-uppercase mt-4 font-weight-bold">Septimo Año</h6>
				<hr class="green accent-2 mt-0 d-inline-block mx-auto" style="width: 120px;">
				<p>
				<a href="Septimo Informatica.php">Informatica</a>
				</p>
				<p>
				<a href="Septimo M. Mayor de Obras.php">Maestro Mayor de Obra</a>
				</p>
			</div>

			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-5 mt-sm-0 Coso">
			<h6 class="text-uppercase mt-4 font-weight-bold">Otros</h6>
				<hr class="green accent-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p>
				<a href="NormasdeConvivencia.php">Normas de Convivencia</a>
				</p>
				<p>
				<a href="CentroEstudiantes.php">Centro de Estudiantes</a>
				</p>
				<p>
				<a href="../model/Preguntar.php">Mesa de Examenes</a>
				</p>
				<p >
				<a href="Contactanos.php">Mandanos un Email</a>
				</p>
			</div>

			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-md-0 mt-5 mt-sm-0 Coso">
				<h6 class="text-uppercase mt-4 font-weight-bold">Contact</h6>
				<hr class="green accent-2 mt-0 d-inline-block " style="width: 80px;">
				<p>
				<i class="fas fa-home mr-1"></i> Rawson 2950, Villa de Mayo, Buenos Aires </p>
				<p>
				<i class="fas fa-envelope"></i> eestnro2malvarg@gmail.com</p>
				<p>
				<i class="fas fa-phone mr-1"></i> + 011 4463-8509</p>
			</div>
		</div>
	</div>
</footer>

</body>
</html>