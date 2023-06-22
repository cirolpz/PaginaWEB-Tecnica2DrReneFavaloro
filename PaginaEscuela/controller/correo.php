<?php 
$destino="direccion@gmail.com";
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];
$contenido= "Nombre: " . $nombre . "\nCorreo: ". $email . "\n Mensaje: " . $mensaje;
mail($destino,$asunto,$contenido);
echo "<script>alert('Se Envio el mail correctamente'); window.location='../view/pagina de la escuela.php';</script>";
?>