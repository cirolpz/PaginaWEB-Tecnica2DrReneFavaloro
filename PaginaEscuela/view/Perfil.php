<?php
include("../model/crud_usuario.php");//Inlcuye el codigo del archivo crud_usuario.php
session_start();
$usuarioverificacion= $_SESSION['id_Usuario'];
$Cargo = $_SESSION['id_Cargo'];
$objeto = new crud_usuario();


//Usuarios
$sql = $objeto->mostrar_condicion("t1.Usuario, t1.Contraseña ,t2.Descripcion_Cargo","usuarios t1 INNER JOIN cargo t2 ON t1.id_Cargo=t2.id_Cargo","id_Usuario = '$usuarioverificacion'");
foreach ($sql as $row){
	$Contraseña            = $row['Contraseña'];
	$Usuario               = $row['Usuario'];
	$Descripcion_Cargo	   = $row['Descripcion_Cargo'];
}

//Profesores
$sqlProfesores = $objeto->mostrar_condicion("*","profesores", "id_Usuario = '$usuarioverificacion'");
foreach ($sqlProfesores as $row){
	$NombreProfesor            	   = $row['Nombre'];
	$ApellidoProfesor              = $row['Apellido'];
	$id_Profesor 				   = $row['id_Profesores'];
}
$sqlMaterias = $objeto->mostrar_condicion("*","materias INNER JOIN cursos ON cursos.id_Curso=materias.id_Curso", "id_Profesores = '$id_Profesor'");

//Administradores
$sqlAdministrador = $objeto->mostrar_condicion("*","administradores", "id_Usuario = '$usuarioverificacion'");
foreach ($sqlAdministrador as $row){	
	$NombreAdmin           = $row['Nombre'];
	$ApellidoAdmin         = $row['Apellido'];
}

$allowProfesores = false;
$allowAdministradores = false;

if($Cargo == 2){
	$allowProfesores = true;
}else if($Cargo == 3){
	$allowAdministradores = true;
}



	//Modificar Datos del Usuario
	if(isset($_POST['save'])){
		$NombreAdmin  		= $_POST['Nombre'];
		$ApellidoAdmin      = $_POST['Apellido'];;

		$NombreProfesor		= $_POST['Nombre'];
		$ApellidoProfesor   = $_POST['Apellido'];;

		$Usuario  		= $_POST['Usuario'];

		if($_POST['Contraseña1']==$_POST['Contraseña2']){
		$Contraseña=sha1($_POST['Contraseña2']);	}
		else{
		echo "<script>alert('Error al guardar datos, revise que estos coinsidan'); window.location='../view/Perfil.php'; </script>";
		}

		if($Cargo == 2){
			$sql_update = $objeto->actualizar("profesores INNER JOIN usuarios ON profesores.id_Usuario = usuarios.id_Usuario", "Nombre='$NombreProfesor', Apellido='$ApellidoProfesor', usuarios.Usuario='$Usuario', usuarios.Contraseña='$Contraseña'", "profesores.id_Usuario = '$usuarioverificacion'");
		}else if($Cargo == 3){
			$sql_update = $objeto->actualizar("administradores INNER JOIN usuarios ON administradores.id_Usuario = usuarios.id_Usuario", "Nombre='$NombreAdmin', Apellido='$ApellidoAdmin', usuarios.Usuario='$Usuario', usuarios.Contraseña='$Contraseña'", "administradores.id_Usuario = '$usuarioverificacion'");
		}

		if($sql_update == true){
			echo "<script>alert('Se han guardado los datos Correctamente'); window.location='../view/Pagina de la escuela.php'; </script>";
		}else{
			echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
		}
	}

	//Borrar Profesor
	if(isset($_GET['aksi']) == 'delete'){
		$nik = $_GET["nik"];
		$cek = $objeto->mostrar_condicion("*","profesores","id_Profesores='$nik'"); 
		if($cek == 0){
			echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, No se ha encontrado al profesor.</div>';
			header("location:Perfil.php");
		}else{
			$borrar = $objeto->eliminar("profesores","id_Usuario='$nik'");
			$borrar2 = $objeto->eliminar("usuarios","id_Usuario='$nik'");

			if($borrar && $borrar2){
				echo "<script>alert('Se ha eliminado el profesor Correctamente'); </script>";
			}else{
				echo "<script>alert('Error, No se pudo eliminar el profesor'); </script>";
			}
		}
	}
?>

<!DOCTYPE html>
<html long ="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
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
	<!-- Bootstrap datatable  -->
	<link href="css/addons/datatables.min.css" rel="stylesheet">
	<!-- Bootstrap datatable JavaScript -->
	<script type="text/javascript" src="css/js/addons/datatables.min.js"></script>
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
		<div class="col-lg-4 col-sm-12 mb-5">
			<h2 class="ml-3 text-xl-left text-center mb-4">Perfil &raquo; Datos del Usuario</h2>

			<form class="" action="" method="post">
				<div class="form-group">
					<div class="col-xl-10 col-lg-11 col-md-7 col-sm-8 m-xl-0 m-sm-auto">
					<label class="control-label font-weight-bold">Nombre </label>

					<input type="text" class="form-control"name="Nombre" value="<?php if($allowProfesores){echo $NombreProfesor; }else if($allowAdministradores){echo $NombreAdmin; }?>" pattern="[A-Za-z0-9]{1,15}" class="form-control" placeholder="Nombre" required>
					</div>
				</div>
				<div class="form-group">
				<div class="col-xl-10 col-lg-11 col-md-7 col-sm-8 m-xl-0 m-sm-auto">
				<label class="control-label font-weight-bold">Apellido </label>

					<input type="text"  name="Apellido" value="<?php if($allowProfesores){echo $ApellidoProfesor; }else if($allowAdministradores){echo $ApellidoAdmin; }?>" pattern="[A-Za-z0-9]{1,15}" class="form-control" placeholder="Apellido" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xl-10 col-lg-11 col-md-7 col-sm-8 m-xl-0 m-sm-auto">
					<label class="control-label font-weight-bold">Usuario </label>

						<input type="text" name="Usuario" value="<?php echo $Usuario; ?>" class="form-control" pattern="[A-Za-z0-9_-]{1,15}" placeholder="Usuario: Se admiten letras, numeros y -_   Maximo 15 caracteres" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-xl-10 col-lg-11 col-md-7 col-sm-8 m-xl-0 m-sm-auto">
					<label class="control-label font-weight-bold">Nueva Contraseña </label>

						<input type="password"  name="Contraseña1" value="" class="form-control"  pattern="[A-Za-z0-9_-]{1,15}" placeholder="Contraseña: Se admiten letras, numeros y -_   Maximo 15 caracteres" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xl-10 col-lg-11 col-md-7 col-sm-8 m-xl-0 m-sm-auto">
					<label class="control-label font-weight-bold">Repita la Contraseña </label>

						<input type="password" name="Contraseña2" value="" class="form-control"  pattern="[A-Za-z0-9_-]{1,15}" placeholder="Contraseña: Se admiten letras, numeros y -_   Maximo 15 caracteres" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-xl-10 col-lg-11 col-md-7 col-sm-8 m-xl-0 m-sm-auto">
					<label class="control-label font-weight-bold">Cargo </label>
					<p>
						<?php echo $Descripcion_Cargo;  ?>
					</p>
					</div>
				</div>
				<?php if($allowProfesores){?>
				<div class="form-group">
					<div class="col-xl-10 col-lg-11 col-md-7 col-sm-8 m-xl-0 m-sm-auto">
					<label class="control-label font-weight-bold">Materia/s  Asignada/s </label>
					</p>
					<?php	
					foreach ($sqlMaterias as $row){
						echo $row['Año']." ".$row['Descripcion_Materia'].'</p>';
					}
					?> 
					</div>
				</div>
				<?php } ?>
				<div class="form-group">
					<div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 text-center">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="pagina de la escuela.php" class="btn btn-sm btn-danger">Volver</a>
					</div>
				</div>
			</form>
		</div>
		<?php if($allowAdministradores){?>
			<div class="col-xl-7 col-lg-8 col-md-12">
			<div class="col-12 text-center text-xl-left">
				<a href ="CrearProfesor.php" class="white-text">
					<button type="button" class="btn btn-info btn-md">
						<i class="fas fa-user-plus"></i> Crear Nuevo Profesor
					</button>
				</a>
				<a href ="EliminarProfesor.php" class="white-text">
					<button type="button" class="btn btn-danger btn-md">
						<i class="fas fa-trash"></i> Eliminar Profesores
					</button>
				</a>
				</div>
				<div class ="table-responsive-sm">
					<table border="1" id="dtBasicExample" class="table text-center table-striped">
						<thead class="table-dark">
							<tr> 
								<th> Curso 	  </th>
								<th> Materia  </th>
								<th> Profesor </th>
								<th> Editar </th>
							</tr>
						</thead>                
						<tbody>
							<?php
								$resultado = $objeto->mostrar("*","materias t1 LEFT JOIN profesores t2 ON t1.id_Profesores=t2.id_Profesores INNER JOIN cursos t3 ON t1.id_Curso=t3.id_Curso");	
								foreach ($resultado as $fila){
								echo "<tr>";
								echo "<td>".$fila['Año']."</td>"; 
								echo "<td>".$fila["Descripcion_Materia"]."</td>";
								echo "<td>".$fila['Nombre']." ".$fila['Apellido']."</td>";
								echo '<td>
								<a href="EditarMateria.php?nik='.$fila["id_Materia"].'" title="Editar datos" class="btn btn-primary btn-sm mb-1"><i class="fas fa-edit"></i></span></a>
								</td>';
								}
								echo "</tr>";
							
							?>
						</tbody>    
					</table>
				</div>		
			</div>
		<?php }?>
	</div>
</div>

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark mt-3">
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


<script type="text/javascript">
	function ConfirmPerfil(){
		var respuesta = confirm("Datos Guardados Correctamente");
		if(respuesta == true){
			return true;
		}else{
			return false;
		}
	}

</script>
<script>
	$(document).ready(function () {
	$('#dtBasicExample').DataTable({
			language:{
				"sProcessing":     "Procesando...",
				"sLengthMenu":     "Mostrar _MENU_ ",
				"sZeroRecords":    "No se encontraron resultados",
				"sEmptyTable":     "No se ha encontrado ningun archivo",
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