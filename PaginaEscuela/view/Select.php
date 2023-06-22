<?php
include("../model/crud_usuario.php");//Inlcuye el codigo del archivo crud_usuario.php
session_start();
$objeto = new crud_usuario();

$id=$_POST["id"];
$resultado_materia = $objeto->mostrar_condicion("*","materias","id_Curso='$id'");

foreach ($resultado_materia as $key =>$value){
?> 
	<select> <option value ="<?php echo $value["id_Materia"] ?>"> <?php echo $value['Descripcion_Materia'] ?></option> </select>
<?php
}

hola
?>