<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('claseMysql.php'); // Asegúrate de que la ruta sea correcta

// Crear una instancia de la clase DataBaseMysql
$db = new DataBaseMysql();

// Conectar a la base de datos
$conexion = $db->conectar();

echo $db->verificarConexion();
?>