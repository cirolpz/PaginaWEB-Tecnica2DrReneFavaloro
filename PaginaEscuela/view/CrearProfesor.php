<?php
include("../model/crud_usuario.php");//Inlcuye el codigo del archivo crud_usuario.php
session_start();
$objeto = new crud_usuario();

if(isset($_POST['save'])){
	$Nombre		= $_POST['Nombre'];
	$Apellido   = $_POST['Apellido'];;
	$Usuario 	= $_POST['Usuario'];
	$Curso		= $_POST['id_Curso'];
	$Materia 	= $_POST['id_Materia'];
	$id_Cargo 	= $_POST['id_Cargo'];

	if($_POST['Contraseña1']==$_POST['Contraseña2']){
	$Contraseña=sha1($_POST['Contraseña2']);	}
	else{
	echo "<script>alert('Error, las contraseñas no son iguales'); window.location='../view/Perfil.php'; </script>";
	}

	$consultamostrar = $objeto->mostrar_condicion("*","usuarios","Usuario = '$Usuario'");
	if($consultamostrar == false){
		
		$consultaUsuario =  $objeto->insertar("usuarios(Usuario, Contraseña, id_Cargo)","'$Usuario','$Contraseña','$id_Cargo'");
	
		if($consultaUsuario == true){
			$consultamostrar2=$objeto->mostrar_condicion("*","usuarios","Usuario = '$Usuario'");
			foreach($consultamostrar2 as $row2);
			$id_Usuario = $row2['id_Usuario'];
		}
	}else{
		echo "<script>alert('Error, Nombre de usuario ya registrado'); window.location='../view/CrearProfesor.php'; </script>";
	}

	$consultaProfesor = $objeto->insertar("profesores(Nombre, Apellido, id_Usuario)","'$Nombre','$Apellido','$id_Usuario'");

	$consultaprofesor2 = $objeto->mostrar_condicion("*","profesores","id_Usuario = $id_Usuario");
	foreach($consultaprofesor2 as $row3);
	$id_Profesor = $row3['id_Profesores'];

	$consultaMateria = $objeto->actualizar("materias","id_Profesores = '$id_Profesor'","id_Materia = '$Materia' AND id_Curso ='$Curso'");

	if($consultaProfesor == true && $consultaUsuario == true ){
		echo "<script>alert('Se ha Creado el Profesor Correctamente'); window.location='../view/Perfil.php'; </script>";
	}else{
		echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo crear el profesor.</div>';
	}
}
?>

<!DOCTYPE html>
<html long ="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Profesor</title>
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
	<!--JQUERY -->


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
						<a class="nav-link dropdown-toggle active" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
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

<br><br><br><br><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-xl-12">
			<h2 class="h2-responsive text-center ml-3 mb-4">Crear Nuevo Profesor</h2>
			<form class="form-horizontal ml-3" action="" method="post">
				<div class="form-group mb-4">
					<div class="col-xl-5 col-lg-7 col-md-8 m-auto">
						<label class="col-sm-5 control-label font-weight-bold">Nombre </label>
						<input type="text" pattern="[A-Za-z0-9_-]{1,15}"name="Nombre" value="" class="form-control" placeholder="Nombre" required>
					</div>
				</div>
				<div class="form-group mb-4">
					<div class="col-xl-5 col-lg-7 col-md-8 m-auto">
						<label class="col-sm-5 control-label font-weight-bold">Apellido </label>
							<input type="text"pattern="[A-Za-z0-9_-]{1,15}" name="Apellido" value="" class="form-control" placeholder="Apellido" required>
					</div>
				</div>
				<div class="form-group mb-4">
					<div class="col-xl-5 col-lg-7 col-md-8 m-auto">
						<label class="col-sm-5 control-label font-weight-bold">Usuario</label>
							<input type="text" pattern="[A-Za-z0-9_-]{1,15}"name="Usuario" value="" class="form-control" placeholder="Usuario: Se admiten letras, numeros y -_   Maximo 15 caracteres" required>
					</div>
				</div>

				<div class="form-group mb-4">
					<div class="col-xl-5 col-lg-7 col-md-8 m-auto">
						<label class="col-sm-5 control-label font-weight-bold">Nueva Contraseña</label>
						<input type="password" pattern="[A-Za-z0-9_-]{1,15}"name="Contraseña1" value="" class="form-control" placeholder="Contraseña: Se admiten letras, numeros y -_   Maximo 15 caracteres" required>
					</div>
				</div>
				<div class="form-group mb-4">
					<div class="col-xl-5 col-lg-7 col-md-8 m-auto">
						<label class="col-sm-5 control-label font-weight-bold">Repita la Contraseña</label>
						<input type="password"pattern="[A-Za-z0-9_-]{1,15}" name="Contraseña2" value="" class="form-control" placeholder="Contraseña: Se admiten letras, numeros y -_   Maximo 15 caracteres" required>
					</div>
				</div>
				<div class="form-group text-center">
					<div class="col-xl-6 col-lg-7 col-md-8 m-auto">
						<label class="col-sm-8 control-label font-weight-bold mb-4">Curso:
						<select id="selectpaisesid" name="id_Curso" onchange="selectpaises()">
							<option value ="" class="font-weight-bold"> Seleccione un Curso</option>
							<?php
								if($resultado_curso = $objeto->mostrar("*","cursos"))

								foreach ($resultado_curso as $key =>$value){
								?> 
									<option value ="<?php echo $value["id_Curso"] ?>"> <?php echo $value['Año'] ?></option>
								<?php
								}
							?>
						</select>
						</label>
						<label class="col-sm-8 control-label font-weight-bold ">Materia:
						<select id="selectestado" name="id_Materia" disabled>
							<option value ="" class="font-weight-bold"> Seleccione una Materia</option>
						</select>
						</label>
					</div>
				</div>
				<div class="form-group">
						<input type="hidden" name="id_Cargo" value="2" class="form-control" placeholder="Cargo" readonly>
				</div>
				<div class="form-group">
				<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 text-center">
						<label class="col-sm-3 control-label font-weight-bold">&nbsp;</label>
						<input type="submit" name="save" class="btn btn-md btn-primary" value="Guardar datos">
						<a href="Perfil.php" class="btn btn-md btn-danger">Volver</a>
					</div>
				</div>

			</form>
		</div>
	</div>
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

	<div class="container text-center text-md-left mt-xl-3 mb-3 mt-sm-0 container2">
		<div class="row mt-3 ">

			<div class="col-md-6 col-lg-1 col-xl-2 mx-auto mt-xl-3 mt-sm-5 mt-md-4 mt-5">
				<h6 class="text-uppercase font-weight-bold ml-xl-5"><a href="pagina de la escuela.php">Inicio </a></h6>
				<hr class="green accent-2 mt-0 d-inline-block ml-xl-5" style="width: 60px;">
				<p class="ml-xl-5">
				<a href="pagina de la escuela.php">Inicio </a>
				</p>
			</div>

			<div class="col-md-6 col-lg-2 col-xl-2 mx-auto mt-xl-3 mt-sm-5 mt-md-4 mt-5">
				<h6 class="text-uppercase font-weight-bold"><a href="Ciclo Basico.php">Ciclo Basico </a></h6>
				<hr class="green accent-2 mt-0 d-inline-block mx-auto" style="width: 130px;">
				<p>
				<a href="Ciclo Basico.php">Ciclo Basico </a>
				</p>
			</div>
			
			<div class="col-md-6 col-lg-2 col-xl-2 mx-auto mt-xl-3 mt-sm-5 mt-md-4 mt-5">
				<h6 class="text-uppercase font-weight-bold">Ciclo Superior</h6>
				<hr class="green accent-2 mt-0 d-inline-block mx-auto" style="width: 150px;">
				<p>
				<a href="Informatica.php">Informatica</a>
				</p>
				<p>
				<a href="Maestro Mayor de Obras.php">Maestro Mayor de Obra</a>
				</p>
			</div>
		
			<div class="col-md-6 col-lg-2 col-xl-2 mx-auto mt-xl-3 mt-sm-5 mt-md-4 mt-5">
			<h6 class="text-uppercase font-weight-bold">Septimo Año</h6>
				<hr class="green accent-2 mt-0 d-inline-block mx-auto" style="width: 120px;">
				<p>
				<a href="Septimo Informatica.php">Informatica</a>
				</p>
				<p>
				<a href="Septimo M. Mayor de Obras.php">Maestro Mayor de Obra</a>
				</p>
			</div>

			<div class="col-md-6 col-lg-2 col-xl-2 mx-auto mt-xl-3 mt-sm-5 mt-md-4 mt-5">
			<h6 class="text-uppercase font-weight-bold">Otros</h6>
				<hr class="green accent-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p>
				<a href="NormasdeConvivencia.php">Normas de Convivencia</a>
				</p>
				<p>
				<a href="CentroEstudiantes.php">Centro de Estudiantes</a>
				</p>
				<p>
				<a href="../controller/Preguntar.php">Mesa de Examenes</a>
				</p>
				<p >
				<a href="Contactanos.php">Mandanos un Email</a>
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

<script type="text/javascript">
	//Ajax
	function selectpaises() {
		var id_Curso = $("#selectpaisesid").val();
		$.ajax({
			url: "Select.php",
			method: "POST",
			data: {
				"id":id_Curso
			},
			success: function(respuesta){
				$("#selectestado").attr("disabled", false);
				$("#selectestado").html(respuesta);
			}
		})
	}

	function ConfirmPerfil(){
		var respuesta = confirm("Datos Guardados Correctamente");
		if(respuesta == true){
			return true;
		}else{
			return false;
		}
	}
</script>

</body>
</html>