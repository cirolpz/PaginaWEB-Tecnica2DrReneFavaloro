﻿<?php
session_start();// Mantiene abierta la sesion, del usuario que se logeo
include("../../model/crud_usuario.php");//Inlcuye el codigo del archivo crud_usuario.php
include_once("../../db/claseMysql.php");//Inlcuye el codigo del archivo "claseMysql.php"

if(isset($_GET['Curso']));
if(isset($_GET['Materia']));
$id_Usuario = $_SESSION['id_Usuario'];
$Curso =  $_GET['Curso'];
$Materia = $_GET['Materia'];

//Objeto y consulta
$objeto = new crud_usuario(); 			
$consulta = $objeto->mostrar_condicion("*", "profesores","id_Usuario = '$id_Usuario'");
foreach($consulta as $matriz2){
	$Profesor = $matriz2['id_Profesores'];
}
// if($allow_eliminar){} True: Muestra // False:Oculta
$SQL = $objeto->mostrar_condicion("*", "materias t1 INNER JOIN cursos t2 ON t1.id_Curso=t2.id_Curso", "t1.Descripcion_Materia = '$Materia' and t2.Año = '$Curso' and t1.id_Profesores = '$Profesor'");

	if($SQL == true){
		$allow_eliminar = true;
		$allow_agregar = true;
	}else{
		$allow_eliminar = false;
		$allow_agregar = false;
	}

?>

<!DOCTYPE html>
<html long ="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Archivos</title>
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
		  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-user"></i> Perfil </a>
				<div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
				<a class="dropdown-item" href="../Perfil.php">Mi Perfil</a>
					<a class="dropdown-item" href="../../controller/CerrarSesion.php">Cerrar Sesion</a>
				</div>
			</li>
		</ul>
	  </div>
</nav>
<!-- Subir Archivo Formulario -->
<?php
	function formatSizeUnits($bytes)
	{
		if ($bytes >= 1073741824)
		{
			$bytes = number_format($bytes / 1073741824, 2) . ' GB';
		}
		elseif ($bytes >= 1048576)
		{
			$bytes = number_format($bytes / 1048576, 2) . ' MB';
		}
		elseif ($bytes >= 1024)
		{
			$bytes = number_format($bytes / 1024, 2) . ' KB';
		}
		elseif ($bytes > 1)
		{
			$bytes = $bytes . ' bytes';
		}
		elseif ($bytes == 1)
		{
			$bytes = $bytes . ' byte';
		}
		else
		{
			$bytes = '0 bytes';
		}

		return $bytes;
	}
?>

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
						<div class="col-xl-6 col-lg-8 col-md-6 col-sm-8 col-12 order-sm-1 order-12 text-sm-left text-center mt-sm-5 mt-0 ">
						<?php echo '<a href="Cursos.php">Cursos <i class="fas fa-angle-right">&nbsp;</i></a>'.'<a href="Materias.php?Curso='.$Curso.'">'.$Curso .' <i class="fas fa-angle-right">&nbsp;</i></a> '
								.'<a href="">'. $Materia .'</a>'; ?>
						</div>
						<div class="col-xl-6 col-lg-4 col-md-6 col-sm-4 col-12 order-sm-12 order-1 text-sm-right text-center mt-3 mb-sm-0 mb-2">
						<?php if($allow_agregar){ ?>
							<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#centralModalSm">
								<i class="fas fa-file-upload"></i>  Subir Archivo
							</button>
						<?php } ?>
						</div>
					</div>
				
					<hr class="mt-0 mb-0"> </hr>
					<div class="table-responsive-sm">
						<table border="1" id="dtBasicExample" class="table text-center table-striped">
							<thead class="table-dark">
								<tr> 
									<th> Nombre </th> 
									<th> Peso </th> 
									<th> Descargar </th>
									
									<?php if($allow_eliminar){?>
									<th> Eliminar </th>
									<?php } ?>
								</tr>
							</thead>                
							<tbody>
								<?php
								$dir = opendir("../Cursos/$Curso/Materias/$Materia");
								while( $archivo = readdir($dir)){
									if(!is_dir($archivo)){
									echo "<tr>";
									echo "<td>".'<a href="../Cursos/'.$Curso.'/'.'Materias/'.$Materia.'/'.$archivo.'" target="_blank">'.$archivo. '</a></td>';
									echo "<td>". formatSizeUnits(filesize("../Cursos/$Curso/Materias/$Materia/$archivo")) ."</td>";
									echo "<td>" .'<a href="../Cursos/'.$Curso.'/'.'Materias/'.$Materia.'/'.$archivo.'" download="'.$archivo.'""><i class="fas fa-file-download"></i> </a>';
										
									if($allow_eliminar){
									echo "<td>". '<a href="../../controller/EliminarArchivo.php?Archivo=../view/Cursos/'.$Curso.'/'.'Materias/'.$Materia.'/'.$archivo.'&'.'Ano='.$Curso.'&'.'Materia='.$Materia.'"><button type="button" class="btn btn-danger btn-sm" onclick="return ConfirmDelete()">Eliminar </button>'."</a> </td>";
									}
									echo "</tr>";
									}
								}
								
								?>
							</tbody>    
						</table>
					</div>
				<?php if($allow_agregar){ ?>
				<!-- Cartel Subir Archivo -->
				<div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title w-100" id="myModalLabel">Seleccionar Archivo</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="../../controller/Upload.php" method= "POST" enctype = "multipart/form-data">
								<?php echo '<input type="hidden" name="Ano" value="'.$Curso.'">' ?>
								<?php echo '<input type="hidden" name="Materia" value="'.$Materia.'">' ?>
								<input type="file" name="archivo" id="archivo">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light " data-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary " value="Enviar">Subir</button>
							</form>
						</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</section>
		</div>	
	</div>
</div>


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


<script type="text/javascript">
	function ConfirmDelete(){
		var respuesta = confirm("¿Estas seguro que deseas eliminar el archivo?");
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