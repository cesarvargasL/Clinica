<?php
$db_host = "localhost";
$db_nombre = "consultorioFisioterapia";
$db_usuario = "root";
$db_contrasena = "";

$conn = new mysqli($db_host, $db_usuario, $db_contrasena, $db_nombre);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
?>
